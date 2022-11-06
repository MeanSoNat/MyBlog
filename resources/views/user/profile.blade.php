@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="h-100 gradient-custom-2">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl">
                      <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                          <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="https://cdna.artstation.com/p/assets/images/images/023/576/078/original/ying-chen-me-optimize.gif?1579652163"
                              alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                              style="width: 150px; z-index: 1">
                            <a href="{{ url('/edit-profile/'. Auth::user()->id) }}" type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                              style="z-index: 1;">
                              Edit profile
                            </a>
                          </div>
                          <div class="ms-3" style="margin-top: 130px;">
                            <h3>{{Auth::user()->name}}</h3>
                          </div>
                        </div>
                        <div class="p-5 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1"></div>
                        </div>
                        <div class="card-body p-4 text-black">
                         
                          <div class="row g-2">
                            <div class="col mb-2">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                                alt="image 1" class="w-100 rounded-3">
                            </div>
                            <div class="col mb-2">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp"
                                alt="image 1" class="w-100 rounded-3">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
    </div>
</div>
@endsection

