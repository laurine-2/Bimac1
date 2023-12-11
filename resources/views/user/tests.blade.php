@extends('template.template')

@section('styles-imports')
  <!-- nouisliderribute css -->
  <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">

  <!-- gridjs css -->
  <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

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
@endsection
@section('page-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">My tests</h4>

                    </div>
                </div>
            </div>  

            <div class="row mt-4">
              @foreach ($tests as $test)
                  <div class="col-xl-3 col-lg-6">
                    <div class="card ribbon-box right overflow-hidden">
                        <div class="card-body text-center p-4">
                            <div class="ribbon ribbon-info ribbon-shape trending-ribbon"><i class="ri-flashlight-fill text-white align-bottom"></i> <span class="trending-ribbon-text">Test {{$test->subcategory->title}}</span></div>
                            <h5 class="mb-1 mt-4"><a href="apps-ecommerce-seller-details.html" class="link-primary">{{$test->created_at}}</a></h5>
                            <p class="text-muted mb-4">Subcategory : {{$test->subcategory->title}}</p>
                            <div class="mt-4">
                                <a href="{{route('my-answers',['test_id'=>$test->id])}}" class="btn btn-light w-100">Voir les réponses</a>
                            </div>
                        </div>
                    </div>
                  </div>
              @endforeach
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js-imports')
  <!-- JAVASCRIPT -->

  <script>

    function defineDeleteRouteOfQuestion(route){
      
      var button = document.getElementById("delete-question-button");
      button.href = route;
    }
  
  </script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <script src="assets/libs/node-waves/waves.min.js"></script>
  <script src="assets/libs/feather-icons/feather.min.js"></script>
  <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
  <script src="assets/js/plugins.js"></script>

  <!-- nouisliderribute js -->
  
  <script src="assets/libs/wnumb/wNumb.min.js"></script>

  <!-- gridjs js -->
  <script src="assets/libs/gridjs/gridjs.umd.js"></script>
  <script src="https://unpkg.com/gridjs/plugins/selection/dist/selection.umd.js"></script>
  <!-- ecommerce question list -->
  

  <!-- App js -->
  <script src="assets/js/app.js"></script>
@endsection