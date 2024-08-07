<?php include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM students WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div>
    <form action="" method="POST">
        <input value="<?php echo $row['first_name']?>" type="text" name="first_name" placeholder="firstname"> <br>
        <br>
        <input value="<?php echo $row['last_name']?>" type="text" name="last_name" placeholder="lastname"> <br> <br>
        <input value="<?php echo $row['age']?>" type="number" name="age" placeholder="age"> <br> <br>
        <input type="submit" name="update_btn" value="update">
        <button><a href="view.php">Back</a></button>
    </form>
</div>
<?php
if(isset($_POST['update_btn'])){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $age=$_POST['age'];

    $update="UPDATE students SET first_name='$fname',last_name='$lname',age='$age' WHERE id='$id'";
    $data=mysqli_query($con,$update);

    if($data){
        ?>
<script type="text/javascript">
alert("Data Updated Successfully");
window.open("http://localhost/demo/view.php", "_self");
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