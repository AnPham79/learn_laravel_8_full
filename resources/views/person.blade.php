<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                @if(session()->has('record'))
                    {{ session()->get('record') }}
                @endif
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add new person
                        </div>
                        <div class="card-body">
                            <form action="{{ route('storePerson') }}" method="post" enctype="multipart/form-data" onchange="previewImg(this)">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Tên người</label>
                                    <input type="text" name="name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="file">Chọn ảnh đại diện</label>
                                    <input type="file" name="avatar" class="form-control">
                                    <img id="previewImg" src="" alt="profile image" style="max-width: 130px; margin-top: 20px;">
                                </div>

                                <button class="btn btn-primary" type="submit">Xác nhận</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function previewImg(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#previewImg').attr('src', reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
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
    </script>
</body>
</html>
