<?php
  include "conexao.php";
  $id="";
  $name="";
  $email="";
  $phone="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:principal/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from principal where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: principal/index.php");
      exit;
    }
    $name=$row["name"];
    $email=$row["email"];
    $phone=$row["phone"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    $sql = "update principal set name='$name', email='$email', phone='$phone' where id='$id'";
    $result = $conn->query($sql);
    
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Formulario de Cadastro</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Adicionar Membro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Atualizar Membro </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Enviar </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancelar </a><br>

 </div>
 </form>
 </div>
</body>
</html>