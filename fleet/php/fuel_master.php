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
  header('location:../index.php');
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/matrix-style2.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../css/uniform.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link rel="stylesheet" href="../js/googleapis.js" type='text/css'>
   
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link rel="stylesheet" href="../css/notifier.css" /> 
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

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

  <script>
  $(document).ready(function() {
     $('#expreview').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength":3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#exampleauth').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#exampprove').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>



 <script>
  $(document).ready(function() {
     $('#exapurpose').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
     $('#example4').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>


</head>
<body style="background: #fff;"> 

<!--Header-part-->
<div id="header" style="background-color:#d70000;">  
<h2><a href="dashboard.php"> </a></h2>
</div>
<!--close-Header-part--> 

 
<!--sidebar-menu-->

<div id="sidebar"> 
 <a href="#" class="visible-phone" style="background-color:#da542e; font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;">
 <i class="icon icon-signal"></i>&nbsp;&nbsp;&nbsp; &nbsp;Application Dashboard</a>
  <ul  style="text-align:left;"> 
  
       <ul class="site-stats">
	   
	    <li class="" style="text-align:left;"><i class=" "><a href="fleet_administrator.php">
                <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Fleet admin</small></li></a>
				 
				  <li class="" style="text-align:left;"><i class=" "><a href="cordination.php">
                <img src="../img/demo/budget.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Budget mgt</small></li></a>
	   
	   
                <li class="" style="text-align:left;"><i class=" "><a href="cordination.php">
                <img src="../img/demo/images (2).png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                 <small>Cordination unit</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/103362-3d-glossy-green-orb-icon-business-gas-pump.png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                 <small>Fuel module</small></li></a>
                 
                 
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/103507-3d-glossy-green-orb-icon-business-tools11.png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                 <small>Fleet service</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Work orders</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/admin.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Accidents mgt</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/cover.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Insurance mgt</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images (1).jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Drivers module</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="fleet_register.php">
                <img src="../img/demo/33989241-blue-vehicle-icons-on-white-background.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>General fleet</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="fleet_register.php">
                <img src="../img/demo/health-insurance-icon-png-3.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Fleet verification</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images (1).png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Action center</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/Open-file-icon.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Quick export</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Database panel</small></li></a>
				 
				 
				 
			          <div id="reviews" class="carousel slide" data-ride="carousel"
    style="border: 1px solid #f2f0f0;
    border-bottom-width: 5px;
    border-bottom-style: solid;height: 154px;  border-top-right-radius:35px;
    border-bottom-left-radius:35px;"> 
                                  <br>  <div class="carousel-inner" style="background-color: #fff;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">  <p style="text-align:center;"> Fuel cards due for reoder</p> <br>
                                             <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                               <?php 
			    include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			 ?>
                                               <span style="font-size:50px;">
                                                <?php echo $rowcount123;?>
                                               </span>
                                            </p> <br>
                                                <div class="user-img pull-right">

                                                </div> 
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> <p style="text-align:center;"> Notification 2</p> <br>
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                            
                                               <span style="font-size:50px;">
                                              002
                                                </span>
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div> 
                                            </div>
                                        </div>

                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> <p style="text-align:center;"> Notification 3</p> <br>
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                           
                                               <span style="font-size:50px;">
                                                   003 
                                               </span>
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div>  
                                            </div>
                                        </div> 
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators" style="width: 10%;">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:blue;"></li>
                                        <li data-target="#reviews" data-slide-to="2" style="background-color:red;"></li> 
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

     </div>
              </ul>   
     
</div>



<div id="content" style="background: #fff;">
  

 <!--Chart-box-->    
    <div class="row-fluid"> 

    <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-home"></i></span>
          <h5>
		  
		   <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class=""></i> Home</a> &nbsp; &nbsp;
                          <a href="../index.php">Logout</a>  
						  
						  &nbsp;&nbsp;&nbsp;
						  
            <div class="btn-group" style="margin-top: -9px;margin-left: -10px;">
            <button class="btn btn-info" style="background-color:#fff; color:#000; font-size:11px;">Reports module</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="fuel/fuel_reports.php?d1=0&d2=0">Fuel reports</a></li>
              <li><a href="fuel/cordination_reports.php?d1=0&d2=0">Cordination reports</a></li> 
               <li><a href="fuel/fuel_export.php">Download fuel consumption history</a></li> 
              <li class="divider"></li> 
            </ul>
          </div>  
         
          </h5>
        </div>
        <div class="widget-content" style="background-color: #fff;">
          <div class="row-fluid">
            <div class="span12"> 
			
            <div class="span3" >   
  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:45%; border: 0px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">
	     <center> <a href="#myloadreview" data-toggle="modal" style="margin-top: -5px;"> 
		 <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:40px; width:40px;"> 
         Confirm&nbsp;fuel&nbsp;load    <b style="color:red;"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT purchaseid  FROM purchase WHERE Approval ='Pending' AND Throughoneaccount='$rm'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?></b></center>
		</button> </a>
   
   </td>
   
    <td style="width:10%; background-color:#fff; border:0px;"></td>
	
    <td style="width:45%; border: 0px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">
	 <center> <a href="#myloadapprovals" data-toggle="modal" style="margin-top: -5px;"> 
		 <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:40px; width:40px;"> 
         Approve&nbsp;fuel&nbsp;load    <b style="color:red;">  <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "SELECT purchaseid FROM purchase where Approval ='Reviewed' AND Loadreview ='Pending' AND Toaccount='$rm'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?> </b></center>
   
   </button> </a>   </td>
   
   </tbody>
 </table>
  
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
    <td style="width:45%; border: 0px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">
	 <center> <a href="#myloadconfirmation" data-toggle="modal" style="margin-top: -5px;"> 
		 <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:40px; width:40px;"> 
         Confirm&nbsp;loadings&nbsp;   <b style="color:red;"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "SELECT purchaseid FROM purchase where Approval ='Approved' AND Loadreview ='Pending'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?> </b></center>
   
   </button> </a>   </td>
   
    <td style="width:10%; background-color:#fff; border:0px;"></td>
	
    <td style="width:45%; border: 0px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">
	 <center>  <a rel="" href="fuel/get_reconcile_pen.php" style="margin-top: -5px;"> 
		 <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:40px; width:40px;"> 
        Reconciliation    <b style="color:red;">
	<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "select * from fuellogs where Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Pending' 
															  AND Recstatus='Pending' order by FUELISSUANCEDATE asc")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b></center>
   
   </button> </a>   </td>
   
     </tbody>
 </table>
 
  <br>
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
    <td style="width:45%; border: 0px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">
	     <a rel="" href="fuel_review.php"   
		 style="margin-top: -5px;"/><i class="icon-edit" >
             </i>Approved fuel orders due for issuance &nbsp;&nbsp;
            <b style="color:red;">
             
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE 
                                                                 APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'WAITING' 
																 GROUP BY SERIALNO")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>    
    
           </tbody>
 </table>
 
 <br>
 
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
    <td style="width:45%; border: 0px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">
	 <center> <a href="#myModacard" data-toggle="modal" style="margin-top: -5px;"> 
		 <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:40px; width:40px;"> 
         Add&nbsp;new&nbsp;fuel&nbsp;card   <b style="color:red;"> </b></center> 
   </button> </a>   </td>
     
   
    <td style="width:10%; background-color:#fff; border:0px;"></td>
	
    <td style="width:45%; border: 0px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">
	 <center>  <a href="iterations/fuel_loads.php" style="margin-top: -5px;"> 
		 <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:40px; width:40px;"> 
        Load&nbsp;fuel&nbsp;cards    <b style="color:red;">
	  </b></center> 
     </button> </a>  </td> 
     </tbody>
     </table>
 
  <br> 
  </div>  
   
<div class="span9"> 
<script src="chartjs/jquery.min.js"></script> 

<!-- ChartJS -->
<script src="chartjs/chart.js/Chart.js"></script>
<div class="box box-success">
            <div class="box-header with-border">
            	<?php
            		//set timezone
					//date_default_timezone_set('Asia/Manila');
					$year = date('Y');
            	?>
              <h5 class="box-title">General fuel consumption patterns (<?php echo $year-1; ?> vs <?php echo $year; ?>)</h5>

            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 290px;
width: 816px;"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
</div>
<?php include('chartjs/data_generalfuel.php'); ?>
<script>
  $(function () {
    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label               : 'Previous Year',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [ "<?php echo $pjan; ?>",
                                  "<?php echo $pfeb; ?>",
                                  "<?php echo $pmar; ?>",
                                  "<?php echo $papr; ?>",
                                  "<?php echo $pmay; ?>",
                                  "<?php echo $pjun; ?>",
                                  "<?php echo $pjul; ?>",
                                  "<?php echo $paug; ?>",
                                  "<?php echo $psep; ?>",
                                  "<?php echo $poct; ?>",
                                  "<?php echo $pnov; ?>",
                                  "<?php echo $pdec; ?>" 
                                ]
        },
        {
          label               : 'This Year',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [ "<?php echo $tjan; ?>",
                                  "<?php echo $tfeb; ?>",
                                  "<?php echo $tmar; ?>",
                                  "<?php echo $tapr; ?>",
                                  "<?php echo $tmay; ?>",
                                  "<?php echo $tjun; ?>",
                                  "<?php echo $tjul; ?>",
                                  "<?php echo $taug; ?>",
                                  "<?php echo $tsep; ?>",
                                  "<?php echo $toct; ?>",
                                  "<?php echo $tnov; ?>",
                                  "<?php echo $tdec; ?>" 
                                ]
        }
      ]
    }
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = barChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 5,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

  })
</script>
    
                 </div>      </div>  
             </div>  
               <div class="row-fluid" style="margin-top: -16px;"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
        
            <?php 
			include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			
			<?php 
			include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			 ?>
          <h5> 
			Total Number of fuel cards:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font> &nbsp;&nbsp; &nbsp;&nbsp;
            
			Cards below UGX of 3,000,000/= <font style="color:rgb(255, 95, 66);; font:bold 22px 'Aleo';">[<?php echo $rowcount123;?>]</font> 
            
            
            
            </h5>
        </div>
        <div class="widget-content" style="background-color: #fff;">
          <div class="row-fluid">
            <div class="span12" style="margin-top: -27px;"> 
             
			 
</div>


<input type="text" style="padding:6.5px;" name="filter" value="" id="filter" placeholder="Search card..." autocomplete="off" />
&nbsp;
 <div class="btn-group">
            <button class="btn btn-info">Fuel purpose</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu"> 
               <li><a href="#mypurpose" data-toggle="modal">Purpose of fuel consumption</a></li>
            </ul>
          </div></div></div>
            

<br>  

 <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
                               <div class=""  id="">
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th> Fuel card name </th> 
			<th> Vendor name </th>
			<th> Fuel target level </th> 
			<th> fuel vailable </th>
            <th> Reorder level </th>
			<th> Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				include('tweak/connectproc.php');
				$result = $db->prepare("SELECT *,Fueltargetlevel-fuelvailable as reorder  FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' ORDER BY Fuelcardname ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				$reorder=$row['reorder'];
				$Fueltargetlevel=$row['Fueltargetlevel'];
				$fuelvailable=$row['fuelvailable'];
				if ($fuelvailable < 3000000) {
				echo '<tr class="alert alert-warning record" style="color: #fff; background:#164242; class="progress progress-striped progress-success active">';
				}
				else {
				echo '<tr class="record">';
				}
			?>
		  
			<td><?php echo $row['Fuelcardname']; ?></td>
			<td><?php echo $row['Vendorname']; ?></td> 
			 
			<td><?php
			$Fueltargetlevel=$row['Fueltargetlevel'];
			echo formatMoney($Fueltargetlevel, true);
			?></td>
            
            <td><?php
			$fuelvailable=$row['fuelvailable'];
			echo formatMoney($fuelvailable, true);
			?></td>
			  
			<td>
			<?php
			$reorder=$row['reorder'];
			echo formatMoney($reorder, true);
			?>
			</td>
             <td><a rel="facebox" title="Click to update card info" href="tweak/main/editproduct.php?id=<?php echo $row['productid']; ?>">
           <center> <button class="btn btn-warning"><i class="icon-edit"></i> </button> </center></a> 
           
			 </td>
			</tr>
			<?php
				}
			?>
		 
		
	</tbody>
</table>

              </div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 420px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 420px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


              </div>

           
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="tweak/style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="tweak/main/jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="tweak/main/js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="tweak/main/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="tweak/main/lib/jquery.js" type="text/javascript"></script>
<script src="tweak/main/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>     
             </div>  </div>
            </div>
           </div> 
         </div>
        
        <div class="span3"> 
         
      </div> 
    </div> 
<!--End-Chart-box--> 

 
	 
	 
<!--End new vehicle----------------------------------------------------------------------------------------------------------------------------------->             
            
            <div id="myModacard" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Add new card</h3>  
              </div>
              <div class="modal-body">
              
                <form class="form-horizontal" action="fuel/process_newcard.php" method="POST" style="height:auto;">

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:35%;border:0px;">Fuel card name</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="Fuelcardname" id="Fuelcardname"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
              </tr>
			  </table> 
              
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:35%;border:0px;">Card cord</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="Cardcode" id="Cardcode" placeholder="No spaces allowed" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
              </tr>
			  </table> 
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:35%;border:0px;">Vendor name</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="Vendorname" id="Vendorname"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
          
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:35%;border:0px;">Station location</th> 
				<th style="width:65%;border:0px;"> <input type="text"name="Stationlocation" id="Stationlocation"
				style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
                   
              </tr>
			  </table> 
    
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:35%;border:0px;">Fuel target level</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="Fueltargetlevel" id="Fueltargetlevel" placeholder="maximum fuel (amount)"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
    
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:35%;border:0px;">Vendor framework type</th> 
				<th style="width:65%;border:0px;"> <select name="Vendorframeworktype" id="Vendorframeworktype"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;padding:0px;"> 
                <option> FRAMEWORK CONTRACT</option>
								<option>OPEN MARKET</option>         
                                </select>
                </th>   
                </tr>
			  </table> 
               
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                 <th style="width:35%;border:0px;">Fuel card status</th> 
				<th style="width:65%;border:0px;"> <select name="Fuelcardstatus" id="Fuelcardstatus"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; padding:0px;"> 
                                <option>ACTIVE</option>
								<option>DEACTIVATE</option>         
                                </select>
                </th>      
                   
              </tr>
			  </table> 
	    
                
              </div>
              
              <div class="modal-footer">
              <input type="submit" name="button" id="button" value="Save" class="btn btn-success"/>&nbsp;
              <a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a> </div> 
              
               </form>
            </div>
            
            
            
            <div id="myloadreview" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
               <center> <h3>Fuel loading due for review
               &nbsp; 
               <a href="#myauthorizations" data-toggle="modal"><button class=" " style="margin-top: -5px;"><i class="icon-edit"> </i>My authorised requests</button></a>
                </h3></center>
              </div>
              <div class="modal-body">
                
             <div class=""  id="getveview" >  </div>
                <script> 
          function getveview(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_reveiew.php?q='+odno,
                       success : function(data){
                                $('#getveview').html(data);
								$("#ouxxxz").modal("show");
                                 }
               });
               } 
          </script> 
           
              <table id="expreview" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>       
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Pending' AND Throughoneaccount='$rm' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";  
	    echo '<td>  
		        <a id="101__'.$dtszs.'" href="javascript:void(0)" onclick="getveview(this.id)" data-toggle="tooltip" title="Load request" 
				style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-info"> Review </span></a>    
               </td>'; 	    	
	}
	   
    ?>
	</tbody>
  </table>   
                
              </div>
              <div class="modal-footer"> <a href="fuel_master.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>          
           
         <div id="myauthorizations" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
               <center> <h3>My authorised fuel loading 
                 </h3></center>
              </div>
              <div class="modal-body">
         <table id="exampleauth" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>    
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>      
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Reviewed' AND Loadreview ='Pending' AND Throughoneaccount='$rm' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";   
	    echo "<td ><a href=\"fuel/get_loadmemo.php?purchaseid=$res[purchaseid]\"> &nbsp;&nbsp;<B>Print</B></a>  
			    </td>";    	
	}
	   
    ?>
	</tbody>
  </table>  
             
                
              </div>
               <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">Cancel</a> </div>
            </div>
          </div>
        </div>      
            
    
        
         <div id="myloadapprovals" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
               <center> <h3>Fuel loading due for approval
               &nbsp; 
               <a href="#myapprovals" data-toggle="modal"><button class=" " style="margin-top: -5px;"><i class="icon-edit"> </i>My approved requests</button></a>
                </h3></center>
               </h3></center>
              </div>
              <div class="modal-body">
              
               
             <div class=""  id="getloadupdate" >  </div>
                <script> 
          function getloadupdate(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_loadupdate.php?q='+odno,
                       success : function(data){
                                $('#getloadupdate').html(data);
								$("#ouz").modal("show");
                                 }
               });
               } 
          </script> 
          
         	 
             
              <table id="exampprove" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>      
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Reviewed' AND Loadreview ='Pending' AND Toaccount='$rm' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";  
	    echo '<td>  
		        <a id="101__'.$dtszs.'" href="javascript:void(0)" onclick="getloadupdate(this.id)" data-toggle="tooltip" title="Click to approve" 
				style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-danger"> Approve </span></a>    
               </td>'; 	    	
	}
	   
    ?>
	</tbody>
  </table>   
                
              </div>
             <div class="modal-footer"> <a href="fuel_master.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>          
            
            
         <div id="myapprovals" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <center><h3>My approved requests</h3></center>
              </div>
              <div class="modal-body">
               <table id="exampleauth" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>    
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>      
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Approved' AND Loadreview ='Pending' AND Toaccount='$rm' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsaa = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";
		 echo '<td>  
		        <a id="10009__'.$dtsaa.'" href="javascript:void(0)" onclick="getloadupdate(this.id)" data-toggle="tooltip" title="Click to approve" 
				style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-danger"> Approve </span></a>    
               </td>'; 	
		   
	    echo "<td ><a href=\"fuel/get_loadmemo.php?purchaseid=$res[purchaseid]\"> &nbsp;&nbsp;<B>Print</B></a>  
			    </td>";    	
	}
	   
    ?>
	</tbody>
  </table>  
             
                
              </div>
              <div class="modal-footer">  <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
            </div>
          </div>
        </div>       
        
        
            
         <div id="myloadconfirmation" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Fuel loading requisitions due for confirmation</h3>
              </div>
              <div class="modal-body">
                   
             <div class=""  id="getloadverification" >  </div>
                <script> 
          function getloadverification(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_load_verify.php?q='+odno,
                       success : function(data){
                                $('#getloadverification').html(data);
								$("#explodemate").modal("show");
                                 }
               });
               } 
          </script> 
          
         	 
             <table id="example6" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                     <th>&nbsp;&nbsp;&nbsp;VIEW</th> <th>ACTION</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>&nbsp;&nbsp;&nbsp;VIEW</th> <th>ACTION</th>     
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Approved' AND Loadreview ='Pending' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtpp = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>"; 
		echo '<td>  
		        <a id="10992__'.$dtpp.'" href="javascript:void(0)" onclick="getloadverification(this.id)" data-toggle="tooltip" title="Is fuel loaded?" 
				style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-success"> Click</span></a>    
               </td>'; 
			   	
	    echo "<td><a href=\"fuel/get_loadverifier.php?purchaseid=$res[purchaseid]\">Verify</a> &nbsp; | &nbsp; 
			  <a href=\"fuel/get_loadmemo.php?purchaseid=$res[purchaseid]\">Print</a> 
			    </td>";   	
	}
	   
    ?>
	</tbody>
  </table>  
            
                
              </div>
             <div class="modal-footer"> <a href="fuel_master.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>       
        
         <div id="mytest" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3> text</h3>
              </div>
              <div class="modal-body">
              
             
                
              </div>
             <div class="modal-footer"> <a href="fuel_master.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>      
      </div>
      
           
             
       <div id="mypurpose" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Add new purpose</h3>   
              </div>
              <div class="modal-body">
              
              <form class="form-horizontal" action="fuel/process_purpose.php" method="POST" style="height:auto;">
              
              <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:30%;border:0px;">Purpose</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="PURPOSE" name="PURPOSE" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
              
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Source of fund</th> 
				<th style="width:70%;border:0px;"> <select id="SOURCEOFFUND" name="SOURCEOFFUND"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                <option></option>
                <option>AHR</option>
                <option>NAADS</option>
                <option>SANITATION AND ENVIRONMENT</option>
                <option>ENGINEERING ROAD FUND</option>
                <option>KIIDP</option>
                </select>
                </th>   
              </tr>
			  </table>  
              
              <center> <input type="submit" name="button" id="button" value="Save" style="border-radius: 11px; height: 38px;"/></center> 
              
            </form>   
                
              </div>
             <div class="modal-footer">  <a href="fuel/fuel_general.php" class="btn btn-primary">View all</a> 
             <a href="fuel_master.php" class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>      
      </div> 

<!--Footer-part-->
<div class="row-fluid"> 
</div>
<!--End-Footer-part-->
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.popover.js"></script>
 

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../plugins/flot/jquery.flot.categories.min.js"></script>
</body>
</html>
