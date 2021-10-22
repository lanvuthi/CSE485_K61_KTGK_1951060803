<?php
    $dr_id = $_POST['id'];
    $dr_name = $_POST['name'];
    $dr_type = $_POST['type'];
    $dr_barcode = $_POST['barcode'];
    $dr_dose = $_POST['dose'];
    $dr_code = $_POST['code'];
    $dr_cost_price = $_POST['cost_price'];
    $dr_selling_price = $_POST['selling_price'];
    $dr_expiry = $_POST['expiry'];
    $dr_company_name = $_POST['company_name'];
    $dr_production_date = $_POST['production_date'];
    $dr_expiration_date = $_POST['expiration_date'];
    $dr_place = $_POST['place'];
    $dr_quantity = $_POST['quantity'];
    

    include '../config.php';

    // Bước 02:
    $sql = "INSERT INTO drugs 
    VALUES  ('$dr_id', '$dr_name', '$dr_type', '$dr_barcode', '$dr_dose', '$dr_code', '$dr_cost_price', '$dr_selling_price',
            '$dr_expiry', '$dr_company_name', '$dr_production_date', '$dr_expiration_date', '$dr_place', '$dr_quantity')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location: index.php");
    }else{
        header("Location: index.php");
    }                            

    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>