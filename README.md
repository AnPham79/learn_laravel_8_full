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

bài 10: sử dụng join như inner join ,leftJoin,rightJoin
- tạo bảng user sau đó bảng post trước đó đã tạo liên kết với user thông qua khóa ngoại user_id
- Qua bên post Controller tạo 3 phương thức leftJoin, innerJoin và rightJoin
- sau đo qua route tạo điều hướng để thấy

bài 11: model
- tạo model bằng cách chạy câu lệnh php artisan make:model tên_model
- vào trong post tạo 1 protected $tabel = post sau đó qua controller post use nó
- viết phương thức get all sản phẩm

bài 12: migrations
- có 3 lệnh thường sài đó là 
+ php artisan migrate để thực thi đẩy các bảng lên cơ sở dữ liệu.
+ php artisan migrate:rollback để hoàn tác tác vụ ví dụ như bạn đẩy bảng lên thì nhấn rollback để undo lại ( đồng nghĩa với việc bạn chưa đẩy bất kì bảng nào lên csdl).
+ php artisan refresh tương ứng với việc làm trắng dữ liệu, xóa toàn bộ dữ liệu trên database

bài 13: Seeders giúp bạn tạo dữ liệu mẫu để phát triển và kiểm thử ứng dụng của mình mà không cần phải thêm dữ liệu thủ công mỗi lần.
- chạy câu lệnh php artisan make:seeder PostTableSeeder
- sau đó chạy câu lệnh php artisan db:seed để khởi chạy câu lệnh load dữ liệu mẫu
- dùng lệnh php artisan migrate:fresh --seed

bài 14: blade template
- tạo master để lưu kết nối
- sau đó qua page khác include là đc

bài 15: pagingate
- đầu tiên vào dataseeder để tạo dữ liệu mẫu trước.
- tạo controller paginate gọi đến model user::paginate(số sản phẩm trên 1 trang)
- khai báo thư viện hổ trợ paginate + với Pahinator::bootrap

bài 16: upload file
- tạo controller upload file
- sử dụng $request->file->store('public')

bài 17: Localization set đa ngôn ngữ cho trang web
- bằng cách zô lang để chỉnh sửa và ra route để chỉnh lại đường dẫn

bài 18: Facades
-Facades trong Laravel là một phần của hệ thống Service Container của Laravel và được sử dụng để cung cấp một cách tiện lợi để truy cập các dịch vụ (services) của ứng dụng mà không cần phải tạo ra các đối tượng mới hoặc sử dụng các phương thức tĩnh trực tiếp từ các lớp. Facades cung cấp một cơ chế "static-like" để truy cập vào các dịch vụ này mà không cần phải lấy chúng từ Service Container mỗi lần.
- service provider thì là đăng kí dịch vụ
- tạo PaymentGateway ở App
- trong đó tạo 2 file là Paymment và PaymentFacede
- trong payment thì thông báo thực hiện thanh toán còn trong PaymentFacede thì tạo 1 hàm extend từ facede và trả về payment
- sau đó tạo 1 provider có tên là PaymentServiceProvider để thực hiện sử lí 
- vào đó có phương thức rigister để đăng kí service $this->app gọi tới bằng singleton thực hiện tạo 1 service có tên là Payment và đảm bảo rằng chỉ có duy nhất 1 dịch vụ đó để sử dụng cho cả ứng dụng.

bài 19: page 404 not found khi truy cập page không tồn tại
- trong blade tạo 1 thư mục tên errors -> file 404.blade sau đó code page thông báo, chỉ vậy là xong
- khi nhập sai đường dẫn trên http thì sẽ thông báo ra page 404

bài 20: Send email, using gmail
- vào file env chỉnh email (email cho phép truy cập ứng dụng không an toàn)
- tạo 1 file MailController để chứa dữ liệu mail cũng như truy vấn đến thư mục Mail->TestMail để thực thi gửi mail
- nói về thư mục Mail->TestMail thì ta sẽ tạo bằng PHP artisan make:mail TestMail rồi sử lí gửi mail 
return $this->subject('Test gửi Mail từ Anh An Lão Gia')->view('email.TestMail');

bài 21: eloquent
- sẽ giống với query builder nhưng cách viết khác nhau, hiệu xuất khác nhau, lợi hại khác nhau.

bài 22: Eloquent CRUD Operation

bài 23 eloquent relation ship 1-1
- belongto cho cho bảng liển kết và hasOne cho bảng đc liên kết

bài 24 eloquent relation ship 1-n
- belongto cho cho bảng liển kết và hasMany cho bảng đc liên kết

bài 25 eloquent relation ship n-n
- roles()->attach() để hiện mối mang hệ nhiều nhìu.

