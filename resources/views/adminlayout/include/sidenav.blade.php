<!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('public/images/fusion.jpg') }}" class="img-circle" alt="image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::guard('admin')->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.changepassword') }}">
            <i class="fa fa-key"></i> <span>Change Password</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.viewpostedjob') }}">
            <i class="fa fa-sort-amount-desc"></i> <span>Job Seeker</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li>
          <a href="{{ route('admin.viewjobapproval') }}">
            <i class="fa fa-sort-amount-desc"></i> <span>Job Provider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>JobCategory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createjobcategory') }}"><i class="fa fa-circle-o"></i>Create JobCategory</a></li>
            <li><a href="{{ route('admin.viewjobcategory') }}"><i class="fa fa-circle-o"></i> View JobCategory</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-check"></i> <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createabout') }}"><i class="fa fa-circle-o"></i>Create About</a></li>
            <li><a href="{{ route('admin.viewabout') }}"><i class="fa fa-circle-o"></i> View About</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createblog') }}"><i class="fa fa-circle-o"></i>Create Blog</a></li>
            <li><a href="{{ route('admin.viewblog') }}"><i class="fa fa-circle-o"></i> View Blog</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Service</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createservice') }}"><i class="fa fa-circle-o"></i>Create Service</a></li>
            <li><a href="{{ route('admin.viewservice') }}"><i class="fa fa-circle-o"></i> View Service</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createevent') }}"><i class="fa fa-circle-o"></i>Create Event</a></li>
            <li><a href="{{ route('admin.viewevent') }}"><i class="fa fa-circle-o"></i> View Event</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>Success Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.creategallery') }}"><i class="fa fa-circle-o"></i>Create Gallery</a></li>
            <li><a href="{{ route('admin.viewgallery') }}"><i class="fa fa-circle-o"></i> View Gallery</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>Office Album</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createalbum') }}"><i class="fa fa-circle-o"></i>Add Gallery</a></li>
            <li><a href="{{ route('admin.viewalbum') }}"><i class="fa fa-circle-o"></i> View Gallery</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>Photos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createphoto') }}"><i class="fa fa-circle-o"></i>Add Photo</a></li>
            <li><a href="{{ route('admin.viewphoto') }}"><i class="fa fa-circle-o"></i> View Photo</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>Training</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createtraining') }}"><i class="fa fa-circle-o"></i>Add Training</a></li>
            <li><a href="{{ route('admin.viewtraining') }}"><i class="fa fa-circle-o"></i> View Training</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-amount-desc"></i> <span>Associate Companies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('admin.createassociatecompany') }}"><i class="fa fa-circle-o"></i>Add Companies</a></li>
            <li><a href="{{ route('admin.viewassociatecompany') }}"><i class="fa fa-circle-o"></i> View Companies</a></li>
          </ul>
        </li>
        
        <li class="treeview">
        <a href="#">
          <i class="fa fa-link"></i> <span>Important Links</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ route('admin.createlink') }}"><i class="fa fa-circle-o"></i>Create Links</a></li>
          <li><a href="{{ route('admin.viewlink') }}"><i class="fa fa-circle-o"></i> View Links</a></li>
        </ul>
      </li>
      
      <li>
        <a href="{{ route('admin.viewcontact') }}">
          <i class="fa fa-envelope"></i> <span>Contact</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
      {{-- <li>
        <a href="{{ route('admin.viewsuscriber') }}">
          <i class="fa fa-envelope"></i> <span>Suscriber</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li> --}}
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>