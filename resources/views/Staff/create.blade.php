<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('staff.save') }}" method="post">
	{{ csrf_field() }}
		<input type="text" name ="Nip" placeholder="staff">
		<input type="text" name="Nama" placeholder="staff">
		<input type="text" name="TTL" placeholder="staff">
		<select type="text" name="JK" placeholder="staff">
			  <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
		</select> 
		<input type="text" name="Alamat" placeholder="staff">
		<input type="text" name="Jabatan" placeholder="staff">
		<button type="submit">create</button>
	</form>
</body>
</html>