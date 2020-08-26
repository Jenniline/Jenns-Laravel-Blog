<!doctype html>
<html lang="en">

<head>
    @include('partials._head')  
</head>
  

    <body> 

        @include('partials._nav')

        <div class="container">
            @include('partials._messages')
                <!-- Introducing blade using Laravel --> 
            @yield('content')     

            @include('partials._footer') 

        </div>   
        {{-- end of container --}}
                {{-- must not be named content can be named anything you want e.g body --}}

        @include('partials._javascript')

            @yield('scripts')
</body>
</html>