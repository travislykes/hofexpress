<header class="main-header">
    <div class="inside-header clearfix">
      <nav class="main-nav" role="navigation">
          <h2 class="nav-brand"><a href="{{ route('index') }}"><img src="{{ asset('/img/logo_2x.png') }}" class="" alt="Hof Express" width="135"></a></h2>
          
          <!-- Mobile menu toggle button (hamburger/x icon) -->
          <button class="topbar-toggler" id="mobile_topbar_toggler"><i class="mdi mdi-dots-horizontal"></i></button>
          <input id="main-menu-state" type="checkbox" />
          <label class="main-menu-btn" for="main-menu-state">
              <span class="main-menu-btn-icon"></span> Toggle main menu visibility
          </label>

        <!-- Sample menu definition -->
        <ul id="main-menu" class="sm sm-blue">
          @if(Auth::user()->userType->name == 'Manager')
          {{-- <li><a href="#"><i class="ti-dashboard mx-5"></i>DASHBOARD</a>
             
          </li> --}}
          <li><a href="{{ route('my.menus') }}"><i class="ti-files mx-5"></i>MENUS</a>
             
          </li>
          <li><a href="#" ><i class="ti-files mx-5"></i>ORDERS</a>
             
          </li>
          <li><a href="{{ route('food.index') }}"><i class="ti-layout-grid2 mx-5"></i>FOOD</a>			
           	  
          </li>
          <li><a href="{{ route('res.preferences') }}"><i class="ti-pencil-alt mx-5"></i>PREFERENCES</a></li>
          <li><a href="{{ route('restaurant.show',[Auth::user()->restaurant->id]) }}" target="_blank"><i class="ti-pencil-alt mx-5"></i>VIEW RESTAURANT</a></li> 
        
          @elseif(Auth::user()->userType->name == 'Admin')
          {{-- if admnin --}}

          <li><a href="{{ route('admin.dashboard') }}"><i class="ti-dashboard mx-5"></i>DASHBOARD</a></li>
          <li><a href="{{ route('admin.restaurants') }}"><i class="ti-dashboard mx-5"></i>ALL RESTAURANTS</a></li>
          {{-- <li><a href="#"><i class="ti-dashboard mx-5"></i>DASHBOARD</a></li> --}}
          <li><a href="#"><i class="ti-shopping-cart mx-5"></i>SETTINGS</a>
            <ul>
              <li><a href="{{ route('admin.payment.types') }}">Payment Types</a></li>
              <li><a href="{{ route('admin.orderStatus') }}">Order Status</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="ti-shopping-cart mx-5"></i>USERS</a>
            <ul>
              <li><a href="{{ route('admin.all.users') }}">All Users</a></li>
              <li><a href="{{ route('admin.all.admins') }}">Admins</a></li>
              <li><a href="{{ route('admin.all.managers') }}">Managers</a></li>
              <li><a href="{{ route('admin.all.customers') }}">Customers</a></li>
            </ul>
          </li>
          {{-- Admin End --}}
          @else 

          @endif
          {{-- <li><a href="#"><i class="ti-write mx-5"></i>FORMS & TABLES</a>
            <ul>
              <li><a href="#">Forms</a>
                <ul>
                  <li><a href="forms_advanced.html">Advanced Elements</a></li>
                  <li><a href="forms_code_editor.html">Code Editor</a></li>
                  <li><a href="forms_editor_markdown.html">Markdown</a></li>
                  <li><a href="forms_editors.html">Editors</a></li>
                  <li><a href="forms_validation.html">Form Validation</a></li>
                  <li><a href="forms_wizard.html">Form Wizard</a></li>
                  <li><a href="forms_general.html">General Elements</a></li>
                  <li><a href="forms_mask.html">Formatter</a></li>
                  <li><a href="forms_xeditable.html">Xeditable Editor</a></li>
                  <li><a href="forms_dropzone.html">Dropzone</a></li>
                </ul>			  
              </li>
              <li><a href="#">Tables</a>
                <ul>
                  <li><a href="tables_simple.html">Simple tables</a></li>
                  <li><a href="tables_data.html">Data tables</a></li>
                  <li><a href="tables_editable.html">Editable Tables</a></li>
                  <li><a href="tables_color.html">Table Color</a></li>
                </ul>			  
              </li>
            </ul>		  
          </li>
          <li><a href="#"><i class="ti-stats-up mx-5"></i>CHARTS</a>
            <ul>
              <li><a href="charts_chartjs.html">ChartJS</a></li>
              <li><a href="charts_flot.html">Flot</a></li>
              <li><a href="charts_inline.html">Inline charts</a></li>
              <li><a href="charts_morris.html">Morris</a></li>
              <li><a href="charts_peity.html">Peity</a></li>
              <li><a href="charts_chartist.html">Chartist</a></li>
              <li><a href="#">C3 Charts</a>
                <ul>
                  <li><a href="charts_c3_axis.html">Axis Chart</a></li>
                  <li><a href="charts_c3_bar.html">Bar Chart</a></li>
                  <li><a href="charts_c3_data.html">Data Chart</a></li>
                  <li><a href="charts_c3_line.html">Line Chart</a></li>
                </ul>			  
              </li>
              <li><a href="#">Echarts</a>
                <ul>
                  <li><a href="charts_echarts_basic.html">Basic Charts</a></li>
                  <li><a href="charts_echarts_bar.html">Bar Chart</a></li>
                  <li><a href="charts_echarts_pie_doughnut.html">Pie & Doughnut Chart</a></li>
                </ul>			  
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="ti-plug mx-5"></i>EXTRA COMPONENTS</a>
            <ul>
              <li><a href="#">Emails</a>
                <ul>
                  <li><a href="email_welcome.html">Welcome Email</a></li>
                  <li><a href="email_verify_email.html">Verify Emial</a></li>
                  <li><a href="email_change_pass.html">Change Password</a></li>
                  <li><a href="email_update.html">User Updates</a></li>
                  <li><a href="email_expired_card.html">Expired Card</a></li>
                  <li><a href="email_closed_account.html">Closed Account</a></li>
                </ul>			  
              </li>
              <li><a href="#">Map</a>
                <ul>
                  <li><a href="map_google.html">Google Map</a></li>
                  <li><a href="map_vector.html">Vector Map</a></li>
                </ul>			  
              </li>
              <li><a href="#">Extension</a>
                <ul>
                  <li><a href="extension_fullscreen.html">Fullscreen</a></li>
                  <li><a href="extension_pace.html">Pace</a></li>
                </ul>			  
              </li>
            </ul>		  
          </li>

          <li><a href="#"><i class="ti-shopping-cart mx-5"></i>ECOMMERCE</a>
            <ul>
              <li><a href="ecommerce_products.html">Products</a></li>
              <li><a href="ecommerce_cart.html">Products Cart</a></li>
              <li><a href="ecommerce_products_edit.html">Products Edit</a></li>
              <li><a href="ecommerce_details.html">Product Details</a></li>
              <li><a href="ecommerce_orders.html">Product Orders</a></li>
              <li><a href="ecommerce_checkout.html">Products Checkout</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="ti-files mx-5"></i>PAGES</a>
            <ul>
              <li><a href="#">Authentication</a>
                <ul>
                  <li><a href="auth_login.html">Login</a></li>
                  <li><a href="auth_login2.html">Login 2</a></li>
                  <li><a href="auth_register.html">Register</a></li>
                  <li><a href="auth_register2.html">Register 2</a></li>
                  <li><a href="auth_lockscreen.html">Lockscreen</a></li>
                  <li><a href="auth_user_pass.html">Recover password</a></li>
                </ul>
              </li>
              <li><a href="#">Invoice</a>
                <ul>
                  <li><a href="invoice.html">Invoice</a></li>
                  <li><a href="invoicelist.html">Invoice List</a></li>
                </ul>
              </li>
              <li><a href="#">Error Pages</a>
                <ul>
                  <li><a href="error_400.html">Error 400</a></li>
                  <li><a href="error_403.html">Error 403</a></li>
                  <li><a href="error_404.html">Error 404</a></li>
                  <li><a href="error_500.html">Error 500</a></li>
                  <li><a href="error_503.html">Error 503</a></li>
                  <li><a href="error_maintenance.html">Maintenance</a></li>	
                </ul>
              </li>
              <li><a href="#">Coming Soon</a>
                <ul>
                  <li><a href="sample_coming_soon_1.html">Coming Soon 1</a></li>
                  <li><a href="sample_coming_soon_2.html">Coming Soon 2</a></li>
                  <li><a href="sample_coming_soon_3.html">Coming Soon 3</a></li>
                </ul>
              </li>
              <li><a href="#">Sample Pages</a>
                <ul>
                  <li><a href="sample_blank.html">Blank</a></li>
                  <li><a href="sample_custom_scroll.html">Custom Scrolls</a></li>
                  <li><a href="sample_faq.html">FAQ</a></li>
                  <li><a href="sample_gallery.html">Gallery</a></li>
                  <li><a href="sample_lightbox.html">Lightbox Popup</a></li>
                  <li><a href="sample_pricing.html">Pricing</a></li>
                </ul>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top icon-topbar hmobile">	

        <div class="navbar-custom-menu r-side">
          <ul class="nav navbar-nav">
            <li class="search-bar">		  
                <div class="lookup lookup-circle lookup-right">
                   <input type="text" name="s">
                </div>
            </li>			
            <!-- Messages -->
            {{-- <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Messages">
                <i class="mdi mdi-email"></i>
              </a>
              <ul class="dropdown-menu animated bounceIn">

                <li class="header">
                  <div class="p-20 bg-light">
                      <div class="flexbox">
                          <div>
                              <h4 class="mb-0 mt-0">Messages</h4>
                          </div>
                          <div>
                              <a href="#" class="text-danger">Clear All</a>
                          </div>
                      </div>
                  </div>
                </li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu sm-scrol">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                           <h4>
                            Lorem Ipsum
                            <small><i class="fa fa-clock-o"></i> 15 mins</small>
                           </h4>
                           <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                           <h4>
                            Nullam tempor
                            <small><i class="fa fa-clock-o"></i> 4 hours</small>
                           </h4>
                           <span>Curabitur facilisis erat quis metus congue viverra.</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                           <h4>
                            Proin venenatis
                            <small><i class="fa fa-clock-o"></i> Today</small>
                           </h4>
                           <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                           <h4>
                            Praesent suscipit
                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                           </h4>
                           <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                           <h4>
                            Donec tempor
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                           </h4>
                           <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                        </div>

                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer">				  
                    <a href="#" class="bg-light">See all e-Mails</a>
                </li>
              </ul>
            </li> --}}
            <!-- Notifications -->
            {{-- <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Notifications">
                <i class="mdi mdi-bell"></i>
              </a>
              <ul class="dropdown-menu animated bounceIn">

                <li class="header">
                  <div class="bg-light p-20">
                      <div class="flexbox">
                          <div>
                              <h4 class="mb-0 mt-0">Notifications</h4>
                          </div>
                          <div>
                              <a href="#" class="text-danger">Clear All</a>
                          </div>
                      </div>
                  </div>
                </li>

                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu sm-scrol">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer">
                    <a href="#" class="bg-light">View all</a>
                </li>
              </ul>
            </li>	 --}}
            <!-- User Account-->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
                <img src="{{ asset('admin/images/avatar/7.jpg') }}" class="user-image rounded-circle" alt="User Image">
              </a>
              <ul class="dropdown-menu animated flipInX">
                <!-- User image -->
                <li class="user-header bg-img" style="background-image: url({{ asset('admin/images/user-info.jpg') }})" data-overlay="3">
                    <div class="flexbox align-self-center">					  
                      <img src="{{ asset('images/avatar/7.jpg') }}" class="float-left rounded-circle" alt="User Image">					  
                      <h4 class="user-name align-self-center">
                        <span>Samuel Brus</span>
                        <small>samuel@gmail.com</small>
                      </h4>
                    </div>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
                      <div class="dropdown-divider"></div>
                      <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
                </li>
              </ul>
            </li>					
            <li class="only-icon">
                <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
                  <i class="mdi mdi-crop-free"></i>
                </a> 
            </li>
            <!-- Control Sidebar Toggle Button -->
            {{-- <li>
              <a href="#" data-toggle="control-sidebar" title="Setting"><i class="fa fa-cog fa-spin"></i></a>
            </li> --}}
          </ul>
        </div>
      </nav>
      </div>
</header>