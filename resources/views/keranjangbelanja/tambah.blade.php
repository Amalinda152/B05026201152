@extends('layout.ceria')
@section('title', 'Data Keranjang Belanja')
@section('isikonten')
@section('judulhalaman', 'TAMBAH DATA KERANJANG BELANJA')
<head>
    <script type="text/javascript">
        $(document).ready(function(){

            // Format mata uang.
            $( '.uang' ).mask('000.000.000', {reverse: true});

        })
    </script>
</head>
<body>


	<a href="/keranjangbelanja" > Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
        <div class="row mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-1 col-sm-2 control-label">Kode Pembelian</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="kode pembelian">
                    <input type="number" name="kode pembelian" required="required"> <br/>
                    <label class="col-md-2 col-sm-4 control label"></label>
                </div>
            </div>
            <label for="nama" class="col-md-1 col-sm-2 control-label">Kode Barang</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="KodeBarang">
                <input type="number" name="KodeBarang" required="required"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Jumlah pembelian</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="jumlah">
                <input type="number" name="jumlah" required="required"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
        <div class="row mt-4">
            <label for="nama" class="col-md-1 col-sm-2 control-label">Harga per item</label>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7" id="harga">
                <input type="number" class="uang" name="harga" required="required"> <br/>
                <label class="col-md-2 col-sm-4 control label"></label>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

</body>
@endsection
