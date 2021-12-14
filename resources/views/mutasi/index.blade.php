@extends('layout.ceria')
@section('title', 'Data Mutasi')
@section('isikonten')
@section('judulhalaman', 'DATA MUTASI')

<head>
</head>
<body>



	<a href="/mutasi/tambah" class="btn btn-primary"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>
    <div class="container" align='center'>
        <p>Cari Data Pegawai berdasarkan Nama :</p>
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="form-control btn-warning" value="CARI">
        </form>
    </div>
    <br>
	<table class="table table-success table-striped">
		<tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
                <a href="/mutasi/detail/{{ $m->ID }}" class="btn btn-success" role="button">View</a>
                |
				<a href="/mutasi/edit/{{ $m->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
@endsection
