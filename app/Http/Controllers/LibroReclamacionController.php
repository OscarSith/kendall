<?php

namespace App\Http\Controllers;

use App\LibroReclamacion;
use App;
use Illuminate\Http\Request;

use App\Http\Requests;

class LibroReclamacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LibroReclamacion::paginate(20, ['id', 'nro', 'nombre', 'nombre_reclamante', 'created_at', 'estado']);

        return view('admin.libro', compact('data', 'currentUri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = LibroReclamacion::find(1);
        return view('partials.libro_pdf', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LibroReclamacion::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('partials.libro_pdf', compact('data'))->render());

        return $pdf->stream('libro');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $libro = LibroReclamacion::find($id);
        $libro->estado = 2;
        $libro->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = LibroReclamacion::find($id);
        $libro->estado = 3;
        $libro->save();

        return redirect()->back();
    }
}
