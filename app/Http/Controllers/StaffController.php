<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Staff;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    public function index()
    {
    	  
    	$data['staff'] = Staff::all();
    	// dd($staff);
    	return view('Staff.index', $data);
   
    }
    public function create()
    {
    	return view('Staff.create');
    }
    public function save(Request $r)
    {
    	$Staff = new Staff;
        $Staff->Nip = $r->Nip;
        $Staff->Nama = $r->Nama;
        $Staff->TTL = $r->TTL;
        $Staff->JK = $r->JK;
        $Staff->Alamat = $r->Alamat;
        $Staff->Jabatan = $r->Jabatan;

        $Staff->save();

        return redirect()->route('staff.index');
    }
    public function edit($id)
    {
    	$staff = Staff::find($id);
    	return view('Staff.edit', compact('staff'));
    }
    public function update(Request $r)
    {
    	$staff = Staff::find($r->input('id'));

		$staff->Nip = $r->input('Nip');
		$staff->Nama = $r->input('Nama');
		$staff->TTL = $r->input('TTL');
		$staff->JK = $r->input('JK');
		$staff->Alamat = $r->input('Alamat');
		$staff->Jabatan = $r->input('Jabatan');

		$staff->save();
		return redirect()->route('staff.index');

    }
    public function delete($id)
    {
    	$staff = Staff::find($id);

		$staff->delete();
     	return redirect()->route('staff.index');
    }
=======
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
>>>>>>> acara
}
