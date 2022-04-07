@extends('Admin.layouts.masterDataTables')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pending Approvals</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dash')}}">Home</a></li>
              <li class="breadcrumb-item active">Pending Approvals</li>
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
                @if(Session::has('success'))
                <span class="alert alert-success py-2">{{ Session::get('success') }}</span>
                @endif
                @if(Session::has('danger'))
                <span class="alert alert-danger py-2">{{ Session::get('danger') }}</span>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th>Post</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Change</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($comments as $key=>$list)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$list->blogs->title}}</td>
                    <td>{{$list->name}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->comment}}</td>
                    <td>{{$list->status}}</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('admin/approval/status/')}}/{{$list->id}}" class="btn btn-success"><i class="fas fa-check"></i></a>
                        <a href="{{url('admin/approval/delete/')}}/{{$list->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr No.</th>
                    <th>Post</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Change</th>
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