<?php
$servername = "localhost";
$username = "markaklq";
$password = "HyQsoft!@34";
$database = "markaklq_rmt_tst";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


if(isset($_GET["c_id"]) && !empty(trim($_GET["c_id"]))){
   // Get URL parameter
   $c_id =  trim($_GET["c_id"]);

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
     <link rel="stylesheet" href="../style.css"> 
   <title></title>
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
  #thumb1 {
width: 60%;
height: 70%;

}
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
    <div class="col py-3">
   
<h3 style="color: #14487A; "><strong>View Customer Information </strong></h3>
<!--2st row card-->
<div class="container-fluid mt-3" >
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-1">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="card-header bg">
                   <center> <b><h4>Name</b></h4></center>
                </div>
                <form action="" method="post">
                <div class="card-body text-dark ">
                     <table>
                    <tr>
                        <input class="d-none" type="text" name="c_id" id="c_id"value="<?php echo $c_id; ?>">
                    <td><label for="name">First Name<span style="color:#14487A;">*</span></label></td>
                    <td><input class="" type="text" name="first_name" id="first_name" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="name">Middle</label></td>
                    <td><input class="" name="middle_name"type="text" id="middle_name" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="name">Last Name<span style="color:#14487A;">*</span></label></td>
                    <td><input class="" name="last_name"type="text" id="last_name" readonly></td>
                    </tr>
                    
</table>
                </div>
    
            </div>  </div>
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-1">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="card-header bg">
                   <center> <b><h4>Employment</b></h4></center>
                </div>
                <div class="card-body text-dark">
                     <table>
                <tr>
                    <td><label for="name">Company</label></td>
                    <td><input class="" type="text" name="company_name" id="company_name" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="name">Title</label></td>
                    <td><input class="" type="text" name="title"id="title" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="name">Phone</label></td>
                    <td><input class="" type="number" name="phone" id="phone" readonly></td>
                    </tr>
                    
</table>
                </div>
 
            </div>  </div>
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-1">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="card-header bg">
             <center>     <b>  <h4>Contact Information</b></h4></center>
                </div>
                <div class="card-body text-dark">
                      <table>
                <tr>
                    <td><label for="name">Cell Phone <span style="color:#14487A;">*</span></label></td>
                    <td><input class="" type="number" name="cell_phone" id="cell_phone" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="name">Home Phone <span style="color:#14487A;">*</span></label></td>
                    <td><input class="" type="homephone" name="home_phone" id="home_phone" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="name">Email <span style="color:#14487A;">*</span></label></td>
                    <td><input class="" type="text"name="email_id" id="email_id" readonly></td>
                    </tr>
</table>
                </div>
              
            </div>  </div>
    </div>
</div>
<div class="container-fluid mt-3">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-1">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="card-header bg">
                    <center><h4><b>Customer Address</b></h4></center>
                </div>
                <form action="customer_create.php" method="post">
                <div class="card-body text-dark">
                     <table>
                <tr>
                    <td><label for="name">Address <span style="color:#14487A;">*</span></label></td>
                    <td><input class="" type="text" name="address"id="address" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="apt_suite">Apt/Suit</label></td>
                    <td><input class="" type="text" name="apt_suite" id="apt_suite" readonly></td>
                    </tr>
                    <tr>
                    <td><label for="country">Country <span style="color:#14487A;">*</span></label></td>
                    <!--<td><input class="" type="text" name="country" id="country" placeholder="Country"></td>-->
                  <td>
                        <!--<select class="form-control" id="country" name="country">-->

                        <!--        </select>-->
                    <input class="" type="text" name="country" id="country" readonly>
                    </td>
                    </tr>
                    <tr>
                    <td><label for="name">State <span style="color:#14487A;">*</span></label></td>
                    <!--<td><input class="" type="text" name="state" id="state" placeholder="State"></td>-->
                <td>
         <!--               <select class="form-control" id="state" name="state">-->
         <!--<option value="">Select a State</option>-->
         <!--                       </select>-->
                    <input class="" type="text" name="state" id="state" readonly>
                    </td>
                </tr>
                <tr><td><label for="city">City <span style="color:#14487A;">*</span></label></td>
                    <td>
<!--                    <select name="city" id="city">-->
<!--                        <option value="">--select--</option>-->
<!--  <option value="city1">city1</option>-->
<!--  <option value="city2">city2</option>-->
<!--  <option value="mercedes">Mercedes</option>-->
<!--  <option value="audi">Audi</option>-->
<!--</select></td>-->
                    <input class="" type="text" name="city" id="city" readonly>
                    </tr>
                    <tr><td><label for="zip_code">ZIP/PostCode <span style="color:#14487A;">*</span></label></td>
                    <td><input class="" type="text" name="zip_postcode" id="zip_postcode" readonly></td>
                    
                    </tr>
</table>
                </div>
    
            </div>  </div>
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-1">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="card-header bg ">
                    <center><h4><b>Identification</b></h4></center>
                </div>
                <div class="card-body text-dark">
                    <table>
                <tr>
                    <td>
                    <label for="idtype">ID Type <span style="color:#14487A;">*</span></label></td>
                    <td>
