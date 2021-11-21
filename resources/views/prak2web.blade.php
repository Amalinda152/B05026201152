<html>
<head>
<style>
    body {
        background-image:url("https://cdn.kibrispdr.org/data/gambar-background-pink-4.png");
    }
    main {
        background-color:whitesmoke;
        width: 50%;
        padding: 20px;
        margin: 100px auto;
    }
    .add_warna {
        background-color: pink;
    }
    .add_bayang {
        box-shadow: 7px 7px silver;
    }
    h2 {
    padding-top: 20px;
    }
    form {
        padding-bottom: 1em;
    }
    form input {
        margin-bottom: 1rem;
        background: #fff;
        border: 1px solid #9c9c9c;
    }
    button {
        background: lightgrey;
        padding: 0.7em;
        border: 0;
        margin-top: 40px;
    }
    button:hover {
        color:palevioletred ;
    }
    label {
        text-align: right;
        padding: 0.4em 1.5em 0.5em 0;
        float: left;
        width: 200px;
    }
    .form-check-inline {
        width: 100%;
        margin-bottom: 0.5px;
        float:left;
    }
    .form-control{
        width: 45%;
    }
</style>
</head>
<body>
<main>
    <div id="box" class="add_warna add_bayang">
    <form action="https://www.google.com/">
        <h2><center>Registrasi form</center></h2>
        <div class="form-group">
            <label for="User id">User id:</label>
            <input type="number" class="form-control" id="User id" placeholder="Required and must be of length 5 to 12" pattern="{5,12}" required>
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" id="Password" placeholder="Required and must be of length 7 to 12" pattern="{5,12}" required>
        </div>
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="Name" placeholder="Required and alphabates only" required>
        </div>
        <div class="form-group">
            <label for="Address">Address:</label>
            <input type="text" class="form-control" id="Address" placeholder="Optional">
        </div>
        <div class="form-group">
            <label for="Country">Country:</label>
            <input list="country" id="country"  placeholder="(please select a country)" required>
            <datalist id="country">
              <option value="Amerika">
              <option value="Arab">
              <option value="Indonesia">
              <option value="Korea">
              <option value="Jepang">
              <option value="China">
            </datalist>
        </div>
        <div class="form-group">
            <label for="ZIP Code">ZIP Code:</label>
            <input type="number" class="form-control" id="ZIP Code" placeholder="Required. Must be numeric only" required>
        </div>
        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" id="Email" placeholder="Required. Must be a valid email" required>
        </div>
        <div class="form-check-inline">
            <label for="Sex">Sex:</label>
            <input type="radio" id="jenis_kelamin" value="Male" required/>
            Male</input>
            <input type="radio" id="jenis_kelamin" value="Female" required />
            Female</input>
        </div>
        <div class="form-check-inline">
            <label  class="form-check-label" for="Language" required>Language:</label>
            <input type="checkbox" value="English" required>English
            <input type="checkbox" value="English">Non English
        </div>
        <div class="form-group">
            <label for="comment">About:</label>
            <textarea class="form-control" rows="5" id="comment" placeholder="Optional"></textarea>
        </div>
        <center><button>submit</button></center>
    </form>
    </div>
</main>
</body>
</html>
