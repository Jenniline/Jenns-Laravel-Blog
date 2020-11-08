
@extends('main') 

@section('title','| Homepage')

@section('stylesheets') 
  <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('content') 
          <div class="row">
              <div class="col-md-12">
                  <div class="jumbotron">
                      <h1 class="display-4">Jenn's Blog</h1>
                      <p class="lead">Thank you for visiting. This is my test website built with Laravel, Please read my latest post! </p>
                      <hr class="my-4">
                      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                      <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                    <br>
                    <br>
                      <a href=" {{route('posts.index')}}" class="btn btn-primary btn-lg btn-h1-spacing"> Go to Post </a> 
                      <br>
                      <a href=" {{route('posts.create')}}" class="btn btn-success btn-lg btn-h1-spacing"> Create Post </a>



                  </div>
              </div> 
          </div>                 <!-- end of header row -->
              
      <!-- end of header container -->


      <div class="row"> 
          <div class="col-md-8">
                @foreach($posts as $post)
                <div class="post">
                    <h3> {{substr($post->title,0,100)}} {{strlen($post->title) > 50 ? "..." : ""}} </h3>
                    <p> {{substr($post->body,0,100)}} {{strlen($post->body) > 300 ? "..." : ""}} </p>
                    <a href=" {{url('blog/'.$post->slug)}} " class="btn btn-primary">Read more</a>
                </div>
                    <hr>
                @endforeach
          </div>

          <div class="col-md-3 col-md-offset-1">Sidebar</div>

      </div>
          
@endsection 

@section('scripts') 
  <script>
      // confirm('I loaded some js');
  </script>
@endsection


