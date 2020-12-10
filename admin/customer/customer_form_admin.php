<!DOCTYPE html>
<html lang="en">
<head>
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
  <link rel="stylesheet" href="/resources/demos/style.css">
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
   
/*   .close button:hover {*/
/*  color: white !important;*/
/*}*/
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
  <!--<div> -->
  <tr>
      <!--<td>-->
<h3 style="color: #14487A; "><strong>Customer Information </strong></h3>
<!--</td>-->
<!--<td>-->
<!--<a href="customer_show_theme1.php" class="btn float-right bg">Back To List</a>-->
<!--</td>-->
<!--</tr>-->
<!--</div>-->
<!--2st row card-->
<div class="container-fluid mt-3" >
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-1">
            <!-- CARD WITH HEADER -->
            <div class="card">
                <div class="card-header bg">
                   <center> <b><h4>Name</b></h4></center>
                </div>
                <!--<form action="customer_create.php" method="post">-->
                <form action="customer_create.php" method="post" enctype="multipart/form-data">
                <div class="card-body text-dark ">
 <table>
<tr>
<td><label for="name">First Name<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="first_name" id="create_modal" placeholder="First Name" 
onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
autocomplete="off" minlength="3" maxlength="15" required></td>
</tr>
<tr>
<td><label for="name">Middle</label></td>
<td><input class="" name="middle_name"type="text" id="middle_name" placeholder="Middle Name" minlength="3" maxlength="15"></td>
</tr>
<tr>
<td><label for="name">Last Name<span style="color:red;">*</span></label></td>
<td><input class="" name="last_name"type="text" id="create_modal_input1" placeholder="Last Name" 
onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'
autocomplete="off" minlength="3" maxlength="15" required></td>
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
<td><input class="" type="text" name="company_name" id="create_modal_input2" placeholder="Company Name" 
onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
autocomplete="off" minlength="5" maxlength="20"></td>
</tr>
<tr>
<td><label for="name">Title</label></td>
<td><input class="" type="text" name="title"id="create_modal_input3" placeholder="Job Title" 
onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
autocomplete="off" minlength="5" maxlength="20"></td>
</tr>
<tr>
<td><label for="name">Phone</label></td>
<td><input class="" type="text" name="phone" id="create_modal_input4" placeholder="(555)555-1212" autocomplete="off" maxlength="20" 
onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
</tr>
<!--<tr>-->
<!--<td><label for="name">Ext</label></td>-->
<!--<td><input class="" type="text" name="ext" id="ext" placeholder="1234"></td>-->
<!--</tr>-->
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
<td><label for="name">Cell Phone<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="cell_phone" id="create_modal_input5" placeholder="(555)555-1212" 
onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off" maxlength="20" required></td>
</tr>
<tr>
<td><label for="name">Home Phone<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="home_phone" id="create_modal_input6" placeholder="(555)555-1212" 
onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off" maxlength="10" required></td>
</tr>
<tr>
<td><label for="name">Email<span style="color:red;">*</span></label></td>
<td><input class="" type="email" name="email_id" id="create_modal_input7" placeholder="info@rmt.com" autocomplete="off" maxlength="25" required></td>
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
                <!--<form action="customer_create.php" method="post">-->
                <form action="customer_create.php" method="post" enctype="multipart/form-data">
                <div class="card-body text-dark">
<table>
<tr>
<td><label for="name">Address<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="address"id="create_modal_input8" placeholder="1234 Anywhere St" autocomplete="off" minlength="5" maxlength="30" required></td>
</tr>
<tr>
<td><label for="apt_suite">Apt/Suite<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="apt_suite" id="create_modal_input22" placeholder="#1234" autocomplete="off" minlength="5" maxlength="30" required></td>
</tr>
<tr>
<td><label for="country">Country<span style="color:red;">*</span></label></td>
<!--<td><input class="" type="text" name="country" id="country" placeholder="Country"></td>-->
<!--<td>-->
<!--<select class="form-control" id="create_modal_input9" name="country">-->

