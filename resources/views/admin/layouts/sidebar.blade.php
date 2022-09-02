<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>John Doe</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">

            {{-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="index2.html">Dashboard2</a></li>
                <li><a href="index3.html">Dashboard3</a></li>
              </ul><i class="fas fa-calendar-alt"></i>
            </li> --}}
            <li><a><i class="fa fa-building"></i> Company <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ url('admin/add-company') }}">Add Company</a></li>
                <li><a href="{{url('admin/list-company')}}">List Company</a></li>
                {{-- <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="form_wizards.html">Form Wizard</a></li>                --}}
              </ul>
            </li>
            <li><a><i class="fa fa-calendar"></i> Events <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ url('admin/add-event') }}">Add Events</a></li>
                <li><a href="{{url('admin/list-event')}}">List Events</a></li>              
              </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> Landmarks <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ url('admin/add-landmark') }}">Add Landmarks</a></li>
                <li><a href="{{url('admin/list-landmark')}}">List Landmarks</a></li>           
              </ul>
            </li> 
              
            <li><a><i class="fa fa-clone"></i> Promotors <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ url('admin/add-promotor') }}">Add Promotors</a></li>
                <li><a href="{{url('admin/list-promotor')}}">List Promotors</a></li>               
              </ul>
            </li> 
            <li><a><i class="fa fa-ticket"></i> Tickets <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">General Form</a></li>
                <li><a href="form_advanced.html">Advanced Components</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="form_wizards.html">Form Wizard</a></li>               
              </ul>
            </li> 
            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">General Form</a></li>
                <li><a href="form_advanced.html">Advanced Components</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="form_wizards.html">Form Wizard</a></li>               
              </ul>
            </li>         
                              
          </ul>
        </div>
      

      </div>
      <!-- /sidebar menu -->

    </div>
  </div>