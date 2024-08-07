<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="first_name" placeholder="firstname"> <br> <br>
            <input type="text" name="last_name" placeholder="lastname"> <br> <br>
            <input type="number" name="age" placeholder="age"> <br> <br>
            <input type="submit" name="save_btn" value="save">
            <button><a href="view.php">View</a></button>
        </form>
    </div>
    <?php
if(isset($_POST['save_btn'])){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $age=$_POST['age'];

    $query="INSERT INTO students(first_name,last_name,age) VALUES('$fname','$lname','$age')";
    $data=mysqli_query($con,$query);

    if($data){
        ?>
    <script type="text/javascript">
    alert("Data Saved Successfully");
    </script>
    <?php
        
    }
    else{
        ?>
    <script type="text/javascript">
    alert("Please Try Again");
    </script>
    <?php
    }

}
    
    
    
?>



</body>

</html>