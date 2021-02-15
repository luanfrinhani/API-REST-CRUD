<?php

namespace App\Http\Controllers;

use App\Models\cadastro;
use http\Env\Response;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $cadastro;

    public function __construct(cadastro $cadastro)
    {

        $this->cadastro = $cadastro;

    }

    public function listarUsuarios()
    {
        $Usuarios = ['Usuarios'=>$this->cadastro->paginate(10)];

        return response()->json($Usuarios);

    }

    public function mostrarUnico($id)
    {

        $cadastro = $this->cadastro->find($id);

        if (!$cadastro ) return response()->json('Produto nao encontrado',404);

        $Usuarios = ['Usuarios'=>$cadastro];

        return response()->json($Usuarios);
    }

    public function guardar(Request $request)
    {
        try
        {

            $usuarioData = $request->all();

            $this->cadastro->create($usuarioData);

            return response()->json(['Mensagem'=>'Cadastro feito com sucesso'],201);

        } catch(\Exception $e)
        {
            if (config('app.debug'))
            {

                return response()->json($e->getMessage());

            }

            return response()->json('Erro de cadastro',1010);
        }
    }
    public function atualizar(Request $request,$id)
    {
        try
        {

            $usuarioData = $request->all();

            $cadastro = $this->cadastro->find($id);

            $cadastro->update($usuarioData);

            return response()->json(['Mensagem'=>'Atualizacao feita com sucesso'],201);

        } catch(\Exception $e)
        {
            if (config('app.debug'))
            {

                return response()->json($e->getMessage());

            }

            return response()->json('Erro de cadastro',1011);
        }
    }

    public function deletar(cadastro $id)
    {
        try
        {

            $id->delete();
            return response()->json('Usuario '.$id->Nome.' removido com sucesso',200);

        }catch (\Exception $e)
        {
            if (config('app.debug'))
            {

                return response()->json($e->getMessage());

            }

            return response()->json('Erro ao deletar usuario',1012);
        }
    }
}
