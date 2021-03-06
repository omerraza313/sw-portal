@extends('Admin.layouts.masterDataTables')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blog Sub Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Blog Category</li>
              <li class="breadcrumb-item active">Blog Sub Category</li>
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
                  Add Sub Category
                </button>
                @if(Session::Has('msg'))
                <p class="alert alert-danger float-right bg-danger py-2 px-3" role="alert">
                  {{session::get('msg')}}
                </p>
                @endif
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No#</th>
                      <th>Category</th>
                      <th>Slug</th>
                      <th>Parent Category</th>
                      <th class="text-right">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach($subcategories as $key=>$list)
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$list->name}}</td>
                      <td>{{$list->slug}}</td>
                      <td>{{$list->category->name}}</td>
                      <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <button class="btn btn-info" data-toggle="modal" data-target="#modal-edit-{{$list->id}}"><i class="fas fa-pen-square"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$list->id}}"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr> 

                    <!------------Delete Category Modal------------->
                    <div class="modal fade" id="modal-delete-{{$list->id}}">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Sub Categpry</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="card-body">
                            <p>Do You Want to Delete <strong>{{$list->name}}</strong> Sub Category</p>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="{{url('admin/blog/delete-sub-category/')}}/{{$list->id}}" class="btn btn-danger">Delete</a>
                              </div>
                            
                          </div>
                          
                         
                        </div>
                     
                      </div>  
                    </div>
                    <!------------Delete Category Modal End-------------->
                    <!--------Edit Category Modal------->
            <div class="modal fade" id="modal-edit-{{$list->id}}">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Sub Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('admin.edit_sub_category')}}">
                      @csrf
                      <input type="text" name="id" value="{{$list->id}}" hidden="">
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
                      <div class="form-group">
                        <label for="Parent Category">Parent Category</label>
                        <div class="input-group">
                          <select class="form-control" name="blog_category_id" required="">
                           <option value="{{$list->category->id}}" selected>{{$list->category->name}}</option>
                            @foreach($categories as $key=>$cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                          </select>
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
                    <h4 class="modal-title">Add Sub Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('admin.sub_category_add')}}">
                      @csrf
                      <div class="form-group">
                        <label for="category-name">Sub Category Name</label>
                        <input type="text" class="form-control" name="name" id="category-name" placeholder="Category Name" required="">
                          
                      </div>
                      
                      <div class="form-group">
                        <label for="category-image">Sub Category Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="category-image">
                            <label class="custom-file-label" for="category-image">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Parent Category">Parent Category</label>
                        <div class="input-group">
                          <select class="form-control" name="blog_category_id" required="">
                            <option value="">Select Category</option>
                            @foreach($categories as $key=>$cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Sub Category</button>
                      </div>
                  </form>
                  </div>
                  

                </div>
             
              </div>  
            </div>
            <!-- Add Category End -->
            
          </div>   
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection