<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php OOP Polymorphism Example</title>
</head>
<body>
<form action="index.php" method="POST">

<select name="animal">
<option value="">Select an Animal:</option>
<option value="frog">Frog</option>
<option value="pigeon">Pigeon</option>
<option value="elephant">Elephant</option>
<option value="monkey">Monkey</option>
</select>

<input type="submit" name="submit" value="Submit">
</form><br>
<?php

class Animal 
{
     function   movement($animal){
         echo "Species movement";
     }
}

class Frog extends Animal
{
    function   movement($frog){
        echo "I am a  $frog  I <strong>leaps</strong> when I move";
    }
}

class Pigeon extends Animal
{
    function   movement($pigeon){
        echo "I am a  $pigeon I <strong>flutters</strong> when I move";
    }
}

class Elephant  extends Animal
{
    function   movement($elephant){
        echo "I am a  $elephant <strong>ambles</strong>  when I move";
    }
}

class Monkey  extends Animal
{
    function   movement($monkey){
        echo "I am a  $monkey I <strong>climbs</strong> when I move";
    }
}

if(isset($_POST['submit']))
{
    $animal = $_POST['animal'];
    if(!empty($animal))
    {
      if($animal =='frog')
      {
       $frog = new Frog();
       $frog->movement($animal);
      }

      if($animal =='pigeon')
      {
       $pigeon = new Pigeon();
       $pigeon->movement($animal);
      }

      if($animal =='elephant')
      {
       $elephant = new Elephant();
       $elephant->movement($animal);
      }

      if($animal =='monkey')
      {
       $monkey = new Monkey();
       $monkey->movement($animal);
      }
    }
    else
    {
        echo "<font color='red'>Please select Animal</font>";
    }
}


?>
    
</body>
</html>


