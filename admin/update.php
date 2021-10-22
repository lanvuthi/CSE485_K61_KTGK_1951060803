<?php 
     include '../header.php';
     include '../config.php';

            $id=$_GET['id'];
            $sql1 = "SELECT * FROM drugs WHERE id=$id";
            $res1 = mysqli_query($conn, $sql1);
            if(mysqli_num_rows($res1) >0){
                    $row1 = mysqli_fetch_assoc($res1);
                    
                    $name = $row1['name'];
                    $type = $row1['type'];
                    $barcode = $row1['barcode'];
                    $dose = $row1['dose'];
                    $code = $row1['code'];
                    $cost_price = $row1['cost_price'];
                    $selling_price = $row1['selling_price'];
                    $expiry = $row1['expiry'];
                    $company_name = $row1['company_name'];
                    $production_date = $row1['production_date'];
                    $expiration_date = $row1['expiration_date'];
                    $place = $row1['place'];
                    $quantity = $row1['quantity'];
                }
        ?>
         <main class="container">
            <h2>Sửa thông tin thuốc</h2>
                    <form action="process-update.php" method="post">
                        <div class="form-group row">
                                <label for="id" class="col-sm-2 col-form-label">id</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="id" value="<?php echo $id ?>" id="id">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Tên Thuốc</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="name">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="type" class="col-sm-2 col-form-label">Loại thuốc</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $type ?>" id="type" name="type">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="barcode" class="col-sm-2 col-form-label">Mã vạch</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $barcode ?>" id="barcode" name="barcode" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="dose" class="col-sm-2 col-form-label">Liều Lượng</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $dose ?>" id="dose" name="dose">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="code" class="col-sm-2 col-form-label">Mã</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $code ?>"id="code" name="code">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="cost_price" class="col-sm-2 col-form-label">Giá nhập</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $cost_price ?>" id="cost_price" name="cost_price">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="selling_price" class="col-sm-2 col-form-label">Giá Bán</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $selling_price ?>" id="selling_price" name="selling_price" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="expiry" class="col-sm-2 col-form-label">Trạng Thái hạn sử dụng</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $expiry ?>" id="expiry" name="expiry">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-2 col-form-label">Công ty</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $company_name ?>" id="company_name" name="company_name">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="production_date" class="col-sm-2 col-form-label">Ngày sản xuất</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" value="<?php echo $production_date ?>" id="production_date" name="production_date">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="expiration_date" class="col-sm-2 col-form-label">Ngày hết hạn</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" value="<?php echo $expiration_date ?>" id="expiration_date" name="expiration_date" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="place" class="col-sm-2 col-form-label">Nơi Sản Xuất</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $place ?>" id="place" name="place">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="quantily" class="col-sm-2 col-form-label">Số Lượng</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $quantity ?>" id="quantity" name="quantity">
                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="update" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-success">Sửa</button>
                                </div>
                            </div>
        
        </form>
    </main>
    
