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
         <li class="has-sub {{ Request::is('student/home') ? 'active' : '' }}">
            <a href="/student/home">
               <div class="icon-img">
                  <i class="fa fa-th-large"></i>
               </div>
               <span>Library</span>
            </a>
         </li>    
          <li class="has-sub {{ Request::is('request-books') ? 'active' : '' }}  
            border-top: 1px solid #46505a;">
            <a href="javascript:;">
               <b class="caret"></b>
               <div class="icon-img">
               {{--    <img src="{{ asset('img/app.png') }}" alt="" class="round bg-inverse" /> --}}
               <i class="fa fa-book"></i>
               </div>
               <span> Request Book</span>
            </a>
            <ul class="sub-menu">
               <li class="{{ Request::is('request-books') ? 'active' : '' }} "><a href="/request-books"> Request lists</a></li>
             
              {{--  <li class="{{ Request::is('librarian-users') ? 'active' : '' }}"><a href="/librarian-users">Librarian users</a></li> --}}
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