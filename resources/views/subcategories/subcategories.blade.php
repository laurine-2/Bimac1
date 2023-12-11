@extends('template.template')

@section('styles-imports')
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
        .bloc img {
            width: 100%;
            height: 250px;
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
                        <h4 class="mb-sm-0">SUBCATEGORIES</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div>
              <a href="{{route('add-subcategory-page')}}" class="btn btn-success" id="addquestion-btn"><i class="ri-add-line align-bottom me-1"></i> Add subcategory</a>
            </div>

            <div class="row mt-5">
                @foreach ($subcategories as $subcategory)
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-1">{{$subcategory->title}}</h5>
                                <p class="card-text mb-3">{!!$subcategory->description!!}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between"> 
                              <a  href="{{route('edit-subcategory-page', ['id'=>$subcategory->id])}}"  class="btn btn-soft-success btn-sm">View</a>
                                <a  href="{{route('edit-subcategory-page', ['id'=>$subcategory->id])}}"  class="btn btn-soft-info btn-sm">Edit</a>
                                <button onclick="defineDeleteRoute('{{route('delete-subcategory', ['id'=>$subcategory->id])}}')"  class="btn btn-soft-danger btn-sm" class="dropdown-item remove-list" data-id="undefined" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2"></i> Delete</button>
                            </div>
                        
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <a id="delete-subcategory-button"  type="button" class="btn w-sm btn-danger " id="delete-service">Yes, Delete It!</a>
                            </div>
                        </div>
        
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div id="removeItemModal2" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <div class="mt-4 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to validate this subcategory ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <a id="validate-subcategory-button"  type="button" class="btn w-sm btn-success " id="delete-service">Yes, Validate It!</a>
                            </div>
                        </div>
        
                    </div><!-- /.modal-content -->
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js-imports')

    <script>

        function defineDeleteRoute(route){
        
            var button = document.getElementById("delete-subcategory-button");
            button.href = route;
        }

        function defineValidateRoute(route){
        
        var button = document.getElementById("validate-subcategory-button");
        button.href = route;
        }
    
    </script>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <!-- Masonry plugin -->
    <script src="assets/libs/masonry-layout/masonry.pkgd.min.js"></script>

    <script src="assets/js/pages/card.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection