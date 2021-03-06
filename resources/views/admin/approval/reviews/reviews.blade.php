@extends('Admin.layouts.masterDataTables')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reviews</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reviews</li>
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
                  Pending Reviews
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr #</th>
                    <th>Service</th>
                    <th>User</th>
                    <th>Review</th>
                    <th>Stars</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($pending_reviews as $key=>$review)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$review->service->title}}</td>
                    <td>{{$review->user->username}}</td>
                    <td>{{$review->review}}</td>
                    <td>{{$review->star}}</td>
                   
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('admin/review/approve/')}}/{{$review->id}}" class="btn btn-info"><i class="fas fa-check"></i></a>
                        <a href="{{url('admin/review/delete/')}}/{{$review->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                   <tr>
                    <th>Sr #</th>
                    <th>Service</th>
                    <th>User</th>
                    <th>Review</th>
                    <th>Stars</th>
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