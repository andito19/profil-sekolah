<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_pengumuman = Pengumuman::all();
    	return view('pengumuman.list', compact('list_pengumuman'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pengumuman = new Pengumuman;

        $pengumuman->Judul = $request->Judul;
        $pengumuman->Desc = $request->Desc;

        $pengumuman->save();
        return redirect()->route('pengumuman.index');
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
        $edit_pengumuman = Pengumuman::findOrFail($id);
    	return view('pengumuman.edit', compact('edit_pengumuman'));
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
        $update_pengumuman = Pengumuman::find($id);

		$update_pengumuman->Judul = $request->judul;
		$update_pengumuman->Desc = $request->deskripsi;

		$update_pengumuman->save();
		return redirect()->route('pengumuman.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_pengumuman = Pengumuman::find($id);
		$delete_pengumuman->delete();

        return redirect()->back();

    }
}
