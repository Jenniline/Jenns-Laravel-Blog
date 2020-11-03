@extends('main')
@section('title', '| Create New Post')

{{-- @endsection --}} 
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')
  
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
              
                {{ Form::label('title','Title') }}
                {{Form::text('title', null, array('class' => 'form-control', 'required' => '','maxlength' => '255'))}} 

                {{Form::label('body', "Post Body")  }} 
                {{Form::textarea('body', null, array('class'=>'form-control', 'required' => '', 'maxlength' => '255'))}}

                {{Form::submit('Create Post', array('class' => 'btn btn-success btn-lg','style' => 'margin-top:20px;'))}}
            {!! Form::close() !!}
        </div>
    </div> 

{{-- 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form action="posts">
                @csrf
                <label for="title">Title</label><br>
                <input type="text" value=""  name="name" required maxlength="255"><br>
                <label for="Post Body">body</label><br>
                <input type="text"value="" name="url" required maxlength="255">
                <input type="submit" value="Create Post" class="'btn btn-success btn-lg" style="margin:20px">
             </form> 
        </div>
    </div>   --}}


@endsection

@section('scripts')
     {{!! Html::script('js/parsley.min.js') !!}} 
@endsection