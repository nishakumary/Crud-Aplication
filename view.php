<?php include 'connection.php';?>
<a href="index.php">Home</a>

<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $query="SELECT * FROM students";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if($result){
       while ($row=mysqli_fetch_array($data)){
        ?>
    <tr>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id'];?>update.php?">Edit</a></td>
        <td><a onclick="return confirm('Are you sure, You want to delete?')"
                href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
    </tr>
    <?php
       }
    }
    else{
        ?>
    <tr>
        <td>No Record Found</td>
    </tr>
    <?php
    }
    ?>
</table>