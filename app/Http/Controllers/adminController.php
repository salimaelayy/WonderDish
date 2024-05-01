<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $menus = Menu::all();
        // return view('admin.admin', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return view('admin.admin.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    // nv menu
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'image' => 'required',

        // ]);
        // Menu::create($validatedData);

        // return redirect()->route('menus.index')
        //     ->with('success', 'Le menu a été créé avec succès.');
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
        // $menu = Menu::findOrFail($id);
        // return view('admin.admin.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:menus,name,' . $id . '|max:255',
        //     'description' => 'required',
        // ]);
        // $menu = Menu::findOrFail($id);
        // $menu->update($validatedData);

        // return redirect()->route('menus.index')
        //     ->with('success', 'Le menu a été mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $menu = Menu::findOrFail($id);
        // $menu->delete();

        // return redirect()->route('menus.index')
        //     ->with('success', 'Le menu a été supprimé avec succès.');
    }
}
