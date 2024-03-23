<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

link khóa học: https://www.youtube.com/playlist?list=PLz_YkiqIHesvWMGfavV8JFDQRJycfHUvD;

bài 1: tôi bắt đầu học về blade tại đó sử dụng php artisan make component Header ( x-header để hiển thị thông tin);
php artisan make:component header

-   đầu tiên code sẽ vào component Header ở app sau đó code truyền tới component header ở resource rồi sau đó trả về welcome

bài 2: học http client (CRUD với http : sử dụng json để lấy api mẫu sau đó thực hiện CRUD) (productController)

bài 3 Fluent Strings: cung cấp 1 loạt các hàm làm việc với chuổi như upper trim lower, slug , title replace ... (FluentController)

bài 4: Stub Customization

-   "stub" thường là các file template được sử dụng để tạo các thành phần mới của ứng dụng.

bài 5: HTTP Requests and Html Form : áp dụng chó form method action ... (Login controller)

bài 6: Form Validation thực hiện ngay validate ở loginController chứ k cần tạo Requests

bài 7: Middleware

-   Middleware checkLoginMiddleware được sử dụng để kiểm tra trạng thái đăng nhập của người dùng trước khi họ truy cập vào route được bảo vệ.

tạo file middleware để kiểm tra bằng cách php artisan make:middleware CheckLoginMiddleware

-   sau đó vào thư mục middleware rồi vào file vừa tạo, code logic để sử lí
-   vào kernel để thêm name space của middleware vừa tạo.
-   vào route -> web để chọn chỗ muốn kiểm tra.

bài 8 : Http Session
- tạo SessionController
- có phương thức getSessionData : kiểm tra xem có dữ liệu nào trong session không nếu không có thì thông báp, có thì in ra dữ liệu
- phương thức setSessionData : thêm dữ liệu đã được định nghĩa sẵn.
- phương thứ removedSessionData : xóa dữ liệu đã được thêm.
- vào route tạo các Route để điều hướng đến các phương thức ở trong SessionControllers.

bài 9 : Start with Database
- vào file env để kết nối database : learnlaravel8india
- lên db tạo bảng posts với 3 cột id title body
- sử dụng query builder để kết nối DB::table
- trả dữ liệu về page post

bài 9 : Database Query Builder and CRUD Operation
- sử dụng query builder để hoạt động CRUD
- thao tác bên PostControllers