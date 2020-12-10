<?php
session_start();
 $_SESSION['user_id'];
  $_SESSION['username'];
  	include '../config1.php';


if(isset($_GET["li_id"]) && !empty(trim($_GET["li_id"]))){
   // Get URL parameter
   $li_id =  trim($_GET["li_id"]);
// echo $li_id;
// exit();
}?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
     
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
     <!--<link rel="stylesheet" href="../style.css"> -->
   <title></title>
   <style>
body {
    padding-top: 70px;
   font-family: 'Poppins';
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
   
#clients{
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    background-color: #fff;
    border: 0; 
}

nav {
       background-color:blue !important;
   }
.edibtn {
    background-color: #F39625;
    color: white;
    font-weight: bold;
     border-radius: 10px;
}
table, th{
    color : #85B95C;
    font-weight: bold !important;
    font-size: 18px !important;
    /*text-align: center;*/
}
table, td {
   color : #1061C9;
   font-size: 16px !important;
    /*text-align: center; */
}
.btn-sm{
  background-color : #1061C9 !important;  
  color: white;
  font-weight: bold;
  border-radius: 10px;
  padding: 0px;
}
.btn:hover{
    color: white !important;
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
}
.table td, .table th {
     padding: 0px; 
    vertical-align: baseline;
     /*border-top: 2px solid grey;*/
    /*border-top: 1px solid #dee2e6;*/
}
table.table th, table.table td {
     padding-top: 0px; 
     padding-bottom: 0px; 
}
.add{
      background-color: #F39625;
    /*color: white;*/
    /*background-color : #1061C9 !important;  */
  color: white;
  font-weight: bold;
  border-radius: 10px;
  padding: 0px; 
  float: right;
}
h3{
    color:#14487A !important;
    font-weight: bold;
}
h5{
    color:#14487A !important;
    font-weight: bold;
}


.bg{
       background-color:#14487A;
       color: white;
       
   }
   
  .clear{
      background-color: #85B95C;
    /*color: white;*/
    /*background-color : #1061C9 !important;  */
  color: white;
  font-weight: bold;
  border-radius: 10px;
  padding: 0px; 
  /*float: right;*/
       /*background-color:#F39625 !important;*/
       /*color: white;*/
   }
   
     .btn-default{
       background-color:#85B95C !important;
       color: white;
   }
   
   .close{
       color:white !important;
   }
   
.add{
background-color : #F39625  !important;  
color: white;
font-weight: bold;
border-radius: 10px;
padding: 0px; 
float: right;
}
.save{
background-color:#85B95C !important;
color: white;
font-weight: bold;
border-radius: 10px;
padding: 0px; 
/*float: right;*/
}

.clear{
background-color:#F39625 !important;
color: white;
font-weight: bold;
border-radius: 10px;
padding: 0px; 
/*margin-left:15px;*/
}   
#bottom_buttons{
    margin-top:20px;
}
select {
        width: 210px;
        /*margin: 10px;*/
    }
    select:focus {
        min-width: 210px;
        width: auto;
    }
   
/*   .close button:hover {*/
/*  background-color: yellow !important;*/
/*}*/

   
   
   /*Modals Styling Ends*/
   
   /*Pagination*/
       .pagination li:hover{
    cursor: pointer;
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
#sender_card{
    border-radius: 25px;
    padding: 10px;
    box-shadow: 0px 6px #F39625;
    border: 1px solid #F39625 !important;
    
    /*width:500px;*/
}
#benificiary_card{
    border-radius: 25px;
    padding: 10px;
    box-shadow: 0px 6px #1061C9;
    border: 1px solid #1061C9 !important;
    /*margin-left:70px;*/
    }
#status_card{
    border-radius: 25px;
    padding: 10px;
    box-shadow: 0px 6px #85B95C;
    border: 1px solid #85B95C !important;
    /*margin-left:70px;*/
    }
