<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/thanhtoan.css">
    <title>VNPT Hải Phòng | Website chính thức</title>
</head>
<body>
    <header>
        <?php include('form-header.php') ?>
    </header>
    <content>
        <div class="main">
            <div class="top">
                <p class="bold" id="top-heading">TRA CỨU THÔNG TIN</p>
                <div class="seach">
                    <p>Mã khách hàng</p>
                    <input type="text" class="input-content" value="theanh123">
                    <button class="tim-kiem" name="tim-kiem" onclick="hienThiBang()">Tra cứu</button>
                </div>
                <table name="bang-du-lieu" id="bang-du-lieu" style="display:none;">
                    <tr>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Dịch vụ sử dụng</th>
                        <th>Thời hạn sử dụng</th>
                        <th>Trạng thái</th>
                        <th>Ghi chú</th>
                    </tr>
                    <tr>
                        <td>Nguyen The Anh</td>
                        <td>0867520157</td>
                        <td>HOME NET 3</td>
                        <td>02.04.2024 - 02.05.2024</td>
                        <td>Đang sử dụng</td>
                        <td>Chuyển đổi dịch vụ từ HOME NET 2 sang HOME NET 3</td>
                    </tr>
                    <tr>
                        <td>Nguyen The Anh</td>
                        <td>0867520157</td>
                        <td>HOME NET 2</td>
                        <td>01.04.2023 - 01.04.2024</td>
                        <td>Đã hết hạn</td>
                        <td>Không</tr>
                    </tr>
                    
                </table>
                <script src="./JavaScript/thanhtoan.js"></script>
            </div>
            <div class="bottom">
                <p class="bold" id="top-heading">Chính sách - Điều khoản</p>
                <br>
                <div class="hang">
                    <div class="cot">
                        <a href="">
                            <img src="./images/chinhsach-left1.JPG" alt="">
                            <p class="bold">Chính sách bảo vệ dữ liệu cá nhân của khách hàng <br>- Viễn thông Hải Phòng</p>
                        </a>
                    </div>
                    <div class="cot">
                        <a href="">
                            <img src="./images/chinhsach-left2.JPG" alt="">
                            <p class="bold">Chính sách thanh toán</p>
                        </a>
                    </div>
                </div>
                <!-- het hang 1 -->
                <div class="hang" id="sau">
                    <div class="cot">
                        <a href="">
                            <img src="./images/chinhsach-left3.JPG" alt="">
                            <p class="bold">Điều khoản sử dụng</p>
                        </a>
                    </div>
                    <div class="cot">
                        <a href="">
                            <img src="./images/chinhsach-left4.JPG" alt="">
                            <p class="bold">QUY TRÌNH GIAO KẾT HỢP ĐỒNG</p>
                        </a>
                    </div>
                </div>
                <!-- het hang 2 -->

            </div>
        </div>
    </content>
    <footer>
        <?php include('form-footer.php') ?>
    </footer>
</body>
</html>