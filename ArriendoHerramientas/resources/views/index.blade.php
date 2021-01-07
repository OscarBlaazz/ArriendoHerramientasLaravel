@extends('plantilla.template')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-lg-12">
            Bienvenid@ a RentTools 
        </div>
    </div>
</div>
@endsection

@section('content2')

        <h1> esto funcion</h1>
        <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/image_8.jpg);">
            	<a href="images/image_8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span style="border-color: black;">Taladro</span>
	              	<h2><a href="#" style="border-color: black;">Black Decker 450W</a></h2>
	              </div>
              </div>
            </div>
          </div>
        
        <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/image_9.jpg);">
            	<a href="images/image_9.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Aseo</span>
	              	<h2><a href="#">Fumigadora</a></h2>
	              </div>
              </div>
            </div>
          </div>
@endsection