@extends('master')
@section('content')
<div class="container custom-login
">
    <div class="row">
        <div class="col-sm-4 mx-auto ">
            <form action="login" method="post">
                <div class="mb-3">
                  @csrf
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email">
                 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection