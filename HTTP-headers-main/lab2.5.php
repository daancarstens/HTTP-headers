<form name="inloggen" action="" method="POST">
     <input type="text" name="email" value="iemand@email.com" />
     <input type="password" name="password" value="wachtwoord" />
     <input type="submit" name="submit" value=" inloggen " />
    </form>
    <?php
      if(isset($_POST['submit'])) {
        echo "-------------- Backend --------------";
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        echo "<br>e-mail: $email";
        echo "<br>e-mail: $password";
      }
    ?>
