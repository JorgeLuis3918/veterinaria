<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use Alert;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('usuarios.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Rol::all()->pluck('descripcion','id_rol')->prepend('Seleccione Rol','');
      return view('usuarios.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $password= bcrypt($input["password"]) ;
        $input["password"] =$password;
        User::create($input);
        Alert::success('Usuario registrado exitosamente')->autoclose("2000");
        return redirect(route('usuario.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::find($id);
        $roles=Rol::all()->pluck('descripcion','id_rol')->prepend('Seleccione Rol','');
        return view('usuarios.edit',compact('roles','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input= $request->all();

        unset($input['_method']);
        unset($input['_token']);
       if ($input['password']) {   
            $password = bcrypt($input['password']);
            $input['password'] = $password;
        }else{
           $p=User::find($id);
           $input['password']=$p->password;
          } 
        User::where('id',$id)->update($input);
        toast('Actualizado con exito','success');
        return redirect(route('usuario.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        toast('Eliminado con exito','success');
         return redirect(route('usuario.index'));
    }
}