#mth_card{
    border-radius: 30px;
    padding: 10px;
    box-shadow: 0px 6px #F39625;
    border: 1px solid #F39625 !important; 
}
/*#employment_card{*/
/*    border-radius: 25px;*/
/*    padding: 10px;*/
/*    box-shadow: 0px 6px #1061C9;*/
/*    border: 1px solid #1061C9 !important; */
/*}*/
/*#contact_card{*/
/*    border-radius: 25px;*/
/*    padding: 10px;*/
/*    box-shadow: 0px 6px #1061C9;*/
/*    border: 1px solid #1061C9 !important; */
/*}*/
/*#identification_img_card{*/
/*    border-radius: 25px;*/
/*    padding: 10px;*/
/*    box-shadow: 0px 6px #1061C9;*/
/*    border: 1px solid #1061C9 !important; */
/*}*/
#maxRows {
    background-color: #1061C9;
    color: #FFFFFF;
    border-radius:5px;
}
#update_modal_input19 {
border: 2px solid transparent;
border-radius: 0;
}
.hide {
  display: none;
}

.btn {
  color:white;
}

.plus {
  padding: 6px 10px;
  font-size: 17.5px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  background-color:#85B95C;
}

.splus {
  padding: 6px 10px;
  font-size: 17.5px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  background-color:#85B95C;
    margin-right: 15px;
}

#thumb1 {
  margin: 15px 0 0 0;
  border: 2px solid #ddd;
}
#thumb2 {
  margin: 15px 0 0 0;
  border: 2px solid #ddd;
}
.left_style{
    margin-top:20px;
    margin-left:-20px;
}
input[type="text"] {
  width: 120px;
  /*border: 2px solid grey;*/
  /*border-radius: 4px;*/
  color:#85B95C;
  border: none;
background-color: transparent;
pointer-events: none;
}
#current_status{
  width: 150px;
  /*border: 2px solid grey;*/
  /*border-radius: 4px;*/
  color:#85B95C;
  border: none;
background-color: transparent;
pointer-events: none;
}
/*#my_table th {*/
/*    color:#85B95C;*/
/*}*/
    </style>



</head>
<body> 
<!-- Bootstrap NavBar -->
<?php
include '../navbar_admin.php';
?>
<!-- NavBar END -->


<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <?php
include '../sidebar_admin.php';
?>
    <!-- sidebar-container END -->

    <!-- MAIN -->
    <div class="col py-5">
<div class="container">
            <div class="row">
         <h3>Agent Transaction Details</h3>
          
         <!--<a id="add_customer" href="http://markaz.online/rmtv0/customer_agent/customer_show_theme1.php"  class="btn btn-md add mb-4">Create New Customer </a>-->
            <a href="dashboard.php" class="btn btn-md add ml-auto">Back To List</a>
            <!--<button class="btn btn-md add ml-auto " onclick="create_form()" id="modalstyle">Create</button>-->
            </div>
          </div>
          



<div class="container-fluid" >
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <!-- CARD WITH HEADER -->
            <div class="card" id="sender_card">
                <!--<div class="card-header">-->
                   <h5><b>Sender</b></h5>
                <!--</div>-->
                <!--<form action="customer_create.php" method="post">-->
                <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body text-dark ">
 <table>
<tr>
<!--<td><label for="name">LI ID</label></td>-->
<td><input class="d-none" type="text" name="li_id" id="li_id"value="<?php echo $li_id; ?>"></td>
</tr>
<tr>
<td><label for="name">Transaction Code</label></td>
<td><input class="" type="text" name="mtcn" id="mtcn" disabled></td>
<!--<td><label for="idtype">ID Card</label></td>-->
<!--<td><input class="" name="image" type="text" id="image" disabled></td>-->
<td><label for="name">ID Card</label></td>
<!--<td><input class="d-none" type="file" id="image"  name="image"  onchange="preview1()" ></td>-->
<td><img id="thumb1"/ width="100px"></td>
</tr>
<!--<td>-->
<!--<div class="file_input_wrap">-->
<!--<input type="file" name="image" id="image" class="hide" onchange="preview1()"/>-->
<!--<label for="image" class="btn btn-large plus">ID Card</label>-->
<!--</div>-->
<!--</td>-->
<!--<td>-->
<!--<div class="img_preview_wrap">-->
<!--<img src="" id="thumb1" alt="No Image found" width="100px" class="show" />-->
<!--</div>-->
<!--</td>-->
<td><label for="name">Sender</label></td>
<td><input class="" type="text" name="sender_name" id="sender_name" disabled></td>
<td><label for="name">Secondary ID No</label></td>
<td><input class="" type="text" name="sec_id_number" id="sec_id_number" disabled></td>
</tr>
<tr>
<td><label for="name">Sender Tel</label></td>
<td><input class="" name="phone"type="text" id="phone" disabled></td>
<td><label for="name">Secondary ID Type</label></td>
<td><input class="" name="secondary_id"type="text" id="secondary_id" disabled></td>
</tr>
<tr>
<td><label for="name">Sender City</label></td>
<td><input class="" name="city"type="text" id="city" disabled></td>
<td><label for="name">Secondary ID Card</label></td>
<!--<td><input class="" name="second_idimg" type="text" id="second_idimg" disabled></td>-->
<!--<td><input class="" type="file" id="update_modal_input28"  name="second_idimg"  onchange="preview2()" size="10"></td> -->
<td><img id="thumb2"/ width="100px"></td>

