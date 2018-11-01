@extends('index')
@section('title', 'Edit taff');
@section('content')
<form method="post" action="{{ route('staff.update') }}">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $staff->id }}">
	<div class="form-group mb-4">
		<input type="text"  name="Nip"
		placeholder="nip" value="{{ $staff->Nip }}"> 
	</div>
	<div class="form-group">
		<input type="text" name="Nama" value="{{ $staff->Nama }}">
	</div>
	<div class="form-group">
		<input type="text" name="Tempat" value="{{ $staff->Tempat }}">	
	</div>
	<div class="form-group">
	<input type="date" name="Tgl_lahir" value="{{ $staff->Tgl_lahir }}">
		
	</div>
	
	<div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="JK" value="pria" >
        
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
<div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="JK"  value="wanita" >
        
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
	<div class="form-group">
	<input type="text" name="Alamat" value="{{ $staff->Alamat }}">	
	</div>
	<div class="form-group">
	<input type="text" name="Jabatan" value="{{ $staff->Jabatan }}">	
	</div>



	
</form>