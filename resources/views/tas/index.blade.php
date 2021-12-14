@extends('layout.ceria')
@section('title', 'Data Tas')
@section('isikonten')
@section('judulhalaman', 'DATA TAS')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


	<a href="/tas/tambah" class="btn btn-primary"> + Tambah Tas Baru</a>

	<br/>
	<br/>
    <div class="container" align='center'>
        <p>Cari Data Tas berdasarkan Merk Tas :</p>
        <form action="/tas/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Tas .." value="{{ old('cari') }}">
            <input type="submit" class="form-control btn-warning" value="CARI">
        </form>
    </div>
    <br>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
			<th>Merk Tas</th>
			<th>Stock Tas</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($tas as $t)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $t->merktas }}</td>
			<td>{{ $t->stocktas }}</td>
			<td>{{ $t->tersedia }}</td>
			<td>
                <a href="/tas/detail/{{ $t->kodetas }}" class="btn btn-success" role="button">View</a>
                |
				<a href="/tas/edit/{{ $t->kodetas }}" class="btn btn-warning">Edit</a>
				|
				<a href="/tas/hapus/{{ $t->kodetas}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $tas->links()  }}
</body>
@endsection