<!--<td>-->
<!--<div class="file_input_wrap">-->
<!--<input type="file" name="second_idimg" id="second_idimg" class="hide" onchange="preview2()"/>-->
<!--<label for="second_idimg" class="btn btn-large splus">+</label>-->
<!--</div>-->
<!--</td>-->
<!--<td>-->
<!--<div class="img_preview_wrap">-->
<!--<img src="" id="thumb2" alt="No Image found" width="100px" class="show" />-->
<!--</div>-->
<!--</td>-->
</tr>
<tr>
<td><label for="name">From Agent</label></td>
<td><input type="text" id="from_agent" name="from_agent" disabled></td>
</tr>
<tr>
<td>
<label for="address">Sender Address</label></td>
<td><input type="text" id="address" name="address" disabled></td>
</tr>
<tr>
<td>
<label for="id_type">ID Type</label></td>
<td><input type="text" id="id_type" name="id_type" disabled></td>
</tr>
<tr>
<td><label for="name">ID No</label></td>
<td><input class="" type="text" name="id_number" id="id_number" disabled></td>
</tr>
<tr>
<td><label for="name">Issue Date</label></td>
<td><input class="" type="text" name="issue_date" id="issue_date" disabled></td>
</tr>
<tr>
<td><label for="name">Exp Date</label></td>
<td><input class="" type="text" name="exp_date" id="exp_date" disabled></td>
</tr>
<tr>
<td><label for="name">DOB</label></td>
<td><input class="" type="text" name="dob" id="dob" disabled></td>
</tr>
</table>
                </div>
    
            </div>  </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" id="benificiary_card">
                <!--<div class="card-header">-->
                    <h5><b>Beneficiary</b></h5>
                <!--</div>-->
                <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body text-dark">
<table>
<tr>
<td><label for="name">Dated</label></td>
<td><input class="" type="text" name="date" id="date" disabled></td>
</tr>
<tr>
<td><label for="to_agent">To Agent</label></td>
<td><input class="" type="text" name="to_agent" id="to_agent" disabled></td>
</tr>
<tr>
<td><label for="receiver_name">Beneficiary</label></td>
<td><input class="" type="text" name="receiver_name" id="receiver_name" disabled></td>
</tr>
<tr>
<td><label for="state">Beneficiary Tel</label></td>
<td><input class="" type="text" name="cell_phone" id="cell_phone" disabled></td>
</tr>
<tr>
<td><label for="city">Amount</label></td>
<td><input class="" type="text" name="amount" id="amount" disabled></td>
</tr>

<tr><td><label for="paid_date">Dated Paid</label></td>
<td><input class="" type="text" name="paid_date" id="paid_date" disabled></td>
</tr>
<tr><td><label for="zip_code">Beneficiary City</label></td>
<td><input class="" type="text" name="beneficiary_city" id="beneficiary_city" disabled></td>
</tr>
</table>
                </div>
    
            </div>  </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" id="status_card">
                <!--<div class="card-header">-->
                    <!--<h4><b>Beneficiary</b></h4>-->
                <!--</div>-->
                <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body text-dark">
<table>
<tr>
<td><label for="name">Send Amount</label></td>
<td><input class="" type="text" name="send_amount" id="send_amount" disabled></td>
</tr>
<tr>
<td><label for="receivable_amount">Receivable Amount</label></td>
<td><input class="" type="text" name="receivable_amount" id="receivable_amount" disabled></td>
</tr>
<td><label for="commission_charges">Commission Charges</label></td>
<td><input class="" type="text" name="commission_charges" id="commission_charges" disabled></td>
</tr>
<tr>
<td><hr>
<label for="current_status">Current Status</label></td>
</tr>
<tr>
<td>
    <input class="" type="text" name="current_status" id="current_status" disabled></td>
