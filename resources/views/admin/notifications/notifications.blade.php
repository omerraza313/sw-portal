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
                    <th>Type</th>
                    <th>Notification</th>
                    <th>Read</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    
                      
                  @foreach($notifications as $key=>$notification)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$notification->type}}</td>
                    <td>{{$notification->data['username']}} has been registered</td>
                    
                    <td>
                      <div class="btn-group btn-group-sm">
                        <form action="{{route('notification.Read')}}" method="post">
                          @csrf
                        <input type="text" name="id" value="{{$notification->id}}" hidden>
                        <button type="submit" class="btn btn-success">Read</button>
                         </form>
                      </div>
                    </td>
                  </tr>
                 
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr No.</th>
                    <th>Type</th>
                    <th>Notification</th>
                    <th>Read</th>
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