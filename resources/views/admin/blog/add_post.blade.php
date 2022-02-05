@extends('Admin.layouts.editor')
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
        	<div class="col-md-11">
        		<div class="card">
					<div class="card-header"></div>

				    <form method="POST" action="{{route('admin.blog.create')}}" enctype="multipart/form-data">
				    	@csrf
				        <div class="card-body">
				            <div class="form-group">
				                <label for="title">Title</label>
				                <input name="title" type="text" class="form-control" id="post_title" placeholder="Post Title">
				            </div>
				            <div class="row">
				            	<div class="col-md-6">
						            <div class="form-group">
						            	<label>Select Category</label>
						            	<select class="form-control" id="selectcat" name="blog_category_id">
						            		<option value="">Select Category</option>
						            		@foreach($blog_categories as $category)
						            		<option value="{{$category->id}}">{{$category->name}}</option>
						            		@endforeach
						            	</select>
						            </div>
				            	</div>
				            	<div class="col-md-6">
				            		<div class="form-group">
						            	<label>Select Sub Category</label>
						            	<select class="form-control" id="subcat" name="blog_sub_category_id">
						            		
						            	</select>
						            </div>
				            	</div>
				            </div>
				            <div class="form-group">
		                        <label for="category-image">Featured Image</label>
		                        <div class="input-group">
		                          <div class="custom-file">
		                            <input type="file" class="custom-file-input" name="post_image" id="post_image">
		                            <label class="custom-file-label" for="category-image">Choose file</label>
		                          </div>
		                        </div>
		                    </div>
				            <div class="form-group">
				                <label for="body">Post Body</label>
				                   
				                <textarea id="summernote" name="body">
				                	
				                </textarea>
				                 
				            </div>

				        </div>
				                <!-- /.card-body -->

				        <div class="card-footer">
				            <button type="submit" class="btn btn-primary">
				            	Add Post
				            </button>
				        </div>
				    </form>
				</div>
        	</div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



@endsection