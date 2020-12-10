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
     <link rel="stylesheet" href="style.css">

   <title>Admin </title>
   <style>
   </style>



</head>
<body>
    <div class="container">
  <!--<h2>Modal Example</h2>--> 
<!--Transaction Count (Today Only)-->
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    SYSTEM USERS
  </button>
  

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

<div class="container">
  <!--<h2>Modal Example</h2>-->
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary edibtn" data-toggle="modal">
   Transaction
Count (Today Only)
  </button>

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
          <label for="user_id">User ID</label> <input id="user_id">
          <label for="user_id">Transaction
Count (Today Only)</label><input id="count1"></input>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<div class="container">
  <!--<h2>Modal Example</h2>-->
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary edibtn1" data-toggle="modal">
  Transaction
Totals (Today Only)
  </button>

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

<div class="container">
  <!--<h2>Modal Example</h2>-->
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary edibtn2" data-toggle="modal">
 Transaction Count
Pending (Today Only)
  </button>

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
<div class="container">
  <!--<h2>Modal Example</h2>--> 
<!--Transaction Count (Today Only)-->
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
    1 Month Alert - Greater Then $1000
  </button>
  

  <!-- The Modal -->
  <div class="modal" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">1 Month Alert - Greater Then $1000</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <table class = " table table-bordered" id="txt_table">
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


<div class="container">
  <!--<h2>Modal Example</h2>--> 
<!--Transaction Count (Today Only)-->
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
   Complete Task
  </button>
  

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
<label>Transaction Totals (YTD)</label>
<input id="ytd">

    </body>
    <!-- body-row END -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<script>
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
            var user_id = 37;
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
            
           var user_id = 37;
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
            
           var user_id = 37;
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

 

                    txt = "<tr><td class=''>"+location[i].Sender_Name+"</td><td>"+location[i].Transactions_id+"</td><td>"+location[i].Transaction_Total+"</td></tr>";
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
    </script>