<!--    </select>-->
<!--</td>-->
                    <td>
                        <select name="country" id="create_modal_input9" required>
<option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select></td>

</tr>
<tr>
<td><label for="state">State<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="state"id="create_modal_input10" placeholder="State" autocomplete="off" minlength="5" maxlength="20" 
onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'required></td>
</tr><tr>
<td><label for="city">City<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="city" id="create_modal_input11" placeholder="City" autocomplete="off" minlength="5" maxlength="20" 
onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'required></td>
</tr>
<!--<tr>-->
<!--<td>-->
<!--<label for="name">State <span style="color:red;">*</span></label>-->
<!--</td>-->
<!--<td><input class="" type="text" name="state" id="state" placeholder="State"></td>-->
<!--<td>-->
<!--<select class="form-control" id="create_modal_input10" name="state">-->
<!--<option value="">Select a State</option>-->
<!--    </select>-->
<!--</td>-->
<!--</tr>-->
<!--<tr><td><label for="city">City <span style="color:red;">*</span></label></td>-->
<!--<td>-->
<!--<select name="city" id="create_modal_input11">-->
<!--<option value="">--select--</option>-->
<!--<option value="city1">city1</option>-->
<!--<option value="city2">city2</option>-->
<!--<option value="mercedes">Mercedes</option>-->
<!--<option value="audi">Audi</option>-->
<!--</select></td>-->
<!--</tr>-->
<tr><td><label for="zip_code">ZIP/PostCode<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="zip_postcode" id="create_modal_input12" placeholder="44125" 
onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off" minlength="5" maxlength="15" required></td>

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
<label for="idtype">ID Type<span style="color:red;">*</span></label></td>
<td><select name="id_type" id="create_modal_input13">
<option value="">--select--</option>
<option value="Driving Licence">Driving Licence</option>
<option value="DOB Cerificate">DOB Cerificate</option>
</select></td>

<tr>
<td><label for="name">ID No.<span style="color:red;">*</span></label></td>
<td><input class="" name="id_number" type="text" id="create_modal_input14"
onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32)) ||(event.charCode >= 48 && event.charCode <= 57)'

placeholder="ID No." autocomplete="off" minlength="5" maxlength="20" required></td>

</tr>
<tr><td><label for="issued_by">Issued By<span style="color:red;">*</span></label></td>
<td><input class="" type="text" name="issued_by" id="create_modal_input15" placeholder="" autocomplete="off" minlength="5" maxlength="20" required></td>

</tr>
<tr>
<td><label for="name">Issue Date<span style="color:red;">*</span></label></td>
<td><input type="text" placeholder="" name="issue_date" id="create_modal_input16" autocomplete="off" required></td>

