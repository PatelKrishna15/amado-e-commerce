
<?php
    include "connection.php";
    $id=$_POST['id'];
    $cat_name=$_POST['cat_name'];
    var_dump($cat_name);

    if ($cat_name == null ) {
        $response=[
            'status' => 422,
            'message'=> 'All fields are mandatory'
        ];
        echo  json_encode($response);
        return false;
    }
    $insert="INSERT into `category` (cat_name)values('$cat_name')";
    $result=mysqli_query($conn,$insert);
    if($result)
    {   
        
        echo json_encode(array("statuscode"=>200));
    }
    else{
        echo json_encode(array("statuscode"=>201));
    }
?>