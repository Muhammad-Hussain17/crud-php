<?php 


include('dbcon.php');

$sql = "SELECT * FROM hh_tbl order by id desc";
$result = $conn->query($sql);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

<div class="container mt-5">
<h2>All Students Record</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Course</th>
      <th scope="col">Days</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($result)):; ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><?php echo $row['course']; ?></td>
      <td><?php echo $row['days']; ?></td>
      <td>

        <a href="add_std.php"><i class="fa-solid fa-plus"></i></a>
        <a href="update_std.php?id=<?php echo $row['id'] ;?>"><i class="fa-solid fa-pencil"></i></a>
        <a href="delete_std.php?id=<?php echo $row['id'] ;?>"><i class="fa-solid fa-trash"></i></a>

      </td>
    </tr>
   <?php endwhile; ?>
  </tbody>
</table>




</div>




</body>
</html>

