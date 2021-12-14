@extends('layout.ceria')
@section('title', 'DATA ABSEN')
@section('isikonten')
@section('judulhalaman', 'DATA ABSEN PEGAWAI')

    <head>
        <title>ABSEN PEGAWAI</title>
    </head>
<body>
	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>
    <div class="container" align='center'>
        <p>Cari Data Absen berdasarkan Nama :</p>
        <form action="/absen/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="form-control btn-warning" value="CARI">
        </form>
    </div>
    <br>
	<table class="table table-success table-striped">
		<tr>
			<th>ID</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->ID }}" class="btn btn-success" role="button">View</a>
                |
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}
@endsection