<!--                        <select name="id_type" id="id_type">-->
<!--                        <option value="">--select--</option>-->
<!--  <option value="drivingliances">Driving Liances</option>-->
<!--  <option value="dob">DOB Cerificate</option>-->
<!--</select>-->
<input class="" type="text" name="id_type" id="id_type" readonly>
</td>
                    
                    <tr>
                    <td><label for="name">ID No. <span style="color:#14487A;">*</span></label></td>
                    <td><input class="" name="id_number" type="text" id="id_number" readonly></td>
                      
                    </tr>
                    <tr><td><label for="issued_by">Issued By <span style="color:#14487A;">*</span></label></td>
                    <td><input class="" type="text" name="issued_by" id="issued_by" readonly></td>
                    
                    </tr>
                    <tr>
                    <td><label for="name">Issue Date <span style="color:#14487A;">*</span></label></td>
                    <td><input type="text" placeholder="dd-mm-yyyy" name="issue_date" id="issue_date" readonly></td>
                    
                    </tr>
                    <tr>
                    <td><label for="name">Expiry Date <span style="color:#14487A;">*</span></label></td>
                    <td><input type="text" id="exp_date" name="exp_date" readonly><td>
                    </tr>
                    <tr>
                    <td><label for="name">DOB <span style="color:#14487A;">*</span></label></td>
                    <td><input type="text" id="birthday" name="birthday" readonly></td>
                    <!--<td><input type="date" id="birthday" name="birthday" placeholder="dd-mm-yyyy"></td>-->
                    </tr>
                    <tr>
                    <td>
                    <label for="secondaryid">Secondary Identification</label></td>
                    <td>
<!--                        <select name="secondary_id" id="secondary_id">-->
<!--                        <option value="">--select--</option>-->
<!--  <option value="drivingliances">Driving Licence</option>-->
<!--  <option value="dob">DOB Cerificate</option>-->
<!--</select>-->
<input class="" type="text" name="secondary_id" id="secondary_id" readonly>
</td>
                    </tr>
                    <tr>
                    <td><label for="name">ID No(Secondary Identification)</label></td>
                    <td><input class="" type="sec_id_number" id="sec_id_number" name="sec_id_number" readonly></td>
                    </tr>
</table>
                </div>
 
            </div>  </div>
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-1">
            
            <div class="card">
                <div class="card-header bg">
                  <center>  <h4><b>Identification Image</b></h4></center>
                </div>
                <div class="card-body text-dark">
                      <table>
                <tr>
                    <td><label for="name">Image <span style="color:#14487A;">*</span></label></td>
                    <!--<td><input class="" type="file" id="create_modal_input19" name="ifile" onchange="preview1()"></td>-->
                    <img id="thumb1"/>
                    </tr>
                    <tr>
                   <td>
                    <label for="birthcountry">Birth Country <span style="color:#14487A;">*</span></label></td>
                    <td>
<!--                        <select name="birth_country" id="birth_country">-->
<!--  <option value="">--Select--</option>-->
<!--  <option value="india">India</option>-->
<!--  <option value="USA">USA</option>-->
<!--</select>-->
<input class="" type="text" name="birth_country" id="birth_country" readonly>
</td>
</tr>
                    <tr>
                    <td>
                    <label for="cars">Citizenship <span style="color:#14487A;">*</span></label></td>
                    <td>
<!--                        <select name="citizenship" id="citizenship">-->
<!--  <option value="">--select--</option>-->
<!--  <option value="USA">USA</option>-->
<!--  <option value="indian">Indian</option>-->
<!--</select>-->
<input class="" type="text" name="citizenship" id="citizenship" readonly>
</td>
</tr>
<tr>
    <td>Comments</td>
    <td><textarea id="comments" name="comments" rows="3" cols="25" readonly></textarea>
    </td>
    </tr>
</table>

                </div>
              
            </div>  </div>
    </div>
</div>
<!--<input type="submit" class="ml-auto bg" value="Add Customer">-->
<!--<button class="btn bg" type="submit" onclick="return create_validation()">Update Customer</button>-->
</form>

    </div>
    <!-- Main Col END -->

</div>
<!-- body-row END -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<!--<script type="text/javascript" src="validation.js"></script>-->
<script>
                      
var c_id1= document.getElementById('c_id').value;
// alert(c_id1);
    function get_user() {
$.ajax({
                url:"customer_read_single.php/?c_id="+c_id1,
                
                dataType:"json",
                success:function(data){
                 $('#first_name').val(data.first_name);
                 $('#middle_name').val(data.middle_name);
                 $('#last_name').val(data.last_name);
                 $('#company_name').val(data.company_name);
                 $('#title').val(data.title);
                 $('#phone').val(data.phone);
                 $('#cell_phone').val(data.cell_phone);
                 $('#home_phone').val(data.home_phone);
                 $('#email_id').val(data.email_id);
                 $('#address').val(data.address);
                 $('#apt_suite').val(data.apt_suite);
                 $('#country').val(data.country);
                 $('#state').val(data.state);
                 $('#city').val(data.city);
                 $('#zip_postcode').val(data.zip_postcode);
                 $('#id_type').val(data.id_type);
                 $('#id_number').val(data.id_number);
                 $('#issued_by').val(data.issued_by);
                  $('#issue_date').val(data.issue_date);
                 $('#exp_date').val(data.exp_date);
                 $('#birthday').val(data.birthday);
                 $('#secondary_id').val(data.secondary_id);
                 $('#sec_id_number').val(data.sec_id_number);
                  dbimageVal = data.image;
                $('#thumb1').prop('src', dbimageVal);
                 $('#birth_country').val(data.birth_country);
                 $('#citizenship').val(data.citizenship);
                 $('#comments').val(data.comments);
                }
            });
}
get_user();

function preview1() {
      thumb1.src=URL.createObjectURL(event.target.files[0]);
}
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