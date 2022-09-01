@extends('layouts.app')

@section('content')

    <head>
        <style>
            .btn {
                border-radius: 50%;
            }
        </style>
    </head>
    <div class="container">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row justify-content-center mt-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img class="img  " src="{{ url('img/slide1.png') }}" width="1140" height="600"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img  " src="{{ url('img/slide2.png') }}" width="1140" height="600"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img  " src="{{ url('img/home.png') }}" width="1140" height="600" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-2 w-100"> width="1500">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="btn " style="margin-top:30px">
                <a href="{{ url('/pesan') }}" class="btn btn-primary btn-lg rounded-circle active" role="button"
                    aria-pressed="true">Primary link</a>
                <a href="#" class="btn btn-primary btn-lg rounded-circle active" role="button"
                    aria-pressed="true">Primary link</a>
                <a href="#" class="btn btn-primary btn-lg rounded-circle active" role="button"
                    aria-pressed="true">Primary link</a>

                <div class="jumbotron text-center mt-5" width="1140" style="margin-bottom:0">
                    <p>Footer</p>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
