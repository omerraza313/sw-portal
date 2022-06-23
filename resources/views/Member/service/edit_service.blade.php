<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Sharina World | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend_assets/dist/css/adminlte.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/codemirror/codemirror.css')}}">
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/codemirror/theme/monokai.css')}}">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/simplemde/simplemde.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
   <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('backend_assets/dist/img/sw-logo.png')}}" alt="sw-logo" height="60" width="60">
         <p style="color: #edc878; margin-top: 10px; padding: 5px 8px 5px 8px; background-color: black; border-radius: 5px 5px 5px 5px">Sharina World Community Platform</p>
      </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">How it Works?</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{asset('backend_assets/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Sam
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">A-One Home Cleaning Service is verified</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{asset('backend_assets/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Doe
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Shine Star Car Wash Service is a scam</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">12</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">12 Notifications</span>
            
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users "></i> 8 new business registered
              
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new top deal created
             
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend_assets/dist/img/sw-logo.png')}}" alt="sw-logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white">Sharina World</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend_assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">John Doe</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search Here" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="{{route('member.dashboard')}}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Service
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('member.service')}}" class="nav-link">
                    <i class="fas fa-stream nav-icon"></i>
                    <p>Service Listing</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('member.service.add')}}" class="nav-link">
                    <i class="fas fa-plus-square nav-icon"></i>
                    <p>Add Service</p>
                  </a>
                </li>
              </ul>
            </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-eye"></i>
                  <p>
                    Statistics
                  </p>
                </a>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Service</a></li>
              <li class="breadcrumb-item active">Edit Service</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Service</h3>
              </div>
              <!-- /.card-header -->
               <!-- form start -->
            <form method="POST" action="{{route('member.service.update')}}" enctype="multipart/form-data">
              @csrf
              <input type="text" name="id" value="{{$service->id}}" hidden="">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="category-name" placeholder="Service Title" value="{{$service->title}}">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select Category</label>
                          <select class="form-control" id="selectcat" name="category_id">
                            <option value="{{$service->category_id}}">{{$service->category->name}}</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select Sub Category</label>
                          <select class="form-control" id="subcat" name="sub_category_id">
                            <option value="{{$service->sub_category_id}}">{{$service->subcategory->name}}</option>
                            @foreach($sub_categories as $sub_cat)
                               <option value="{{$sub_cat->id}}">
                                {{$sub_cat->name}}
                               </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>


@if($service->id>0)
{{$image_required=""}}
@else
{{$image_required="required"}}
@endif

                    <div class="row">
                      <div class="col-md-6">
                        <h6 style="font-weight: bolder;">Image</h6>
                        <label for="primary_image"><i class="fa fa-plus" style="font-size: 24px; border:2px solid #9b9797bf; padding: 25px; border-radius: 2px; color:#9b9797bf; cursor: pointer;"></i></label>
                        <input type="file" name="featured_img" id="primary_image" style="display: none; visibility: none;" onchange="getImage(this.value);" {{$image_required}}>

                        <!----Display Image Name----->
                        <div id="display_image"></div>
                        <!----End Display Image------>
                      </div>
                      <div class="col-md-6"></div>
                     
                    </div>
                    
                    <div class="form-group">
                       <label for="service-description">Service Description</label>
                        <textarea id="summernote" name="service_desc">
                     
                        </textarea>
                    </div>
                     <div class="container-fluid" id="working_day_box">
                      @php
                       $loop_count_num=1;     
                      @endphp
                       
                      @foreach($working_days as $key=>$val)

                     <!--  $wdArr = (array)$val; -->

                      <input type="hidden" name="working_day_id[]" value="{{$val['id']}}">
                      <div class="row" id="working_day_{{$loop_count_num++}}">

                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Working Day</label>
                              <select class="form-control" name="service_day[]">
                                @if($val['day'])
                                <option value="{{$val['day']}}" selected="">
                                  {{$val['day']}}
                                </option>
                                @endif
                                <option value="">Select Day</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Hours From</label>
                              <select class="form-control" name="hour_from[]">
                                 @if($val['opening_at'])
                                <option value="{{$val['opening_at']}}" selected="">
                                  {{$val['opening_at']}}
                                </option>
                                @endif
                                <option value="">Select Time</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Hours To</label>
                              <select class="form-control" name="hour_to[]">
                                @if($val['closing_at'])
                                <option value="{{$val['closing_at']}}" selected="">
                                  {{$val['closing_at']}}
                                </option>
                                @endif
                                <option value="">Select Time</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <br>
                              @if($loop_count_num==2)
                                <button type="button" class="btn btn-success btn-lg" onclick="add_more()">
                                  <i class="fa fa-plus"></i>
                                </button>
                              @else

                                <a href="{{url('admin/service/working_day/delete/')}}/{{$val['id']}}/{{$service->id}}">
                                  <button type="button" class="btn btn-danger btn-lg">
                                     <i class="fa fa-minus"></i>
                                  </button>
                                </a>
                              @endif
                            </div>
                          </div>
                      </div>
                      @endforeach
                    </div>

                </div>
                        <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">
                      Update
                    </button>
                </div>
            </form>
        </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

      <!---------Main Content Ends------------>  
    
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <strong>Copyright &copy; <a href="#">Sharina World</a>.</strong>
    All rights reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend_assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->
