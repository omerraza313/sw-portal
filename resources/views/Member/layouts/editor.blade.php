<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Sharina World | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend_assets/dist/css/adminlte.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/codemirror/codemirror.css')}}">
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/codemirror/theme/monokai.css')}}">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="{{ asset('backend_assets/plugins/simplemde/simplemde.min.css')}}">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
   <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('backend_assets/dist/img/sw-logo.png')}}" alt="sw-logo" height="60" width="60">
         <p style="color: #edc878; margin-top: 10px; padding: 5px 8px 5px 8px; background-color: black; border-radius: 5px 5px 5px 5px">Sharina World Community Platform</p>
      </div>
  
  <!-- Navbar -->
  @include('Member.partials.top_bar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Member.partials.sidebar')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <!---------Main Content Starts---------->
                @section('content')
                @show
  <!---------Main Content Ends------------>  
    
  </div>
  <!-- /.content-wrapper -->
  @include('Member.partials.footer')

  <!-- Control Sidebar -->
  @include('Member.partials.aside')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend_assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->
<!-- Bootstrap 4 -->
<script src="{{ asset('backend_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend_assets/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('backend_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{ asset('backend_assets/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{ asset('backend_assets/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{ asset('backend_assets/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{ asset('backend_assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend_assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->



<script>

  $(function () {


    // Summernote
    $('#summernote').summernote({
      height:300,
      lineWrapping: true,
    });

  })


</script>

<script type="text/javascript">


    $(document).ready(function(){
    


        $('#selectcat').change(function() {
        $('#subcat').html('<option disabled selected>=== Select Category ===</option>');
      
   

  
      let dist = {!! json_encode($sub_categories->toArray(), JSON_HEX_TAG) !!};
     
     
      jQuery.each(dist, function(value, key) {

        if(key.category_id){
          if(key.category_id == $('#selectcat').children("option:selected").val()) {
       
          $('#subcat').append('<option value='+key.id+'>'+key.name+'</option>');

        }
        }
        else{
          if(key.blog_category_id == $('#selectcat').children("option:selected").val()) {
       
          $('#subcat').append('<option value='+key.id+'>'+key.name+'</option>');

        }
        }

        



      });
    });
  });

</script>
</body>
</html>
