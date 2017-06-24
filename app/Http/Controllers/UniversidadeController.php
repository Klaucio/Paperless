<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UniversidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades= Instituicao::all();
      return view('admin.universidades.index',compact('universidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.universidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $universidades=Instituicao::create(request()->all());
        return redirect()->route('universidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $universidades=Instituicao::findOrFail($id);
//        dd($universidades);
        return view('admin.universidades.edit',compact('universidades'));
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
       $universidade=Instituicao::find($id);
        $universidade->fill($request->only(['designacao','abreviatura']));
        $universidade->save();
        return redirect()->route('universidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $universidade=Instituicao::findOrFail($id);
        dd($universidade);
        $universidade->delete();
        return back();
    }
}
