<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
    $("#box").toggleClass("add_warna");
    $("#box").toggleClass("add_bayang");
    $("main").toggleClass("blue");
  });
});
</script>
<style>
.blue {
  color: blue;
}
body {
    background-image:url("https://cdn.kibrispdr.org/data/gambar-background-pink-4.png");
}
main {
    background-color:whitesmoke;
    width: 30%;
    padding: 10px 20px 20px 20px;
	  margin: 100px auto;
    color:#ff3377;
}
h2 {
    padding-top: 20px;
}
.add_warna {
    background-color: pink;
}
.add_bayang {
    box-shadow: 7px 7px silver;
}
form {
    padding: 20px 20px 20px 20px;
}
</style>
</head>
<body>
<main>
<div id="box" class="add_warna add_bayang">
<h2><center>Login</center></h2>
    <form action="/action_page.php">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" value="Amalinda"><br>
      <br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" value="Jayanty"><br><br>
    </form>
<center><button>submit</button></center>
<br>
</div>
</main>
</body>
</html>
