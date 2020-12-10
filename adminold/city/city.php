<?php
$_SESSION['heading'] = "City";
?>
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
        <!--<center><h2><b>City</b></h2></center>-->
<div class="container">
    <div class="card-body text-dark" id="schedulecard">
        <div class="container">

<div class="row">
    
 
 <button type="button" class="btn ml-auto" data-toggle="modal" data-target="#create_city" id="modalstyle"> <b>Create</b></button>
             </div>


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
                    <input type="search" class="float-right" placeholder="Search" onkeyup="Find()" maxlength="20" size="30"  id="Findp">

                  </div>
            <table class = " table table-bordered" id="my_table">
			<tr id="table_row">
			    <th>ID</th>
			    <th>Country</th>
			    <th>State</th>
			    <th>City </th>
			    <th>Action </th>
			</tr>
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
			</div>
		</div>	
		

<!--Modal for add product -->
 
<div class="modal fade" id="create_city" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" direction="rtl">
<div class="modal-dialog" role="document">
    
<!--Modal content-->
    <div class="modal-content">
        
        <div class="modal-header bg">
        
        <h4 class="modal-title" id="exampleModalLabel">  City </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        
        <form action="city_create.php" method="post" enctype="multipart/form-data">
        
       
        <div class="modal-body">
            
        <table class="table table-sm table-borderless">
            <thead>

                            </thead>
                            <tbody>
                <tr>
                    <td scope="1"><label for="country">Country <span style="color:red;">*</span></label></td>
                    <td scope="4" class="text-left">
                        <div class="form-group">
                        <select class="form-control" id="create_modal" name="country" required></div>
                    <option value="0">--Select--</option>
                    <option value="Country1">Country 1</option>
                    <option value="Country2">Country 2</option>
                    <option value="Country3">Country 3</option>
                    <option value="Country4">Country 4</option>
                    </select></td>
                </tr>
                <tr>
                    <td scope="1"><label for="state">State <span style="color:red;">*</span></label></td>
                    <td scope="4" class="text-left">
                        <div class="form-group">
                        <select class="form-control" id="create_modal_input1" name="state" required></div>
                    <option value="0">--Select--</option>
                    <option value="State1">State 1</option>
                    <option value="State2">State 2</option>
                    <option value="State3">State 3</option>
                    <option value="State2">State 4</option>
                    </select></td>
                </tr>
                <tr>
                    <td scope="1"><label for="name">City <span style="color:red;">*</span></label></td>
                    <td scope="4" class="text-left"> 
                    <div class="form-group ">
                    <input class="form-control" type="text" id="create_modal_input2" name="city" placeholder="City" autocomplete="off" maxlength="20"
                    onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required></td></div>
                </tr>
                </tbody>
</table>
        
        
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" onclick="return create_validation()">Save</button>
        <button type="button" class="btn btn-default" onclick="this.form.reset();">Clear</button>   
                   
        </div>
        </form>
        </div>
        
    </div>
</div>
</div> 
			
<!-- update modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" direction="rtl">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg">
      <h5 class="modal-title" id="exampleModalLabel">Update City</h5>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form name ="paymentupdate" action="city_update.php" method="POST">  <!-- action="studentinsert.php"-->
      <div class="modal-body">

                        <!-- repair details or invoice detials -->
                    <table class="table table-sm table-borderless">
                            <thead>

                            </thead>
                            <tbody>
                                
                                
                                <tr>
                                <td scope="1"> ID</td>
                                <td scope="4" class="text-left">
                                    <div class="form-group "> <input  type="text" name="city_id" class="form-control" id="updcity_id" readonly></div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="1">Country</td>
                                <td scope="4" class="text-left">
                                    <div class="form-group "> <input type="text" name="country" class="form-control" id="update_modal" autocomplete="off" 
                                    onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' maxlength="20" required></div>
                                </td>
                            </tr>
                        
                            
                            <tr>
                                <td scope="1">State</td>
                                <td scope="4" class="text-left">
                                    <div class="form-group "> <input type="text" name="state" class="form-control" id="update_modal_input1" autocomplete="off" maxlength="20" 
                                    onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required></div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="1">City</td>
                                <td scope="4" class="text-left">
                                    <div class="form-group "> <input type="text" name="city" class="form-control" id="update_modal_input2" autocomplete="off" maxlength="20" 
                                    onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required></div>
                                </td>
                            </tr>
                            </tbody>
                    </table>

                      
                    </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success" value="submit" onclick="return update_validation()">Update</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
         </form>
        </div>
       </div>
   </div>