</tr>

<tr>
<td><hr>
    <label for="approval_status">Approval Status</label></td>
</tr>
<tr>
<td>
    <input class="" type="text" name="approval_status" id="approval_status" disabled></td></tr>

</table>
                </div>
    
            </div>  </div>
        
    </div>
</div>

<div class="container-fluid mt-3">
    <div class="row">
      
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1">
            
            <div class="card" id="mth_card">

<h5><b>Money Transaction History</b></h5>                    
               
                <div class="card-body text-dark">

<table class = "table table" id="my_table">
			<tr id="table_row">
			    <th class="d-none">ID</th>
			    <th>User With Type</th>
			    <th>Date</th>
			    <th>Status</th>
			    <th>Remarks</th>
			    <th>Additional Remarks</th>
			    </tr>
			<tbody>
<?php 
// echo $li_id;
$sql = "SELECT * FROM vagetransmt WHERE li_id ='". $li_id. "'";

// $sql = "SELECT * FROM `vagetransmt` where li_id = '".$_POST["li_id"]."'";
$result = mysqli_query($conn, $sql);
//   $c_id = 0;
while($row = mysqli_fetch_assoc($result)){
// $c_id = $c_id + 1;
// $row['c_id'] =$_SESSION['c_id'];
echo "<tr>

<td class='d-none'>". $row['li_id'] . "</td>
<td>". $row['user_with_type'] . "</td>
<td>". $row['date'] . "</td>
<td>". $row['status'] . "</td>
<td>". $row['remarks'] . "</td>
<td>". $row['additional_remarks'] . "</td>

</tr>";
//   $_SESSION['c_id'] =$row['c_id'];
} 
?>
</tbody>
</table>
                </div>
 
            </div>  </div>
       
    </div>

</form>

    </div>
    <!-- Main Col END -->

</div>
<!-- body-row END -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- JQuery -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
<script>
$('#image').change(function() {
  readImgUrlAndPreview(this);

  function readImgUrlAndPreview(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        // $('#thumb1').removeClass('hide').attr('src', e.target.result);
      }
    };
    reader.readAsDataURL(input.files[0]);
  }
});

$('#second_idimg').change(function() {
  readImgUrlAndPreview(this);

  function readImgUrlAndPreview(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        // $('#thumb2').removeClass('hide').attr('src', e.target.result);
      }
    };
    reader.readAsDataURL(input.files[0]);
  }
});

function preview1() {
      thumb1.src=URL.createObjectURL(event.target.files[0]);
}
function preview2() {
      thumb2.src=URL.createObjectURL(event.target.files[0]);
}

var li_id1= document.getElementById('li_id').value;
// alert(li_id1);
    function get_user() {
$.ajax({
                url:"agent_transaction_read_single.php/?li_id="+li_id1,
                
                dataType:"json",
                success:function(data){
                 $('#mtcn').val(data.mtcn);
                 $('#sender_name').val(data.sender_name);                 
                 $('#phone').val(data.phone);
                 $('#city').val(data.city);
                  $('#from_agent').val(data.from_agent);
                $('#address').val(data.address);
                 $('#id_type').val(data.id_type);
                 $('#id_number').val(data.id_number);
                 $('#issue_date').val(data.issue_date);
                 $('#exp_date').val(data.exp_date);
                 $('#dob').val(data.dob);
                dbimageVal = data.image;
                $('#thumb1').prop('src', dbimageVal);
                 $('#sec_id_number').val(data.sec_id_number);
                 $('#secondary_id').val(data.secondary_id);
                  dbimageVal2 = data.second_idimg;
                $('#thumb2').prop('src', dbimageVal2);
                 
                 
                 $('#date').val(data.date);
                 $('#to_agent').val(data.to_agent);
                 $('#receiver_name').val(data.receiver_name);
                 $('#cell_phone').val(data.cell_phone);
                 $('#amount').val(data.amount);
                 $('#paid_date').val(data.paid_date);
                 $('#beneficiary_city').val(data.beneficiary_city);
                 
                
                 $('#send_amount').val(data.send_amount);
                 $('#receivable_amount').val(data.receivable_amount);
                  $('#commission_charges').val(data.comm_charges);
                 $('#current_status').val(data.current_status);
                $('#approval_status').val(data.approval_status);
            
                }
            });
}
get_user();
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
</script>
</body>
</html>