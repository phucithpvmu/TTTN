<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>VNPT Hải Phòng | Website chính thức</title>
</head>
<body>
    <header>
        <?php include('./form-header.php'); ?>
    </header>
    <content>
        <div class="quang-cao-1">
            <img src="./images/quang-cao-1.png" alt="" class="img-quang-cao-1">
        </div>
        <div class="san-pham-hot"> <br> <br>
            <p class="p-san-pham-hot">CÁC SẢN PHẨM HOT HIỆN NAY</p>
            <div class="sph-chi-tiet">
                <div class="sph">
                    <p class="bold">Home Vip 1</p>
                    <img src="./images/home-vip-1.JPG" alt="">
                    <ul>
                        <li>Internet <span class="bold">200Mbps</span> + Truyển hình <span class="bold">180 kênh</span> + <span class="bold">60GB</span> data 3G/4G</li>
                        <li>Miễn phí Modem Wifi</li>
                        <li>Giá niêm yết: <span class="red">279.000</span> đồng/tháng</li>
                    </ul>
                    <button class="btn-xem-chi-tiet">Xem chi tiết</button>
                </div>
                <div class="sph">
                    <p class="bold">Home Vip 2</p>
                    <img src="./images/home-vip-2.JPG" alt="">
                    <ul>
                        <li>Internet <span class="bold">300Mbps</span> + Truyển hình <span class="bold">180 kênh</span> + <span class="bold">60GB</span> data 3G/4G</li>
                        <li>Miễn phí Modem Wifi</li>
                        <li>Giá niêm yết: <span class="red">339.000</span> đồng/tháng</li>
                    </ul>
                    <button class="btn-xem-chi-tiet">Xem chi tiết</button>
                </div>
                <div class="sph">
                    <p class="bold">Home Plus</p>
                    <img src="./images/home-vip-3.JPG" alt="">
                    <ul>
                        <li>Internet <span class="bold">150Mbps</span> + Truyển hình <span class="bold">180 kênh</span> + <span class="bold">5GB/ngày</span> data 3G/4G</li>
                        <li>Miễn phí Modem Wifi</li>
                        <li>Giá niêm yết: <span class="red">224.000</span> đồng/tháng</li>
                    </ul>
                    <button class="btn-xem-chi-tiet">Xem chi tiết</button>
                </div>
            </div>
        </div>
        <div class="tin-tuc-khuyen-mai">
            <p class="p-ttkm">TIN TỨC - KHUYẾN MẠI</p>
            <div class="khuyen-mai-chi-tiet">
                <div class="tt-km">
                    <a href="">
                        <img src="./images/tin-tuc-1.JPG" alt="">
                        <p class="bold">CHƯƠNG TRÌNH CHĂM SÓC KHÁCH HÀNG DỊCH VỤ VIỄN THÔNG</p>
                        <br> <p class="black">Khách hàng đang sử dụng một trong những gói Internet Vip khi đăng ký gói cước chu kỳ 12 tháng sẽ nhận ngay voucher mua xăng dầu ...</p>
                    </a>
                </div>
                <div class="tt-km">
                    <a href="">
                        <img src="./images/tin-tuc-2.JPG" alt="">
                        <p class="bold">TTKD VNPT HẢI PHÒNG TỔ CHỨC TẬP HUẤN CHƯƠNG TRÌNH THÚC ĐẨY BÁN HÀNG TRÊN KÊNH VNPOST</p>
                        <p class="black">Sáng nay 15.3.2024, Trung tâm Kinh doanh VNPT Hải phòng và Bưu điện Hải Phòng đã tổ chức buổi Tập huấn ...</p>
                    </a>
                </div>
                <div class="tt-km">
                    <a href="">
                        <img src="./images/tin-tuc-3.JPG" alt="">
                        <p class="bold">VNPT HẢI PHÒNG TUYỂN DỤNG NHÂN VIÊN KINH DOANH VÀ CHĂM SÓC KHÁCH HÀNG</p>
                        <br><p class="black">VNPT Hải Phòng hiện đang tuyển dụng 10 nhân viên kinh doanh và 5 nhân viên chăm sóc khách hàng ...</p>
                    </a>
                </div>
            </div>
        </div>
    </content>
    <footer>
    <?php include('./form-footer.php'); ?>
    </footer>
</body>
</html>