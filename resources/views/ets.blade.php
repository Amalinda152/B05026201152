<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("button").click(function(){
        $("button").css("background-color", "black");
      });
    });
    </script>
<style>
    main {
        background-color:white;
        width: 40%;
        padding: 20px;
        margin: 100px auto;
        border: 2px solid #9c9c9c;
    }
    h2 {
    padding-top: 20px;
    font-style: normal;
    }
    p {
    padding-left: 10px;
    }
    form input{
        margin-bottom: 1rem;
        background: #fff;
        border: 1px solid #9c9c9c;
        width: 40%;
    }
    select {
        margin-bottom: 1rem;
        background: #fff;
        border: 1px solid #9c9c9c;
        width: 40%;
    }
    button {
        width: 30%;
        color: white;
        border-color:whitesmoke;
    }
    button:hover {
        color:black;
    }
    label {
        text-align-last: justify;
        padding: 0.4em 1.5em 0.5em 3em;
        float: left;
        width: 110px;
        margin-left: 50px;
    }
    .container {
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    text-align: center;
    font-size: 30px;
}
</style>
</head>
<body>
<main>
    <form action="https://www.google.com/">
        <p>
            Amalinda Jayanty
            <br>
            Linda
            <br>
            5026201152
        </p>
        <h2><center>Form Input Data Barang</center></h2>
        <br>
        <div class="form-group">
            <label for="Nama Barang">Nama Barang :</label>
            <input type="text" class="form-control" id="Nama Barang" pattern="[A-Za-z].{10,}" required>
        </div>
        <div class="form-group">
            <label for="Harga">Harga :</label>
            <input type="number" class="form-control" id="Harga" min="5000" required>
        </div>
        <div class="form-group">
            <label for="Jenis Barang">Jenis Barang :</label>
            <select id="Jenis Barang" name="Jenis Barang" required>
                <option value="kosong"></option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Non Mamin">Non Mamin</option>
              </select>
        </div>
        <div class="form-group">
            <label for="Kode Barcode">Kode Barcode :</label>
            <input type="number" class="form-control" id="Kode Barcode" pattern="[0-9].{10,}"  required>
        </div>
        <div class="container">
            <div class="row g-2">
                <div class="col">
                <button type="submit" class="btn-primary" style="background-color: #0000ff">Submit</button>
                <button type="reset" class="btn-primary" style="background-color:#00ff00">Reset</button>
                </div>
            </div>
        </div>
    </form>
</main>
</body>
</html>
