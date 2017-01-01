@extends('layouts.admin')



@section('content')


@section('css')


<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}


.dashboard-div-wrapper {
    border-radius: 5px;
    text-align: center;
    padding: 15px;
    color: #fff;
    margin-bottom: 50px;
}

.dashboard-div-wrapper:hover {
    border-radius: 1px;
}
.bk-clr-one {
    /*background-color: #B9B739;*/
    background-color: #0099ff;
}
.bk-clr-four {
    /*background-color: #B9B739;*/
    background-color: #ffdb4d;
}
.collapsebtn{
  color:white;
}


/* unvisited link */
.collapsebtn > a:link {
    color: white;
}

/* visited link */
.collapsebtn > a:visited {
    color: GhostWhite;
}

/* mouse over link */
.collapsebtn > a:hover {
    color: #164377;
    font-weight: bold;
}

/* selected link */
.collapsebtn > a:active {
    color: grey;
}

</style>
@endsection


@section('header')
Dashoboard
@stop






                 <div class="col-md-3 col-sm-3 col-xs-6 blob " data-toggle="collapse" data-target="#demo1">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-bolt dashboard-div-icon" style="background-color: #164377;"></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  </div>
                           
</div>
                         <h5>Products</h5>
                         ...
                    
                     {{-- dropdown --}}
                    <div class="collapse container-fluid" id="demo1">
                        <div class="row collapsebtn container-fluid">
                        <a href="{{route('dashboard-products.index')}}">All Products</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="{{route('dashboard-products.create')}}">Add Products</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="{{route('pdc.index')}}">Rename Product Category</a>
                        </div>
                    </div>
                    {{-- dropdown --}}



                    </div>
                
                   
                </div>



                 <div class="col-md-3 col-sm-3 col-xs-6"  data-toggle="collapse" data-target="#demo2">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-briefcase dashboard-div-icon" style="background-color: #164377;"></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  </div>
                           
</div>
                         <h5>Projects</h5>
                         ...
                    {{-- dropdown --}}
                    <div class="collapse" id="demo2">
                        <div class="row collapsebtn">
                        <a href="{{route('dashboard-projects.index')}}">All Projects</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="{{route('dashboard-projects.create')}}">Add Projects</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="{{route('pjc.index')}}">Rename Project Category</a>
                        </div>
                    </div>
                    {{-- dropdown --}}

                    </div>
                </div>


                 <div class="col-md-3 col-sm-3 col-xs-6"  data-toggle="collapse" data-target="#demo3">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-black-tie dashboard-div-icon" style="background-color: #164377;"></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  </div>
                           
</div>
                         <h5>Career</h5>
                         ...
                   {{-- dropdown --}}
                    <div class="collapse" id="demo3">
                        <div class="row collapsebtn">
                        <a href="{{url('/post_new_jobs')}}">Post Job Advertisement</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="{{url('/vacancy_list')}}">Vacancy List</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="{{url('/post_new_internship')}}">Post Internship Advertisement</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="/internship_list">Internship List</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="/view_applicants">View Uploaded CV</a>
                        </div>
                    </div>
                    {{-- dropdown --}}

                    </div>
                </div>
               


                <div class="col-md-3 col-sm-3 col-xs-6"   data-toggle="collapse" data-target="#demo4">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-camera-retro dashboard-div-icon"   style="background-color: #164377;"></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  </div>
                           
</div>
                         <h5>Gallery</h5>
                         ...
                          {{-- dropdown --}}
                    <div class="collapse" id="demo4">
                        <div class="row collapsebtn">
                        <a href="{{route('dashboard-gallery.index')}}">Photo List</a>
                        </div>
                        <div class="row collapsebtn">
                        <a href="{{route('dashboard-gallery.create')}}">Add Photo</a>
                        </div>
                    </div>
                    {{-- dropdown --}}
                    </div>
                </div>


@stop