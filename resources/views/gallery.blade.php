@extends('layouts.app')
@section ('content')
<div class="container">
<h1 class="display-4" style="text-align: center;">Gallery</h1>
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">
    <!--Controls-->
    <div class="controls-top">
        <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-angle-left fa-3x pr-3"></i></a>
        <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-angle-right fa-3x pl-3"></i></a>
    </div>
    <!--Controls-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('img/gallery1.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('img/gallery2.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('img/gallery3.jpg')}}" alt="Card image cap">
                </div>
            </div>
        </div>
        <!--/.First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('img/gallery4.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('img/gallery5.jpg')}}" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="img-fluid" src="{{asset('img/gallery6.jpg')}}" alt="Card image cap">
                </div>
            </div>
        </div>
        <!--/.Second slide-->
    </div>
    <!--/.Slides-->

</div>
@endsection

@extends('layouts.footer')