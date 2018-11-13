@extends('index')
@section('title', 'Edit taff');
@section('content')
<form method="post" action="{{ route('staff.update') }}">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $staff->id }}">
	<div class="form-group mb-4">
		<input type="text"  name="Nip" class="form-control" placeholder="nip" value="{{ $staff->Nip }}"> 
	</div>
	<div class="form-group">
		<input type="text" name="Nama" class="form-control" value="{{ $staff->Nama }}">
	</div>
	<div class="form-group">
		<input type="text" name="Tempat" class="form-control" value="{{ $staff->Tempat }}">	
	</div>
	<div class="form-group">
	<input type="date" name="Tgl_lahir" class="form-control" value="{{ $staff->Tgl_lahir }}">
		
	</div>

	@if($staff->JK == 'pria')
	<div class="form-check form-check-radio form-check-inline">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="JK" value="pria" checked>
        Pria
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
<div class="form-check form-check-radio form-check-inline">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="JK" value="wanita">
        Wanita
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
@else
<div class="form-check form-check-radio form-check-inline">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="JK" value="wanita" checked>
        Wanita
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
<div class="form-check form-check-radio form-check-inline">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="JK" value="pria">
        Pria
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
@endif
	<div class="form-group">
	<input type="text" name="Alamat" class="form-control" value="{{ $staff->Alamat }}">	
	</div>
	<div class="form-group">
	<input type="text" name="Jabatan" class="form-control" value="{{ $staff->Jabatan }}">	
	</div>
	<button type="submit" class="btn btn-success">Update Staff Info</button>
</form>
@endsection