@extends('layout.ceria')
@section('title', 'Data Mutasi')
@section('isikonten')
@section('judulhalaman', 'DETAIL DATA MUTASI')

<head>
</head>
<body>
	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="Departemen" value="{{ $m->Departemen }}"> <br/>
		Sub Departemen <input type="text" required="required" name="SubDepartemen" value="{{ $m->SubDepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime-local" required="required" name="MulaiBertugas">{{ $m->MulaiBertugas }} <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
