@extends('layout.ceria')
@section('title', 'Data tas')
@section('isikonten')
@section('judulhalaman', 'TAMBAH DATA TAS')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


	<a href="/tas" > Kembali</a>

	<br/>
	<br/>

	<form action="/tas/store" method="post">
		{{ csrf_field() }}
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Merk Tas</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="merktas">
                <input type="text" name="merktas" required="required"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Stock Tas</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="stocktas">
                <input type="number" name="stocktas" required="required"> <br/>
                <label ></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Tersedia</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="tersedia">
                <input type="radio" id="iya" name="tersedia" value="Y">
                <label for="iya">Iya</label><br>
                <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                <label for="tidak">Tidak</label><br>
            </div>
        </div>
        <br>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

</body>
@endsection
