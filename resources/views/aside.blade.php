  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Work</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{asset('adminlte/pages/charts/chartjs.html')}}"><i class="fa fa-edit"></i> Work Add</a></li>
            <li><a href="{{asset('adminlte/pages/charts/morris.html')}}"><i class="fa fa-list"></i> Work Office</a></li>
            <li><a href="{{asset('adminlte/pages/charts/flot.html')}}"><i class="fa fa-edit"></i> Work Proposal</a></li>
            <li><a href="{{asset('adminlte/pages/charts/flot.html')}}"><i class="fa fa-list"></i> Work Proposal List</a></li>
            <li><a href="{{asset('adminlte/pages/charts/inline.html')}}"><i class="fa fa-list"></i>Work List</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>