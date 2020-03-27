@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    

    <div class="row">
    	<div class="col-md-3">
	    	<div class="box box-primary">
		        <div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" src="{{ auth()->user()->image }}" alt="Foto de perfil do usuário">

		          <h3 class="profile-username text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nina Mcintire</font></font></h3>

		          <p class="text-muted text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Engenheiro de software</font></font></p>

		          <ul class="list-group list-group-unbordered">
		            <li class="list-group-item">
		              <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seguidores </font></font></b> <a class="pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.322</font></font></a>
		            </li>
		            <li class="list-group-item">
		              <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seguindo </font></font></b> <a class="pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">543</font></font></a>
		            </li>
		            <li class="list-group-item">
		              <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amigos </font></font></b> <a class="pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13.287</font></font></a>
		            </li>
		          </ul>

		          <a href="#" class="btn btn-primary btn-block"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Segue</font></font></b></a>
		        </div>
		        <!-- /.box-body -->
		    </div>
	    </div>
    
	    <!-- <div class="col-md-9">
		  <div class="nav-tabs-custom">
		    <ul class="nav nav-tabs">
		      <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atividade</font></font></a></li>
		      <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Timeline</font></font></a></li>
		      <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Definições</font></font></a></li>
		    </ul>
		    <div class="tab-content">
		      <div class="tab-pane active" id="activity">
		        <!-- Post -->
		        <div class="post">
		          <div class="user-block">
		            <img class="img-circle img-bordered-sm" src="{{ auth()->user()->image }}" alt="imagem do usuário">
		                <span class="username">
		                  <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jonathan Burke Jr.</font></font></a>
		                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
		                </span>
		            <span class="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Compartilhada publicamente - hoje às 19h30</font></font></span>
		          </div>
		          <!-- /.user-block -->
		          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		            Lorem ipsum representa uma tradição de longa data para designers, tipógrafos e afins. </font><font style="vertical-align: inherit;">Algumas pessoas odeiam e argumentam pela sua morte, mas outras ignoram o ódio, pois criam ferramentas incríveis para ajudar a criar texto de preenchimento para todos, desde amantes de bacon até fãs de Charlie Sheen.
		          </font></font></p>
		          <ul class="list-inline">
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Compartilhar</font></font></a></li>
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gostar</font></font></a>
		            </li>
		            <li class="pull-right">
		              <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Comentários (5)</font></font></a></li>
		          </ul>

		          <input class="form-control input-sm" type="text" placeholder="Type a comment">
		        </div>
		        <!-- /.post -->

		        <!-- Post -->
		        <div class="post clearfix">
		          <div class="user-block">
		            <img class="img-circle img-bordered-sm" src="{{ auth()->user()->image }}" alt="Imagem do Usuário">
		                <span class="username">
		                  <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sarah Ross</font></font></a>
		                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
		                </span>
		            <span class="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Você enviou uma mensagem - 3 dias atrás</font></font></span>
		          </div>
		          <!-- /.user-block -->
		          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		            Lorem ipsum representa uma tradição de longa data para designers, tipógrafos e afins. </font><font style="vertical-align: inherit;">Algumas pessoas odeiam e argumentam pela sua morte, mas outras ignoram o ódio, pois criam ferramentas incríveis para ajudar a criar texto de preenchimento para todos, desde amantes de bacon até fãs de Charlie Sheen.
		          </font></font></p>

		          <form class="form-horizontal">
		            <div class="form-group margin-bottom-none">
		              <div class="col-sm-9">
		                <input class="form-control input-sm" placeholder="Response">
		              </div>
		              <div class="col-sm-3">
		                <button type="submit" class="btn btn-danger pull-right btn-block btn-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mandar</font></font></button>
		              </div>
		            </div>
		          </form>
		        </div>
		        <!-- /.post -->

		        <!-- Post -->
		        <div class="post">
		          <div class="user-block">
		            <img class="img-circle img-bordered-sm" src="{{ auth()->user()->image }}" alt="Imagem do Usuário">
		                <span class="username">
		                  <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adam Jones</font></font></a>
		                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
		                </span>
		            <span class="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Postado 5 fotos - 5 dias atrás</font></font></span>
		          </div>
		          <!-- /.user-block -->
		          <div class="row margin-bottom">
		            <div class="col-sm-6">
		              <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		            </div>
		            <!-- /.col -->
		            <div class="col-sm-6">
		              <div class="row">
		                <div class="col-sm-6">
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                  <br>
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                </div>
		                <!-- /.col -->
		                <div class="col-sm-6">
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                  <br>
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                </div>
		                <!-- /.col -->
		              </div>
		              <!-- /.row -->
		            </div>
		            <!-- /.col -->
		          </div>
		          <!-- /.row -->

		          <ul class="list-inline">
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Compartilhar</font></font></a></li>
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gostar</font></font></a>
		            </li>
		            <li class="pull-right">
		              <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Comentários (5)</font></font></a></li>
		          </ul>

		          <input class="form-control input-sm" type="text" placeholder="Type a comment">
		        </div>
		        <!-- /.post -->
		      </div>
		      <!-- /.tab-pane -->
		      <div class="tab-pane" id="timeline">
		        <!-- The timeline -->
		        <ul class="timeline timeline-inverse">
		          <!-- timeline time label -->
		          <li class="time-label">
		                <span class="bg-red">
		                  10 Feb. 2014
		                </span>
		          </li>
		          <!-- /.timeline-label -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-envelope bg-blue"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

		              <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

		              <div class="timeline-body">
		                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
		                weebly ning heekya handango imeem plugg dopplr jibjab, movity
		                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
		                quora plaxo ideeli hulu weebly balihoo...
		              </div>
		              <div class="timeline-footer">
		                <a class="btn btn-primary btn-xs">Read more</a>
		                <a class="btn btn-danger btn-xs">Delete</a>
		              </div>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-user bg-aqua"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

		              <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
		              </h3>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-comments bg-yellow"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

		              <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

		              <div class="timeline-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		                Leve-me ao seu líder! </font><font style="vertical-align: inherit;">A Suíça é pequena e neutra! </font><font style="vertical-align: inherit;">Nós somos mais como a Alemanha, ambiciosos e incompreendidos!
		              </font></font></div>
		              <div class="timeline-footer">
		                <a class="btn btn-warning btn-flat btn-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver comentário</font></font></a>
		              </div>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <!-- timeline time label -->
		          <li class="time-label">
		                <span class="bg-green"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		                  3 de janeiro de 2014
		                </font></font></span>
		          </li>
		          <!-- /.timeline-label -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-camera bg-purple"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2 dias atrás</font></font></span>

		              <h3 class="timeline-header"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mina Lee</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> carregou novas fotos</font></font></h3>

		              <div class="timeline-body">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		              </div>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <li>
		            <i class="fa fa-clock-o bg-gray"></i>
		          </li>
		        </ul>
		      </div>
		      <!-- /.tab-pane -->

		      <div class="tab-pane" id="settings">
		        <form class="form-horizontal">
		          <div class="form-group">
		            <label for="inputName" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome</font></font></label>

		            <div class="col-sm-10">
		              <input type="email" class="form-control" id="inputName" placeholder="Name">
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputEmail" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">O email</font></font></label>

		            <div class="col-sm-10">
		              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputName" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome</font></font></label>

		            <div class="col-sm-10">
		              <input type="text" class="form-control" id="inputName" placeholder="Name">
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputExperience" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Experiência</font></font></label>

		            <div class="col-sm-10">
		              <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputSkills" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Habilidades</font></font></label>

		            <div class="col-sm-10">
		              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
		            </div>
		          </div>
		          <div class="form-group">
		            <div class="col-sm-offset-2 col-sm-10">
		              <div class="checkbox">
		                <label>
		                  <input type="checkbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eu concordo com os </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">termos e condições</font></font></a>
		                </label>
		              </div>
		            </div>
		          </div>
		          <div class="form-group">
		            <div class="col-sm-offset-2 col-sm-10">
		              <button type="submit" class="btn btn-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar</font></font></button>
		            </div>
		          </div>
		        </form>
		      </div>
		      <!-- /.tab-pane -->
		    </div>
		    <!-- /.tab-content -->
		  </div>
		  <!-- /.nav-tabs-custom -->
		</div> -->
		<div class="col-md-9">
		  <div class="nav-tabs-custom">
		    <ul class="nav nav-tabs">
		      <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atividade</font></font></a></li>
		      <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Timeline</font></font></a></li>
		      <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Definições</font></font></a></li>
		    </ul>
		    <div class="tab-content">
		      <div class="tab-pane active" id="activity">
		        <!-- Post -->
		        <div class="post">
		          <div class="user-block">
		            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="imagem do usuário">
		                <span class="username">
		                  <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jonathan Burke Jr.</font></font></a>
		                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
		                </span>
		            <span class="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Compartilhada publicamente - hoje às 19h30</font></font></span>
		          </div>
		          <!-- /.user-block -->
		          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		            Lorem ipsum representa uma tradição de longa data para designers, tipógrafos e afins. </font><font style="vertical-align: inherit;">Algumas pessoas odeiam e argumentam pela sua morte, mas outras ignoram o ódio, pois criam ferramentas incríveis para ajudar a criar texto de preenchimento para todos, desde amantes de bacon até fãs de Charlie Sheen.
		          </font></font></p>
		          <ul class="list-inline">
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Compartilhar</font></font></a></li>
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gostar</font></font></a>
		            </li>
		            <li class="pull-right">
		              <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Comentários (5)</font></font></a></li>
		          </ul>

		          <input class="form-control input-sm" type="text" placeholder="Type a comment">
		        </div>
		        <!-- /.post -->

		        <!-- Post -->
		        <div class="post clearfix">
		          <div class="user-block">
		            <img class="img-circle img-bordered-sm" src="{{ auth()->user()->image }}" alt="Imagem do Usuário">
		                <span class="username">
		                  <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sarah Ross</font></font></a>
		                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
		                </span>
		            <span class="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Você enviou uma mensagem - 3 dias atrás</font></font></span>
		          </div>
		          <!-- /.user-block -->
		          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		            Lorem ipsum representa uma tradição de longa data para designers, tipógrafos e afins. </font><font style="vertical-align: inherit;">Algumas pessoas odeiam e argumentam pela sua morte, mas outras ignoram o ódio, pois criam ferramentas incríveis para ajudar a criar texto de preenchimento para todos, desde amantes de bacon até fãs de Charlie Sheen.
		          </font></font></p>

		          <form class="form-horizontal">
		            <div class="form-group margin-bottom-none">
		              <div class="col-sm-9">
		                <input class="form-control input-sm" placeholder="Response">
		              </div>
		              <div class="col-sm-3">
		                <button type="submit" class="btn btn-danger pull-right btn-block btn-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mandar</font></font></button>
		              </div>
		            </div>
		          </form>
		        </div>
		        <!-- /.post -->

		        <!-- Post -->
		        <div class="post">
		          <div class="user-block">
		            <img class="img-circle img-bordered-sm" src="{{ auth()->user()->image }}" alt="Imagem do Usuário">
		                <span class="username">
		                  <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adam Jones</font></font></a>
		                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
		                </span>
		            <span class="description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Postado 5 fotos - 5 dias atrás</font></font></span>
		          </div>
		          <!-- /.user-block -->
		          <div class="row margin-bottom">
		            <div class="col-sm-6">
		              <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		            </div>
		            <!-- /.col -->
		            <div class="col-sm-6">
		              <div class="row">
		                <div class="col-sm-6">
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                  <br>
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                </div>
		                <!-- /.col -->
		                <div class="col-sm-6">
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                  <br>
		                  <img class="img-responsive" src="{{ auth()->user()->image }}" alt="foto">
		                </div>
		                <!-- /.col -->
		              </div>
		              <!-- /.row -->
		            </div>
		            <!-- /.col -->
		          </div>
		          <!-- /.row -->

		          <ul class="list-inline">
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Compartilhar</font></font></a></li>
		            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gostar</font></font></a>
		            </li>
		            <li class="pull-right">
		              <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Comentários (5)</font></font></a></li>
		          </ul>

		          <input class="form-control input-sm" type="text" placeholder="Type a comment">
		        </div>
		        <!-- /.post -->
		      </div>
		      <!-- /.tab-pane -->
		      <div class="tab-pane" id="timeline">
		        <!-- The timeline -->
		        <ul class="timeline timeline-inverse">
		          <!-- timeline time label -->
		          <li class="time-label">
		                <span class="bg-red">
		                  10 Feb. 2014
		                </span>
		          </li>
		          <!-- /.timeline-label -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-envelope bg-blue"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

		              <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

		              <div class="timeline-body">
		                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
		                weebly ning heekya handango imeem plugg dopplr jibjab, movity
		                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
		                quora plaxo ideeli hulu weebly balihoo...
		              </div>
		              <div class="timeline-footer">
		                <a class="btn btn-primary btn-xs">Read more</a>
		                <a class="btn btn-danger btn-xs">Delete</a>
		              </div>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-user bg-aqua"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

		              <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
		              </h3>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-comments bg-yellow"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

		              <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

		              <div class="timeline-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		                Leve-me ao seu líder! </font><font style="vertical-align: inherit;">A Suíça é pequena e neutra! </font><font style="vertical-align: inherit;">Nós somos mais como a Alemanha, ambiciosos e incompreendidos!
		              </font></font></div>
		              <div class="timeline-footer">
		                <a class="btn btn-warning btn-flat btn-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver comentário</font></font></a>
		              </div>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <!-- timeline time label -->
		          <li class="time-label">
		                <span class="bg-green"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
		                  3 de janeiro de 2014
		                </font></font></span>
		          </li>
		          <!-- /.timeline-label -->
		          <!-- timeline item -->
		          <li>
		            <i class="fa fa-camera bg-purple"></i>

		            <div class="timeline-item">
		              <span class="time"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2 dias atrás</font></font></span>

		              <h3 class="timeline-header"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mina Lee</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> carregou novas fotos</font></font></h3>

		              <div class="timeline-body">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		                <img src="http://placehold.it/150x100" alt="..." class="margin">
		              </div>
		            </div>
		          </li>
		          <!-- END timeline item -->
		          <li>
		            <i class="fa fa-clock-o bg-gray"></i>
		          </li>
		        </ul>
		      </div>
		      <!-- /.tab-pane -->

		      <div class="tab-pane" id="settings">
		        <form class="form-horizontal">
		          <div class="form-group">
		            <label for="inputName" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome</font></font></label>

		            <div class="col-sm-10">
		              <input type="email" class="form-control" id="inputName" placeholder="Name">
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputEmail" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">O email</font></font></label>

		            <div class="col-sm-10">
		              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputName" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome</font></font></label>

		            <div class="col-sm-10">
		              <input type="text" class="form-control" id="inputName" placeholder="Name">
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputExperience" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Experiência</font></font></label>

		            <div class="col-sm-10">
		              <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
		            </div>
		          </div>
		          <div class="form-group">
		            <label for="inputSkills" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Habilidades</font></font></label>

		            <div class="col-sm-10">
		              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
		            </div>
		          </div>
		          <div class="form-group">
		            <div class="col-sm-offset-2 col-sm-10">
		              <div class="checkbox">
		                <label>
		                  <input type="checkbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eu concordo com os </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">termos e condições</font></font></a>
		                </label>
		              </div>
		            </div>
		          </div>
		          <div class="form-group">
		            <div class="col-sm-offset-2 col-sm-10">
		              <button type="submit" class="btn btn-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar</font></font></button>
		            </div>
		          </div>
		        </form>
		      </div>
		      <!-- /.tab-pane -->
		    </div>
		    <!-- /.tab-content -->
		  </div>
		  <!-- /.nav-tabs-custom -->
		</div>
    </div>


    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre mim</font></font></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Educação</font></font></strong>

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bacharel em Ciências da Computação pela Universidade do Tennessee em Knoxville
              </font></font></p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Localização</font></font></strong>

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Malibu, Califórnia</font></font></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Habilidades</font></font></strong>

              <p>
                <span class="label label-danger"><font style="vertical-align: inherit;"></font></span>
                <span class="label label-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codificação de </font></font></span>
                <font style="vertical-align: inherit;"><span class="label label-danger"><font style="vertical-align: inherit;">design de interface do usuário </font></span></font><span class="label label-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Javascript </font></font></span>
                <span class="label label-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP </font></font></span>
                <span class="label label-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Node.js</font></font></span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Notas</font></font></strong>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor sente-se amet, consectetur adipiscing elit. </font><font style="vertical-align: inherit;">Etiam fermentum enim neque.</font></font></p>
            </div>
            <!-- /.box-body -->
    </div>


    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre mim</font></font></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Educação</font></font></strong>

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bacharel em Ciências da Computação pela Universidade do Tennessee em Knoxville
              </font></font></p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Localização</font></font></strong>

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Malibu, Califórnia</font></font></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Habilidades</font></font></strong>

              <p>
                <span class="label label-danger"><font style="vertical-align: inherit;"></font></span>
                <span class="label label-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codificação de </font></font></span>
                <font style="vertical-align: inherit;"><span class="label label-danger"><font style="vertical-align: inherit;">design de interface do usuário </font></span></font><span class="label label-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Javascript </font></font></span>
                <span class="label label-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP </font></font></span>
                <span class="label label-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Node.js</font></font></span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Notas</font></font></strong>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor sente-se amet, consectetur adipiscing elit. </font><font style="vertical-align: inherit;">Etiam fermentum enim neque.</font></font></p>
            </div>
            <!-- /.box-body -->
    </div>
@stop