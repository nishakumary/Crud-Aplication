<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM students WHERE id='$id' ";
$data=mysqli_query($con,$query);
if($data){
    ?>
<script type="text/javascript">
alert("Data Deleted Successfully");
window.open("http://localhost/demo/view.php", "_self")
</script>
<?php
}
else{
    ?>
<script type="text/javascript">
alert("Please try again");
</script>
<?php
}

?>