<!-- Bootstrap 4 -->
<script src="{{ asset('backend_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend_assets/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('backend_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{ asset('backend_assets/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{ asset('backend_assets/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{ asset('backend_assets/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{ asset('backend_assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend_assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->



<script>

 

  $('#summernote').summernote('code', `{!! $service->description !!}` );


</script>
<script type="text/javascript">


    $(document).ready(function(){
    


        $('#selectcat').change(function() {
        $('#subcat').html('<option disabled selected>=== Select Category ===</option>')
      
  
      let dist = {!! json_encode($sub_categories->toArray(), JSON_HEX_TAG) !!};
      
      
      jQuery.each(dist, function(value, key) {

        if(key.category_id == $('#selectcat').children("option:selected").val()) {
       
          $('#subcat').append('<option value='+key.id+'>'+key.name+'</option>');
        }
      });
    });
  });

</script>
<script>
  var loop_count=1;
  function add_more(){
    loop_count++;

    
    var html = '<input type="hidden" name="working_day_id[]"><div class="row" id="working_day_'+loop_count+'">';
   
    html+='<div class="col-md-3"><div class="form-group"><label>Working Day</label><select class="form-control" name="service_day[]"><option value="">Select Day</option><option value="monday">Monday</option><option value="tuesday">Tuesday</option><option value="wednesday">Wednesday</option><option value="thursday">Thursday</option><option value="friday">Friday</option><option value="saturday">Saturday</option><option value="Sunday">Sunday</option></select></div></div>';

    html+='<div class="col-md-3"><div class="form-group"><label>Hours From</label><select class="form-control" name="hour_from[]"><option value="">Select Time</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option></select></div></div>';

    html+='<div class="col-md-3"><div class="form-group"><label>Hours To</label><select class="form-control" name="hour_to[]"><option value="">Select Time</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option></select></div></div>';

    html+=' <div class="col-md-3"><div class="form-group"><br><button class="btn btn-danger mt-2" type="button" onclick=remove_more("'+loop_count+'")><i class="fa fa-minus"></i></button></div></div>';

    html+='</div>';

    jQuery('#working_day_box').append(html);
    
  }

  function remove_more(loop_count){
    --loop_count;
      console.log("remove more" + loop_count);
      jQuery('#working_day_'+loop_count).remove();

    }
</script>
<script type="text/javascript">
  function getImage(imagename)
  {
    var newimg=imagename.replace(/^.*\\/, "");
    $('#display_image').html(newimg);
  }
</script>
</body>
</html>
