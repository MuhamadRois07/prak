<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bungas = Bunga::get();

        return view('bunga', compact('bungas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'NamaBunga' => 'required',
            'Harga' => 'required',
            'Stock' => 'required',
        ]);
        Bunga::create([
            'NamaBunga' => $request->NamaBunga,
            'Harga' => $request->Harga,
            'Stock' => $request->Stock,
        ]);
        return redirect()->route('bunga')->with(['success' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Bunga = Bunga::findOrFail($id);
        
        return view('edit', compact('Bunga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'NamaBunga' => 'required',
            'Harga' => 'required',
            'Stock' => 'required',
        ]);
        $Bunga = Bunga::findOrFail($id);
        $Bunga->update([
            'NamaBunga' => $request->NamaBunga,
            'Harga' => $request->Harga,
            'Stock' => $request->Stock,
        ]);
        return redirect()->route('bunga')->with(['success' => 'Data Berhasil Disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Bunga = Bunga::findOrFail($id);
        $Bunga->delete();
        return redirect()->route('bunga')->with(['success' => 'Data Berhasil Disimpan']);
    }
}
