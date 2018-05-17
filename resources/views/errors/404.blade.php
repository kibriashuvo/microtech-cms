@extends('layouts.flat')


@section('header')
404
@endsection


<!-- BOOTSTRAP CORE STYLE  -->
<link href="{{asset('admin-assets/css/bootstrap.css')}}" rel="stylesheet" />
<!-- FONT AWESOME ICONS  -->
<link href="{{asset('admin-assets/css/font-awesome.css')}}" rel="stylesheet" />


@section('css')
<style>
@import url('https://fonts.googleapis.com/css?family=Sigmar+One');

/*font-family: 'Patua One', cursive;*/
	


	@font-face {
    font-family: 'Sigmar One';
    font-style: normal;
    font-weight: 700;
    src: local('Sigmar One'), local('Sigmar One'), url({{asset('admin-assets/fonts/SigmarOne.ttf')}}) format('truetype');
}
	h1{
		 font-family:'Sigmar One', cursive;
		font-size:320%;

	}

	h2{
		 font-family:'Sigmar One', cursive;
		font-size:285%;

	}
	
	h3{
		 font-family:'Sigmar One', cursive;
		font-size:200%;
	}

	.brdr{
	text-shadow:
    -.8px -.8px 0 #000,  
    .8px -.8px 0 #000,
    -.8px .8px 0 #000,
    .8px .8px 0 #000;
	}
/*html, body{height:100%; margin:0;padding:0}
 
.container-fluid{
  height:100%;
  display:table;
  width: 100%;
  padding: 0;
}
#39B54A
 */
/*.row-fluid {height: 100%; display:table-cell; vertical-align: middle;}*/
 
 
/*
.centering {
  float:none;
  margin:-100 auto;
}*/
</style>
@endsection





@section('content')



    <div class="row-fluid">

        	<div class="col-md-offset-4 col-md-4 col-md-offset-4">
		{{-- 	<div class="col-md-offset-4 col-md-8  watermark">
                    <img class="logo" src="{{asset('admin-assets/img/logo1.png')}}"/> 
             
		</div> --}}
		                          <div class="centering text-center"> 
        <div class="row">
		<h1 class="text-center"><strong><p><span style="color: #164377;">Error</span> <span style="color:red;" class="brdr">404</span></p></strong></h1> 
		
		<h2 class="text-center"><strong><p><span style="color: #164377;">Page</span> <span style="color: red;">not</span> <span style="color: #164377;">found!</span></p></strong></h2>

		<h3 class="text-center"> <strong> <p> <span style="color: #39B54A;">make sure that the url is correct</span> </p> </strong> </h3>   
       </div>



             </div>
  

        </div>
 
    </div>
    

{{--  
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header container-fluid col-md-12">
                <a class="navbar-brand" href="{{route('dashboard.index')}}">

                    <img class="logo" src="{{asset('admin-assets/img/logo1.png')}}" />
               
                </a>
    	    </div>

        </div>
</div> --}}


{{-- <div class="container-fluid col-md-12">
	
	<div class="col-md-6 col-md-offset-3">

		<h1 class="text-center"><strong><p>Error 404</p> <p>Page not found!</p></strong></h1>   




</div> --}}


@endsection