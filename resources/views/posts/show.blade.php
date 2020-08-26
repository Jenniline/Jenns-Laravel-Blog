@extends('main') 

@section('title', '| View Post')
    
{{-- @endsection --}} 

@section('content') 

<div class="row">
    <div class="col-md-8">
   <h1>  Post id is: {{$post->id}}</h1>
   
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->body }}</p>  
    </div> 
            {{-- SideBar --}} 

            <div class="col-md-4 bg bg-light text text-center mt-4 p-3 border border-dark">
                    <div>
                        <strong>Created at: </strong>
                    <span>{{date('M j, Y H:i', strtotime($post->created_at))}}</span>
                    </div>
            <br>
                    <div>
                        <strong>Last Updated at: </strong>
                    <span>{{ date('M j, Y H:i', strtotime($post->updated_at))}}</span>
                    </div>
              

                <hr>
                <div class="row">
                    <div class="col-md-6">
                        {!! Html::linkRoute('posts.edit','Edit',array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Html::linkRoute('posts.destroy','Delete',array($post->id), array('class' => 'btn btn-danger btn-block')) !!}

                    </div>
                </div>
            </div>
    
</div>

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