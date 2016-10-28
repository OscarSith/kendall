<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CircuitoRequest;
use App\Circuito;
use File;

class CirtuitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circuitos = Circuito::paginate(12, ['id', 'flyer_name', 'flyer_img', 'flyer_img_thumb', 'flyer_estado']);

        return view('admin.circuito', compact('circuitos'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CircuitoRequest $request)
    {
        $file = $request->file('flyer_img');
        $params = $request->only(['flyer_name', 'flyer_img']);

        list($original_img_name, $thumb_img_name) = $this->rezizeImg($file, 'img/flyers/');

        $params['flyer_img_thumb'] = $thumb_img_name;
        $params['flyer_img'] = $original_img_name;

        Circuito::create($params);

        return redirect()->back()->with('success_message', 'Flyer agreagdo con exito');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flyer = Circuito::find($id);
        if (Circuito::destroy($id)) {
            File::delete('img/flyers/' . $flyer->flyer_img);
            File::delete('img/flyers/' . $flyer->flyer_img_thumb);
        }

        return response()->json(['status' => 200]);
    }
}
