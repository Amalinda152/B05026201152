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

        <style>
            body {
                margin: 50px;
                background-color: #1aa3ff;
                color: navy;
            }

            h2 {
                text-align: center;
            }
            label {
                text-align-last: justify;
                padding: 0.1em 2.2em 0.0em 3em;
                width: 400px;
                float: left;
                font-size: 25px;
            }
            .container {
                background-color:  #ccebff;
                padding-left: 150px;
                padding-right: 150px;
                padding-bottom: 20px;
                padding-top: 30px;
                font-size: 25px;
            }
            .submit{
                width: 150px
            }
        </style>
    <body>
        <div class="container">
            <h2>Menghitung Energi Mekanik</h2><br>
            <form action="energimekanik" method="post"  name="menghitungenergimekanik">
                @csrf
            <div class="row mt-3">
                <div class="col-5">
                    <label>Massa benda (m) :</label>
                </div>
                <div class="col-5">
                    <input name="m" class="m" type="number" size="50" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Percepatan gravitasi (g) :</label>
                </div>
                <div class="col-5">
                    <input name="g" class="g" type="number" size="50" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Ketinggian benda (h) :</label>
                </div>
                <div class="col-5">
                    <input name="h" class="h" type="number" size="50" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Kecepatan gerak (v) :</label>
                </div>
                <div class="col-5">
                    <input name="v" class="v" type="number" size="50" required>
                </div>
            </div>
            <br>
            <div class="button mt-3 text-center">
                    <button class="btn-primary submit mr-3" type="submit">Hitung</button>
            </div>
            </form>
    </body>

</html>
