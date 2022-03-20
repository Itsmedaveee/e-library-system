
   <!-- begin #page-container -->
   <div id="page-container" >
      <!-- begin #header -->
   <div id="header" class="header navbar-inverse" style="background: linear-gradient(rgb(43, 74, 160), rgb(43, 76, 165));">
         <!-- begin navbar-header -->
         <div class="navbar-header">
            <a href="#" class="navbar-brand"><span></span> {{-- <img src="{{ asset('img/dhvsu.png') }}"> --}} &nbsp; 


               <b>E-LIBRARY SYSTEM</b> &nbsp;  

            </a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
         </div>
         <!-- end navbar-header -->
         <!-- begin header-nav -->
         <ul class="navbar-nav navbar-right">
            <li class="dropdown navbar-user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                   <img src="{{ asset('img/boy.png') }}" alt="" /> 
                     <span class="d-none d-md-inline">{{ auth()->user()->name }}</span> <b class="caret"></b>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <a href="/settings" class="dropdown-item">Edit Profile</a>
                  <div class="dropdown-divider"></div>
                    <a href="/logout" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();" class="dropdown-item">
                            Logout
                        </a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
               </div>
            </li>
         </ul>
         <!-- end header-nav -->
      </div>
      <!-- end #header -->
      