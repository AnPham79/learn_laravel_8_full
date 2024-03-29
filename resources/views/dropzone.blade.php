<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropzone Example</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" rel="stylesheet">
</head>
<body>
    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Dropzone file upload
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dropzoneStore') }}" method="POST" enctype="multipart/form-data" class="dropzone" id="image-upload">
                                @csrf
                                <div class="dz-message" data-dz-message>
                                    <span>Drop file here to upload</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
</body>
</html>
