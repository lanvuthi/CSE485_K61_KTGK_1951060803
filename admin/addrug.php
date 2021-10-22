<?php
    include '../header.php';
    include '../config.php';
?>

    <main class="container">
        <h2>Thêm thông tin thuốc</h2>
        <form action="process-add.php" method="post">
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">id</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Tên Thuốc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Loại thuốc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="barcode" class="col-sm-2 col-form-label">Mã vạch</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="barcode" name="barcode" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="dose" class="col-sm-2 col-form-label">Liều Lượng</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="dose" name="dose">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">Mã</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="code" name="code">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="cost_price" class="col-sm-2 col-form-label">Giá nhập</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cost_price" name="cost_price">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="selling_price" class="col-sm-2 col-form-label">Giá Bán</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="selling_price" name="selling_price" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="expiry" class="col-sm-2 col-form-label">Trạng Thái hạn sử dụng</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="expiry" name="expiry">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="company_name" class="col-sm-2 col-form-label">Công ty</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="company_name" name="company_name">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="production_date" class="col-sm-2 col-form-label">Ngày sản xuất</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="production_date" name="production_date">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="expiration_date" class="col-sm-2 col-form-label">Ngày hết hạn</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="expiration_date" name="expiration_date" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="place" class="col-sm-2 col-form-label">Nơi Sản Xuất</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="place" name="place">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="quantity" class="col-sm-2 col-form-label">Số Lượng</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="quantity" name="quantity">
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label for="add" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
    
<?php
    include '../footer.php';
?>