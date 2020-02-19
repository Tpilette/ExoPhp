<?php
  if(!empty($_POST))
  {
      if(!empty($_POST['login']) && !empty($_POST['password']))
      {
          if($_POST['login'] !== "toto" || $_POST['password'] !== "tutu")
          {
              $errorMessage = 'Mauvais Login/password !';
          }
          else
          {
              $_SESSION['login'] = $_POST['login'];
              header('Location: index.php');
              exit();
          }
      }
      else
      {
          $errorMessage = 'Veuillez inscrire vos identifiants svp !';
      }
  }
?>
<form method="POST">
  <div class="form-group">
    <label for="idlogin">Login</label>
    <input type="text" class="form-control" id="idlogin" name="login">
  </div>
  <div class="form-group">
    <label for="idpassword">Password</label>
    <input type="password" class="form-control" id="idpassword" name="password">
  </div>
  <button type="submit" class="btn btn-primary"> Connexion</button>/>

<?php   
 $titre="se connecter";
 include('template.php');
?>

