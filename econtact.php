<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estyles.css">
    <script src="pscripts.js"></script>
    <link rel="stylesheet" href="picons.css">
    <title>Contate-nos - Rank Down</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Body.css">
        <link rel="stylesheet" href="etest.css">
        <style>
            body {
    background-image: url('https://pbs.twimg.com/media/FR15NSZXsAAnEoB.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}
span{
    font-family: "Vedana",Sans-serif;
    font-size: large;
    text-align: left;
    color:white;
}
</style>
</head>
<body class="container">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container-fluid">
            <li><a class="navbar-brand" href="index.html"> Início </a></li>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuOculto"><span
                    class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuOculto">
                <div class="navbar-nav">
                    <li><a class="nav-link econtact.html" aria-current="page"
                        href="econtact.php">Contate-nos</a></li>
                        <li><a class="nav-link eAbout.html" href="eAbout.html">Sobre</a></li>
                        <li><a class="nav-link http://127.0.0.1:3000/Novidades.html" href="eProducts.html">Serviços</a></li>
                        <li><a class="nav-link http://127.0.0.1:3000/Contato.html" href="eNews.html">Novidades</a></li>
                </div>
            </div>
        </div>
    </nav>
    <article>
        <h1>Contate-nos</h1>
        <?php
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nome é obrigatório";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Apenas letras e espaços";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email é obrigatório";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email inválido";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Mande seu pedido para gente!</h1>
<span class="error">* campo necessário</span><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p>Nome:</p> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <p>E-mail:</p> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <p>Comente:</p> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit" href="mailto:someone@example.com">  
</form>
</article>
</body>
</html>