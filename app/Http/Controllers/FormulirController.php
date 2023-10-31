<?php

namespace App\Http\Controllers;

use App\Models\formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = formulir::all();
        return view('form-data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $formulir = new Formulir([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'status' => $request->input('status'),
            'program_studi' => $request->input('program-studi'),
            'hobi' => $request->input('hobi'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no-hp'),
        ]);
    
        $formulir->save();
    
        return redirect()->route('formulir.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Formulir::find($id);

        if ($data) {
            return view('form-detail', compact('data'));
        } else {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Formulir::find($id);
        return view('form-editData', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $formulir = Formulir::find($id);
    
        $formulir->nama = $request->input('nama');
        $formulir->nim = $request->input('nim');
        $formulir->status = $request->input('status');
        $formulir->program_studi = $request->input('program-studi');
        $formulir->hobi = $request->input('hobi');
        $formulir->email = $request->input('email');
        $formulir->alamat = $request->input('alamat');
        $formulir->no_hp = $request->input('no-hp');
    
        $formulir->save();
    
        return redirect()->route('formulir.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Formulir::find($id);
    
        if (!$data) {
            return abort(404); 
        }
    
        $data->delete();
    
        return redirect()->route('formulir.index');

    }
}
