@extends('Admin.layouts.editor')
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Service</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('admin.service.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="user">
                        Assign to User
                      </label>
                      <select name="user_id" class="form-control" id="userid">
                        <option value="">Select User</option>
                        @foreach($users as $key=>$user)
                         <option value="{{$user->id}}">{{$user->username}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-6"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="category-name">Service Title</label>
                        <input type="text" class="form-control" name="service_title" id="category-name" placeholder="Service Name">
                      </div>
                    </div>
                 
                    
      				        <div class="col-md-3">
        						    <div class="form-group">
        						        <label>Select Category</label>
        						        <select class="form-control" id="selectcat" name="category_id">
        						            <option value="">Select Category</option>
        						            @foreach($categories as $category)
        						            <option value="{{$category->id}}">{{$category->name}}</option>
        						            @endforeach
        						        </select>
        				        </div>
      				        </div>
      				        <div class="col-md-3">
        				        <div class="form-group">
        						        <label>Select Sub Category</label>
        						        <select class="form-control" id="subcat" name="sub_category_id">
        						            		
        						        </select>
        						    </div>
  				            </div>
				          </div>

                  <div class="row">
                    <div class="col-md-6">
                      <h6 style="font-weight: bolder;">Image</h6>
                      <label for="primary_image"><i class="fa fa-plus" style="font-size: 24px; border:2px solid #9b9797bf; padding: 25px; border-radius: 2px; color:#9b9797bf; cursor: pointer;"></i></label>
                      <input type="file" name="featured_img" id="primary_image" style="display: none; visibility: none;" onchange="getImage(this.value);">

                      <!----Display Image Name----->
                      <div id="display_image"></div>
                      <!----End Display Image------>
                    </div>
                    <div class="col-md-6"></div>
                   
                  </div>

                    <div class="form-group">
                       <label for="service-description">Service Description</label>
  	                    <textarea id="summernote" name="service_desc">
  	                 
  	                    </textarea>
                    </div>
                    <div class="container-fluid" id="working_day_box">
                      <div class="row" id="working_day_1">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Working Day</label>
                              <select class="form-control" name="service_day[]">
                                <option value="">Select Day</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Hours From</label>
                              <select class="form-control" name="hour_from[]">
                                <option value="">Select Time</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Hours To</label>
                              <select class="form-control" name="hour_to[]">
                                <option value="">Select Time</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <br>
                              <button class="btn btn-success mt-2" type="button"
                              onclick="add_more()">
                                <i class="fa fa-plus"></i>
                              </button>
                            </div>
                          </div>
                      </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Service</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>   
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
<script>
  var loop_count=1;
  function add_more(){
    loop_count++;

    
    var html = '<div class="row" id="working_day_'+loop_count+'">';

    html+='<div class="col-md-3"><div class="form-group"><label>Working Day</label><select class="form-control" name="service_day[]"><option value="">Select Day</option><option value="monday">Monday</option><option value="tuesday">Tuesday</option><option value="wednesday">Wednesday</option><option value="thursday">Thursday</option><option value="friday">Friday</option><option value="saturday">Saturday</option><option value="Sunday">Sunday</option></select></div></div>';

    html+='<div class="col-md-3"><div class="form-group"><label>Hours From</label><select class="form-control" name="hour_from[]"><option value="">Select Time</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option></select></div></div>';

    html+='<div class="col-md-3"><div class="form-group"><label>Hours To</label><select class="form-control" name="hour_to[]"><option value="">Select Time</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option></select></div></div>';

    html+=' <div class="col-md-3"><div class="form-group"><br><button class="btn btn-danger mt-2" type="button" onclick=remove_more("'+loop_count+'")><i class="fa fa-minus"></i></button></div></div>';

    html+='</div>';

    jQuery('#working_day_box').append(html);
    
  }

  function remove_more(loop_count){
      console.log("remove more" + loop_count);
      jQuery('#working_day_'+loop_count).remove();

    }
</script>
<script type="text/javascript">
  function getImage(imagename)
  {
    var newimg=imagename.replace(/^.*\\/, "");
    $('#display_image').html(newimg);
  }
</script>
@endsection