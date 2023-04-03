<?php
session_start();
include('include.php');
include('connection.php');

?>
<div class="card">
  <div class="card-header ">
    <button type="submit" name="submit" class="btn btn-primary float-end"><a class="btn btn-primary" href="addproduct.php">ADD PRODUCTS</a></button>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table-export" class="table table-bordered mt-1">
      <form>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Cat_name</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $select = "SELECT * from products";
          $result = mysqli_query($conn, $select);
          $i = 1;
          while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($result);exit();
          ?>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><img src="<?php echo $row['img']; ?>" style=" height:30px"></td>
              <td><?php echo $row['cat_name']; ?></td>
              <td><a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Active</a>
              <a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Inactive</a>
            </td>
            <td><a class="btn btn-primary" href="edit_product.php?id=<?php echo $row['id'] ?>" aria-hidden="true"><i class="bi bi-pen"></i></a></td>
            <td><a class="btn btn-primary " href="delete_product.php?id=<?php echo $row['id'] ?>"aria-hidden="true" ><i class="bi bi-trash"></i></a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </form>
    </table>
  </div>
</div>