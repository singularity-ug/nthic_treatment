<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
$rm         = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT']; 
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?>
 
   
 <?php
$connect = new mysqli("localhost", "root", "", "ahr");
$stss ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
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
     $('#example5').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Ntihc imms'
		},
		{extend :'pdf',
		 title:'Ntihc imms '
		},
		{extend :'print',
		 title:' Ntihc imms'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
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

  
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid ecf0f5;
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

<style>
.form-control{

    display: block;
    width: 100%;
    height: 20px;
    padding: 0px 1px;
    font-size: 12px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
input {
    line-height: normal;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    color: inherit;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header">

    <!-- Logo -->
    <a href="../home_user.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HRM |</b> &nbsp;Module</span>    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
            <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
       
    <!-- Main content -->
      <div class="row">
        <div class="col-md-3" style="background-color: #fff;">
          <a href="#" class="btn btn-primary btn-block margin-bottom" style="background-color: #367fa9;"> System Dashboard</a>

           <div class="box box-solid">
            <div class="box-header with-border">
              
               
            <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"> <a href="staffcontacts.php">
         <center> <img src="../../database icons/social_network-512.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;"></center></a>
            <div class="inner">  
            <a href="staffcontacts.php" class="small-box-footer">Staff.contacts<i class=" "></i></a>          </div>
        </div></div>
        <!-- ./col -->
                  
                   
         <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../database icons/press-nozbe.png" width="70" height="70"class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="../timesheet/index.php" class="small-box-footer">Time sheet<i class=" "></i></a>          </div>
        </div></div>
        <!-- ./col -->
        
         <div class="box box-solid"> 
        
         <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../database icons/report-3-xxl.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="leave_mgt.php" class="small-box-footer">Leave mgt <i class=" "></i></a>          </div>
        </div></div>
        <!-- ./col -->
         
          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../database icons/report-icon-23.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="appraisal_new.php" class="small-box-footer">Appraisal <i class=""></i></a>          </div>
        </div></div>
        <!-- ./col -->
        </div>
        
       <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center><a href="../../ahr/appraisal1.php" ><img src="../../database icons/access-administrator-account.jpg" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;"> </a></center>
            <div class="inner">  
            <a href="exit_interview.php" class="small-box-footer">Exit.interview <i class=" "></i></a>          </div>
        </div></div>
        
        
         <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center><a href="../../ahr/appraisal1.php" ><img src="../../database icons/exchange-512.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;"> </a></center>
            <div class="inner">  
            <a href="handover_form.php" class="small-box-footer">Handover <i class=" "></i></a>          </div>
        </div></div>
           
              </ul>
           <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">    
         <center><canvas id="canvas" width="250" height="250" style="height: 100px;">
			</canvas></center></div>
            </div>  
            
             <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">    
         <center><canvas id="canvas2" width="250" height="250" style="height: 100px;">
			</canvas></center></div>
            </div> </div>
            
   <span class="glyphicon glyphicon-user" style="font-weight:bold; font-size:11px;">WELCOME  
             
          <a href="javascript:void(0)" class="button5" style="font-weight:bold; font-size:11px;"><?php echo $nameofuser; ?>   </a> </span> 
          <p></p>
        </div>  
        </div> 
        
        <!-- /.col -->


      <div class="col-md-9">
          <div class="box box-primary" style="border:0px;"> 
               <a href=<button class="btn btn-primary btn-block margin-bottom" data-toggle="modal"  data-target="#registx"></button> 
                Add education details <span class="sr-only">(current)</span></a></li> 
            
            
              <div class="box-tools pull-right">
                <div class="has-feedback">                </div>
              </div>
              <!-- /.box-tools -->
            </div>
             <!-- /.box-header -->
             <div class="box-body no-padding">
             <div class="mailbox-controls">
             <!-- Check all button -->
              </div>
              <div class="table-responsive mailbox-messages">
                
                  <!-- Info boxes --> 
                <img src="../../assets/img/logsbig.PNG" width="100%" height="100%"> 
                <center> <p style="color:#000000; font-weight:bold;font-size:12px;">HANDOVER / CLEARANCE FORM</p> </center>

            <form class="form-horizontal" style="height:auto;"> 
            
                <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">EMPLOYEE NAME</label>
                    <div class="col-sm-8">
                       <input type="date" name="NAMEOFPERSON" id="NAMEOFPERSON" class="form-control"> 
                    </div>
                 </div>
               </div>
               <!-- /.form-group -->
                <div class="col-sm-12"> 
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">POSITION</label>
                    <div class="col-sm-8">
                    <input type="text" name="POSITION" id="POSITION" class="form-control"> 
                    </div>
                 </div>
               </div>
                <!-- /.form-group --> 

                <div class="col-sm-12">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">DEPARTMENT</label>
                    <div class="col-sm-8">
                     <select class="form-control"  name="DEPARTMENT_HV" id="DEPARTMENT_HV"data-placement="top" style="font-size: 11px;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option>
                <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                <option value="SERVICE DELIVERY">SERVICE DELIVERY</option>
                </select> 
                    </div>
                  </div>
               </div>
               <!-- /.form-group -->

              <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">DATE OF EMPLOYMENT</label>
                    <div class="col-sm-8">
                       <input type="date" name="DATEOFEMPLOYMENT" id="datepicker" class="form-control"> 
                    </div>
                 </div>
               </div>
                <!-- /.form-group --> 
                 <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">End of services with NTIHC effective from </label>
                    <div class="col-sm-4">
                    <input class="form-control" type="date" id="ENDOFSERVICE" name="datepicker" value="<?php echo date('d-m-y'); ?>"  style="font-size: 11px;"/>
                    </div>
                  </div>
                </div>  
                <!-- /.form-group --> 
                
                
                 <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-7" style="font-weight:bold;">1. DEPARTMENTAL MANAGER/SUPERVISOR  </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                
                  <div class="col-sm-12">
                  <div class="form-group">
                                            <label style="margin-left: 15px;">Have official documents and materials been handed in?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="DOCUMENTSHANDIN" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="DOCUMENTSHANDIN" id="YES" value="YES" />YES
                                            </label> 
                                        </div>
                
                   
                 <div class="form-group">
                    <label style="margin-left: 15px;">What official equipment, machines, furniture, etc have been surrendered? </label>
                    <div class="col-sm-12">
                    <input type="date" name="EQUIPMENTSURRENDERED" id="EQUIPMENTSURRENDERED" class="form-control"> 
                 </div>
                 </div> 
                 <!-- /.form-group -->
                 
                  
                  <div class="form-group">
                                            <label style="margin-left: 15px;">Has a comprehensive handover report been submitted? </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="COMPREHENSIVEHANDOVER" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="COMPREHENSIVEHANDOVER" id="NO" value="YES" />YES
                                            </label> 
                                        </div>
                
                   
                 <div class="form-group">
                    <label style="margin-left: 15px;">Remarks:  </label>
                    <div class="col-sm-12">
                    <input type="date" name="HANDOVERREMARKS" id="HANDOVERREMARKS" class="form-control"> 
                 </div>
                 </div> 
                 <!-- /.form-group -->
                 
                  
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">DEPARTMENTAL HEAD</label> 
                 </div>
                
                <!-- /.form-group -->    
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="DEPARTMENTALHEAD" id="DEPARTMENTALHEAD" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="DEPARTMENTALSIGN" id="DEPARTMENTALSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="DEPARTMENTALDATE" id="DEPARTMENTALDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table> 

       
   <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-7" style="font-weight:bold; margin-left: -14px;">2. FINANCE AND ACCOUNTS DEPARTMENT  </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                  
                  <div class="form-group">
                                            <label style="margin-left: 15px;">ADVANCES: Has personal account been cleared of outstanding advances or 
                                            any other debit balance? </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="DEBITBALANCECLEARED" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="DEBITBALANCECLEARED" id="NO" value="YES" />YES
                                            </label> 
                                        </div>
                                        
                 <div class="form-group">
                    <label style="margin-left: 15px;">Remarks:  </label>
                    <div class="col-sm-12">
                    <input type="date" name="DEBITREMARKS" id="DEBITREMARKS" class="form-control"> 
                 </div>
                 </div> 
                 <!-- /.form-group -->                       
                                        
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">FINANCE AND ACCOUNTS DEPARTMENT</label> 
                 </div>
                
                <!-- /.form-group -->    
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="FIN_ACCOUNTSHEAD" id="FIN_ACCOUNTSHEAD" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="FIN_ACCOUNTSSIGN" id="FIN_ACCOUNTSSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="FIN_ACCOUNTSDATE" id="FIN_ACCOUNTSDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
                         
                
        <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-7" style="font-weight:bold; margin-left: -14px;">3. ADMINISTRATION DEPARTMENT </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                  
                  <div class="form-group">
                                            <label style="margin-left: 15px;">Has staff complied with employment contract requirements? </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="EMP_CONTRACT_REQUIREMENT" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="EMP_CONTRACT_REQUIREMENT" id="NO" value="YES" />YES
                                            </label> 
                                        </div>
                                        
                   <div class="form-group">
                                            <label style="margin-left: 15px;">Has the official identity card been surrendered? </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="ID_SURRENDERED" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="ID_SURRENDERED" id="NO" value="YES" />YES
                                            </label> 
                                        </div>    
                                        
                   <div class="form-group">
                                            <label style="margin-left: 15px;">Has the exit form and interview been completed?  </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="EXIT_INTERVIEWSTATUS" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="EXIT_INTERVIEWSTATUS" id="NO" value="YES" />YES
                                            </label> 
                                        </div>                         
                                        
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">ADMINISTRATION MANAGER</label> 
                 </div>
                
                <!-- /.form-group -->    
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="ADMINMANAGER" id="ADMINMANAGER" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="ADMINMANAGERSIGN" id="ADMINMANAGERSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="ADMINMANAGERDATE" id="ADMINMANAGERDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>         
           
           
            <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold; margin-left: -14px;">CERTIFICATE</label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold; margin-left: 0px;">I certify that the above named person has satisfied all requirements has no further obligation to the organization and is now cleared to be paid his/her outstanding benefits and dues. </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                
                 
                 <div class="col-sm-12">
                 <div class="form-group">
                 <label for="pass1" class="control-label col-sm-7" style="font-weight:bold; margin-left: 0px;">4. APPROVAL </label> 
                 </div> 
                 <!-- /.form-group -->  
                
                 <div class="form-group">
                                            <label style="margin-left: 15px;">Clearance accepted and employee released.  </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="ACCEPTANCE_RELEASED" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="ACCEPTANCE_RELEASED" id="NO" value="YES" />YES
                                            </label> 
                                        </div>                         
                                        
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">PROGRAMME DIRECTOR</label> 
                 </div>
                
                <!-- /.form-group -->    
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="PDNAME" id="PDNAME" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="PDSIGN" id="PDSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="PDDATE" id="PDDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
                   
                            
                   <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">5.	STAFF MEMBER’S ACCEPTANCE </label> 
                 </div>
                 
              <div class="form-group">
              <label style="margin-left: 15px;">I do agree with the contents of this handover form as a true record of my status at the time of separation with NTIHC.  </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="STAFF_ACCEPTANCE" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="STAFF_ACCEPTANCE" id="NO" value="YES" />YES
                                            </label> 
                                        </div>      
                 
                
                <!-- /.form-group -->    
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="" id="" placeholder="" readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="" id="" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="" id="" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
 
 
                  
            <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Telephone contact</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="TELEPHONECONTACT" id="TELEPHONECONTACT" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div> 
                <!-- /.form-group -->
  </div>      
                                           
                                    
           
 
        <center> <input type="submit" name="button" id="button" value="Save" /></center>
          </form>
           
                    </div>
                  </div>
                </div>  
                
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>
                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#000;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            
                            
                    </div>
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      <footer class="main-footerx" style="background-color: #000; color:#fff;text-align:center;">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div>
    <p style="text-align:center;">Copyright &copy; 2017 <b>Naguru Teenage Information and Health Center</b></a>.</p> All rights
    reserved.
  </footer>

          

<script>
var canvas = document.getElementById("canvas2");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script> 
    
  </div> 


<script src="../../assets/lib/moment/moment.min.js"></script>
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
    <!--END PAGE LEVEL SCRIPTS --> 
<script type="text/javascript" src="../../assets/js/gauge.js"></script> 
</body>
</html> 

   <!-- /.START IMPREST REQUEST SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="impdescription[]" id="impdescription_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<input type="date" name="impcurrency[]" required="required"  id="impcurrency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;"  >';

	 var  s3c =  '<input type="numeric" name="impdebit[]" id="impdebit_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="impdescription_"+x;
          table.rows[x].cells[2].childNodes[0].id="impcurrency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="impdebit_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->