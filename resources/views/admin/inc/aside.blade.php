<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('front_template(1)/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="{{route('admin_dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
            <li class="treeview">
              <a href="{{route('category.index')}}">
                <i class="fa fa-list"></i>
                <span>Category</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              
            </li>
            
            <li class="treeview">
              <a href="{{route('subcategory.index')}}">
                <i class="fa fa-list"></i>
                <span>Sub Category</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
            <li>
              <a href="{{route('products.index')}}">
                <i class="fa fa-list"></i> <span>Products</span>
                <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            
            <li class="treeview">
              <a href="{{route('users.index')}}">
                <i class="fa fa-users"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
            <li class="treeview">
              <a href="{{route('orders.index')}}">
                <i class="fa fa-envelope"></i> <span>Orders</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Payments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Sliders</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Change Password</span>
                <i class="fa fa-angle-left pull-right">3</i>
              </a>
             
            </li>
            
            <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            
            
                  
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>