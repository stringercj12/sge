<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;



class UsuarioController extends Controller
{
    private $usuario;

    private $estados;

    public function __construct(User $us)
    {
        $this->usuario = $us;
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

    public function create(Request $request)
    {


        $posts = $request->all();
        $validated = $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'tipoUsuario' => 'required',
            'cpf' => 'required|max:15'
        ]);


        if($validated){
            return redirect()
                ->route('url_admin_cadastro')
                ->withErrors($validated)
                ->withInput();
        }

        $posts['password'] = bcrypt('meuprimeiroacesso');
        $posts['acesso'] = 0;
        $posts['nascimento'] = date('Y-m-d', $request->nascimento);
        // dd($posts);
        $comment = $this->usuario->create($posts);

        if ($comment) {
            return redirect()
                ->route('url_admin_cadastro')
                ->with('success', 'Cadastrado concluído com sucesso. Foi enviado um email para o novo usuário com informações o sobre o seu primeiro login.');
        }
    }

    public function Editar($id)
    {
        $user = $this->usuario->find($id);
        $estado = $this->estados;
    //    dd($estado);
        return view('admin.editar', compact('user', 'estado'));
    }

    public function edit(Request $request, $id)
    {
//        $user = $this->usuario->find($id);
//
//        $user->address()->where('user', $id)->get();
//
//        dd($user);
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


    public function bloquear($id, $acao)
    {
        $user = $this->usuario->find($id);

        $user['acesso'] = $acao;
//        dd($acao);
        $result = $user->save();
        if ($result) {
            return redirect()
                ->route('url_admin_lista')
                ->with('bloqueio', 'Status alterado com sucesso');
        }
        return redirect()
            ->route('url_admin_lista')
            ->with('messages', 'Erro ao alterar status');
    }

    public function editSenha(Request $request)
    {
        $id = auth()->user()->id;
        $user = $this->usuario->find($id);
        // dd($request->all());
        if($user){
            if($request->nova_senha == $request->confirme_senha){
                $user->password = bcrypt($request->nova_senha);
                $user->save();

                return redirect()
                        ->route('admin.settings.senhas')
                        ->with('messages', 'Senha alterada com sucesso');
            }else{
                return redirect()
                        ->route('admin.settings.senhas')
                        ->with('error', 'As senhas não conferem');
            }
        }else{
            return redirect()
                    ->route('admin.settings.senhas')
                    ->with('error', 'Usuário não encontrado ou não existe');
        }

        return redirect()
            ->route('admin.settings.senhas')
            ->with('error', 'Erro ao tentar atualizar senha');
    }

    public function resetSenha($id)
    {
        $user = $this->usuario->find($id);
        $senha = bcrypt('gse123');
        $user->password = ($senha);
        $user->save();
        return redirect()->route('url_admin_lista')->with('bloqueio', 'Senha resetada com sucesso');
    }

    public function editUser(Request $request) {

        $id = auth()->user()->id;
        $user = $this->usuario->find($id);
        
        $result = $user->update($request->all());

        if($result){

            return redirect()
                    ->route('url_admin_profile')
                    ->with('messages', 'Usuário atualizado com sucesso');
            
        }else{
            return redirect()
                    ->route('url_admin_profile')
                    ->with('error', 'Usuário não encontrado ou não existe');
        }
    }
}
