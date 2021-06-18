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
            margin-top: 6px;
            height: 615px;
            right: 250px;
            border: 3px solid;
            font-family: Verdana;
            background-color: #BEC7C7;
            border-color: #FFEB4D;
            border-radius: 10px;
            border-color: #06111C;
            margin-bottom: 10px;
        }
        #butt {
            background-color: #FFEB4D;
            color: #121317;
            height: 50px;
            right: 25px;
            border-radius: 3px solid;
            border-color: #FFEB4D;
        }
        #emailHelp {
            color: #BB2020;
        }
        .form-label {
            margin-top: 10px;
        }
        #butt:hover {
          background-color: #F0D000;
          border-color: #06111C;
        }
        #data {
          margin-top: 15px;
        }
        #nascimento {
          margin-top: 5px;
          height: 40px;
          border-radius: 3px;
          border-color: transparent;
        }
        #exphp {
          color: #06111C;
        }
    </style>
    <title>PHP Post</title>
</head>
<body>

<div id="geral" class="container">
<h1><b>Cadastro para Login</b></h1>
<form method="POST" action="dados.php">
<div class="row">
  <div class="col">
  <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" aria-label="First name">
  </div>
  <div class="col">
  <label class="form-label">Sobrenome</label>
    <input type="text" class="form-control" name="sobrenome" aria-label="Last name">
  </div>
</div>
<div class="row">
<div class="col">
  <label id="data">Data de Nascimento</label><br />
    <input id="nascimento" type="date" name="Data de Nascimento">
  </div>
  <div class="col">
  <label class="form-label">Telefone</label>
    <input type="tel" class="form-control" name="telefone">
  </div>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"><b>Não utilize dados reais.</b></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text"><b>Não utilize dados reais.</b></div>
  </div>
  <button type="submit" id="butt" class="btn btn-primary">Enviar</button>
  <div id="exphp" class="form-text"><b>Clique para ver o exemplo de como ficaria se o php enviasse os dados:</b></div>
  <a href="https://i.imgur.com/rA6CEXq.png" id="butt" class="btn btn-primary" target="_blank">Enviar</a>

</form>
</div>
</body>
</html>