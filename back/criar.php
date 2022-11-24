<?php
    include "conexao.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $q = " INSERT INTO `principal`(`name`, `email`, `phone`) VALUES ( '$name', '$email', '$phone' )";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Formulario de Cadastro</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="criar.php"><span style="font-size:larger;">Adicionar Membro</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Criar novo membro </h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Enviar </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancelar </a><br>

 </div>
 </form>
 </div>
</body>
</html>