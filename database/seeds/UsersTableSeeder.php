<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Address;
use App\Cursos;
use App\Protocolos;
use App\Task;
use App\Color;
use App\Email;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Faker\Factory as FactoryFaker;

class UsersTableSeeder extends Seeder
{
    private $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jefferson Ferreira',
            'email' => 'jefferson14489@gmail.com',
            'image' => 'https://images.unsplash.com/photo-1553830591-d8632a99e6ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=911&q=80',
            'tipoUsuario' => 'Administrador',
            'password' => bcrypt('123'),
            'cpf' => '12345678909',
            'rg' => '285658266',
            'sexo' => 'Masculino',
            'nascimento' => '1995-06-22',
            'celular' => '(21) 96618-7719',
            'residencial' => '(21) 3551-5339',
            'rua' => 'Rua Flamingo de Ana Gonzaga',
            'numero' => '0',
            'complemento' => 'Sem número, Lt 31 Qd 18',
            'cep' => '23059492',
            'bairro' => 'Inhoaiba',
            'cidade' => 'Rio de Janeiro',
            'estado' => 'RJ',
        ]);

        $faker = FactoryFaker::create('pt_BR');
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                $sexo = 'Masculino';
                $tipo = 'Aluno';
            } else {
                $sexo = 'Feminino';
                $tipo = 'Professor';
            }
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'image' => $faker->imageUrl(),
                'tipoUsuario' => $tipo,
                'password' => bcrypt('123'),
                'cpf' => $faker->numberBetween(12),
                'rg' => $faker->numberBetween(9),
                'sexo' => $sexo,
                'nascimento' => $faker->date('Y-m-d'),
                'celular' => $faker->phoneNumber,
                'residencial' => $faker->phoneNumber,
                'observacao' => $faker->text,
                'rua' => $faker->address,
                'numero' => $faker->randomDigit,
                'complemento' => '',
                'cep' => $faker->postcode,
                'bairro' => $faker->century,
                'cidade' => $faker->city,
                'estado' => $faker->streetAddress,
            ]);
        }


        User::create([
            'name' => 'Paula Ferreira',
            'email' => 'paula.reis@live.com',
            'image' => 'https://images.unsplash.com/photo-1521310192545-4ac7951413f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            'tipoUsuario' => 'Aluno',
            'password' => bcrypt('123'),
            'cpf' => '12345678900',
            'rg' => '285658267',
            'sexo' => 'Feminino',
            'nascimento' => '1995-05-31',
            'celular' => '(21) 96618-7719',
            'residencial' => '(21) 3551-5339',
            'rua' => 'Rua Pompilioa de Alburquerque',
            'numero' => '330',
            'complemento' => 'Última saida da linha amarela antes do pedágio',
            'cep' => '20745125',
            'bairro' => 'Encantado',
            'cidade' => 'Rio de Janeiro',
            'estado' => 'RJ',
        ]);

//        Address::create([
//            'user' => 1,
//            'rua' => 'Rua Flamingo de Ana Gonzaga',
//            'numero' => '0',
//            'complemento' => 'Sem número, Lt 31 Qd 18',
//            'cep' => '23059492',
//            'bairro' => 'Inhoaiba',
//            'cidade' => 'Rio de Janeiro',
//            'estado' => 'RJ',
//        ]);
//
//        Address::create([
//            'user' => 2,
//            'rua' => 'Rua Pompilioa de Alburquerque',
//            'numero' => '330',
//            'complemento' => 'Última saida da linha amarela antes do pedágio',
//            'cep' => '20745125',
//            'bairro' => 'Encantado',
//            'cidade' => 'Rio de Janeiro',
//            'estado' => 'RJ',
//        ]);

        Cursos::create([
            'name' => 'Ánalise e Desenvolvimento de Sistemas',
            'user' => 1,
            'categoria' => 'Informatica',
            'duracao' => '3 anos',
            'descricao' => 'Curso tecnologo de informatica'
        ]);

        Protocolos::create([
            'titulo' => 'Verificação de notas',
            'descricao' => 'Solicito verificar minhas notas pois na ava esta com 10 e no boletim 6',
            'anexo1' => 'http://teste.com/image.png',
            'anexo2' => 'http://teste.com/anexo.pdf',
            'tipo_solicitacao' => 'R',
            'user' => '1',
            'status' => 'Andamento',
            'nivel_de_dificuldade' => 'Medio',
            'data_abertura' => Carbon::now()->addDay(),
            'data_prevista' => Carbon::now()->addDay(),
            'data_fechamento' => Carbon::now()->addDay(),
            'resolucao' => 'Corrigido nota no boletim',
            'anexo_resolucao1' => 'http://teste.com/anexo_resolucao1.pdf',
            'anexo_resolucao2' => 'http://teste.com/anexo_resolucao2.pdf',
        ]);

        Task::create([
            'name' => 'Almoço',
            'description' => 'horario de almoço',
            'date_start' => '2019-11-10',
            'date_end' => '2019-11-14',
            'image_event' => '',
            'color' => '#605ca8',
            'backgroundColor' => '#00a65a',
        ]);
        Task::create([
            'name' => 'Fazer trabalhos de casa',
            'description' => 'Fazer trabalhos de casa',
            'date_start' => '2019-11-20',
            'date_end' => '2019-11-30',
            'image_event' => '',
            'color' => '#605ca8',
            'backgroundColor' => '#00a65a',
        ]);
        Task::create([
            'name' => 'Trabalhar no design da interface do usuário',
            'description' => 'Trabalhar no design da interface do usuário',
            'date_start' => '2019-11-5',
            'date_end' => '2019-11-19',
            'image_event' => '',
            'color' => '#605ca8',
            'backgroundColor' => '#00a65a',
        ]);
        Task::create([
            'name' => 'Dorme bem',
            'description' => 'Dorme bem',
            'date_start' => '2019-11-2',
            'date_end' => '2019-11-6',
            'image_event' => '',
            'color' => '#605ca8',
            'backgroundColor' => '#00a65a',
        ]);

        Color::create([
            "name" => "Navy",
            "value" => "#001F3F",
        ]);
        Color::create([
            "name" => "Purple",
            "value" => "#605ca8",
        ]);
        Color::create([
            "name" => "Green",
            "value" => "#00a65a",
        ]);

        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                $status = 'Enviado';
            } else {
                $status = 'Novo';
            }

            Email::create([
                'user_id' => 1,
                'to' => $faker->email,
                'cc' => $faker->email,
                'subject' => 'E-mail de teste - '.$i,
                'message' => $faker->text($maxNbChars = 200) ,
                'files'  => $faker->imageUrl(),
                'status'  => $status,
            ]);
        }



    }
    
    
}
