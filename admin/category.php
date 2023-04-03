<?php
session_start();
include('include.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Category</title>
</head>

<body>

    <!--add Modal -->

    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="category_form">
                        <input type="hidden" id="id" name="id">

                        <div class="mb-3">
                            <label for="cat_name" class="form-label">Add Category</label>
                            <input type="text" name="cat_name" class="form-control" id="cat_name">
                        </div>
                        <button type="button" id="modalCloseBtn" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--edit Modal -->

    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body editCatForm">

                </div>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" id="add" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#categoryModal">
                Add Category
            </button>
            <div class="container">
                <div class="card-body">
                    <div class="showdiv">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <script>
        // ajax calling function
        function callAjax() {
            $.ajax({
                url: "view_category.php",
                type: "POST",
                data: {},
                success: function(response) {
                    $(".showdiv").html("");
                    $(".showdiv").html(response);
                }
            });
        }
        callAjax();
        $('#category_form').on('submit', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: "addcategory.php",
                // alert(url);
                method: "POST",
                data: $('#category_form').serialize(),
                success: function(data) {
                    // $('.table').html(data);
                    $('#category_form').find('input').val('');
                    $('#modalCloseBtn').click();
                    callAjax();
                }
            });
        });
        $(document).on('click', ".delete_rec", function() {
            var url = $(this).data('url');
            $.ajax({
                // url:"deletecategory.php",
                method: "GET",
                url: url,
                data: {},
                success: function() {
                    callAjax();
                }
            });
        });

        // callAjax();
        $(document).on('click', '.edit_cat', function(e) {
            e.preventDefault();
            var url = $(this).data('url');
            $.ajax({
                url: "editcategory.php",
                url: url,
                processData: false,
                data: {},
                success: function(response) {
                    $("#editCategoryModal").modal("show");
                    $(".editCatForm").html("");
                    $(".editCatForm").html(response);
                }
            });

            $(document).on("submit", '#editcategory_form', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "update_category.php",
                    cache: false,
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#editCategoryModal').modal('hide');
                        callAjax();
                    }
                });
            });
        });
    </script>
</body>

</html>