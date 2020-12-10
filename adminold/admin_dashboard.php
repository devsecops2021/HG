<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
<!--<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>-->
  <style>
/*    .bg-primary {*/
/*    background-color:#14487A!important;*/
/*}*/

body {
padding-top: 70px;
font-family: 'Poppins';

}

.sticky-offset {
top: 75px;
}

#body-row {
margin-left:0;
margin-right:0;
}
#navbarNavDropdown a{
color: black;
}

#sidebar-container {
min-height: 100vh;
/*background-color: rgb(49, 163, 216);*/
background-color: #14487A;
padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
width: 230px;
}
.sidebar-collapsed {
width: 70px;
}

/* Menu item*/
#sidebar-container .list-group a {
height: 50px;
color: white;
/*background-color: rgb(49, 163, 216);*/
background-color: #14487A;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
height: 45px;
padding-left: 30px;
}
.sidebar-submenu {
font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
background-color: rgb(49, 163, 216);
height: 35px;
}
.sidebar-separator {
background-color: rgb(49, 163, 216);
height: 25px;
}
.logo-separator {
background-color: rgb(49, 163, 216);
height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
content: " \f0d7";
display: inline;
text-align: right;
padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
content: " \f0da";
display: inline;
text-align: right;
padding-left: 10px;
}


nav {
background-color:blue !important;
}

  </style>
</head>

<body id="page-top">
    

<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">

 <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">
<img src="../../images/logo HG.png" width="70%" height="60%" class="d-inline-block align-top" alt="">
<span class="menu-collapsed"></span>
</a>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="nav navbar-nav ml-auto">
<li class="nav-item">
<!--<a class="nav-link" href="#"> <i class="fa fa-caret-down"></i></a>-->
</li>
<li class="nav-item">
<!--<a class="nav-link" href="#"><i class="fa fa-user" style="font-size:24px"></i></a>-->
<!--<a class="nav-link" href="#"><i class="fas fa-comment" style="font-size:40px;"></i></a>-->
</li>
<li class="nav-item dropdown" style="padding:5px;border-color:1px solid black">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="fas fa-comment" style="font-size:40px;"></i>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">
<!-- Message Start -->
<div class="media">
<!--<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">-->
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<!--<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>

<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<!-- Message Start -->
<div class="media">
<!--<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<!--<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>
<li class="nav-item" >
<!--<a class="nav-link" href="#"><i class="fas fa-comment" style="font-size:40px;"></i></a>-->
</li>
<li class="nav-item dropdown" style="padding:5px;border-color:1px solid black">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="font-size:40px"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<!--<a href="#" class="dropdown-item">Reports</a>-->
<a href="#" class="dropdown-item"><i class="fa fa-power-off" aria-hidden="true"></i> Profile</a>
<div class="dropdown-divider"></div>
<a href="http://markaz.online/rmt/login/logout.php"class="dropdown-item"> class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
</div>
</li>
<li class="nav-item">
<!--<a class="nav-link" href="#"><i class="fas fa-comment" style="font-size:40px;"></i></a>-->
</li>
&nbsp;&nbsp;&nbsp;&nbsp;
<!-- This menu is hidden in bigger devices with d-sm-none.
The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens -->
<li class="nav-item dropdown d-sm-block d-md-none">
<a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Menu
</a>
<div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
<a class="dropdown-item" href="#">Dashboard</a>
<a class="dropdown-item" href="#">Master</a>
<a class="dropdown-item" href="#">Transaction</a>
<a class="dropdown-item" href="#">Forex</a>
<a class="dropdown-item" href="#">Approvals</a>
<a class="dropdown-item" href="#">Help</a>
</div>
</li>
<!-- Smaller devices menu END -->
 </ul>
<!--<img src="images/hyq.png" alt=""style="width:10%;height:10%;" id="img">-->
</div>
</nav>
<!-- NavBar END -->
    <div class="row" id="body-row">
