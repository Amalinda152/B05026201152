@extends('layout.ceria')
@section('title', 'Data Keranjang Belanja')
@section('isikonten')
@section('judulhalaman', 'DATA KERANJANG BELANJA')
<head>
</head>
<body>

	<a href="/keranjangbelanja/tambah" class="btn btn-primary"> + Tambah belanjaan Baru</a>

	<br/>
	<br/>
    <div class="container" align='center'>
        <p>Cari Data Belanjaan berdasarkan Kode barang :</p>
        <form action="/keranjangbelanja/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari kode barang .." value="{{ old('cari') }}">
            <input type="submit" class="form-control btn-warning" value="CARI">
        </form>
    </div>
    <br>
	<table class="table table-success table-striped">
		<tr>
            <th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>{{ $k->Harga }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                |
                <a href="/keranjangbelanja/edit/{{ $k->ID }}" class="btn btn-primary"> Beli</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $keranjangbelanja->links()  }}
</body>
@endsection
