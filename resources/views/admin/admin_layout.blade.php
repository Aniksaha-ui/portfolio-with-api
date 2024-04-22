<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Portfolio Admin panel</title>

    <!-- vendor css -->
    <link href="{{asset('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


     <link href="{{asset('backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">


    <link href="{{ asset('backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/starlight.css')}}">
       @livewireStyles
  </head>

  <body>


    @guest

    @else

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{url('/')}}"><i class="icon ion-android-star-outline"></i>&nbsp;&nbsp;Anik</a></div>
    <div class="sl-sideleft">


   
      <div class="sl-sideleft-menu">
        <a href="{{url('admin/home')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">System Setup</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('companymaster')}}" class="nav-link">Company Setup</a></li>
          <li class="nav-item"><a href="{{route('contactmaster')}}" class="nav-link">Contact Person Setup</a></li>
          <li class="nav-item"><a href="{{route('officemaster')}}" class="nav-link">Office Master Setup</a></li>
          <li class="nav-item"><a href="{{route('codemas')}}" class="nav-link">Code Master Setup</a></li>
          <li class="nav-item"><a href="{{route('colormas')}}" class="nav-link">Color Master Setup</a></li>
          <li class="nav-item"><a href="{{route('sizemas')}}" class="nav-link">Size Master Setup</a></li>
          <li class="nav-item"><a href="{{route('admin.pagesetup')}}" class="nav-link">Page Master Setup</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('category')}}" class="nav-link">Category</a></li>
          <li class="nav-item"><a href="{{route('sub.category')}}" class="nav-link">Sub-Category</a></li>
          <li class="nav-item"><a href="{{route('nextsub.category')}}" class="nav-link">Next Sub-Category</a></li>
          <li class="nav-item"><a href="{{route('brands')}}" class="nav-link">Brand</a></li>
          
        </ul>
       
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Reports</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('today.order')}}" class="nav-link">Today's Order</a></li>
           
            <li class="nav-item"><a href="{{route('this.month')}}" class="nav-link">This Month Order</a></li>
            <li class="nav-item"><a href="{{route('search.report')}}" class="nav-link">Date and Year Order </a></li>
            <li class="nav-item"><a href="{{route('search.betweendate.report')}}" class="nav-link"> Date Range Order Report</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Product</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('add.product')}}" class="nav-link">Add Product</a></li>
          <li class="nav-item"><a href="{{route('all.product')}}" class="nav-link">All Product</a></li>
        </ul>



                <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Order</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('admin.orders')}}" class="nav-link">Create New Order</a></li>
          <li class="nav-item"><a href="{{route('admin.neworder')}}" class="nav-link">Orders Lists</a></li>
        </ul>

         <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">User</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.users')}}" class="nav-link">All Users</a></li>
        </ul>



      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Anik<span class="hidden-md-down"> Saha</span></span>
              <img src="https://tse2.mm.bing.net/th?id=OIP.cSPj7LvJYHZOnzdIyFok2gHaHT&pid=Api&P=0" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('backend/img/img3.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('backend/img/img4.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('backend/}img/img7.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('backend/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('backend/img/img3.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img9.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img10.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img10.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img9.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->


    @endguest

    @yield('admin_panel')

 
<!-- <script src="exponential.js"></script> -->
    <script src="{{asset('backend/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('backend/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>

    <script src="{{asset('backend/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('backend/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('backend/lib/select2/js/select2.min.js')}}"></script>


     <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });


        $('#datatable3').DataTable({
          responsive: true,
          "pageLength": 100000 ,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>


    <script src="{{asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/lib/d3/d3.js')}}"></script>
    <script src="{{asset('backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>

     <script src="{{ asset('backend/lib/medium-editor/medium-editor.js') }}"></script>
    <script src="{{ asset('backend/lib/summernote/summernote-bs4.min.js') }}"></script>

    

    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>

     <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote1').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
     <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote2').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>


    <script src="{{asset('backend/js/starlight.js')}}"></script>
    <script src="{{asset('backend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('backend/js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    


         <script>
             @if(Session::has('massage'))
             var type="{{Session::get('alert-type','info')}}"

             switch(type){
                case 'info':
                toastr.info("{{Session::get('massage')}}");
                break;
               
                case 'success':
                toastr.info("{{Session::get('massage')}}");
                break;
               
                case 'warning':
                toastr.info("{{Session::get('massage')}}");
                break;
               
                case 'error':
                toastr.info("{{Session::get('massage')}}");
                break;

             }

            @endif
         </script> 

@yield('footer_js')


  </body>

</html>
