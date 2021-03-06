@extends('layout.ceria')
@section('title', 'Data Pegawai')
@section('isikonten')
@section('judulhalaman', 'TAMBAH DATA PEGAWAI')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


	<a href="/pegawai" > Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Nama</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="nama">
                <input type="text" name="nama" required="required"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Jabatan</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="jabatan">
                <input type="text" name="jabatan" required="required"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Umur</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="umur">
                <input type="number" name="umur" required="required"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Alamat</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="alamat">
                <textarea name="alamat" required="required"></textarea> <br/>
                <label class="col-md-2 col-sm-5 control label"></label>
            </div>
        </div>
        <br>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

</body>
@endsection