<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded d-none d-md-block col-1.5">
<!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
<!-- Bootstrap List Group -->
<ul class="list-group sticky-top sticky-offset">
<a href="#" data-toggle="sidebar-colapse" class="list-group-item list-group-item-action d-flex align-items-center">
<div class="d-flex w-100 justify-content-start align-items-center">
<span id="collapse-icon" class="fa fa-2x mr-3"></span>
<span id="collapse-text" class="menu-collapsed">Dashboard</span>
</div>
</a>
<!-- Submenu content -->
<a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start">
<div class="d-flex w-100 justify-content-start align-items-center">
<span class="fa fa-calendar fa-fw mr-3"></span>
<span class="menu-collapsed">Master</span>
<span class="fa fa-angle-down fa-fw ml-auto"> </span>
</div>
</a>
<!-- Submenu content -->
<div id="submenu1" class="collapse sidebar-submenu">
<a href="http://markaz.online/rmt/department/department_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Department</span>
</a>
<a href="http://markaz.online/rmt/bank/bank_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">New Bank</span>
</a>
<a href="http://markaz.online/rmt/city/city_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">City</span>
</a>
<a href="http://markaz.online/rmt/location/location_show_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Location</span>
</a>
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Issue</span>
</a>
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Reason</span>
</a>
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Remarks</span>
</a>
<a href="http://markaz.online/rmt/purpose_of_fund/purpose_of_fund_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Purpose of Fund</span>
</a>
<a href="http://markaz.online/rmt/source_of_fund/source_of_fund_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Source of Fund</span>
</a>
<a href="http://markaz.online/rmt/payment_type/payment_type_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Payment Type</span>
</a>
<a href="http://markaz.online/rmt/employee/employee_show_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Create Employee</span>
</a>
</div>
<a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start">
<div class="d-flex w-100 justify-content-start align-items-center">
<span class="fa fa-calendar fa-fw mr-3"></span>
<span class="menu-collapsed">Transaction</span>
<span class="fa fa-angle-down fa-fw ml-auto"> </span>
</div>
</a>
<!-- Submenu content -->
<div id="submenu2" class="collapse sidebar-submenu">
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Cash Deposite By RO</span>
</a>
<!--<a href="#" class="list-group-item list-group-item-action text-white">-->
<!-- <span class="menu-collapsed">New Bank</span>-->
<!--</a>-->
</div>
<a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start">
<div class="d-flex w-100 justify-content-start align-items-center">
<span class="fa fa-calendar fa-fw mr-3"></span>
<span class="menu-collapsed">Forex</span>
<span class="fa fa-angle-down fa-fw ml-auto"> </span>
</div>
</a>
<!-- Submenu content -->
<div id="submenu3" class="collapse sidebar-submenu">
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Currency Conversion</span>
</a>
</div>
<!--Submenu3 content -->
<a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start">
<div class="d-flex w-100 justify-content-start align-items-center">
<span class="fa fa-calendar fa-fw mr-3"></span>
<span class="menu-collapsed">Approvals</span>
<span class="fa fa-angle-down fa-fw ml-auto"> </span>
</div>
</a>
<!-- Submenu content -->
<div id="submenu4" class="collapse sidebar-submenu">
<a href="http://markaz.online/rmt/commission_rule/commission_rule_theme.php" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">CPO Approval</span>
</a>
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">RO Requirement Approval</span>
</a>
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Transfer Approval for RO</span>
</a>
<a href="#" class="list-group-item list-group-item-action text-white">
<span class="menu-collapsed">Customer Approval</span>
</a>
</div>

<a href="#" class="list-group-item list-group-item-action">
<div class="d-flex w-100 justify-content-start align-items-center">
<span class="fa fa-question fa-fw mr-3"></span>
<span class="menu-collapsed">Help</span>
</div>
</a>
<a href="http://markaz.online/rmt/customer/customer_show_theme.php" class="list-group-item list-group-item-action">
<div class="d-flex w-100 justify-content-start align-items-center">
<span class="fa fa-book fa-fw mr-3"></span>
<span class="menu-collapsed">Create Client</span>
</div>
</a>
</ul>
<!-- List Group END-->
</div>
<!-- sidebar-container END -->
<div class="col py-3">
    <h4>Admin Dashboard</h4>
  <!-- Page Wrapper -->
  <div id="wrapper" class="mt-5">

   

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <div class="container-fluid">

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">System User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    SYSTEM USERS
  </button>
                      <!--<i class="fas fa-calendar fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transaction
Count (Today Only)
</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                      <!--<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                      <button type="button" class="btn btn-primary edibtn" data-toggle="modal">
   Transaction Count
  </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Transaction
Totals (Today Only)</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <!--<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">-->
                          <!--    $4000</div>-->
                        </div>
                        <div class="col">
                          <!--<div class="progress progress-sm mr-2">-->
                          <!--  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!--<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>-->
                      <button type="button" class="btn btn-primary edibtn1" data-toggle="modal">
  Transaction Totals
  </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Transaction Count
