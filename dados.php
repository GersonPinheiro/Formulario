
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #FFEB4D;
        }
        h1 {
            color: #06111C;
            text-align: center;
            margin-top: 10px;
        }
        #geral {
            margin-top: 10px;
            height: 450px;
            border: 3px solid;
            font-family: Verdana;
            background-color: #D9D9D9;
            border-color: #FFEB4D;
            border-radius: 10px;
            border-color: #06111C;
            margin-bottom: 10px;
        }
        #butt {
            background-color: #FFEB4D;
            color: #121317;
            height: 40px;
            right: 25px;
            border-radius: 3px solid;
            border-color: #FFEB4D;
            text-align: center;
        }
    </style>
    <title>PHP Post</title>
</head>
<body>

<div id="geral" class="container">
    <?php

echo "<pre>";
print_r ($_POST);

?>
  <a href="index.php" id="butt" class="btn btn-primary">Voltar</a>
</div>
</body>
</html>