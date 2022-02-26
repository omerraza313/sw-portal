@extends('Member.layouts.masterDataTables')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Service Listing</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service Listing</li>
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
                <h3 class="card-title">
                  <a href="{{route('admin.service.add')}}" class="btn btn-primary">Add Service</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr #</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Category / Sub Category</th>
                    <th>Packages</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($service as $key=>$list)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$list->user_id}}</td>
                    <td>{{$list->title}}</td>
                    <td>{{$list->category->name}} / {{$list->subcategory->name}}</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('admin/service/package/add/')}}/{{$list->id}}" class="btn btn-success"><i class="fas fa-plus"></i></a>
                        <a href="{{url('admin/service/package/')}}/{{$list->id}}" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('admin/service/edit/')}}/{{$list->id}}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                        <a href="{{url('admin/service/delete/')}}/{{$list->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="{{url('/user_name/')}}/{{$list->slug}}" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                   <tr>
                    <th>Sr #</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Category / Sub Category</th>
                    <th>Packages</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
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