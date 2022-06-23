@extends('Member.layouts.master')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Package</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Service</a></li>
              <li class="breadcrumb-item active">Package</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Package</h3>
              </div>
              <?php
              if(Session::has('servicePackage', 'packageAttr')){

                $servicePackage = Session::get('package');
                $packageAttr = Session::get('packageAttr');
              } 

              ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('member.service.package.update')}}">
                @csrf
                <input type="hidden" name="service_id" value="{{$servicePackage->service_id}}">
                <input type="hidden" name="id" value="{{$servicePackage->id}}">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="package-name">Package Name</label>
                        <input type="text" class="form-control" name="package_name" id="package_name" value="{{$servicePackage->package_type}}" placeholder="Package Name">
                      </div>
                    </div>   
                  </div>

                    <div class="container-fluid" id="service_package_box">
                       @php
                       $loop_count_num=1;     
                      @endphp
                       
                      @foreach($packageAttr as $key=>$val)
                      <input type="hidden" name="package_attr_id[]" value="{{$val['id']}}">
                      <div class="row" id="service_package_{{$loop_count_num++}}">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="package_detail">Detail</label>
                              <input type="text" name="plan_name[]" value="{{$val['plan_name']}}" class="form-control" id="package_detail">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="package_price">Price</label>
                              <input type="text" name="price[]" value="{{$val['price']}}" class="form-control" id="package_price">
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                              <br>
                              @if($loop_count_num==2)
                              <button class="btn btn-success mt-2" type="button"
                              onclick="add_detail()">
                                <i class="fa fa-plus"></i>
                              </button>
                              @else

                                <a href="{{url('admin/service/package_attr/delete/')}}/{{$val['id']}}/{{$package->service_id}}">
                                  <button type="button" class="btn btn-danger btn-md mt-2">
                                     <i class="fa fa-minus"></i>
                                  </button>
                                </a>
                              @endif
                            </div>
                          </div>
                      </div>
                      @endforeach
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Package</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>   
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<script>
  var loop_count=1;

  function add_detail(){
    loop_count++;
    html = '<input type="hidden" name="package_attr_id[]"><div class="row" id="service_package_'+loop_count+'">';

    html+='<div class="col-md-3"><div class="form-group"><label for="package_detail">Detail</label><input type="text" name="plan_name[]" class="form-control" id="package_detail"></div></div>';

    html+='<div class="col-md-2"><div class="form-group"><label for="package_price">Price</label><input type="text" name="price[]" class="form-control" id="package_price"></div></div>';

    html+='<div class="col-md-3"><div class="form-group"><br><button class="btn btn-danger mt-2" type="button" onclick=remove_detail("'+loop_count+'")><i class="fa fa-minus"></i></button></div></div>';

    html+='</div>';

    jQuery('#service_package_box').append(html);
  }

  function remove_detail(loop_count){
    jQuery('#service_package_'+loop_count).remove();
  }
</script>
@endsection