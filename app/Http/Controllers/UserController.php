<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function seguirDisciplina(Request $request)
    {

        if (Auth::check()) {

            $user = User::find(Auth::user()->id);

            $user->disciplinas()->attach($request->id);

            return response()->json(['msg' => true]);
        } else
            return response()->json(['msg' => false]);
    }


    public function criarConta(Request $request)
    {


        $password = $request->password;
        $request->request->add(['tipo' => 'E']);
        $request->request->add(['avatar' => 'avatar-default.png']);
        $request->request->add(['estado' => 'activo']);
        $request->request->add(['password' => bcrypt($request->password)]);

        User::create($request->all());

        if (Auth::attempt(['email' => $request->email , 'password' => $password])) {

            return response()->json(['msg' => true]);

        }

        return response()->json(['msg' => false]);
    }


    public function getPerfil(){

        $user = Auth::user();

        return view('users.perfil', compact('user'));
    }


}