bài 26: Export Data in Excel and CSV
- chạy lệnh composer require maatwebsite/excel để tải package
- vào app ở config -> chỗ provider -> \Maatwebsite\Excel\ExcelServiceProvider::class,
- chỗ aliases -> 'Excel' => \Maatwebsite\Excel\Facades\Excel::class,
- để đăng kí dịch vụ này thì chạy lệnh: 
- chạy lệnh php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
- nếu bị lỗi thì do phiên bản của mình đã bị củ quá không tương thích với PHP, để sửa lỗi này hãy vào composer.json sửa
"require": {
        "php": "^7.3|^8.0",
        "fruitcake/laravel-cors": "^2.0",
        "guzzlehttp/guzzle": "^7.0.1",
        "laravel/framework": "^8.75",
        "laravel/sanctum": "^2.11",
        "laravel/tinker": "^2.5",
        "maatwebsite/excel": "^3.1.x-dev"
    },

3.1x là phiên bản tương thích với laravel 7 hoặc 8 
- rồi chạy lệnh composer update để cập nhật trong composer.json
- nếu mà nó vẫn k hiểu thì vào ;extension=zip của php.init có biểu tượng bánh răng của php rồi xóa đi dấu chấm phẩy phía trước là được
- tạo lớp xuất file chạy lệnh php artisan make:export EmployeeExport --model=App\Models\employee
- vào emoloyee controller use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Excel;
use 2 file này
- public function exportIntoExcel(Excel $excel) {
        return $excel->download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function exportIntoCSV(Excel $excel) {
        return $excel->download(new EmployeeExport, 'employeelist.csv');
    }
- viết 2 phương thức xuất file

- viết model để trấn xuất lấy dữ liệu 
public static function getEmployee() {
        $records =  DB::table('employees')->select('id', 'name', 'email', 'phone', 'department')->get()->toArray();

        <!-- return $records; -->
    }

bài 27 : Export Data in PDF
- cài gói package pdf composer require barryvdh/laravel-dompdf

bài 28: Import Data From Excel and CSV
- đàu tiên thì vẫn phải cài pagkage của CSV và Excel
- tiếp theo vào app config đăng kí providers excel CSV thêm aliases
- provider MaatWebsite\Excel\ExcelServiceProvider
- 'Excel' => /'MaatWebsite/Excel/Facedes/Excel::class'
- php artisan make:import EmployeeImport --model=Employee

bài 28: Resize Image
- đầu tiên cài đặt gói pagkage composer require intervention/image
- vào app đăng kí dịch vụ ở provider 
- php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel"
- vào controller tạo 1 đường dẫn dẫn tới file
- function resizeImage(Request $request) {
    $image = $request->file;
    $fileName = $image ->getClientOriginalName();
    $image_resized = Image::make($image->getRealPath());
    $image_resized->resize(300, 300);
    $image_resized->save(public_path('images/'.$fileName));
}

bài 29: Dropzone image
- kéo thả image vào vùng chỉ định
- chủ yếu là tạo form dropzone bằng html css bootrap

bài 30: Lazy image
- anh load ra từ từ phù hợp với mắt người nhìn thây vì load hết

bài 31: TinyMCE WYSIWYG HTML Editor
CK eidttor

bài 32 : CRUD với hình ảnh 
- CRUD bình thường nhưng mà xóa thì 
- unlink(public_path('images).'/'.$student->avatar)
-student->delete

bài 33: toaStr
 <!-- - <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->
 <!-- - <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
 - npm install toastr
 - import toastr from 'toastr';
 - toastr.success("{!! session()->get('record') !!}");

bài 34 :sweet Alert
- tải cái này npm install sweetalert2
- nhúng cái này<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<!-- - <script>
        $(document).ready(function() {
            // Gọi hàm toastr.success() khi có session 'record'
            toastr.success("{!! session()->get('record') !!}");

            // Gọi hàm swal.fire() khi có session 'record'
            Swal.fire({
                icon: 'success',
                title: 'nai sư sa su ke',
                text: "{!! session()->get('record') !!}",
                confirmButtonText: 'sục séc'
            });
        });
    </script> -->

bài 35: Contact Form
- gửi mail

bài 36: data table
- composer require yajra/laravel-datatables

- popuo hiện lên thông báo:
- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                $('#success-payment').submit(function(event) {
                    event.preventDefault(); // Ngăn chặn gửi form mặc định
                    Swal.fire({
                        icon: 'warning',
                        title: 'Xác nhận thanh toán',
                        text: 'Bạn có chắc chắn muốn thanh toán không?',
                        showCancelButton: true,
                        confirmButtonText: 'Xác nhận',
                        cancelButtonText: 'Hủy bỏ'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Đoạn mã xử lý khi người dùng xác nhận thanh toán ở đây
                            $('#success-payment')[0].submit(); // Gửi form
                        }
                    });
                });
            });
        </script>



