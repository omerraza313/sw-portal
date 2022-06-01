@extends('Front.front_layout.web_master')
@section('css')
<style type="text/css">
  .social i{

    padding:  20px;
    font-size: 20px;
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
                <div class="text-center p-4">
                  <span style="font-size: 32px;background: #f2f1f1;padding: 16px 28px;border-radius: 101px;color: #989999;">{{ substr($user->username, 0, 1)}}</span>
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
                    <b>Services</b> <a class="float-right">2</a>
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
                  B.S. in Computer Science from the University of Tennessee at Knoxville B.S. in Computer Science from the University of Tennessee at Knoxville B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

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

                    <!-- Facebook -->
                    <a href="">
                      <i class="fa fa-facebook-f"></i>
                    </a>

                    <!-- Twitter -->
                    <i class="fa fa-twitter"></i>

                    <!-- Google -->
                    <i class="fa fa-google"></i>

                    <!-- Instagram -->
                    <i class="fa fa-instagram"></i>

                    <!-- Linkedin -->
                    <i class="fa fa-linkedin"></i>

                    <!-- Pinterest -->
                    <i class="fa fa-pinterest"></i>                

                    <!-- Youtube -->
                    <i class="fa fa-youtube"></i>                

                    <!-- Whatsapp -->
                    <i class="fa fa-whatsapp"></i>
                    
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