@extends('main') 

@section('title', '| Edit Blog Post')
    
{{-- @endsection --}}

 @section('content') 


<div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
            <div class="col-md-8">
                {{Form::text('title',null,["class" => 'form-control'])}} 

                {{ Form::textarea('body', null  ,['class' => 'form-control'])}}
                    {{-- <h1>  Post id is: {{$post->id}}</h1>    
                    
                            <h1>{{ $post->title }}</h1>

                            <p class="lead">{{ $post->body }}</p>   --}}
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
                                {!! Html::linkRoute('posts.update','Save Changes',array($post->id), array('class' => 'btn btn-success btn-block')) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Html::linkRoute('posts.show','Cancel',array($post->id), array('class' => 'btn btn-danger btn-block')) !!}

                            </div>
                        </div>
                    </div>
    {!! Form::close() !!}
            
</div> 
{{-- end of row --}}
     
 @endsection