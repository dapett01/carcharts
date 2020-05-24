<?php
              //Skulle bli så att vi kunde uppdatera och lägga till information direkt från sidan.
    include_once('carcharts.php');

    if(isset($_POST['username']))
    {
      $name = $_POST['username'];

      if(mysql_query("INSERT INTO carcharts VALUES('','$name')"))
        echo "Successful Insertion!";
      else
        echo "Please try again";
    }

    $con = mysqli_connect("localhost","root","");

    $result = mysqli_query($con,"SELECT * FROM login");


?>

<form action="edit.php" method="POST">
Name: <input type="text" name="username"/><br />
<input type="submit" value=" Enter "/>
</form>

<h1>Users:</h1>

<?php
    while($row = mysqli_fetch_assoc($result))
    {
          echo "$row[user_id]. $row[username] <a href='edit.php?edit=$row[user_id]'>edit<br/>";
    }
?>
