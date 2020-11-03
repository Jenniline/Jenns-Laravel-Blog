@extends('main') 

@section('title', '| All Posts')
    
{{-- @endsection --}}

@section('content') 

    <div class="row mt-5">
        <div class="col-md-10">
          <h1>  All Posts </h1>  
        </div>

        <div class="col-md-2">
            <a href=" {{route('posts.create')}}" class="btn btn-primary btn-block btn-h1-spacing p-3"> Create New Post </a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <hr>
    </div>

    <table  class="table table-striped">
        <thead class="thead-dark">
          <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th> 
                    <th scope="col">body</th>  
                    <th scope="col">Created At</th>
                    <th scope="col  ">Last Updated at</th>
                    <th scope="col">View</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
                <tr>
                    <th> {{$post->id}} </th> 
                    <td> {{substr($post->title,0,50)}} {{ strlen($post->title) > 50 ? "..." : "" }} </td> 
                    <td> {{ substr($post->body,0,50)}} {{strlen($post->body) >50 ? "..." : ""}} </td> 
                    <td> {{ date('M j,Y h:ia', strtotime($post->created_at)) }} </td> 
                    <td> {{ date('M j,Y h:ia', strtotime($post->updated_at)) }}  </td> 
                    <td> <a href=" {{route('posts.show',$post->id)}} " class="btn btn-primary">View</a> </td>
                    <td> <a href=" {{route('posts.edit',$post->id)}} " class="btn btn btn-warning">Edit</a>  </td> 
                    <td> <a href=" {{route('posts.destroy',$post->id)}}"class="btn btn btn-danger">Delete</a>  </td> 

                </tr>
          @endforeach
        </tbody>
      </table>

      {{-- Page pagination --}}
      <div class="container">
        <div class="row"> 
            <div class=col-8>
              {{ $posts->links() }}
            </div>
            
            <div class=col-4>
                Page {{$posts->currentPage()}} of {{$posts->total()}}
            </div>
        </div>     
      </div>
             


@endsection