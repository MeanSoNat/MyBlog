@extends('layouts.app')

@section('content')
@if (Session::has('completed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Your blog has deleted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
@endif
    @foreach ($blogs as $item)
    <div class="container">
        <div class="container mt-5 mb-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="d-flex justify-content-between p-2 px-3">
                            <div class="d-flex flex-column ml-2"> <span class="font-weight-bold">{{$item->title}}</span> <small class="text-primary">Create by {{ $item->username}}</small> </div>
                            <div class="d-flex flex-row align-items-center d-grid gap-2">
                                <form  action="{{ url('edit-post/'. $item->id)}}" method="POST">
                                    @csrf
                                    <input hidden type="text" value="{{$item->id}}" name="blogid">                               
                                    <input hidden type="text" value="{{$item->title}}" name="title">                               
                                    <input hidden type="text" value="{{$item->content}}" name="content"> 
                                    <input class="btn btn-primary" type="submit" value="Edit">                              
                                </form> 
                                
                                <form  action="{{ url('delete-post')}}" method="POST">
                                    @csrf
                                    <input hidden type="text" value="{{$item->id}}" name="blogid">                               
                                    <input class="btn btn-primary" type="submit" value="Delete">                              
                                </form> 
                            </div>
                        </div> 
                        <div class="p-2">
                            <p class="text-justify">{{$item->content}}</p>
                            <div class="d-flex flex-row mt-1 ellipsis"> <small class="mr-2">created at {{ $item->created_at}}</small> <i class="fa fa-ellipsis-h"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach
</div>
@endsection
