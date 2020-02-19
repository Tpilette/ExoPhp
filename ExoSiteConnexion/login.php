<?php 
if(!empty($_POST)){
    if(!empty($_POST['Login']) && !empty($_POST['Password']))
    {
        // check login/pass
    }
    else
    {
      header('Location: unauthorize.php');
    }
               

ob_start();

?>

    <form action="login.php" method="POST">
       <div class="form-group">
         <label for="login">login</label>
         <input class="form-control" id="login" type="text" name="login">
       </div>

       <div class="form-group">
         <label for="password">password</label>
         <input id="password" class="form-control"  type="password" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary" >Submit</input>
    </form>
