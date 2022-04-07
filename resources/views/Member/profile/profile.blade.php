@extends('Member.layouts.master')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                
                <h3 class="profile-username text-center">{{Auth::user()->f_name}} {{Auth::user()->l_name}}</h3>

                <p class="text-muted text-center">{{Auth::user()->username}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Services</b> <a class="float-right">1</a>
                  </li>
                  <li class="list-group-item">
                    <b>Reviews</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>F. Package</b> <a class="float-right">13,287</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block"><b>Additional Information</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
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

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#addtional_info" data-toggle="tab">Addtional Information</a></li>
                </ul>
                	
              </div><!-- /.card-header -->
              <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="profile">
                        <form method="POST" action="{{ route('member.update.profile') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="Firstname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ Auth::user()->f_name }}" required autocomplete="f_name" autofocus disabled>

                                    @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="l_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ Auth::user()->l_name }}" required autocomplete="l_name" autofocus disabled>

                                    @error('l_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->username }}" disabled>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" disabled>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="addtional_info">
                       <form class="form-horizontal" method="post" action="{{ route('member.profile.info.update')}}" enctype="multipart/form-data">
                        @csrf
                              <div class="form-group row">
                                <label for="education" class="col-sm-2 col-form-label">Education</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="education" name="education" placeholder="B.S. in Computer Science from the University of Tennessee at Knoxville">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="country" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="country" name="country" placeholder="United States">
                                        <option value="">Select Country</option>
                                        <option value="united_states">United States</option>
                                    </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="state" class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="state" name="state" placeholder="United States">
                                        <option value="">Select State</option>
                                        <option value="alabama">Alabama</option>
                                        <option value="alaska">Alaska</option>
                                        <option value="arizona">Arizona</option>
                                        <option value="arkansas">Arkansas</option>
                                        <option value="california">California</option>
                                        <option value="colorado">Colorado</option>
                                        <option value="connecticut">Connecticut</option>
                                        <option value="delaware">Delaware</option>
                                        <option value="florida">Florida</option>
                                        <option value="georgia">Georgia</option>
                                        <option value="hawaii">Hawaii</option>
                                        <option value="idaho">Idaho</option>
                                        <option value="illinois">Illinois</option>
                                        <option value="indiana">Indiana</option>
                                        <option value="iowa">Iowa</option>
                                        <option value="kansas">Kansas</option>
                                        <option value="kentucky">Kentucky</option>
                                        <option value="louisiana">Louisiana</option>
                                        <option value="maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="massachusetts">Massachusetts</option>
                                        <option value="michigan">Michigan</option>
                                        <option value="minnesota">Minnesota</option>
                                        <option value="mississippi">Mississippi</option>
                                        <option value="missouri">Missouri</option>
                                        <option value="montana">Montana</option>
                                        <option value="nebraska">Nebraska</option>
                                        <option value="nevada">Nevada</option>
                                        <option value="new_hampshire">New Hampshire</option>
                                        <option value="new_jersey">New Jersey</option>
                                        <option value="new_mexico">New Mexico</option>
                                        <option value="new_york">New York</option>
                                        <option value="north_carolina">North Carolina</option>
                                        <option value="north_dakota">North Dakota</option>
                                        <option value="ohio">Ohio</option>
                                        <option value="oklahoma">Oklahoma</option>
                                        <option value="oregon">Oregon</option>
                                        <option value="pennsylvania">Pennsylvania</option>
                                        <option value="rhode_island">Rhode Island</option>
                                        <option value="south_carolina">South Carolina</option>
                                        <option value="south_dakota">South Dakota</option>
                                        <option value="tennessee">Tennessee</option>
                                        <option value="texas">Texas</option>
                                        <option value="utah">Utah</option>
                                        <option value="vermont">Vermont</option>
                                        <option value="virginia">Virginia</option>
                                        <option value="washington">Washington</option>
                                        <option value="west_virginia">West Virginia</option>
                                        <option value="wisconsin">Wisconsin</option>
                                        <option value="wyoming">Wyoming</option>
                                    </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                   <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="town" class="col-sm-2 col-form-label">Town</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="town" id="town" placeholder="Town">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="zip_code" class="col-sm-2 col-form-label">Zip Code</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Zip Code">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="profile_img" class="col-sm-2 col-form-label">Upload Avatar</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" name="profile_img" id="profile_img">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="personal_info" class="col-sm-2 col-form-label">Personal Information</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="personal_info" name="personal_info" placeholder="Experience"></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                  <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                              </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection