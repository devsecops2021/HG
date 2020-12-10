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
<title></title>
</head>
<style>
body {
    padding-top: 70px;
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
 .add{
   border:none;
background-color: #F39625;
color: white;
border-radius:10px;
 font-size:11px !important;
}
th{
       color:#24B571;
       font-size:16px !important;
   }
   td{
       color:#0149B4;
       font-size:14px !important;
   }
   h3{
       color:#24B571;
   }
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
.card{
  border-radius: 25px;

 padding: 10px;

 box-shadow: 0px 6px #85B95C;


 border: 1px solid #85B95C !important;
}
#maxRows {
background-color: #1061C9;
color: #FFFFFF;
border-radius: 5px;
}
   .read_only{
    background-color: lightgrey !important;
}
.modal-content{

border-radius: 25px !important;
padding: 10px;
box-shadow: 0px 6px #F39625 !important;
border: 1px solid #F39625 !important;

 }
  .modal-content td{
     color:#85B95C !important;
      font-size:14px !important;
 }
 .modal-content tr{
      padding: 200px;
 }
 .headh3{
  color: #14487A !important;
    font-weight: bold;
    /*font-size:18px !important;*/
}

 .save{
background-color:#85B95C !important;
color: white;
font-size:11px !important;
border-radius: 10px;
padding: 0px;
/*float: right;*/
}
/*label{*/
/*    color:#85B95C !important;*/
/*}*/
input{
    border-radius: 7px;
}
.close1{
    background-color:#F39625 !important;
color: white;
border-radius: 10px;
padding: 0px;
 font-size:11px !important;
}
table.table th, table.table td {
    padding-top: 0rem;
    padding-bottom: 0rem;
}
 
    </style>


<body>
    
    <?php
include '../navbar_agent.php';
?>
<div class="row" id="body-row">
 <?php

include '../sidebar_agent.php';
?>
<div class="col py-5">
   
   
    <div class="container">
<div class="row">
     <h3 class="headh3">Settlement</h3>
<!--<button class="btn btn-md add ml-auto"  id="modalstyle">Create</button>-->
<button type="button" class="btn btn-md add ml-auto" data-toggle="modal" data-target="#myModal" id="modalstyle"> <b>Create</b></button>
</div>
</div>

<div class="card">
<div class="container">
<div class="float-left">
<div class="form-group">     <!--        Show Numbers Of Rows         -->
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


</div>
</div>
<div class=" float-right">
<label>Search by Name</label><input type="search" class="mt-2" onkeyup="Find()" minlength="2" maxlength="10" size="25"  id="Findp">
</div>
</div>

<table class = "table table" id="my_table">
<tr style="text-align:center" id="table_row">
<th class="d-none">ID</th>
<th>Agent Name</th>
<th style="text-align:right">Amount($)</th>
<th>Approval Status</th>
<th>Approved By</th>
<th>Transaction Date</th>
</tr>
<tbody>


</tbody>
</table>
<hr style="margin-top:-15px;">
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
  
  
  
  
  <div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content sm">
      <div class="modal-header">
        <h3 class="headh3" >Settlement</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <table class="table table-sm table-borderless" id="">
       <form action="agent_deposite_create.php" method="post" enctype="multipart/form-data" onsubmit="return validatoin();">
            
            <tr class="d-none">
<td >Agent Name<span style="color:red;">*</span></td>


<td>
    
<input type="text" name="agent_name" class="read_only d-none" id="create_modal_input1" readonly value="<?php echo $c;?>">
</td>
</tr>
<tr>
<td>
<input type="text" class="d-none" name="user_id"  id="create_modal_input8" readonly value="<?php echo $_SESSION['user_id'];?>">
<input class="d-none" type="text" id="created_by" name="created_by" autocomplete="off" readonly>
</td>
</tr>
<tr>
<td>Deposit Amount<span style="color:red;">*</span></td>
<td>
<input type="text" name="deposit_amount" id="create_modal_input2" autocomplete="off"   onkeyup="conversionamt();">&nbsp;<span style="color:#0068FF;">$</span>
</td>
</tr>
<tr>
<td>Conversion Amount</td>
<td>
<input type="text" name="conversion_amount" id="create_modal_input3" readonly>&nbsp;<span style="color:#0068FF;">$</span>
</td>
</tr>
<tr>
<td>Transaction NO.</td>
<td>
<input type="text" name="transaction_no" id="create_modal_input4" autocomplete="off" minlenght="5" maxlength="20">
</td>
</tr>
<tr>
<td>Transaction Date</td>
<td>
<input type="date" name="transaction_date"  id="create_modal_input5" >
</td>
</tr>
<tr>
<td>Account No.</td>
<td>
<input  type="text" id="create_modal_input6" name="account_no" autocomplete="off" maxlength="30"></td>
</tr>
<tr>
<td>Transaction Type</td>
<td><select name="transaction_type" id="transaction_type" >
  <option value="0">Select</option>
  <option value="1">Cash</option>
  <option value="2">Online</option>
  <option value="3">Cheque</option>
</select>
<!--<input  type="text" id="create_modal_input6" name="transaction_type" placeholder="Account No." autocomplete="off" maxlength="30"></td>-->
</tr>
<tr>
<td>Image</td>
<td>
<input type="file" name="document_1"  id="create_modal_input7">
</td>
</tr>
</table>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-md close1" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-md save" type="submit">Save</button>-->
        <button  class="btn btn-md save" type="submit" onclick="">Save</button>
     </form>
      </div>
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
function conversionamt(){
   var amt = document.getElementById("create_modal_input2").value;
//   alert(amt);
   document.getElementById("create_modal_input3").value=amt;
}
function display(){
     var user_id= document.getElementById('create_modal_input8').value;
     
$.ajax({

 url:"agent_depo_read.php/?user_id="+user_id,
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



txt = "<tr><td class='d-none'>"+customer[i].bt_id+"</td><td style='text-align:center'>"+customer[i].agent_name+"</td><td style='text-align:right'>"+customer[i].deposit_amount+"</td><td style='text-align:center'>"+customer[i].Approval_Status+"</td><td style='text-align:center'>"+customer[i].Approved_By+"</td><td style='text-align:center'>"+customer[i].transaction_date+"</td></tr>";
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
function user_details() {
     var agent_id = document.getElementById("create_modal_input8").value;
        
	    $.ajax({
	        
                url: "user_credit.php/?user_id="+agent_id,
                //  method:"GET",
                //data:{email1,email1},
                dataType:"json",
                success:function(data){
			if($.trim(data)==''){console.log("No Data"); }
            $('#created_by').val(data.created_by);
         
                },
	error: function(jqXHR, textStatus, errorThrown){
           //alert('error: ' + textStatus + ': ' + errorThrown);
          console.log('error: ' + textStatus + ': ' + errorThrown);
		 }
            });
     } 

user_details();
 
 
 //pagination
getPagination('#my_table');
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
function Find() {
var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("Findp");
filter = input.value.toUpperCase();
table = document.getElementById("my_table");
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
function validatoin(){
     var input = document.getElementById("create_modal_input2").value;
var input_length = document.getElementById("create_modal_input2").value.length;
if(input == ''){
alert("Deposite input field is empty");
return false;
}
else if(input_length < 2){
alert(" Deposite input field should contain minimum 2 characters");
return false;
}
    
}
</script>
</body>
</html>