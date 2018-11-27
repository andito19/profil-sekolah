<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prestasi;
class PrestasiController extends Controller
{
    
    public function index(){
    	$data['prestasis'] = DB::table('prestasis')->orderBy('id', 'desc')->get();
    	return view('prestasi.index',$data);
    }
    public function create(){
    	return view('prestasi.create');
    }
    public function edit($Id){
    	$data['prestasi'] = Prestasi::where('id', '=', $Id)->get();
    	return view ('prestasi.edit',$data);
    }
    public function save(Request $r){
    	$prestasi = new Prestasi;
    	$prestasi->judul = $r->judulprestasi;
    	$prestasi->descripsi = $r->deskripsiprestasi;
    	$prestasi->save();
    	return redirect()->route('prestasi.index');
    }
    public function delete(Request $r){
    	$delete = Prestasi::where("Id",$r->idprestasi)->delete();
    	return redirect()->route('prestasi.index');
    }
    public function editSave(Request $r){
    
    	DB::table('prestasis')->where('id',$r->input('idprestasi'))->update(
    		['judul' => $r->input('judulprestasi'),
    		'descripsi' => $r->input('deskripsiprestasi')
    	]
    );
        return redirect()->route('prestasi.index');
    }
    }