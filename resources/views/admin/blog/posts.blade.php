@extends('Admin.layouts.masterDataTables')
@section('content')

  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
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
                <a href="{{route('admin.blog.add')}}" class="btn btn-info">Add Post</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $key=>$list)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$list->title}}</td>
                    <td>{{$list->category->name}}</td>
                    <td>{{$list->subcategory->name}}</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('/admin/blog/edit_post')}}/{{$list->id}}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                          <a href="{{url('/admin/blog/delete_post')}}/{{$list->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                           <a href="{{url('/blog')}}/{{$list->slug}}" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Actions</th>
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