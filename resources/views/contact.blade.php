@extends('main')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4">
            <form action="contact" method="POST">
                @csrf
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>                
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Name (Required)</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1">
                    <span style="color: red">@error('name'){{ $message }}@enderror </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Your Email (Required)</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    <span style="color: red">@error('email'){{ $message }}@enderror </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputSubject1">    
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Comment</label>
                    <textarea class="form-control" style="height:150px" name="comment"></textarea> 
                </div>
    
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>


@endsection