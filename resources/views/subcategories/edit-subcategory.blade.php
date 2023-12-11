@extends('template.template')

@section('styles-imports')
    <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <style>
        .subcategory-img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
    </style>
@endsection

@section('page-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Subcategory</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Edit Subcategory</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form id="creatproduct-form" method="post" action="{{route('edit-subcategory')}}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="row">
                

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Title</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                   
                                    <input name="title" value="{{$subcategory->title}}" required type="text" class="form-control" id="product-title-input" value="" placeholder="Enter title" required>
                                    <div class="invalid-feedback">Please Enter a subcategory title.</div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Description</h4>
                                            </div><!-- end card header -->
            
                                            <div class="card-body">
                                                <div id="ql-editor" class="snow-editor ql-container ql-snow" style="height: 300px;">
                                                    {!!$subcategory->description!!}
                                                </div>
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
    
                                <div class="card d-none">
                                    <input rows="10" value="{{$subcategory->description}}"  class="form-control" id="description" name="description">
                                    <input name="id" value="{{$subcategory->id}}">
                                </div>
                                
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Submit</button>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </form>

        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js-imports')
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.4.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script type="text/javascript" src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script type="text/javascript" src="assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- ckeditor -->
<script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<script src="assets/libs/quill/quill.min.js"></script>
<script src="assets/js/pages/form-editor.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

<script>
    function changePhoto(){
        var input =  document.getElementById("product-image-input");
        
        var fReader = new FileReader();
        fReader.readAsDataURL(input.files[0]);
        fReader.onloadend = function(event){
            var img = document.getElementById("product-img");
            img.src = event.target.result;
        }
    } 

    $('#ql-editor').on('DOMSubtreeModified', function(){
        var myEditor = document.querySelector('#ql-editor');
        var html = myEditor.children[0].innerHTML;

        var textArea = document.querySelector('#description');
        textArea.value = html;
    });

</script>
@endsection