Pending (Today Only)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                      <!--<i class="fas fa-comments fa-2x text-gray-300"></i>-->
                      <button type="button" class="btn btn-primary edibtn2" data-toggle="modal">
 Transaction Count
  </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>

           
            </div>
            
            
            <div>
                 <div class="row">
                    <div class="col-lg-6">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold text-primary">Transaction Totals(YTD)</h3>
                </div>
                <div class="card-body">
                  <!--<h1 class="m-0 font-weight-bold text-primary">$86034</h1>-->
                  <!--<label>Transaction Totals (YTD)</label>-->
<input id="ytd" style="border: none;border-color: transparent;">
              </div>
                
            </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold text-primary">Current task</h3>
                </div>
                <div class="card-body">
                  <h1 class="m-0 font-weight-bold text-primary" >  <a href="#" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <!--<span class="text">Complete Task</span>-->
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
   Complete Task
  </button>
                  </a></h1>
                  
              </div>
                
            </div>
            </div>
            </div>
            
            <div>
                <h3>
                    1 Month Alert - Greater Then $1000
                </h3>
            </div>
               
            <!-- Search form -->
<!--<input class="form-control" type="text" placeholder="Search" aria-label="Search">-->
 <input type="search" class="float-right" placeholder="Search by Sender Name" onkeyup="Find()" size="30"  id="Findp">

<br>
<table class="table table-bordered" id="txt_table">
  <thead>
    <tr>
      <th scope="col">Transactions_id</th>
      <th scope="col">Sender_Name</th>
      <th scope="col">Transaction_Total</th>
     
    </tr>
  </thead>
  
</table>

<hr>


 
            </div>
          </div>

        </div>
        

      </div>
      <!-- End of Main Content -->

      </div>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<!--System user-->
  <div class="container">
  <!--<h2>Modal Example</h2>--> 
<!--Transaction Count (Today Only)-->
  <!-- Button to Open the Modal -->
  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">-->
  <!--  SYSTEM USERS-->
  <!--</button>-->
  

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">SYSTEM USERS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <table class = " table table-bordered" id="user_table">
			<tr id="item1">
			    <th class="">User</th>
			    <th>Location</th>
			    <th>Role</th>
			    
			</tr>
			</table>
        </div>
        
        <!-- Modal footer -->
        <!--<div class="modal-footer">-->
        <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
        <!--</div>-->
        
      </div>
    </div>
  </div>
  
</div>

<!--Transaction Count (Today Only)-->
<div class="container">
  
<!--  <button type="button" class="btn btn-primary edibtn" data-toggle="modal">-->
<!--   Transaction-->
<!--Count (Today Only)-->
<!--  </button>-->

  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Transaction
Count (Today Only)</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <!--Modal body..-->
          <label for="user_id">User ID</label> <input id="user_id" readonly>
          <label for="user_id">Transaction
Count (Today Only)</label><input id="count1" readonly></input>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- Transaction Totals (Today Only)-->
<div class="container">
  <!--<h2>Modal Example</h2>-->
  <!-- Button to Open the Modal -->
<!--  <button type="button" class="btn btn-primary edibtn1" data-toggle="modal">-->
<!--  Transaction-->
<!--Totals (Today Only)-->
<!--  </button>-->

  <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Transaction
Totals (Today Only)</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <!--Modal body..-->
          <label for="user_id">User ID</label> <input id="user_id1">
          <label for="user_id">Transaction
Count (Today Only)</label><input id="totamt"></input>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- Transaction Count Pending (Today Only)-->
<div class="container">
  <!--<h2>Modal Example</h2>-->
  <!-- Button to Open the Modal -->
<!--  <button type="button" class="btn btn-primary edibtn2" data-toggle="modal">-->
<!-- Transaction Count-->
<!--Pending (Today Only)-->
<!--  </button>-->

  <!-- The Modal -->
  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Transaction Count
Pending (Today Only)</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <!--Modal body..-->
          <label for="user_id">User ID</label> <input id="user_id2">
          <label for="user_id">Transaction Count
Pending (Today Only)</label><input id="pending_txt"></input>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!---->
<div class="container">
  <!--<h2>Modal Example</h2>--> 
