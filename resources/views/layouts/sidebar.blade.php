<div id="sidebar" class="sidebar">
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
            <a href="/home">
               <div class="icon-img">
                  <i class="fa fa-th-large"></i>
               </div>
               <span>Dashboard</span>
            </a>
         </li>

            <li class="has-sub {{ Request::is('users') ? 'active' : '' }}   
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-user"></i>
               </div>
               <span>Admin</span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('users') ? 'active' : '' }} "><a href="/users">Administrator lists</a></li>
               
              {{--  <li class="{{ Request::is('librarian-users') ? 'active' : '' }}"><a href="/librarian-users">Librarian users</a></li> --}}
            </ul>
         </li>           
         <li class="has-sub {{ Request::is('faculty-users') ? 'active' : '' }}  
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-user"></i>
               </div>
               <span>Faculty </span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('faculty-users') ? 'active' : '' }} "><a href="/faculty-users">Faculty lists</a></li>
               
              {{--  <li class="{{ Request::is('librarian-users') ? 'active' : '' }}"><a href="/librarian-users">Librarian users</a></li> --}}
            </ul>
         </li>     

         <li class="has-sub  {{ Request::is('students') ? 'active' : '' }}  {{ Request::is('pending-students') ? 'active' : '' }} 
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-users"></i>
               </div>
               <span>Students</span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('pending-students') ? 'active' : '' }} "><a href="/pending-students">Pending Student lists</a></li>
               <li class="{{ Request::is('students') ? 'active' : '' }} "><a href="/students"> Student lists</a></li>
              {{--  <li class="{{ Request::is('librarian-users') ? 'active' : '' }}"><a href="/librarian-users">Librarian users</a></li> --}}
            </ul>
         </li>

          <li class="has-sub {{ Request::is('departments') ? 'active' : '' }} 
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-building"></i>
               </div>
               <span>Departments</span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('departments') ? 'active' : '' }}"><a href="/departments">Department lists</a></li>
            </ul>
         </li>


          <li class="has-sub {{ Request::is('courses') ? 'active' : '' }} 
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-list"></i>
               </div>
               <span>Courses</span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('courses') ? 'active' : '' }}"><a href="/courses">Course lists</a></li>
            </ul>
         </li>          
  {{--         <li class="has-sub {{ Request::is('inventories') ? 'active' : '' }} 
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
                  <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" />
               <i class="fa fa-building"></i>
               </div>
               <span>Inventories</span>
            </a>
            <ul class="sub-menu">
              
            </ul>
         </li> --}}


          <li class="has-sub {{ Request::is('categories') ? 'active' : '' }} 
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-file"></i>
               </div>
               <span>Categories</span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('categories') ? 'active' : '' }}"><a href="/categories">Categories lists</a></li>
            </ul>
         </li>



          <li class="has-sub {{ Request::is('books') ? 'active' : '' }} {{ Request::is('add-book') ? 'active' : '' }} 
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-book"></i>
               </div>
               <span>Books</span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('books') ? 'active' : '' }}"><a href="/books">Book lists</a></li>
            </ul>
         </li>          

         <li class="has-sub {{ Request::is('pending-borrows') ? 'active' : '' }} {{ Request::is('borrows') ? 'active' : '' }} 
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-list"></i>
               </div>
               <span>Borrows</span>
            </a>
            <ul class="sub-menu"> 
               <li class="{{ Request::is('pending-borrows') ? 'active' : '' }}"><a href="/pending-borrows">Request Borrows</a></li>
               <li class="{{ Request::is('borrows') ? 'active' : '' }}"><a href="/borrows"> Borrow lists</a></li>
            </ul>
         </li>

     <li class="has-sub {{ Request::is('reports') ? 'active' : '' }}
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-file-text" aria-hidden="true"></i>

               </div>
               <span>Reports</span>
            </a>
            <ul class="sub-menu"> 
               <li class="{{ Request::is('reports') ? 'active' : '' }}"><a href="/reports"> Reports</a></li>
              
            </ul>
         </li>
   
         <!-- begin sidebar minify button -->
         <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-back"></i> <span>Collapse</span></a></li>
         <!-- end sidebar minify button -->
      </ul>
      <!-- end sidebar nav -->
   </div>
   <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>