@extends('adminlte::page')

@section('title', 'Calendário de eventos')

@section('content_header')
    <h1>Meu Calendário</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Calendário</li>
    </ol>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="p-5">
                    <div id='tasks'></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var calendarEl = document.getElementById('tasks');
    //     let draggableEl = document.getElementById('draggable');

    //     var calendar = new FullCalendar.Calendar(calendarEl, {
    //         plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
    //         lang: 'pt-BR',
    //         defaultView: 'dayGridMonth',
    //         defaultDate: '2019-11-07',
    //         header: {
    //             left: 'prev,next today',
    //             center: 'title',
    //             right: 'dayGridMonth,timeGridWeek,timeGridDay'
    //         },
    //         events: [
    //             @foreach($tasks as $task)
    //             {
    //                 title : '{{ $task->name }}',
    //                 start : '{{ date('Y-m-d', strtotime($task->date_start)) }}',
    //                 end : '{{ date('Y-m-d', strtotime($task->date_end)) }}',
    //                 url : '{{ route('tasks.edit', $task->id) }}',
	// 				color: '{{ $task->color }}',
	// 				status: '{{ $task->status }}',
    //             },
    //             @endforeach
    //         ]
    //     });

    //     calendar.render();
    // });

    $(document).ready(function () {

         var SITEURL = "{{url('/')}}";
         $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         });

         var calendar = $('#calendar').fullCalendar({
             editable: true,
             events: SITEURL + "fullcalendar",
             displayEventTime: true,
             editable: true,
             eventRender: function (event, element, view) {
                 if (event.allDay === 'true') {
                     event.allDay = true;
                 } else {
                     event.allDay = false;
                 }
             },
             selectable: true,
             selectHelper: true,
             select: function (start, end, allDay) {
                 var title = prompt('Event Title:');

                 if (title) {
                     var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                     var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                     $.ajax({
                         url: SITEURL + "fullcalendar/create",
                         data: 'title=' + title + '&amp;start=' + start + '&amp;end=' + end,
                         type: "POST",
                         success: function (data) {
                             displayMessage("Added Successfully");
                         }
                     });
                     calendar.fullCalendar('renderEvent',
                             {
                                 title: title,
                                 start: start,
                                 end: end,
                                 allDay: allDay
                             },
                     true
                             );
                 }
                 calendar.fullCalendar('unselect');
             },

             eventDrop: function (event, delta) {
                         var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                         var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                         $.ajax({
                             url: SITEURL + 'fullcalendar/update',
                             data: 'title=' + event.title + '&amp;start=' + start + '&amp;end=' + end + '&amp;id=' + event.id,
                             type: "POST",
                             success: function (response) {
                                 displayMessage("Updated Successfully");
                             }
                         });
                     },
             eventClick: function (event) {
                 var deleteMsg = confirm("Do you really want to delete?");
                 if (deleteMsg) {
                     $.ajax({
                         type: "POST",
                         url: SITEURL + 'fullcalendar/delete',
                         data: "&amp;id=" + event.id,
                         success: function (response) {
                             if(parseInt(response) > 0) {
                                 $('#calendar').fullCalendar('removeEvents', event.id);
                                 displayMessage("Deleted Successfully");
                             }
                         }
                     });
                 }
             }

         });
   });

   function displayMessage(message) {
     $(".response").html("<div class='success'>"+message+"</div>");
     setInterval(function() { $(".success").fadeOut(); }, 1000);
   }
</script>

@endsection
