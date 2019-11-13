<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users = User::latest()->paginate(5);
         return view('users.index',compact('users'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'numero' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user=User::create($request->all());


    $user->nombres = $request->nombres;
      $user->apellidos = $request->apellidos;
      $user->numero = $request->numero;
    $user->email = $request->email;
    $user->password = bcrypt($request->password); // Se encripta la contraseña usando la función bcrypt().
    $user->save(); // Se guarda el registro en la base de datos.




        return redirect()->route('users.index')
                        ->with('success','Usuario agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
          $request->validate([
                'nombres' => 'required',
                'apellidos' => 'required',
                'numero' => 'required',
                'email' => 'required',

         ]);

         $user->update($request->all());

         return redirect()->route('users.index')
                        ->with('success','Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
          $user->delete();

       return redirect()->route('users.index')
                        ->with('success','Usuario eliminado exitosamente');
    }



    public function profileUpdate(Request $request){

          $data = $request->all();

          if($data['password'] !=null)
            $data['password'] = bcrypt($data['password']);

          auth()->user()->update($data);

          if($update)
                  return redirect()->route('profile')->with('success', 'Perfil actualizado.');

                  return redirect()->back()->with('error', 'Perfil no se pudo actualizar.');

   }
}
