@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-4 m-auto">
    <h1>Sign In</h1>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p>Invalid credentials</p>
      @endforeach
    </div>
    @endif
    @if(session()->has('loginStatus'))
        <div class="alert alert-danger">
            {{ session()->get('loginStatus') }}
        </div>
    @endif
    <form action="{{route('user.signin')}}" method="post">
      <div class="form group">
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" value="{{ old('email')}}" class="form-control">
      </div>
      <div class="form group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="{{ old('password')}}" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Sign In</button>
      {{csrf_field()}}
    </form>
  </div>
</div>
@endsection
