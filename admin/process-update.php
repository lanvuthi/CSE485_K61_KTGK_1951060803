
<?php
include '../config.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $barcode = $_POST['barcode'];
        $dose = $_POST['dose'];
        $code = $_POST['code'];
        $cost_price = $_POST['cost_price'];
        $selling_price = $_POST['selling_price'];
        $expiry = $_POST['expiry'];
        $company_name = $_POST['company_name'];
        $production_date = $_POST['production_date'];
        $expiration_date = $_POST['expiration_date'];
        $place = $_POST['place'];
        $quantity = $_POST['quantity'];

        $sql = "UPDATE drugs SET
                name = '$name', 
                type = '$type',
                barcode = '$barcode',
                dose = ' $dose',
                code = ' $code',
                cost_price = '$cost_price', 
                selling_price = '$selling_price', 
                expiry = '$expiry',
                company_name = '$company_name', 
                production_date = ' $production_date ',  
                expiration_date = '$expiration_date',  
                place  = '$place',
                quantity = '$quantity'
                where id = '$id';";

        $res = mysqli_query($conn, $sql)  or die(mysqli_error($conn));

        if($res==true)
        {
            //Query Executed and Admin Updated
            echo "<h3>Sửa Thành Công</h3>";
            header("Location:index.php");
        }
        else
        {
            //Failed to Update 
            echo "<h3>Thất Bại!!!</h3>";
            header("Location: index.php");
        }
        //
       
    }
    include '../footer.php';
?>
