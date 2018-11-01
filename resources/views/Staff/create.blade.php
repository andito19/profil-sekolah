@extends('index')
@section('title', 'Create Staff')
@section('content')
<form>
  <div class="form-row">
  	
  </div>
  <div class="form-group">
     <input type="text" class="form-control" name="Nip">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Nama" placeholder="Nama">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Tempat" placeholder="Tempat">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Tgl_lahir" placeholder="Tgl_lahir">
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
    <input type="text" class="form-control" name="Alamat" placeholder="Alamat">
  </div>
  <div class="form-group">
  	<input type="text" class="form-control" name="Jabatan" placeholder="Jabatan">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection