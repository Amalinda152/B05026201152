@extends('layout.ceria')
@section('title', 'Data Keranjang Belanja')
@section('isikonten')
@section('judulhalaman', 'BELI')
<head>
</head>
<body>


	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	@foreach($keranjangbelanja as $p)
	<form action="/keranjangbelanja/update" method="post">
		{{ csrf_field() }}
        <div class="row mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-1 col-sm-2 control-label">Kode Pembelian</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="kode pembelian">
                    <input type="text" name="kode pembelian" required="required" value="{{ $k->ID}}"> <br/>
                    <label class="col-md-2 col-sm-4 control label"></label>
                </div>
            </div>
            <label for="nama" class="col-md-1 col-sm-2 control-label">Kode Barang</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="kode barang">
                <input type="text" name="kode barang" required="required" value="{{ $k->ID}}"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Jumlah pembelian</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="Jumlah">
                <input type="number" name="Jumlah" required="required" value="{{ $k->Jumlah}}""><br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Harga per item</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="Harga">
                <input type="number" class="uang" name="Harga" required="required" value="{{ $k->Harga}}"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Total</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="total">
                <input type="number" class="uang" name="total" value="{{ $k->Harga}}"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
