@extends('main') 

@section('title', '| View Post')
    
{{-- @endsection --}} 

@section('content') 

{{-- <div class="col-md-2">
    <a href=" {{route('pages.welcome',$post->id)}}" class="btn btn-primary btn-block btn-h1-spacing p-3"> Go to home </a>
</div> --}}

<div class="row">
    <div class="col-md-8">
   <h1>  Post id is: {{ $post->id }}</h1>
   
      Post title:  <h1>{{ $post->title }}</h1>
     Post body:   <p class="lead">{{ $post->body }}</p>  
    </div> 
            {{-- SideBar --}} 

            <div class="col-md-4 bg bg-light text text-center mt-4 p-3 border border-dark">

                <div>

                    <label> Url:</label>
                <a href="{{ route('blog.single', $post->slug) }}"> {{ route('blog.single', $post->slug)}} </a> 
                <br>
                    <div>

                       
                            <label>Created at: </label>
                        <span>{{date('M j, Y H:i', strtotime($post->created_at))}}</span>
                    </div>
            <br>
                    <div>
                            <label>Last Updated at: </label>
                        <span>{{ date('M j, Y H:i', strtotime($post->updated_at))}}</span>
                    </div>
              

                <hr>
                <div class="row">
                    <div class="col-md-6">
                        {!! Html::linkRoute('posts.edit','Edit',array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-md-6">
                        {{!! Form::open(['route' => ['posts.destroy',$post->id], 'method' => 'DELETE']) !!}}
                        {{!! Form::submit('Delete',['class' => 'btn btn-danger btn-block']) !!}}

                        {{!! Form::close() !!}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{Html::linkRoute('posts.index','<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])}}
                    </div>
                </div>
            </div>
        </div>




{{-- 
<div class="col-md-2">
    <a href=" {{view('pages.welcome')}}" class="btn btn-primary btn-block btn-h1-spacing p-3"> All posts </a>
</div> --}}

{{-- <div class="container">
    <div class="row">

        <table class="table"> 
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Number </th>
                    <th scope="col">id</th>
                    <th scope="col">title</th> 
                    <th scope="col">body</th>  
                    <th scope="col">Created At</th>
                    <th scope="col">Last Updated at</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
    
            <tbody>
                <tr>
                    <th>1</th>
                    <td> {{$post->id}}</td>
                    <td> {{$post->title}}  </td>
                    <td> {{$post->body}} </td>
                    <td>{{date('M j, Y h:ia', strtotime($post->created_at))}}</td>
                    <td>{{ date('M j, Y h:ia', strtotime($post->updated_at))}}</td>
                    <td> {!! Html::linkRoute('posts.edit','Edit',array($post->id), array('class' => 'btn btn-primary btn-block')) !!}</td>
                    <td> {!! Html::linkRoute('posts.destroy','Delete',array($post->id), array('class' => 'btn btn-danger btn-block')) !!}</td>
                </tr>
                   
              
            </tbody>
    
        </table>
    </div>
</div> --}}




@endsection