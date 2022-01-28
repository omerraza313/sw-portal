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

				    <form method="POST" action="{{route('admin.blog.create')}}">
				    	@csrf
				        <div class="card-body">
				            <div class="form-group">
				                <label for="title">Title</label>
				                <input type="text" class="form-control" id="category-name" placeholder="Business Name">
				            </div>
				            <div class="form-group">
				                <label for="body">Business Description</label>
				                   
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