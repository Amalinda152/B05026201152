<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    header{
        font-size: 18px;
        color: cyan;
        text-decoration: none;
        background-color: #1e1e1e;
        padding:10px;
    }
    h1 {
        font-size: 15px;
    }
    .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #1b1b1b;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
          color: white;
        }
    .menu a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 22px;
          display: block;
          transition: 0.3s;
          color:white;
          border-left: 3px solid transparent;
    }
    .sidebar a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 22px;
          display: block;
          transition: 0.3s;
          color:white;
    }
    .sidebar a:hover{
        color: cyan;
        baground: #1e1e1e;
        border-color: cyan;
    }
    .menu a:hover{
        color: cyan;
        baground: #1e1e1e;
        border-left-color: cyan;
    }
    .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
    }
    .openbtn {
          font-size: 20px;
          cursor: pointer;
          padding: 10px 15px;
          border: none;
          background-color: #1b1b1b;
          color: white;
    }
    #main {
          transition: margin-left .2s;
          padding:20px;
          height: 680px;
          weight: 500px;
          font-size: 15px;
    }
        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
    </style>
</head>
<body>
    <header>
        <ul class="nav navbar-nav navbar-right">
            <a href="profil.html"><img src="Gambar/amalinda.jpg" class="img-circle" width="45" height="45"></a>
          </ul>
        <button class="openbtn" onclick="openNav()">☰</button>
        </div>
    </header>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <center><img src="/Gambar/amalinda.jpg" class="rounded-circle" width="80" height="80">
            <br>
            <h2>Amalinda Jayanty <br>
            5026201152
            </h2>
        </center>
        <div class="menu">
        <hr>
        <a href="/pegawai">Pegawai</a><hr>
        <a href="/absen">Absen</a><hr>
        <a href="/mutasi">Mutasi</a><hr>
        <a href="/tas">Tas</a><hr>
        <a href="/keranjangbelanja">Keranjang Belanja</a><hr>
        </div>
    </div>

    <div id="main">
        <h2>@yield('judulhalaman')</h2>

        @section('isikonten')
        @show
    </div>

    <footer>
        <center><h4>&copy; Amalinda Jayanty - 5026201152</h4></center>
    </footer>

    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    </script>
</body>
</html>