</tr>
<tr>
<td><label for="name">Expiry Date<span style="color:red;">*</span></label></td>
<td><input type="text" placeholder="" id="create_modal_input17" name="exp_date" autocomplete="off" required><td>
</tr>
<tr>
<td><label for="name">DOB<span style="color:red;">*</span></label></td>
<td><input type="text" placeholder="" id="create_modal_input18" name="birthday" autocomplete="off" required></td>
<!--<td><input type="date" id="birthday" name="birthday" placeholder="dd-mm-yyyy"></td>-->
</tr>
<tr>
<td> 
<label for="secondaryid">Secondary Identification<span style="color:red;">*</span></label></td>
<td><select name="secondary_id" id="secondary_id">
<option value="">--select--</option>
<option value="Driving Licence">Driving Licence</option>
<option value="DOB Cerificate">DOB Cerificate</option>
</select></td>
</tr>
<tr>
<td><label for="name">ID No(Secondary Identification)<span style="color:red;">*</span></label></td>
<td><input class="" type="sec_id_number" id="sec_id_number" name="sec_id_number"placeholder="ie.T123456789" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32)) ||(event.charCode >= 48 && event.charCode <= 57)'
 autocomplete="off" minlength="5" maxlength="20" required></td>
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
<td><label for="name">Image<span style="color:red;">*</span></label></td>
<!--<td><input class="" type="file" id="create_modal_input19"name="image" onchange="preview1()"></td>-->
<!--<img id="thumb1"/>-->
<td><input class="" type="file" id="create_modal_input19"  name="image"  onchange="preview1()"></td> 
<img id="thumb1"/>
</tr>
<tr>
<td>
<label for="birthcountry">Birth Country<span style="color:red;">*</span></label></td>
<td><select name="birth_country" id="create_modal_input20">
<option value="">--Select--</option>
<option value="India">India</option>
<option value="USA">USA</option>
</select></td>
</tr>
<tr>
<td>
<label for="cars">Citizenship<span style="color:red;">*</span></label></td>
<td><select name="citizenship" id="create_modal_input21">
<option value="">--select--</option>
<option value="USA">USA</option>
<option value="Indian">Indian</option>
</select></td>
</tr>
<tr>
<td>Comments</td>
<td><textarea id="comments" name="comments" rows="3" cols="25" minlength="5" maxlength="40"></textarea>
</td>
</tr>
</table>

                </div>
              
            </div>  </div>
    </div>
</div>
<!--<input type="submit" class="ml-auto bg" value="Add Customer">-->
<button class="btn bg" type="submit" onclick="return create_validation()">Add Customer</button>
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
$(document).ready(function() {
$("#create_modal_input16").datepicker({
    dateFormat:'yy-mm-dd',
	maxDate: 0,
	});
});
$(document).ready(function() {
$("#create_modal_input17").datepicker({
    dateFormat:'yy-mm-dd',
	minDate: 0,
	});
});
$(document).ready(function() {
$("#create_modal_input18").datepicker({
    dateFormat:'yy-mm-dd',
	maxDate: 0,
	});
});
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
// let countries = [{id:1,name:'USA'},{id:2,name:'UK'},
//                 {id:3,name:'Somalia'},{id:4,name:'Kenya'}];

// let states = [{countri_id:1,name:'Alabama'},{countri_id:1,name:'Alaska'},
//                 {countri_id:1,name:'Arizona'},
//                 {countri_id:2,name:'England'},{countri_id:2,name:'Scotland'},
//                 {countri_id:2,name:'Ireland'},
//                 {countri_id:3,name:'Benadir'},{countri_id:3,name:'Burao'},
//                 {countri_id:3,name:'Hargeisa'},
//                 {countri_id:4,name:'state1'},{countri_id:4,name:'state2'},
//                 {countri_id:4,name:'state3'},{countri_id:4,name:'state4'}
//                 ];

// // GEt the HTML Elements
// let countrieSelectBox = document.querySelector('#create_modal_input9');
// let stateSelectBox = document.querySelector('#create_modal_input10');

// // display brands on the page
// let brandOptions = `<option value="">Select a Countrie</option>`;
// for(let countrie of countries){
//     // brandOptions += `<option value="${countri_id}">${countrie.name}</option>\n`;
//      brandOptions += `<option value="${countrie.id}">${countrie.name}</option>\n`;
// }
// countrieSelectBox.innerHTML = brandOptions;

// // Change Event on Brand SelectBox
// countrieSelectBox.addEventListener('change',function() {
//     let selectedId = Number.parseInt(countrieSelectBox.value);
//     let selectedstates = states.filter(function(state) {
//         return state.countri_id === selectedId;
//     });
//     let modelOptions = `<option value="">Select a State</option>`;
//     for(let state of selectedstates){
//         modelOptions += `<option>${state.name}</option>\n`;
//     }
//     stateSelectBox.innerHTML = modelOptions;
// });
</script>
</body>
</html>