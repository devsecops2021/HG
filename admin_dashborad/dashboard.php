<?php
session_start();
 $_SESSION['user_id'];
  $_SESSION['username'];
  
//  if (isset($_SESSION["username"])) {
//   // only if user is logged in perform this check
//   if ((time() - $_SESSION['last_login_timestamp']) > 20) {
//     header("location:http://markaz.online/novR7th-QA/logout.php");
//     exit;
//   } else {
//     $_SESSION['last_login_timestamp'] = time();
//   }
// }
// if( isset($_SESSION[‘last_acted_on’]) && (time() - $_SESSION[‘last_acted_on’] > 60*1) ){
//     session_unset();     // unset $_SESSION variable for the run-time
//     session_destroy();   // destroy session data in storage
//     header("location:http://markaz.online/novR7th-QA/logout.php");
// }else{
//     session_regenerate_id(true);
//     $_SESSION[‘last_acted_on’] = time();
// }
 
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<title>Admin-Dashbaord</title>
</head>
<style>
body {
    padding-top: 70px;
   /*font-family: 'Poppins';*/
   font-family: 'Arial';
}


.sticky-offset {
    top: 100px;
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
    background-color: #1061C9;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 256px;
}
.sidebar-collapsed {
    width: 70px;
}

/* Menu item*/
#sidebar-container .list-group a {
    height: 50px;
    color: white;
    /*background-color: rgb(49, 163, 216);*/
    background-color: #1061C9;
}
#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
    color: #03277D !important;
    background-color: #5891da !important;
    /*background-color: white;*/
      
}
/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a:hover{
    height: 45px;
    padding-left: 30px ;
    color:white !important;
    background-color: #0068FF !impoprtant;
    /*opacity:0.87;*/
}
.[aria-expanded="true"] {
    background-color: white;
    color: #1061C9;
    font-weight: bold;
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
 
 #clients{
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    background-color: #fff;
    border: 0; 
}

.divsize{
    height: 150px;
}
   p {
       color:white !important;
       font-size:25px;
        
   }
 .iphid{
       color:white !important;
       font-size:30px;
        font-weight: bold;
        text-align: center!important;
   }
  .tableth{
       background-color: #0267FD;
       color:white;
       font-size:25px !important;
       
   }
   table , td{
       color:#0149B4;
       /*font-size:25px;*/
   }
   .table td, .table th {
        font-size: 20px;
       
    }
    
   h3{
       color:#0149B4;
       padding-left:10px;
        font-size: 20px;
   }
    h4{
       color:#24B571;
   }
   
  #trasactioncount input[type=text] {
border: none;
background-color: #0267FD;
pointer-events: none;
}
   #trasactioncount{
       border-radius: 25px;
   background-color: #0267FD;
   }
   
   #trasactiontot input[type=text] {
border: none;
background-color: #24B571;
pointer-events: none;
}
   #trasactiontot{
       border-radius: 25px;
   background-color: #24B571;
   }
   
    #trasactiontot_ytd1 input[type=text] {
border: none;
background-color: #9D8AFF;
pointer-events: none;
}
   #trasactiontot_ytd1{
       border-radius: 25px;
   background-color: #9D8AFF;
   }
   
   #pendingtrasactioncount_to1 input[type=text] {
border: none;
background-color: #0149B4;
pointer-events: none;
}
   #pendingtrasactioncount_to1{
       border-radius: 25px;
   background-color: #0149B4;
   }
   
   #pendingtrasactiontot_to1 input[type=text] {
border: none;
background-color: #037253;
pointer-events: none;
}
   #pendingtrasactiontot_to1{
       border-radius: 25px;
   background-color: #037253;
   }
   
    #pendingtrasactiontot_ytd1 input[type=text] {
border: none;
background-color: #6857C4;
pointer-events: none;
}
   #pendingtrasactiontot_ytd1{
       border-radius: 25px;
   background-color: #6857C4;
   }
   #txtdetails{
 max-height: 300px;
    overflow-y: auto;
}
 input[type=search]{
   border-radius: 10px !important;
   /*border: 3px solid #85B95C;*/
   border: 2px solid grey;
   color: grey;
}
input[type=search]:focus{
   border-radius: 10px !important;
   /*border: 3px solid #85B95C !important;*/
   border: 2px solid grey !important;
   outline: none;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: grey !important;
  opacity: 1; /* Firefox */
  font-size:15px;
}
   .card1{
       border-radius: 13px;
      border: 1px solid grey !important;
   }
/*   thead, tbody {*/
/*    display: block;*/
/*}*/
.trx_history{
       overflow: auto;
max-height: 200px;
   }
th {
  background: #0267FD;
  position: sticky;
  top: 0; /* Don't forget this, required for the stickiness */
  /*box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);*/
}
.pagination>li>a, .pagination>li>span {
position: relative;
float: left;
padding: 6px 12px;
margin-left: -1px;
line-height: 1.42857143;
color: #337ab7;
text-decoration: none;
background-color: #fff;
border: 1px solid #ddd;
}
.pagination {
float: right !important;
}
.headh4{
        color:#0149B4;
        /*font-weight: bold;*/
       font-size:20px !important;
   }
    .sender_detail {
  color: blue !important;
    text-decoration: underline
}

.sender_detail:visited {
  text-decoration: none;
}

.sender_detail:hover {
  /*text-decoration: underline;*/
}
h2{
    color:#0149B4;
        font-weight: bold;
}
    </style>


<body>
    
    <?php
include '../navbar_admin.php';
?>
<div class="row" id="body-row">
 <?php
include '../sidebar_admin.php';
?>
<div class="col py-5">
    <input class="d-none" id="user_id" size="6" value="<?php echo $_SESSION['user_id'];?>">
    <!--<h4 class="headh4">Dashboard</h4>-->
    <h2>Dashboard</h2>
    <!--- 1st row--->
    
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4">
            <!-- CARD WITH HEADER -->
            <div class="">
               <a class=" edibtn2">
                <div class="card-body text-dark divsize" id="trasactioncount">
                    <center> <p class="lead">TRANSACTION COUNT (TODAY)</p>
                    <!--<center><p class="lead">12</p></center>-->
                    <input type="text"class="iphid" id="trasactioncount_to" size="2"></input></center>
                   <!--<button type="button" class="btn btn-primary edibtn2" data-toggle="modal"> Complete Task </button>-->
                </div>
               </a>

            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4" >
            <!-- CARD WITH HEADER -->
            <div class="">
                <a class=" edibtn3">
                <div class="card-body text-dark divsize" id="trasactiontot">
                     <center><p class="lead">TRANSACTION TOTALS (TODAY)</p>
                     <input class="iphid"type="text" id="trasactiontot_to" size="6"></input></center>
                    
                </div>
                </a>

            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4" >
            <!-- CARD WITH HEADER -->
            <div class="">
              <a class=" edibtn7">
                <div class="card-body text-dark divsize" id="trasactiontot_ytd1">
                    <center> <p class="lead">TRANSACTION TOTALS(YTD)</p>
                    <input  class="iphid"type="text" id="trasactiontot_ytd" size="6"></input></center>
                </div>
               </a>

            </div>  </div>
    </div>
</div>
<!--- 2nd row--->

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4 ">
            <!-- CARD WITH HEADER -->
            <div class="">
                 <a class=" edibtn4">
                <div class="card-body text-dark divsize" id="pendingtrasactioncount_to1" >
                    <center> <p class="lead">PENDING TRANSACTION COUNT (TODAY)</p>
                      <!--<center><p class="lead">6</p></center>-->
                      <input type="text" class="iphid"id="pendingtrasactioncount_to" size="2"></input></center>
                    
                </div>
                
</a>
            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4">
            <!-- CARD WITH HEADER -->
            <div class="">
                 <a class=" edibtn5">
                <div class="card-body text-dark divsize" id="pendingtrasactiontot_to1">
                   <center> <p class="lead">PENDING TRANSACTION TOTAL (TODAY)</p>
                   <input class="iphid"type="text" id="pendingtrasactiontot_to" size="6"></input></center>
                </div>
                </a>

            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4">
            <!-- CARD WITH HEADER -->
            <div class="">
                <a class=" edibtn6">
                <div class="card-body text-dark divsize" id="pendingtrasactiontot_ytd1">
                     <center><p class="lead">PENDING TRANSACTION TOTAL(YTD)</p>
                     <input class="iphid"type="text" id="pendingtrasactiontot_ytd" size="6"></input></center>
                </div>
               </a>

            </div>  </div>
    </div>
</div>
<hr>
<!--TRANSACTION DATA-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  mt-3">
            <!-- CARD WITH HEADER -->
            <div class="card card1">
                <div class="head">
                    <h3>TRANSACTION COUNT (TODAY)</h3>
                 
                </div>
                  <div class="ml-2">     <!--        Show Numbers Of Rows         -->
                      <!--        Show Numbers Of Rows         -->
                     <label><b>Rows Per Page</b></label>
                     <select class  ="" name="state" id="maxRows">
                         <!--<option value="1">Show ALL Rows</option>-->
                         <option value="5000">ALL</option>
                         <option value="5">5</option>
                         <option value="10">10</option>
                         <option value="15">15</option>
                         <option value="20">20</option>
                         <option value="50">50</option>
                         <option value="70">70</option>
                         <option value="100">100</option>
                        </select>
                         <input type="search" class="float-right mr-2" placeholder="" onkeyup="Find1()"   id="Findp1">

                        <label class="float-right"><b>Search by MTCN</b></label>
                   
                  </div>
                <div class="card-body text-dark " id="txtdetails">
                    
                    <div id="" class="trx_history">
                      
                    <table class="table table-boarderd" id="trasaction_data">
  <!--<thead>-->
    <tr class="tableth">
      <th scope="col">MTCN</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
       <th scope="col">Commision</th>
      <th scope="col">Discount</th>
      <th scope="col">Total</th>
     
    </tr>
  <!--</thead>-->
  
</table> 
<hr>
</div>
<div class='pagination-container' >
<nav>
<ul class="pagination">

<li data-page="prev" >
<span> Prev <span class="sr-only">(current)</span></span>
</li>
<!-- Here the JS Function Will Add the Rows -->
<li data-page="next" id="prev">
<span> Next <span class="sr-only">(current)</span></span>
</li>
</ul>
</nav>
</div>
</div>
              
            </div></div>
       

    </div>
</div>
<hr>
<!--Month Alert-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  mt-3">
            <!-- CARD WITH HEADER -->
            <div class="card card1">
                <div class="">
                    <h3>1 Month Alert - Greater Than $1000</h3>
                    

                </div>
                <div class="ml-2">    
                                <!--Show Numbers Of Rows         -->
                     <label><b>Rows Per Page</b></label>
                     <select class  ="" name="state" id="maxRows">
                         <!--<option value="1">Show ALL Rows</option>-->
                         <option value="5000">ALL</option>
                         <option value="5">5</option>
                         <option value="10">10</option>
                         <option value="15">15</option>
                         <option value="20">20</option>
                         <option value="50">50</option>
                         <option value="70">70</option>
                         <option value="100">100</option>
                        </select>
                        
                        
                   <input type="search" class="float-right mr-2" placeholder="" onkeyup="Find()"   id="Findp">
               <label class="float-right"><b>Search by Sender Name</b></label>

                  </div>
                <div class="card-body text-dark">
                    <div id="" class="trx_history">
                        
                    <table class="table table" id="txt_table">
  <thead>
    <tr class="tableth">
      <th scope="col">Sender Name</th>
      <th scope="col">Transaction count</th>
      <th scope="col">Transaction Total</th>
      <th scope="col">Watch List</th>
     
    </tr>
  </thead>
  
</table>
<hr>
<div class='pagination-container' >
                <nav>
                  <ul class="pagination">
            
            <li data-page="prev" >
                                     <span> Prev <span class="sr-only">(current)</span></span>
                                    </li>
                   <!--    Here the JS Function Will Add the Rows -->
        <li data-page="next" id="prev">
                                       <span> Next <span class="sr-only">(current)</span></span>
                                    </li>
                  </ul>
                </nav>
                </div></div>

</div>

               
            </div></div>
       

    </div>
</div>
<!--SAR List-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  mt-3">
            <!-- CARD WITH HEADER -->
            <div class="card card1">
                <div class="">
                    <h3>SAR List</h3>
                    
                </div>
                <div>
                <input type="search" class="float-right mr-2" placeholder="" onkeyup="Find2()"   id="Find2" >
<label class="float-right"><b>Search by MTCN</b></label>
</div>
                <div class="card-body text-dark">
                    <div id="" class="trx_history">
                        
                    <table class="table table" id="sarlist">
  <thead>
    <tr class="tableth">
      <th scope="col">Date</th>
      <th scope="col">MTCN</th>
      <th scope="col">Reason</th>
      <th scope="col">Risk Level</th>
      <th scope="col">User</th>
     
    </tr>
  </thead>
  
</table> 
<hr>
</div>
</div>
               
            </div></div>
       

    </div>
</div>
 </div>
 
 </div>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
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
function trasactiontot_to(){
$.ajax({
    url: "admintrasactiontot_to.php",
      dataType: "json",
      success: function(data) {
                        var location = data[0].total_amount;
                        
        //   alert(location);
          $('#trasactiontot_to').val(location);
            // $("#ytd").append(txt);
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    trasactiontot_to();

function trasactioncount_to(){
$.ajax({
    url: "admintrasactioncount_to.php",
      dataType: "json",
      success: function(data) {
                        var location = data[0].count1;
                        
        //   alert(location);
          $('#trasactioncount_to').val(location);
            // $("#ytd").append(txt);
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    trasactioncount_to();
     
     function display2(){
         $(".head h3").html("TRANSACTION COUNT (TODAY)");
         $("#trasaction_data td").remove(); 
        
$.ajax({
    url: "admintrasaction_to.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].li_id+"</td><td><a class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].Date+"</td><td>"+location[i].Amount+"</td><td class=''>"+location[i].Commision_Charges +"</td><td>"+location[i].Discount+"</td><td>"+location[i].Total+"</td></tr>";
                            $("#trasaction_data").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    display2();
    
    
    function trasactiontot_ytd(){
$.ajax({
    url: "admintrasactiontot_ytd.php",
      dataType: "json",
      success: function(data) {
                        var location = data[0].Transaction_Totals;
                        
        //   alert(location);
          $('#trasactiontot_ytd').val(location);
            // $("#ytd").append(txt);
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    trasactiontot_ytd();
    
    function pendingtrasactioncount_to(){
$.ajax({
    url: "adminpendingtrasactioncount_to.php",
      dataType: "json",
      success: function(data) {
                        var location = data[0].count1;
                        
        //   alert(location);
          $('#pendingtrasactioncount_to').val(location);
            // $("#ytd").append(txt);
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    pendingtrasactioncount_to();
    
     function pendingtrasactiontot_to(){
$.ajax({
    url: "adminpendingtrasactiontot_to.php",
      dataType: "json",
      success: function(data) {
                        var location = data[0].Pending_Amount;
                        
        //   alert(location);
          $('#pendingtrasactiontot_to').val(location);
            // $("#ytd").append(txt);
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    pendingtrasactiontot_to();
    
    function pendingtrasactiontot_ytd(){
$.ajax({
    url: "adminpending_transaction_ytd.php",
      dataType: "json",
      success: function(data) {
                        var location = data[0].Transaction_Totals;
                        
        //   alert(location);
          $('#pendingtrasactiontot_ytd').val(location);
            // $("#ytd").append(txt);
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    pendingtrasactiontot_ytd();
    
    $(document).on('click','.edibtn2',function(){
         $(".head h3").html("TRANSACTION COUNT (TODAY)");
         $('.head h3').css('color', '#0267FD');
    //  function display2(){
    $("#trasaction_data td").remove(); 
    
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "admintrasaction_to.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].li_id+"</td><td><a  class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].Date+"</td><td>"+location[i].Amount+"</td><td class=''>"+location[i].Commision_Charges +"</td><td>"+location[i].Discount+"</td><td>"+location[i].Total+"</td></tr>";
                       $("#trasaction_data").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    });
    $(document).on('click','.edibtn3',function(){
         $(".head h3").html("TRANSACTION TOTALS (TODAY)");
         $('.head h3').css('color', '#24B571');
    //  function display2(){
    $("#trasaction_data td").remove(); 
    
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "admintrasaction_to.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].li_id+"</td><td><a class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].Date+"</td><td>"+location[i].Amount+"</td><td class=''>"+location[i].Commision_Charges +"</td><td>"+location[i].Discount+"</td><td>"+location[i].Total+"</td></tr>";
                            $("#trasaction_data").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    });
     
 $(document).on('click','.edibtn7',function(){
         $(".head h3").html("TRANSACTION TOTALS(YTD)");
         $('.head h3').css('color', '#9D8AFF');
    //  function display2(){
    $("#trasaction_data td").remove(); 
    
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "admintrasaction_ytd.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].li_id+"</td><td><a class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].trans_send_date+"</td><td>"+location[i].amt_to_send+"</td><td class=''>"+location[i].comm_charges +"</td><td>"+location[i].discount+"</td><td>"+location[i].received_amount+"</td></tr>";
                            $("#trasaction_data").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    });
    
    $(document).on('click','.edibtn4',function(){
         $(".head h3").html("PENDING TRANSACTION COUNT (TODAY)");
         $('.head h3').css('color', '#0149B4');
    //  function display2(){
    $("#trasaction_data td").remove(); 
    
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "adminpending_transaction_to.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].li_id+"</td><td><a class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].date_time+"</td><td>"+location[i].amt_to_send+"</td><td class=''>"+location[i].comm_charges +"</td><td>"+location[i].discount+"</td><td>"+location[i].received_amount+"</td></tr>";
                            $("#trasaction_data").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    });
    
     $(document).on('click','.edibtn5',function(){
         $(".head h3").html("PENDING TRANSACTION TOTAL (TODAY)");
         $('.head h3').css('color', '#037253');
    //  function display2(){
    $("#trasaction_data td").remove(); 
    
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "adminpending_transaction_to.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].li_id+"</td><td><a class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].date_time+"</td><td>"+location[i].amt_to_send+"</td><td class=''>"+location[i].comm_charges +"</td><td>"+location[i].discount+"</td><td>"+location[i].received_amount+"</td></tr>";
                            $("#trasaction_data").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    });
    
    $(document).on('click','.edibtn6',function(){
         $(".head h3").html("PENDING TRANSACTION TOTAL(YTD)");
    //  function display2(){
    $('.head h3').css('color', '#6857C4');
    $("#trasaction_data td").remove(); 
    
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "pending_transaction_ytd.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].li_id+"</td><td><a  class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].date_time+"</td><td>"+location[i].amt_to_send+"</td><td class=''>"+location[i].comm_charges +"</td><td>"+location[i].discount+"</td><td>"+location[i].received_amount+"</td></tr>";
                            $("#trasaction_data").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    });
    
      function display1(){
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "greaterthanthousand.php",
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

 

                    txt = "<tr><td class='d-none'>"+location[i].Transactions_id +"</td><td>"+location[i].Sender_Name+"</td><td>"+location[i].transaction_count+"</td><td>"+location[i].Transaction_Total+"</td><td>"+location[i].Watch+"</td></tr>";
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
    
     function sarlist(){
        //   var user_id = 37;
         var user_id=document.getElementById('user_id').value;
$.ajax({
    url: "sarlist.php",
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

 

                   txt = "<tr><td>"+location[i].Date+"</td><td class='d-none'>"+location[i].li_id+"</td><td><a  class='sender_detail' href='sender_detail.php?li_id="+location[i].li_id+"' >"+location[i].mtcn+"</a></td><td>"+location[i].reason+"</td><td>"+location[i].risk_level+"</td><td>"+location[i].user_name+"</td></tr>";
                              $("#sarlist").append(txt);
                    }
                }
         
            
            },
      error: function(jqXHR, textStatus, errorThrown){
          console.log('error: ' + textStatus + ': ' + errorThrown);
         
         }
    });
    
    }
    sarlist();
    
    
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

function Find1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Findp1");
  filter = input.value.toUpperCase();
  table = document.getElementById("trasaction_data");
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






 function Find2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Find2");
  filter = input.value.toUpperCase();
  table = document.getElementById("sarlist");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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
    
 
    //pagination
getPagination('#trasaction_data');
function getPagination(table) {
  var lastPage = 1;

 

  $('#maxRows')
    .on('change', function(evt) {
      //$('.paginationprev').html('');                        // reset pagination

 

     lastPage = 1;
      $('.pagination')
        .find('li')
        .slice(1, -1)
        .remove();
      var trnum = 0; // reset tr counter
      var maxRows = parseInt($(this).val()); // get Max Rows from select option

 

      if (maxRows == 5000) {
        $('.pagination').hide();
      } else {
        $('.pagination').show();
      }

 

      var totalRows = $(table + ' tbody tr').length; // numbers of rows
      $(table + ' tr:gt(0)').each(function() {
        // each TR in  table and not the header
        trnum++; // Start Counter
        if (trnum > maxRows) {
          // if tr number gt maxRows

 

          $(this).hide(); // fade it out
        }
        if (trnum <= maxRows) {
          $(this).show();
        } // else fade in Important in case if it ..
      }); //  was fade out to fade it in
      if (totalRows > maxRows) {
        // if tr total rows gt max rows option
        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
        //    numbers of pages
        for (var i = 1; i <= pagenum; ) {
          // for each page append pagination li
          $('.pagination #prev')
            .before(
              '<li data-page="' +
                i +
                '">\
                                  <span>' +
                i++ +
                '<span class="sr-only">(current)</span></span>\
                                </li>'
            )
            .show();
        } // end for i
      } // end if row count > max rows
      $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
      $('.pagination li').on('click', function(evt) {
        // on click each page
        evt.stopImmediatePropagation();
        evt.preventDefault();
        var pageNum = $(this).attr('data-page'); // get it's number

 

        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

 

        if (pageNum == 'prev') {
          if (lastPage == 1) {
            return;
          }
          pageNum = --lastPage;
        }
        if (pageNum == 'next') {
          if (lastPage == $('.pagination li').length - 2) {
            return;
          }
          pageNum = ++lastPage;
        }

 

        lastPage = pageNum;
        var trIndex = 0; // reset tr counter
        $('.pagination li').removeClass('active'); // remove active class from all li
        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
        // $(this).addClass('active');                    // add active class to the clicked
          limitPagging();
        $(table + ' tr:gt(0)').each(function() {
          // each tr in table not the header
          trIndex++; // tr index counter
          // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
          if (
            trIndex > maxRows * pageNum ||
            trIndex <= maxRows * pageNum - maxRows
          ) {
            $(this).hide();
          } else {
            $(this).show();
          } //else fade in
        }); // end of for each tr in table
      }); // end of on click pagination list
      limitPagging();
    })
    .val(5000)
    .change();

 

  // end of on select change

 

  // END OF PAGINATION
}

 

function limitPagging(){
    // alert($('.pagination li').length)

 

    if($('.pagination li').length > 7 ){
            if( $('.pagination li.active').attr('data-page') <= 3 ){
            $('.pagination li:gt(5)').hide();
            $('.pagination li:lt(5)').show();
            $('.pagination [data-page="next"]').show();
        }if ($('.pagination li.active').attr('data-page') > 3){
            $('.pagination li:gt(0)').hide();
            $('.pagination [data-page="next"]').show();
            for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
                $('.pagination [data-page="'+i+'"]').show();

 

            }

 

        }
    }
}

    //pagination
getPagination('#txt_table');
function getPagination(table) {
  var lastPage = 1;

 

  $('#maxRows')
    .on('change', function(evt) {
      //$('.paginationprev').html('');                        // reset pagination

 

     lastPage = 1;
      $('.pagination')
        .find('li')
        .slice(1, -1)
        .remove();
      var trnum = 0; // reset tr counter
      var maxRows = parseInt($(this).val()); // get Max Rows from select option

 

      if (maxRows == 5000) {
        $('.pagination').hide();
      } else {
        $('.pagination').show();
      }

 

      var totalRows = $(table + ' tbody tr').length; // numbers of rows
      $(table + ' tr:gt(0)').each(function() {
        // each TR in  table and not the header
        trnum++; // Start Counter
        if (trnum > maxRows) {
          // if tr number gt maxRows

 

          $(this).hide(); // fade it out
        }
        if (trnum <= maxRows) {
          $(this).show();
        } // else fade in Important in case if it ..
      }); //  was fade out to fade it in
      if (totalRows > maxRows) {
        // if tr total rows gt max rows option
        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
        //    numbers of pages
        for (var i = 1; i <= pagenum; ) {
          // for each page append pagination li
          $('.pagination #prev')
            .before(
              '<li data-page="' +
                i +
                '">\
                                  <span>' +
                i++ +
                '<span class="sr-only">(current)</span></span>\
                                </li>'
            )
            .show();
        } // end for i
      } // end if row count > max rows
      $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
      $('.pagination li').on('click', function(evt) {
        // on click each page
        evt.stopImmediatePropagation();
        evt.preventDefault();
        var pageNum = $(this).attr('data-page'); // get it's number

 

        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

 

        if (pageNum == 'prev') {
          if (lastPage == 1) {
            return;
          }
          pageNum = --lastPage;
        }
        if (pageNum == 'next') {
          if (lastPage == $('.pagination li').length - 2) {
            return;
          }
          pageNum = ++lastPage;
        }

 

        lastPage = pageNum;
        var trIndex = 0; // reset tr counter
        $('.pagination li').removeClass('active'); // remove active class from all li
        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
        // $(this).addClass('active');                    // add active class to the clicked
          limitPagging();
        $(table + ' tr:gt(0)').each(function() {
          // each tr in table not the header
          trIndex++; // tr index counter
          // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
          if (
            trIndex > maxRows * pageNum ||
            trIndex <= maxRows * pageNum - maxRows
          ) {
            $(this).hide();
          } else {
            $(this).show();
          } //else fade in
        }); // end of for each tr in table
      }); // end of on click pagination list
      limitPagging();
    })
    .val(5000)
    .change();

 

  // end of on select change

 

  // END OF PAGINATION
}

 

function limitPagging(){
    // alert($('.pagination li').length)

 

    if($('.pagination li').length > 7 ){
            if( $('.pagination li.active').attr('data-page') <= 3 ){
            $('.pagination li:gt(5)').hide();
            $('.pagination li:lt(5)').show();
            $('.pagination [data-page="next"]').show();
        }if ($('.pagination li.active').attr('data-page') > 3){
            $('.pagination li:gt(0)').hide();
            $('.pagination [data-page="next"]').show();
            for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
                $('.pagination [data-page="'+i+'"]').show();

 

            }

 

        }
    }
}


 
     </script> 
</body>
</html>