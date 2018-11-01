<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Acara;

class AcaraController extends Controller
{
    public function index(){
        $data['acaras'] = DB::table('acaras')->orderBy('Id', 'desc')->get();
    	return view('acara.index', $data);
    }
    public function create(){
    	return view('acara.create');
    }
    public function edit($Id){
        $data['acara'] = Acara::where('Id', '=', $Id)->get();
    	return view('acara.edit', $data);
    }
    public function save(Request $r){
        $acara = new Acara;
        $acara->Judul = $r->judulacara;
        $acara->Deskripsi = $r->deskripsiacara;
        $acara->save();

        return redirect()->route('acara.index');
    }
    public function deleteAcara(Request $r){
        $delete = Acara::where("Id", $r->idacara)->delete();
        return redirect()->route('acara.index');

    }
    public function editSave(Request $r){
        // $judul = $r->judulacara;
        // $deskripsi = $r->deskripsiacara;
        // $data = Acara::where('Id', '=', $r->Idacara)->update(['Judul' => $judul],['Deskripsi' => $deskripsi]);
        // return view('acara.index');
        DB::table('acaras')->where('Id', $r->input('idacara'))->update(
            ['Judul' => $r->input('judulacara'),
            'Deskripsi' => $r->input('deskripsiacara')
            ]
        );

        return redirect()->route('acara.index');


    }
}
