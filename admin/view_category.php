<?php
session_start();
?>
<?php
include('connection.php');
?>
<table class="table">
    <thead >
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="table">
        <?php
        $select = "SELECT * from Category";
        $result = mysqli_query($conn, $select);
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><?php echo $row['cat_name']; ?></td>
                <td><button data-url="editcategory.php?id=<?php echo $row['id'] ?>" data-id="<?php echo $row['id']; ?>" data-name="<?php echo $row['cat_name']; ?>" data-bs-toggle="modal" class="btn btn-primary edit_cat" data-bs-target="#editCategoryModal">Edit</button>
                <button data-url="deletecategory.php?id=<?php echo $row['id']; ?>" data-id="<?php echo $row['id']; ?>" class="btn btn-primary delete_rec">Delete</button>
            </td>
            </tr><?php  } ?>

    </tbody>
</table>