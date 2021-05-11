<html>
  <? echo "Hello"?>

  <? 
    $var1 = "Yael";
    $var2 = 27;
    $var3 = "Brown";

    echo "$var1 is $var2 years old.";

    echo  "$var1 $var3";
  ?>

  <h3>Forms</h3>
  <form action="helloWorld.php" method="GET">
    <label for="name">Name: </label>
    <input name="name" type="text">
    <input type="submit">
  </form>
  
  <?php
    echo $_GET["name"];
  ?>
</html>