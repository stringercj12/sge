<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class CadastrosController extends Controller
{
    private $user;
    private $estados;

    public function __construct(User $users)
    {
        $this->user = $users;
        $this->estados = [
            'AC' => 'Acre (AC)',
            'Alagoas (AL)',
            'Amapá (AP)',
            'Amazonas (AM)',
            'Bahia (BA)',
            'Ceará (CE)',
            'Distrito Federal (DF)',
            'Espírito Santo (ES)',
            'Goiás (GO)',
            'Maranhão (MA)',
            'Mato Grosso (MT)',
            'Mato Grosso do Sul (MS)',
            'Minas Gerais (MG)',
            'Pará (PA)',
            'Paraíba (PB)',
            'Paraná (PR)',
            'Pernambuco (PE)',
            'Piauí (PI)',
            'Rio de Janeiro (RJ)',
            'Rio Grande do Norte (RN)',
            'Rio Grande do Sul (RS)',
            'Rondônia (RO)',
            'Roraima (RR)',
            'Santa Catarina (SC)',
            'São Paulo (SP)',
            'Sergipe (SE)',
            'Tocantins (TO)',
        ];
    }

    public function index()
    {
        return view('admin.cadastro', compact('estado'));
    }

    public function listaUser()
    {
        $nomes = User::all();
        return view('admin.lista', compact('nomes'));
    }

    public function create(Request $request)
    {


        $posts = $request->all();
        $posts['password'] = bcrypt('meuprimeiroacesso');
        $posts['acesso'] = 0;
        // dd($posts);
        $comment = $this->user->create($posts);

        if ($comment) {
            return redirect()
                ->route('url_admin_cadastro')
                ->with('success', 'Cadastrado concluído com sucesso. Foi enviado um email para o novo usuário com informações o sobre o seu primeiro login.');
        }

    }

    public function delete(User $user, $id)
    {
        try {
            $editUser = $this->user->find($id);

            if ($editUser) {
                $editUser->delete();

                return redirect()
                    ->route('url_admin_lista')
                    ->with('messages', 'Sucesso ao deletar!');
            }
            return redirect()
                ->back()
                ->with('messages', 'Usuário não localizado!');
        } catch (\Exception $e) {
            $erro = 'Erro ao excluir editora' . $e->getMessage();

            return redirect()
                ->back()
                ->with('messages', $erro);
        }
    }

}
