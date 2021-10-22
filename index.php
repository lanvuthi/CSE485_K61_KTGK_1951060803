<?php
    include 'header.php';
?>
    <main>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên Thuốc</th>
            <th scope="col">Loại Thuốc</th>
            <th scope="col">Mã Vạch</th>
            <th scope="col">Liều Lượng</th>
            <th scope="col">Mã</th>
            <th scope="col">Giá Nhập</th>
            <th scope="col">Giá Bán</th>
            <th scope="col">Trạng thái hạn sử dụng</th>
            <th scope="col">Công ty</th>
            <th scope="col">Ngày Sản Xuất</th>
            <th scope="col">Ngày hết hạn</th>
            <th scope="col">Nơi sản xuất</th>
            <th scope="col">Số Lượng</th>
            </tr>
        </thead>
        <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT id, name, type, barcode, dose, code, cost_price, selling_price,
                    expiry, company_name, production_date, expiration_date, place, quantity FROM drugs";
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['type'].'</td>';
                            echo '<td>'.$row['barcode'].'</td>';
                            echo '<td>'.$row['dose'].'</td>';
                            echo '<td>'.$row['code'].'</td>';
                            echo '<td>'.$row['cost_price'].'</td>';
                            echo '<td>'.$row['selling_price'].'</td>';
                            echo '<td>'.$row['expiry'].'</td>';
                            echo '<td>'.$row['company_name'].'</td>';
                            echo '<td>'.$row['production_date'].'</td>';
                            echo '<td>'.$row['expiration_date'].'</td>';
                            echo '<td>'.$row['place'].'</td>';
                            echo '<td>'.$row['quantity'].'</td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
    
<?php
    include 'footer.php';
?>
