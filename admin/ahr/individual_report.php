
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
   <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

	 if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:' file'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#appraistk').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Appraisal'
		},
		{extend :'pdf',
		 title:'Appraisal '
		},
		{extend :'print',
		 title:'Appraisal'
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#times').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TIME SHEET'
		},
		{extend :'pdf',
		 title:'TIME SHEET'
		},
		{extend :'print',
		 title:'TIME SHEET'
		}
        ]
    } );
  } );
  </script>
<script>
  $(document).ready(function() {
     $('#exaconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
  
  
  
<script>
  $(document).ready(function() {
     $('#exstaffconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'STAFF CONTACTS '
		},
		{extend :'print',
		 title:' STAFF CONTACTS'
		}
        ]
    } );
  } );
  </script>
  
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable();
  } );
  </script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTR").val(data[4]);
  $("#SECONDQTR").val(data[5]);
  $("#THIRDQTR").val(data[6]);
  $("#FOURTHQTR").val(data[7]);
  $("#BUDGETAMOUNT").val(data[8]); 
  $("#BUDGETSTATUS").val(data[9]);       
  
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "serch_budget.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result); 
}
  });
}
} 
</script>

 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border: 1px solid #000;
    line-height: 1.0;
    padding: 2px;
    vertical-align: center;
	
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #000;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
             background:#fff;
             }

</style> 

</head> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header">

    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" font style=" font:bold 18px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;margin-top: 10px;">Dashboard</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
             
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> Logout</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>

    </nav>
  </header>
 

 
  <!-- Content Wrapper. Contains page content --> 
    <!-- Content Header (Page header) -->
    <section class="content-header">  
    </section>
 
              
      <div class ="container-fluid" style="width:90%; height:100%; border: 1px #f8f1f1 solid;border-radius: 4px;" >
      <div class="row">
      <div class="col-sm-12">
                        
          <img src="../hrm_home/img/logsbigxt.PNG"  width="100%" height="100%">   
  
          <font style=" font-weight:bold; color:#000; font-size:11px;"><center>STAFF CONTACT INFORMATION</center></font>
          <br>
                 
               
                                               
    <form class="form-horizontal" action="" method="POST" style="height:auto; font-weight:normal;">  
              
             <div class="table-responsive mailbox-messages"> 
               
             <table id="appraistk" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th> 
                  <th>DEPARTMENT </th>
                  <th>CONTACT1</th>
                  <th>CONTACT2</th>
                  <th>EMAIL</th> 
                  <th><center>AGE</center></th> 
                  <th><center>YEARS OF SVC</center></th>  
				  <th>INFO STATUS</th>
                  <th>ACTION</th>
                  <th>TRUNCATE</th>
                 </tr>
        </thead>
        <tfoot>
          <tr> 
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th> 
                  <th>DEPARTMENT </th>
                  <th>CONTACT1</th>
                  <th>CONTACT2</th>
                  <th>EMAIL</th> 
                  <th><center>AGE</center></th> 
                  <th><center>YEARS OF SVC</center></th>  
				  <th>INFO STATUS</th>
                  <th>ACTION</th>
                  <th>TRUNCATE</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT *, BIRTHDATE, CURDATE(), TIMESTAMPDIFF(YEAR,BIRTHDATE,CURDATE()) AS age, APPOINTMENTSTARTDATE,
			                                                       CURDATE(), TIMESTAMPDIFF(YEAR,APPOINTMENTSTARTDATE,CURDATE()) AS yoswentity   FROM staffcontacts ");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['id']."***".$res['Serial'];

              echo "<tr>"; 
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['ENTITYLOGO']."/".$res['FISCALYEAR']."/".$res['FISCALMONTH']."/".$res['id']."</td>";  
			  echo "<td>".$res['DEPARTMENT']."</td>";	
			  echo "<td>".$res['MOBILEPHONE']."</td>";
			  echo "<td>".$res['HOMEPHONE']."</td>";
		      echo "<td>".$res['STAFFACCOUNT']."</td>"; 
			  echo "<td><center>".$res['age']."</center></td>";
		      echo "<td><center>".$res['yoswentity']."</center></td>";
			   echo "<td>".$res['SUBMISSIONLEVEL']."</td>";
			   
			  echo '<td> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
              <a id="2__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcontact(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-ok"> </span></a> 
              </td>';  
			  echo "<td> <a href=\"contact_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		 
	            }
               ?>
             </tbody>
             </table> 
			
				
				   <div class=""  id="newcontact" >  </div>
                     <script>

               function newcontact(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'contact_details.php?q='+odno,
                            success : function(data){
                                     $('#newcontact').html(data);
     								$("#newconttxx").modal("show");
                                      }
                    });
                    }

               </script>
                </div>    
			  </form> 
          </div>
          <!-- /.box -->
        </div>
          
        <!-- /.col -->
      </div>
       
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div> 
    
      
 
<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->  
</body>
</html>    