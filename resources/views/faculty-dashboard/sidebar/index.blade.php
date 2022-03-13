{{-- <div id="sidebar" class="sidebar">
   <!-- begin sidebar scrollbar -->
   <div data-scrollbar="true" data-height="100%">
      <!-- begin sidebar user -->
      <ul class="nav">
         <li class="nav-profile">
            <a href="javascript:;" data-toggle="nav-profile">
               <div class="cover with-shadow"></div>
               
               @if (auth()->user()->avatar)
                  <div class="image">
                     <img src="{{ Storage::url(auth()->user()->avatar) }}" alt="" /> 
                  </div>
               @else
                  <div class="image">
                     <img src="{{ asset('img/boy.png') }}" alt="" /> 
                  </div>
               @endif

               <div class="info">
                  {{ auth()->user()->name }}
                  <small>{{ Auth::user()->role->label }}</small>
               </div>
            </a>
         </li>
      </ul>
      <!-- end sidebar user -->
      <!-- begin sidebar nav -->
      <ul class="nav">
         <li class="nav-header">Navigation</li>
         <li class="has-sub {{ Request::is('home') ? 'active' : '' }}">
            <a href="/faculty/home">
               <div class="icon-img">
                  <i class="fa fa-book"></i>
               </div>
               <span>Library</span>
            </a>
         </li>
 
  
        
         <!-- begin sidebar minify button -->
         <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-back"></i> <span>Collapse</span></a></li>
         <!-- end sidebar minify button -->
      </ul>
      <!-- end sidebar nav -->
   </div>
   <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div> --}}

<nav class="navbar navbar-default mobile-nav" role="navigation" style="background-color: #212F3C  ">
    <div class="container">
        <div class="navbar-header">  
          <!--   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>               
            </button>   -->        
        </div>
    </div>
   <div class="visible-xs">
        <div class="container">
            <ul class="nav sub-nav navbar-right">
                <li>
    <a href="/home">
        <b>HOME</b>
    </a>
</li>
<li>
    <a href="/users">
       <b> USERS</b>
    </a>
</li>
<li>
    <a href="/faculty-users">
       <b> FACULTIES</b>
    </a>
</li>
<li>
    <a href="/students">
        <b>STUDENTS</b>
    </a>
</li>
<li>
    <a href="/departments">
       <b> DEPARTMENTS</b>
    </a>
</li>
<li>
    <a href="/categories">
        <b>CATEGORIES</b>
    </a>
</li>
<li>
    <a href="/books">
        <b>BOOKS</b>
    </a>
</li>

<li>
    <a href="/collections">
        <b>COLLECTIONS</b>
    </a>
</li>

<li>
    <a href="/login">
        <b>LOGIN</b>
    </a>
</li>    
      </ul>
                </div>
              </div>
            </div>
            
        </div>
    </div>

    <div class="visible-xs">   
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="row">               
                <div class="col-xs-6">
                    <ul class="nav navbar-nav">
                        <!--HOME-->
                </ul>
                </div>
                <div class="col-xs-6">
                    <ul class="nav navbar-nav">
                     </ul>
                </div>
            </div>
            
        </div>
    </div>
    <div class="hidden-xs">
        <div class="container">
            <ul class="nav sub-nav navbar-right">
  
        </div>
        
    </div>
</nav>

    <div class="hidden-xs">
        <div class="container">
            <ul class="nav sub-nav navbar-right">
                <li>
   </ul>
        </div>
        
    </div>
</nav>

<div class="navbar navbar-inverse main-nav">
    <div class="container">
        <div class="navbar-header">       
            <a href="/" class="navbar-brand">

                <span class="navbar-logo text-uppercase">
                 <p style="font-family: century gothic"> <small>E-Library System </small></p>

                </span>

            </a>  

        
        </div>
    </div>
</div>


<!--NAVIGATION-->
<nav class="navbar navbar-default mobile-nav" role="navigation" style="background-color: #fff;">
    <div class="container">
        <div class="navbar-header">  
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>               
            </button>          
        </div>
    </div>   
    <div class="visible-xs">   
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="row">               
                <div class="col-xs-6">
                    <ul class="nav navbar-nav">
                        <!--HOME-->

                 </ul>
                </div>
            </div>
            
        </div>
    </div>
    <div class="hidden-xs">
        <div class="container">
            <ul class="nav sub-nav navbar-right">
   
<li>
    <a href="/faculty/home">
        <b>LIBRARY</b>
    </a>
</li>
 

<li>
    @guest
    <a href="/login">
        <b>LOGIN</b>
    </a>
    @endguest 
        <a href="/logout" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();" class="dropdown-item">
        <b>LOGOUT</b>
        </a>
        <form id="logout-form" action="/logout" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form> 
</li>


<li>
    <div class="seach-menu-bar clearfix">
                           {{--  <form id="search" method="GET" class="navbar-form" action="/company">
                                <input type="text" class="form-control" placeholder="Search " id="searchBox" name="company" value="">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search icon-white"></i> Search
                                </button>
                            </form> --}}
                        </div>
</li>
          </ul>
        </div>
        
    </div>
</nav>

 
          </ul>
    </div> 
</nav>

