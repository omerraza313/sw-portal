@extends('Admin.layouts.master')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Service Package</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Service</a></li>
              <li class="breadcrumb-item active">Package</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <a href="{{url('admin/service/package/add/')}}/{{$id}}" class="btn btn-info">Add Package</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			        <div class="row">
			        	@foreach($package as $key=>$val)
			          <div class="col-md-4">
			            <!-- Widget: user widget style 2 -->
			            <div class="card card-widget widget-user-2">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header bg-warning">
			                
			                <!-- /.widget-user-image -->
			                <h3 class="widget-user-username">Package# {{++$key}}</h3>
			                <h5 class="widget-user-desc">{{$val->package_type}}</h5>
			              </div>
			              <div class="card-footer p-0">
			                <ul class="nav flex-column">

			                	@foreach($val->package_attrs as $key=>$list)
			               
			                  <li class="nav-item p-2">
			                    
			                     <span class="heading-6"> {{$list->plan_name}}</span> <span class="float-right bg-primary rounded p-1">$ {{$list->price}}</span>
			                   
			                  </li>
			               
			                  @endforeach
			                  <li class="nav-item p-2">
			                    <div class="btn-group btn-group-md  float-left">
			                        <a href="{{url('admin/service/package/delete')}}/{{$val->id}}/{{$id}}" class="btn btn-danger"><!-- <i class="fas fa-minus"></i> -->Delete</a>
			                    </div>
			                    <div class="btn-group btn-group-md  float-right">
			                        <a href="{{url('admin/service/package/edit/')}}/{{$val->id}}" class="btn btn-info"><!-- <i class="fas fa-pen-square"></i> -->Edit</a>
			                    </div>

			                  </li>
			                  
			                </ul>
			              </div>
			            </div>
			            <!-- /.widget-user -->
			          </div>
			          @endforeach
			        </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection