@extends('main')
@section('content')


<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4">
            <form action="login" method="POST">
                @csrf
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>                
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    <span style="color: red">@error('email'){{ $message }}@enderror </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <span style="color: red">@error('password'){{ $message }}@enderror </span>
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection
