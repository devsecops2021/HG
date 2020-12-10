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
<title>Page Title</title>
</head>
<style>
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
   
/*   .close button:hover {*/
/*  color: white !important;*/
/*}*/
   
/*div {*/
  /*height: 200px;*/
/*  width: 100%;*/
/*  background-color: powderblue;*/
/*}*/
.divsize{
    height: 150px;
}
   
   .iphid{
   border: none;
   border-color: transparent;
   pointer-events: none;
   }
   /*p,input{*/
   /*    color:white;*/
   /*}*/
   #trasactioncount ,input{
       
   background-color: #0267FD;
   }
   #trasactiontot_ytd1{
       
   background-color: #024B571 !important;
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
<div class="col py-3">
    <!--- 1st row--->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4">
            <!-- CARD WITH HEADER -->
            <div class="card">
               
                <div class="card-body text-dark divsize" id="trasactioncount">
                     <p class="lead">TRANSACTION COUNT (TODAY)</p>
                    <!--<center><p class="lead">12</p></center>-->
                    <center><input class="iphid" id="trasactioncount_to" size="3"></input></center>
                </div>
               

            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4" >
            <!-- CARD WITH HEADER -->
            <div class="card">
               
                <div class="card-body text-dark divsize" id="trasactiontot">
                     <p class="lead">TRANSACTION TOTALS (TODAY)</p>
                     <center><input class="iphid" id="trasactiontot_to" size="6"></input></center>
                    
                </div>
                

            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4" >
            <!-- CARD WITH HEADER -->
            <div class="card">
               
                <div class="card-body text-dark divsize" id="trasactiontot_ytd1">
                     <p class="lead">TRANSACTION TOTALS(YTD)</p>
                    <center><input class="iphid" id="trasactiontot_ytd" size="6"></input></center>
                </div>
                

            </div>  </div>
    </div>
</div>
<!--- 2nd row--->

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4 ">
            <!-- CARD WITH HEADER -->
            <div class="card">
                
                <div class="card-body text-dark divsize">
                     <p class="lead">PENDING TRANSACTION COUNT (TODAY)</p>
                      <!--<center><p class="lead">6</p></center>-->
                      <center><input class="iphid" id="pendingtrasactioncount_to" size="2"></input></center>
                    
                </div>
                

            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4">
            <!-- CARD WITH HEADER -->
            <div class="card">
                
                <div class="card-body text-dark divsize">
                     <p class="lead">PENDING TRANSACTION TOTAL (TODAY).</p>
                   <center><input class="iphid" id="pendingtrasactiontot_to" size="6"></input></center>
                </div>
                

            </div>  </div>
        <div class="col-sm-6 col-md-8 col-lg-6 col-xl-4">
            <!-- CARD WITH HEADER -->
            <div class="card">
                
                <div class="card-body text-dark divsize">
                     <p class="lead">PENDING TRANSACTION TOTAL(YTD).</p>
                     <center><input class="iphid" id="pendingtrasactiontot_ytd" size="6"></input></center>
                </div>
               

            </div>  </div>
    </div>
</div>

<!--TRANSACTION DATA-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  mt-3">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="">
                    <h3>TRANSACTION COUNT (TODAY) </h3>
                    <input type="search" class="float-right" placeholder="Search by Sender Name" onkeyup="Find()" size="30"  id="Findp">

                </div>
                <div class="card-body text-dark">
                    <table class="table table-bordered" id="trasaction_data">
  <thead>
    <tr>
      <th scope="col">MTCN</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
       <th scope="col">Commision</th>
      <th scope="col">Discount</th>
      <th scope="col">Total</th>
     
    </tr>
  </thead>
  
</table> </div>
               
            </div></div>
       

    </div>
</div>

<!--Month Alert-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  mt-3">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="">
                    <h3>1 Month Alert - Greater Then $1000</h3>
                    <input type="search" class="float-right" placeholder="Search by Sender Name" onkeyup="Find()" size="30"  id="Findp">

                </div>
                <div class="card-body text-dark">
                    <table class="table table-bordered" id="txt_table">
  <thead>
    <tr>
      <th scope="col">Transactions_id</th>
      <th scope="col">Sender_Name</th>
      <th scope="col">Transaction_Total</th>
     
    </tr>
  </thead>
  
</table> </div>
               
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
// $(document).on('click','.edibtn',function(){
function trasactioncount_to(){
            var user_id = 37;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/trasactioncount_to.php/?user_id="+user_id,
                  method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                   
                 $('#trasactioncount_to').val(data.count1);
                          }
            });
     }
     trasactioncount_to();
     
     function trasactiontot_to(){
            var user_id = 37;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/trasactiontot_to.php/?user_id="+user_id,
                  method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    
                 $('#trasactiontot_to').val(data.total_amount);
                 
       
                }
            });
     }
     trasactiontot_to();
     
     function trasactiontot_ytd(){
            var user_id = 37;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/trasactiontot_ytd.php/?user_id="+user_id,
                  method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    
                 $('#trasactiontot_ytd').val(data.Transaction_Totals);
                 
       
                }
            });
     }
     trasactiontot_ytd();
     
     function pendingtrasactioncount_to(){
            var user_id = 37;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/pendingtrasactioncount_to.php/?user_id="+user_id,
                  method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    
                 $('#pendingtrasactioncount_to').val(data.count1);
                 
       
                }
            });
     }
     pendingtrasactioncount_to();
     
     function pendingtrasactiontot_to(){
            var user_id = 37;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/pendingtrasactiontot_to.php/?user_id"+user_id,
                  method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    
                 $('#pendingtrasactiontot_to').val(data.Pending_Amount);
                 
       
                }
            });
     }
     pendingtrasactiontot_to();
     
     function pendingtrasactiontot_ytd(){
            var user_id = 37;
            $.ajax({
                url:"http://markaz.online/rmt/dashboard_fetchdata/pendingtrasactiontot_ytd.php/?user_id"+user_id,
                  method:"GET",
                data:{user_id,user_id},
                dataType:"json",
                success:function(data){
                    
                 $('#pendingtrasactiontot_ytd').val(data.Transaction_Totals);
                 
       
                }
            });
     }
     pendingtrasactiontot_ytd();
    
    
      function display1(){
          var user_id = 37;
$.ajax({
    url: "http://markaz.online/rmt/dashboard_fetchdata/greaterthanthousand.php/?user_id="+user_id,
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
          var user_id = 37;
$.ajax({
    url: "http://markaz.online/rmt/dashboard_fetchdata/trasaction_to.php/?user_id="+user_id,
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

 

                    txt = "<tr><td class=''>"+location[i].mtcn +"</td><td>"+location[i].Date+"</td><td>"+location[i].Amount+"</td><td class=''>"+location[i].Commision_Charges +"</td><td>"+location[i].Discount+"</td><td>"+location[i].Total+"</td></tr>";
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