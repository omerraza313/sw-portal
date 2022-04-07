@extends('Admin.layouts.masterDataTables')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dash')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">User</li>
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
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Role</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $key=>$list)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$list->f_name}} {{$list->l_name}}</td>
                    <td>{{$list->username}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->account_type}}</td>
                    <td>{{$list->role}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Role</th>
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