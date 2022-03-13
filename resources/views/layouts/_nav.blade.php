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

