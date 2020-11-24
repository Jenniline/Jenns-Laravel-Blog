@extends('main')

@section('title', '| Register')

@section('content')

<form>
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="form-group">
        <label for="exampleInputPasswordConfirmation">Password Confirmation</label>
        <input type="password" class="form-control" id="exampleInputPasswordConfirmation">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
  </form>

@endsection