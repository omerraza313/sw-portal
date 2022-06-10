@extends('Front.front_layout.web_master')
@section('css')
<style type="text/css">
  .social i{

    padding:  20px;
    font-size: 20px;
  }
  .profile-user-img {
  border: 3px solid #adb5bd;
  margin: 0 auto;
  padding: 3px;
  width: 100px;
  height: 100px !important;
}
.img-circle {
  border-radius: 50%;
}
</style>
@endsection
@section('content')


	<section class="shop-blog py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <div class="text-center">
                  <img class="profile-user-img img-circle"
                       src="{{ asset('storage/media/'. $user->info->profile_img)}}"
                       alt="User profile picture">
                  
                </div>
                
                  
               

                <h3 class="profile-username text-center">{{ucfirst($user->f_name)}} {{ucfirst($user->l_name)}}</h3>

                <p class="text-muted text-center mb-4">{{$user->username}}</p>

                <ul class="list-group list-group-unbordered mb-4">
                  <li class="list-group-item">
                    <b>Reviews</b> <a class="float-right">10</a>
                  </li>
                  <li class="list-group-item">
                    <b>Favourites</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Services</b> <a class="float-right">{{$user->services->count()}}</a>
                  </li>
                </ul>

                @if(Auth::id() != $user->id)
                    <form method="post" action="{{route('chat.init')}}">
                      @csrf
                      <input type="id" name="reciever_id" value="{{$user->id}}" hidden>
                      <button class="btn btn-block" type="submit">Contact <b>{{$user->f_name}}</b> </button>
                    </form>
                    @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary mt-5">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong> Description</strong>

                <p class="text-muted">
                  {{$user->info->personal_info}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{$user->info->city}}, {{$user->info->state}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Phone</strong>

                <p class="text-muted">
                  <a href="tel:+92321213123"><span class="tag tag-danger">+92 (12) 123123</span></a>
                 
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Social </strong>
                  <div class="social">

                    @if($user->social()->exists())

                    @if($user->social->facebook != null)
                    <!-- Facebook -->
                    <a href="">
                      <i class="fa fa-facebook-f"></i>
                    </a>
                    @endif


                    @if($user->social->facebook != null)
                    <!-- Twitter -->
                    <i class="fa fa-twitter"></i>
                    @endif

                    @if($user->social->google_plus != null)
                    <!-- Google -->
                    <i class="fa fa-google"></i>
                    @endif

                    @if($user->social->instagram != null)
                    <!-- Instagram -->
                    <i class="fa fa-instagram"></i>
                    @endif

                    @if($user->social->linkedin != null)
                    <!-- Linkedin -->
                    <i class="fa fa-linkedin"></i>
                    @endif

                    @if($user->social->pinterest != null)
                    <!-- Pinterest -->
                    <i class="fa fa-pinterest"></i> 
                    @endif               

                    @if($user->social->youtube != null)
                    <!-- Youtube -->
                    <i class="fa fa-youtube"></i>   
                    @endif              

                    @if($user->social->whatsapp != null)
                    <!-- Whatsapp -->
                    <i class="fa fa-whatsapp"></i>
                    @endif 

                    @endif
                    
                  </div>
                
                    
             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="row">
              @foreach($user->services as $key=>$list)
              <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                  <div class="shop-single-blog">
                    <img style="object-fit: cover; width: 370px; height: 223px;" src="{{ asset('storage/media/'.$list->featured_img)}}" alt="#">
                    <div class="content p-3 text-center">
                       <p class="date"></p>
                      <h3 href="{{url('user')}}/{{$list->user['username']}}/{{$list->slug}}" class="title">{{$list->title}}</h3>
                      <a href="{{url('user')}}/{{$list->user['username']}}/{{$list->slug}}" class="more-btn">View Details</a>
                    </div>
                  </div>                
                </div>
              </div>
              @endforeach              
            </div>
            
           
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection	