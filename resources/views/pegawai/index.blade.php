@extends('layout.ceria')
@section('title', 'Data Pegawai')
@section('isikonten')
@section('judulhalaman', 'DATA PEGAWAI')
<head>
	<title>Data Pegawai</title>
</head>
<body>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

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
            <th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-success" role="button">View</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links()  }}
</body>
@endsection
