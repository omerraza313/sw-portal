@extends('Admin.layouts.master')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blog Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog Category</li>
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
          <div class="col-md-11">

            <!------Blog Category List------>
            @error('name')
              <div class="alert alert-danger" role="alert">
               {{$message}}
              </div>
            @enderror

            <div class="card card-dafault">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                  Add Category
                </button>
                @if(Session::Has('msg'))
                <p class="alert alert-danger float-right bg-danger py-2 px-3" role="alert">
                  {{session::get('msg')}}
                </p>
                @endif
              </div>
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Slug</th>
                      <th class="text-right">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach($data as $key=>$list)
                    <tr>
                      <td>{{$list->name}}</td>
                      <td>{{$list->slug}}</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <button class="btn btn-info" data-toggle="modal" data-target="#modal-edit-{{$list->id}}"><i class="fas fa-pen-square"></i></button>
                          <a href="{{url('admin/blog/delete-category/')}}/{{$list->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr> 

                    <!--------Edit Category Modal------->
            <div class="modal fade" id="modal-edit-{{$list->id}}">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('admin.edit_category')}}">
                      @csrf
                      <input type="tetx" name="id" value="{{$list->id}}" hidden="">
                      <div class="form-group">
                        <label for="category-name">Category Name</label>
                        <input type="text" class="form-control" name="name" id="category-name" placeholder="Category Name" value="{{$list->name}}">
                      </div>
                    
                      <div class="form-group">
                        <label for="category-image">Category Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="category-image">
                            <label class="custom-file-label" for="category-image">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
                  
                 
                </div>
             
              </div>  
            </div>
            <!-- Edit Category End -->
                    @endforeach        
                  </tbody>
                </table>
              </div>
            </div>


            <!------Blog Category List End------------->


            <!--------Add Category Modal------->
            <div class="modal fade" id="modal-add">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('admin.create_category')}}">
                      @csrf
                      <div class="form-group">
                        <label for="category-name">Category Name</label>
                        <input type="text" class="form-control" name="name" id="category-name" placeholder="Category Name" required="">
                          
                      </div>
                      
                      <div class="form-group">
                        <label for="category-image">Category Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="category-image" required="">
                            <label class="custom-file-label" for="category-image">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add New</button>
                      </div>
                  </form>
                  </div>
                  

                </div>
             
              </div>  
            </div>
            <!-- Add Category End -->

            <!--------Edit Category Modal------->
            <div class="modal fade" id="modal-edit">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="category-name">Category Name</label>
                        <input type="text" class="form-control" id="category-name" placeholder="Category Name">
                      </div>
                      <div class="form-group">
                        <label for="category-slug">Category Slug</label>
                        <input type="text" class="form-control" id="category-slug" placeholder="Same as Category Name (Lower Case)">
                      </div>
                      <div class="form-group">
                        <label for="category-image">Category Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="category-image">
                            <label class="custom-file-label" for="category-image">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
             
              </div>  
            </div>
            <!-- Edit Category End -->

            
            
          </div>   
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection