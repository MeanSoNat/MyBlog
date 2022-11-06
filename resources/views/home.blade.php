@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('completed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Your blog has posted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="col-md-8">
            <form action="{{ url('addpost', Auth::user()->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header inline-flex">
                        <input hidden type="text" name="uid" value="{{ Auth::user()->id }}">
                        <input hidden type="text" name="ownname" value="{{ Auth::user()->name }}">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title *</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <input class="btn btn-primary" type="submit">
               </div>
                <a class="btn btn-primary" href="{{ url('/blog') }}">See Post</a>
            </div>
        </form>
    </div>

</div>
@endsection
