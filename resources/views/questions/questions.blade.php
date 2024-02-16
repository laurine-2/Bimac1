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


@endsection
@section('page-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Questions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                
                                <li class="breadcrumb-item active">Questions</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                
                <!-- end col -->

               
                    <div class="col-xl-12 col-lg-12">
                     <div>
                      <div class="card">
                       <div class="card-header border-0">
                        <div class="row g-4">
                         <div class="col-sm-auto">
                          <div>
                            <a href="{{route('add-question-page')}}" class="btn primary-color" id="addquestion-btn"><i class="ri-add-line align-bottom me-1"></i> Add Question</a>
                          </div>
                         </div>
                        </div>
                       </div>
                       
                       <div class="card-body">
                        <div class="tab-content text-muted">
                         
                        <div class="tab-pane active" id="questionnav-all" role="tabpanel">
                          <div id="table-question-list-all" class="table-card gridjs-border-none">
                          <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                          <div class="gridjs-wrapper" style="height: auto;">
                              
                            <table role="grid" class="gridjs-table" style="height: auto;">
                                <thead class="gridjs-thead justify-content-between">
                                  <tr class="gridjs-tr">
                                    <th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 120px;">
                                      <div class="gridjs-th-content">
                                        Description
                                      </div>
                                    </th>

                                    <th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 150px;">
                                      <div class="gridjs-th-content">
                                        Subcategory
                                      </div>
                                    </th>
                                   
                                    <th data-column-id="price" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 80px;">
                                      <div class="gridjs-th-content">
                                        Reponse 1
                                      </div>
                                    </th>

                                   <th data-column-id="orders" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 84px;">
                                      <div class="gridjs-th-content">
                                        Reponse 2
                                      </div>
                                    </th>

                                    <th data-column-id="orders" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 84px;">
                                      <div class="gridjs-th-content">
                                        Reponse 3
                                      </div>
                                    </th>

                                    <th data-column-id="orders" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 84px;">
                                      <div class="gridjs-th-content">
                                        Reponse 4
                                      </div>
                                    </th>
                                   <th data-column-id="action" class="gridjs-th text-muted" style="width: 120px;">
                                      <div class="gridjs-th-content">
                                        Actions
                                      </div>
                                   </th>

                                  </tr>
                                </thead>
                              
                                <tbody class="gridjs-tbody">
                                  
                                  @foreach ($questions as $question)
                                  
                                  <tr class="gridjs-tr">
                                    <!--<td data-column-id="#" class="gridjs-td">
                                      <span>
                                      <div class="form-check checkbox-question-list"><input class="form-check-input" type="checkbox" value="1" id="checkbox-1"> <label class="form-check-label" for="checkbox-1"></label>
                                      </div></span></td>-->
                                    <td data-column-id="question" class="gridjs-td">
                                      <span>
                                          <h5 class="fs-14 mb-1"><a href="" class="text-dark">{!!$question->description!!}</a></h5>
                                     </span>
                                    </td>
                                    <td data-column-id="stock" class="gridjs-td">{{$question->subcategory->title}}</td> 
                                    <td data-column-id="price" class="gridjs-td"><span>{{$question->reponse_1}}</span></td>
                                    <td data-column-id="price" class="gridjs-td"><span>{{$question->reponse_2}}</span></td>
                                    <td data-column-id="price" class="gridjs-td"><span>{{$question->reponse_3}}</span></td>
                                    <td data-column-id="price" class="gridjs-td"><span>{{$question->reponse_4}}</span></td>
                                    
                                    <td class="gridjs-td" >
                                      
                                        <div class="d-flex justify-content-between">
                                         
                                            <a href="{{route('edit-question-page', ['id'=>$question->id])}}" class="btn btn-soft-info btn-sm"><i class="ri-pencil-fill align-bottom me-2"></i> Edit</a>
                                            <div class="mr-4" ></div>
                                            <button onclick="defineDeleteRouteOfQuestion('{{route('delete-question', ['id'=>$question->id])}}')"  class="btn btn-soft-danger btn-sm" class="dropdown-item remove-list" data-id="undefined" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2"></i> Delete</button>
                                        </div>
                                      
                                    </td>
                                  </tr>
                                  @endforeach
                                
                                </tbody>
                             </table>
                          </div>
                            
                          <div id="gridjs-temp" class="gridjs-temp"></div>
                          </div>
                          </div>
                         </div><!-- end tab pane -->
                         
                         
                         
                         </div><!-- end tab pane -->
                        </div><!-- end tab content -->
                       </div><!-- end card body -->
                      </div><!-- end card -->
                     </div>
                    </div>
                <!-- end col -->
            </div>
            <!-- end row -->
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
                              <a id="delete-question-button"  type="button" class="btn w-sm btn-danger " id="delete-question">Yes, Delete It!</a>
                          </div>
                      </div>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
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