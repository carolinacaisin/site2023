<?php

namespace App\Http\Controllers;

use App\Models\Produse;
use App\Http\Requests\StoreProduseRequest;
use App\Http\Requests\UpdateProduseRequest;

class ProduseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produse = Produse::get();
        return view('admin.index',[
            'produse'=>$produse
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduseRequest $request)
    {
        $produs = new Produse();
        $produs->titlu = $request->titlu;
        $produs->descriere = $request->descriere;
        $produs->pret = $request->pret;
        /** Pentru salvarea imaginii **/
        $produs->img = time().time().'.'
            .$request->file('img')->getClientOriginalExtension();
    $request->file('img')->move('imagine/', time().time().'.'
        .$request->file('img')->getClientOriginalExtension());
    $produs->save();
    return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produse $produse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produse $id)
    {
        $produs = Produse::findOrFail($id);
        return view('admin.edit',['admin'=>$produs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduseRequest $request, Produse $id)
    {
        $produs = Produse::findOrFail($id);
        unlink('imagine/'.$produs->img);
        $produs->img = time().time().'.'
        .$request->file('img')->getClientOriginalExtension();
        $produs->titlu = $request->titlu;
        $produs->descriere = $request->descriere;
        $request->file('img')->move('imagine/', time().time().'.'
            .$request->file('img')->getClientOriginalExtension());
         $produs->update();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produse $id)
    {
        $produs = Produse::findOrFail($id);
        unlink('imagine/'.$produs->img);
        $produs->delete();
        return redirect()->route('admin.index');
    }
}