<!--Transaction Count (Today Only)-->
  <!-- Button to Open the Modal -->
  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">-->
  <!-- Complete Task-->
  <!--</button>-->
  

  <!-- The Modal -->
  <div class="modal" id="myModal5">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Complete Task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <table class = " table table-bordered" id="complete_task">
			<tr id="item1">
			    <th class="">Sender_Name</th>
			    <th>Transactions_id</th>
			    <th>Transaction_Total</th>
			    
			</tr>
			</table>
        </div>
        
        <!-- Modal footer -->
        <!--<div class="modal-footer">-->
        <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
        <!--</div>-->
        
      </div>
    </div>
  </div>
  
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
<script>
// Hide submenus
$('#body-row .collapse').collapse('hide'); 

 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

 

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
 

function display(){
$.ajax({
    url: "http://markaz.online/rmt/dashboard_fetchdata/user_data.php",
      dataType: "json",
      success: function(data) {
            // var location = JSON.parse(data);
            var location = data;
            if($.trim(location)==''){console.log("No Data");}
            var len = location.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++)
                    {

 

                    txt = "<tr><td class=''>"+location[i].User+"</td><td>"+location[i].Location+"</td><td>"+location[i].Role+"</td></tr>";
                            $("#user_table").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    display();
    
     $(document).on('click','.edibtn',function(){
    //  alert("in editfun")
        // $tr = $(this).closest('tr');
        //     var d = $tr.children("td").map(function(){
        //         return $(this).text();
        //     }).get();
            // var location_id = d[0];
        //   var user_id = document.getElementById("user_id").value;
        //     alert(user_id);
            
           var user_id = 101;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/single_total_txt.php/?user_id="+user_id,
                 method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    // console.log(data);
                    // alert(data);
                 $('#user_id').val(data.user_id);
                 $('#count1').val(data.count1);
                 
           $('#myModal1').modal('show');
                }
            });
     });
     
     
     $(document).on('click','.edibtn1',function(){
    //  alert("in editfun")
        // $tr = $(this).closest('tr');
        //     var d = $tr.children("td").map(function(){
        //         return $(this).text();
        //     }).get();
            // var location_id = d[0];
        //   var user_id = document.getElementById("user_id").value;
        //     alert(user_id);
            
           var user_id = 101;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/single_total_amt.php/?user_id="+user_id,
                 method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    // console.log(data);
                    // alert(data);
                 $('#user_id1').val(data.user_id);
                 $('#totamt').val(data.total_amount);
                 
           $('#myModal2').modal('show');
                }
            });
     });
     
     $(document).on('click','.edibtn2',function(){
    //  alert("in editfun")
        // $tr = $(this).closest('tr');
        //     var d = $tr.children("td").map(function(){
        //         return $(this).text();
        //     }).get();
            // var location_id = d[0];
        //   var user_id = document.getElementById("user_id").value;
        //     alert(user_id);
            
           var user_id = 101;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/pending_txt.php/?user_id="+user_id,
                 method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    // console.log(data);
                    // alert(data);
                 $('#user_id2').val(data.user_id);
                 $('#pending_txt').val(data.pending_txt);
                 
           $('#myModal3').modal('show');
                }
            });
     });
     
     
     function display1(){
$.ajax({
    url: "http://markaz.online/rmt/dashboard_fetchdata/bigamttxt.php",
      dataType: "json",
      success: function(data) {
            // var location = JSON.parse(data);
            var location = data;
            if($.trim(location)==''){console.log("No Data");}
            var len = location.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++)
                    {

 

                    txt = "<tr><td class=''>"+location[i].Transactions_id +"</td><td>"+location[i].Sender_Name+"</td><td>"+location[i].Transaction_Total+"</td></tr>";
                            $("#txt_table").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    display1();
    
     function display2(){
$.ajax({
    url: "http://markaz.online/rmt/dashboard_fetchdata/complete_task.php",
      dataType: "json",
      success: function(data) {
            // var location = JSON.parse(data);
            var location = data;
            if($.trim(location)==''){console.log("No Data");}
            var len = location.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++)
                    {

 

                    txt = "<tr><td class=''>"+location[i].Sender_Name+"</td><td>"+location[i].Transactions_id+"</td><td>"+location[i].Transaction_Total+"</td></tr>";
                            $("#complete_task").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    display2();
    
    
         function ytd(){
$.ajax({
    url: "http://markaz.online/rmt/dashboard_fetchdata/ytd.php",
      dataType: "json",
      success: function(data) {
                        var location = data[0].Transaction_Totals;
                        
        //   alert(location);
          $('#ytd').val(location);
            // $("#ytd").append(txt);
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    ytd();
    
    function Find() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Findp");
  filter = input.value.toUpperCase();
  table = document.getElementById("txt_table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    // td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
    </script>
</body>

</html>