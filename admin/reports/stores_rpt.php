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
  <title>Ntihc</title>
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
  
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTROB").val(data[4]);
  $("#SECONDQTROB").val(data[5]);
  $("#THIRDQTROB").val(data[6]);
  $("#FOUTHQTROB").val(data[7]);
  $("#TOTALROB").val(data[8]); 
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
     $('#secondq').DataTable( {
	  "iDisplayLength": 10,
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
     $('#exsuppex').DataTable( {
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
 
  
<link href="../proc/pmt/css/bootstrap-responsive.css" rel="stylesheet">
<link href="../proc/style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../proc/pmt/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../proc/pmt/lib/jquery.js" type="text/javascript"></script>
<script src="../proc/pmt/src/facebox.js" type="text/javascript"></script>  
  
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
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
                 border: 1px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
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
  
  <!-- Left side column. contains the logo and sidebar -->
               
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">

<div class="col-sm-1">
 
</div>

<div class="col-sm-10">
                  <!-- Info boxes --> 
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;background-color:#f44336;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
              <td style="width:33.3333333%;background-color:#f44336;"><a rel="facebox" title="" href="tollree_rpt.php?d1=0&d2=0" 
              style="width:33.3333333%;background-color:#f44336;">
              <button class="" ><i class="icon-edit">   
   </i> Stores dashboard</button> </a>
  
   <td style="width:13.3333333%;background-color:#f44336;"><a rel="facebox" title="" href="general.php?d1=0&d2=0"><button class="">
   <i class="icon-edit">  
   </i> General report</button> </a>
   
   <td style="width:20%;background-color:#f44336;"><a rel="facebox" title="" href="callers.php?d1=0&d2=0"><button class="">
   <i class="icon-edit">  
   </i>Caller records</button> </a>
     
   <td style="width:33.3333333%;background-color:#f44336;"><a rel="facebox" title="" href="../sys_dashboard.php"><button class="">
   <i class="icon-edit">  
   </i>  <strong>System dashboard</strong></button> </a>  </td>   
			 </tr>             
            </table>
             
             
              <center>  
   
     </center>
     </p>
     <br>
   
<div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
 <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
    
    <link rel="stylesheet" href="areachart/chart.js/bootstrap.min.css" />
	<script src="areachart/chart.js/jquery.min.js"></script>
	<script src="areachart/chart.js/bootstrap.min.js"></script> 
	<!-- ChartJS -->
	<script src="areachart/chart.js/Chart.js"></script>   
            	<?php
            		  //set timezone
					       //date_default_timezone_set('Asia/Manila');
					       $year = date('Y');
            	?>
              <h4 class="box-title">Tollfree performance (<?php echo $year-1; ?> vs <?php echo $year; ?>)</h4>

            </div> 
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
        </div>
		</div>
	</div>
</div>
<?php include('areachart/data.php'); ?>
<script>
  $(function () {
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
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
    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)

  })
</script>        
             
             
           <br><br>
          </div>
<div class="col-sm-1">
</div>
<div class="col-sm-10">
                  <!-- Info boxes --> 
                                   
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>   
           </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
        <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.charts.js"></script>
        <script src="fusion/js/themes/fusioncharts.theme.zune.js"></script>
               
  <div class="table-responsive mailbox-messages"> 
             <?php
			 
		 include("fusion/src/fusioncharts.php");
  
$hostdb = "localhost"; 
$userdb = "root";  
$passdb = ""; 
$namedb = "patientmgt"; 

// Establish a connection to the database
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
 
if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?> 

<?php
  
    $strQuery = "SELECT SUM(RECORDCOUNTER),PROBLEM FROM tollreasons GROUP BY PROBLEM ASC";
	
    // Execute the query, or else return the error message.
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

    // If the query returns a valid response, prepare the JSON string
    if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
              "caption" => "Tollfree services by problem description ",
              "paletteColors" => "#d2d6de",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "20",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#000",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );

        $arrData["data"] = array();

// Push the data into the array
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
		
            "label" => $row["PROBLEM"], 
			
            "value" => $row["SUM(RECORDCOUNTER)"]
            )
        );
        }

        /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        $jsonEncodedData = json_encode($arrData); 
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 1100, 303, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $dbhandle->close();
    }

?>

    <div id="chart-1"><!-- Fusion Charts will render here--></div> 
    </div> </div>  
            
            </div>
             
             </div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
             
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
               
 <!-- /. PAGE WRAPPER  -->
 
       <!-- /.content-wrapper -->
  <footer class="main-footerx">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
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
    <!--END PAGE LEVEL SCRIPTS --> 
<script type="text/javascript" src="../assets/js/gauge.js"></script> 
   
</body>
</html> 

