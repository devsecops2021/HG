<?php
session_start();
 $_SESSION['user_id'];
  $_SESSION['username'];
$_SESSION['first_name'];
// $_SESSION['first_name'];
 $c =  $_SESSION['user_id'].'-'.$_SESSION['first_name'];
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
<title>Agent-Dashbaord</title>
</head>
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
 
    </style>


<body>
    
    <?php
include '../navbar.php';
?>
<div class="row" id="body-row">
 <?php

include '../sidebar.php';
?>
<div class="col py-5">
   
    <h3>Agent Bank Transfer To RO </h3>
    <div class="container">
<div class="row">
<!--<button class="btn btn-md add ml-auto"  id="modalstyle">Create</button>-->
<!--<button type="button" class="btn btn-md add ml-auto" data-toggle="modal" data-target="#myModal" id="modalstyle"> <b>Create</b></button>-->
</div>
</div>

<div class="card">
<div class="container">
<div class="float-left">
<div class="form-group">     <!--        Show Numbers Of Rows         -->
<label><b>Rows per Page</b></label>
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


</div>
</div>
<div class=" float-right">
<input type="search" class="mt-2" placeholder="Search by Agent name" onkeyup="Find()" minlength="2" maxlength="10" size="20"  id="Findp">
</div>
</div>

<table class = "table table" id="my_table">
<tr id="table_row">
<th class="">ID</th>
<th>Agent Name</th>
<th>Transaction Amount</th>
<!--<th>Transaction Type</th>-->
<th>Deposite</th>
<th>Action</th>
</tr>
<tbody>


</tbody>
</table>
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
</div>
</div>

<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <table class="modal_style">
            <!--<form action="agent_deposite_create.php" method="post" enctype="multipart/form-data">-->
            
            <tr>
<td>Agent Name</td>
<td>
<input type="text" name="agent_name"  id="create_modal_input1" readonly>
</td>
<td>
<input type="text" class="" name="bt_id"  id="create_modal_input8" readonly>
<td>
<input type="text" class="" name="approved_by"  id="approved_by" readonly value="<?php echo $_SESSION['user_id'];?>"><td>
</tr>
<tr>
<td>Deposite Amount</td>
<td>
<input type="text" name="deposit_amount"  id="create_modal_input2" readonly>
</td>
<td>Conversion Amount</td>
<td>
<input type="text" name="conversion_amount" placeholder="" id="create_modal_input3" readonly>
</td>
</tr>
<tr>
<td>Transaction NO.</td>
<td>
<input type="text" name="transaction_no" placeholder="Transaction NO" id="create_modal_input4" readonly>
</td>
<td>Transaction Date</td>
<td>
<input type="date" name="transaction_date"  id="create_modal_input5" readonly>
</td>
</tr>
<tr>
<td>Account No.</td>
<td>
<input  type="text" id="create_modal_input6" name="account_no" readonly></td>
</tr>
</table>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
          <button  class="btn btn-md add" type="submit" id="butcomplete">Save</button>
        </div>
      </form>  
      </div>
    </div>
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
function display(){
$.ajax({
url: "agent_deposite_read.php",
dataType: "json",
success: function(data) {
// var customer = JSON.parse(data);
var customer = data;
if($.trim(customer)==''){console.log("No Data");}
var len = customer.length;
var txt = "";
if(len > 0){
for(var i=0;i<len;i++)
{



txt = "<tr><td>"+customer[i].bt_id+"</td><td>"+customer[i].agent_name+"</td><td>"+customer[i].deposit_amount+"</td><td>"+customer[i].transaction_date+"</td><td><button class='edibtn'><i class=''>select</i></button></td></tr>";
$("#my_table").append(txt);
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
        $tr = $(this).closest('tr');
            var d = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            var bt_id = d[0];

            // alert(c_id);
            $.ajax({
                url:"agent_deposite_read_single.php",
                 method:"GET",
                data:{bt_id,bt_id},
                dataType:"json",
                success:function(data){
                    // console.log(data);
                 $('#create_modal_input8').val(data.bt_id);
                 $('#create_modal_input1').val(data.agent_name);
                 $('#create_modal_input2').val(data.deposit_amount);
                 $('#create_modal_input3').val(data.conversion_amount);
                 $('#create_modal_input6').val(data.account_no);
                 $('#create_modal_input4').val(data.transaction_no);
                 $('#create_modal_input5').val(data.transaction_date);
                //   $('#updgid').val(data.groupnumber);
          $('#myModal').modal('show');
                }
            });
     });
     
     $(document).ready(function() {
	$('#butcomplete').on('click', function() {
	    var r = confirm('Do you want to complete this record?');
if (r == true)
{
	
// 		var approval_status=1;
		var approved_by = $('#approved_by').val();
		var bt_id = $('#create_modal_input8').val();
			$.ajax({
				url: "update.php",
				type: "POST",
				data: {
					approved_by:approved_by,
					bt_id: bt_id
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
				 		alert("Record complete successfully !")
				//  		window.location.assign('compliance_review.php');
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
	});
});
</script>
</body>
</html>