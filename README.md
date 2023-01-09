# Tiêu đề dự án : Quản lý cửa hàng mỹ phẩm GUIMI

## Mô tả : Thêm xoá sửa sản phẩm, danh mục, dung tích, số lượng, đơn đặt hàng, đăng ký, đăng nhập bằng PHP và trang mua hàng, chi tiết sản phẩm, thanh toán, xem các sản phẩm liên quan, trang chủ, xem tất cả sản phẩm của cửa hàng.

### Yêu cầu : tải phần mềm Xampp 7.4.20 trên link "https://www.apachefriends.org/download.html" để có thể chạy được CSDL MYPHPADMIN
tải Fontawesome bản 6.1.1. Đặc biệt yêu cầu phải có wifi để có thể thấy được hết toàn bộ nội dung.

#### Cách sử dụng dự án
_ Về phần cơ sở dữ liệu :
+Mở xampp lên chỗ Apache và Mysql chọn Start để mở lên nếu không hiện màu xanh lá thì đã bị chiếm cổng vào Config để đổi cổng lại (nếu vẫn chưa biết cách sử dụng có thể lên Youtube hoặc Google tìm hiểu cách chạy).

+Sau đó mở trình duyệt Chrome lên và gõ "localhost:81/phpmyadmin" chỗ 80 đó là phụ thuộc vào số mà bạn đặt lại trong Config ở Apache. Khi truy cập vào, sẽ xuất hiện ra phần "Login" thì nhập vào Username : " root" và Password để trống đẻ có thể vào bên trong.Sau khi vào phpMyAdmin bạn chọn mới gõ vào tên cơ sở dữ liệu là "swiss_collection.sql" và chọn kiểu chữ là "utf8_unicode_ci" bấm "Tạo".
+Sau đó trong trang server MySQL ấn vào chữ "Import" kế bên "Export", nó hiện ra trang "Import" bạn chỉ cần click vào chữ "Choose file" rồi chọn file có tên là "swiss_collection.sql" trong thư mục "admin" chọn thư mục "admin_panel" rồi chọn thư mục "DB" sau đó bấm chọn vào file "swiss_collection.sql" và kéo xuống ấn "GO" là bạn có thể xem cơ sở dữ liệu ấy có gì.

- Về phần WEb: 

+ Việc đầu tiên hãy đưa folder có tên "mypham" vào folder "htdocs" của folder"xampp" (chỉ có XAMPP mới có folder "htdocs") để có thể chạy chương trình

+ Quay lại trang PHPMYADMIN hồi nãy với đường dẫn là "localhost:81/phpmyadmin" chọn "Import" và "Choose file" trong thư mục mỹ phẩm chọn file có tên là "db_user.sql" ấn "GO" rồi mở một tab mới và nhập "localhost:81/mypham" và enter để truy cập vào trang web tại đây gồm trang chủ, các sản phẩm, các danh mục, trang mua hàng, thanh toán, đăng nhập,đăng ký,các sản phẩm liên quan. Lưu ý là phần này phải có wifi để xem các hiệu ứng đẹp.

+ Sau khi khám phá hết các tính năng trên trang web thì nhập tiếp vào "localhost:81/mypham/admin" sẽ hiện lên form Login. Nhập vào Username : "admin@gmail.com" và password : "123" để vào trang dành cho admin. Ngoài ra, nếu muốn tạo tài khoản khác thì bấm vào chữ Signup ở phía dưới để tạo tài khoản mới

+ Khi vào trong trang admin có thể thêm xoá sửa sản phẩm, danh mục, dung tích, số lượng, đơn đặt hàng, đăng ký, đăng nhập bằng PHP.

##### Link github : "https://github.com/phuongkhanh789/mypham1"
