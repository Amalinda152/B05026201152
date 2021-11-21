<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menghitung Energi Mekanik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>Energi Mekanik yang dihasilkan:</h4>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Massa benda (m) :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["m"] ; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Percepatan gravitasi (g) :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["g"] ; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Ketinggian benda (h) :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["h"] ; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Kecepatan gerak benda (v) :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["v"] ; ?>
                </div>
            </div>
            <br>
            <?php
                $m = $_POST["m"];
                $g = $_POST["g"];
                $h = $_POST["h"];
                $v = $_POST["v"];
                $ep = $m * $g * $h;
                $ek = 0.5 * $m * $v * $v;
                $em = $ep + $ek;

                    echo "Energi Potensial(EP)  = " .$ep. " Joule <br>" ;
                    echo "Energi Kinetik(EK)    = " .$ek. " Joule <br>" ;
                    echo "Energi Mekanik(EM)    = " .$em. " Joule";
            ?>
</div>
</div>
</body>
</html>
