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
  <link href="assets/css/colors.css" rel="stylesheet" />

  <style>
	.items-collection{
		margin:20px 0 0 0;
	}
	.items-collection label.btn-default.active{
		background-color: #581e75;
    color: #ffffff;
	}
	.items-collection label.btn-default{
		width:90%;
		border:0.5px solid #305891;
		margin:5px; 
		border-radius: 17px;
		color: #305891;
	}
	.items-collection label .itemcontent{
		width:100%;
	}
	.items-collection .btn-group{
		width:90%
	}
	</style>
@endsection
@section('page-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="row">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0">Result for test {{$test->subcategory->title}}</h4>
                    </div>
                </div>
            </div> 

            @php
                $answer_number = 0;
            @endphp
            
            <div class="center justify-content-center col-lg-10">
                <div class="container">
                    <div class="row">
                        <div class="form-group">
                            <div class="items-collection col-lg-12">
                                @foreach ($answers as $answer)
                                    @php
                                        $answer_number++;
                                    @endphp
                                    <div class="card p-3">
                                        <div class="">
                                            <p><span class="badge bg-success">{{$answer_number}}</span></p>
                                            <h5>{!!$answer->question->description!!}</h5>
                                        </div>
                                        <div class="row">
                                            <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-2">
                                                <div class="info-block block-info clearfix">
                                                    <div class="btn-group bzmoduleselect">
                                                        <label class="btn btn-default @if($answer->reponse_1 == $answer->question->reponse_1) active @endif">
                                                            <div class="itemcontent">
                                                                <span>{{$answer->question->reponse_1}}</span>	
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-2">
                                                <div class="info-block block-info clearfix">
                                                    <div class="btn-group bzmoduleselect">
                                                        <label class="btn btn-default @if($answer->reponse_2 == $answer->question->reponse_2) active @endif">
                                                            <span>{{$answer->question->reponse_2}}</span>		
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="btn-group bzmoduleselect">
                                                        <label class="btn btn-default @if($answer->reponse_3 == $answer->question->reponse_3) active @endif">
                                                            <div class="itemcontent">
                                                                <span>{{$answer->question->reponse_3}}</span>	
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-4">
                                                <div class="info-block block-info clearfix">
                                                    <div class="btn-group bzmoduleselect">
                                                        <label class="btn btn-default @if($answer->reponse_4 == $answer->question->reponse_4) active @endif">
                                                            <div class="itemcontent">
                                                                <span>{{$answer->question->reponse_4}}</span>	
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js-imports')
  <!-- JAVASCRIPT -->

  <script>

    function defineDeleteRouteOfQuestion(route){
      
      var button = document.getElementById("delete-answer-button");
      button.href = route;
    }
  
  </script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <script src="assets/libs/node-waves/waves.min.js"></script>
  <script src="assets/libs/feather-icons/feather.min.js"></script>
  <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
  <script src="assets/js/plugins.js"></script>

  <script type="text/javascript" src="quiz-data/js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="quiz-data/bootstrap/js/bootstrap.min.js"></script>

  <!-- nouisliderribute js -->
  
  <script src="assets/libs/wnumb/wNumb.min.js"></script>

  <!-- gridjs js -->
  <script src="assets/libs/gridjs/gridjs.umd.js"></script>
  <script src="https://unpkg.com/gridjs/plugins/selection/dist/selection.umd.js"></script>
  <!-- ecommerce answer list -->
  

  <!-- App js -->
  <script src="assets/js/app.js"></script>
@endsection