<!--Delete Modal -->
        
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" direction="rtl">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg">
      <h5 class="modal-title" id="exampleModalLabel"> Delete City </h5>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form name ="formdeleteparent"  method="POST" action="city_delete.php">
      <div class="modal-body">

                    <table class="table table-sm table-borderless">
                            <thead>

                            </thead>
                            <tbody>
                            <!--<tr><td>Are you sure, You want to Delete? </td></tr>-->
                            <tr scope="1"><td scope="1"></td></tr>
                            <tr><td scope="1"> ID</td>
                                <td scope="4" class="text-left">
                                    <div class="form-group "> <input type="text" name="city_id" class="form-control" id="deleteid" readonly></div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="1">Country</td>
            
                                <td scope="4" class="text-left">
                                    <div class="form-group "> 
                                        <input type="label" name="country" class="form-control" id="delete_modal"readonly >
                                    </div>
                                </td>
                                
                            </tr>
                            </tbody>
                    </table>
                    
                    </div>
                <div class="modal-footer">
                    <button type="submit" name="deletestudent" class="btn btn-success" value="deletestudent" onclick="return delete_validation()">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
         </form>
        </div>
       </div>
   </div>

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

    $(document).ready(function(){
        // click on button submit
        $("#submit").on('click', function(){
            // send ajax
            $.ajax({
                url: 'city_create.php', // url where to submit the request
                type : "POST", // type of action POST || GET
                dataType : 'json', // data type
                contentType: 'application/json;charset=UTF-8',
                data : $("#form").serialize(), // post data || get data
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            })
        });
    });

function display(){
$.ajax({
    url: "city_read.php",
      dataType: "json",
      success: function(data) {
            // var customer = JSON.parse(data);
            var city_data = data;
            if($.trim(city_data)==''){console.log("No Data");}
            var len = city_data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++)
                    {

 

                    txt = "<tr><td class='id_style'>"+city_data[i].city_id+"</td><td>"+city_data[i].country+"</td><td>"+city_data[i].state+"</td><td>"+city_data[i].city+"</td><td><center><button class='edibtn'><span title='Edit Button'><i class='fa fa-edit'></i></span></button><button class='dltbtn'><span title='Delete Button'><i class='fa fa-trash-o' aria-hidden='true'></i></span></button></center></td></tr>";
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
    
    //take userdetails details for update
 $(document).on('click','.edibtn',function(){
    //  alert("in editfun")
        $tr = $(this).closest('tr');
            var d = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            var city_id = d[0];
            
            //alert(city_id);
            $.ajax({
                url:"city_read_single.php/?city_id="+city_id,
                 method:"GET",
                // data:{city_id,city_id},
                dataType:"json",
                success:function(data){
                    // console.log(data);
                 $('#updcity_id').val(data.city_id);
                 $('#update_modal').val(data.country);
                 $('#update_modal_input2').val(data.city);
                 $('#update_modal_input1').val(data.state);
                //   $('#updgid').val(data.groupnumber);
           $('#updatemodal').modal('show');
                }
            });
     });
     //take userdetails for delete
 $(document).on('click','.dltbtn',function(){
// alert(inedit);
        $tr = $(this).closest('tr');
            var d = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            var city_id = d[0];
            
            $.ajax({
                url:"city_read_single.php/?city_id="+city_id,
                method:"POST",
                data:{city_id,city_id},
                dataType:"json",
                success:function(data){
                 $('#deleteid').val(data.city_id);
                 $('#delete_modal').val(data.country);
            $('#deletemodal').modal('show');
                }
            });
     });
     
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


</script>
</body>
</html>