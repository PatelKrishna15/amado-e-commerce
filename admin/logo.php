<?php
session_start();
include('include.php');
include('connection.php');
$select = "SELECT * FROM logo";
$result = mysqli_query($conn,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logo</title>
</head>
<body>
  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
  <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
  <?php   
      $i =1;           
      while($row= mysqli_fetch_assoc($result))
      {
        ?>
			<tbody>
        <tr>
          <td><?php echo $i++ ; ?></td>
          <td><?php echo $row['title']; ?></td>
					<td><img src="<?php echo $row['image'] ?>" style="width: 30%;"></td>
          <td><a href="edit_logo.php?id=<?php echo $row['id'] ?>" alt=<?php echo $row['id'];?> class="btn btn-primary">Edit</a></td>
          
         
				</tr>
      </tbody>
 			<?php } ?>
            </table>
        </div>
 
</body>
</html>
