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
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM labtesttypes"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['TESTTYPE'] . "</option>";   }
  }
$connect->close();
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lab</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css"> 
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="admin/assets/notifier2.css">
  <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="admin/datatable/css/buttons.dataTables.min.css">

  <script src="admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="admin/datatable/js/bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="admin/datatable/js/buttons.flash.min.js"></script>
  <script src="admin/datatable/js/jszip.min.js"></script>
  <script src="admin/datatable/js/pdfmake.min.js"></script>
  <script src="admin/datatable/js/vfs_fonts.js"></script>
  <script src="admin/datatable/js/buttons.html5.min.js"></script>
  <script src="admin/datatable/js/buttons.print.min.js"></script>

   <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dn"+num).val(data[2]);
  $("#instock").val(data[2]);
  $("#PROGRAMME").val(data[3]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({

  type: "POST",
  url: "medical/drugsearch.php",
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
     $('#exaoffsite').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#viewresults').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>


<script>
  $(document).ready(function() {
     $('#exampleXY').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>


<script>
  $(document).ready(function() {
     $('#example1ot').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exampleoutex').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#example01').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
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
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#exatable').DataTable( {
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#myhistory').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>


  <script>
  $(document).ready(function() {
     $('#myserachhistory').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>


    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
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

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength":4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 5,
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
     $('#example7').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'pdf',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'print',
		 title:'NTIHC |IMMS USER CONTACTS '
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example8').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example9').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#exampleout').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
   

  <script>
  $(document).ready(function() {
     $('#example10').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example11').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example12').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example13').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example14').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#example15').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example16').DataTable( {
	  "iDisplayLength": 7,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
 

   <style media="screen">
  .btn {padding : 0px 3px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 0px solid transparent;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
} 
.progress{
  vertical-align:center;
  margin-bottom: 0px;
} 
                 table, th , td  {
                 border: 0px solid transparent;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 11px;
             	 color:#000000;
				 font-weight:normal;
             }
             table tr:nth-child(odd) {
             background-color:transparent;
             }
             table tr:nth-child(even) {
             background-color:transparent;
             } 
</style>

 <script>
	function searchpro(){
	   var dataString = document.getElementById('NTIHCNO').value;

	   if(dataString==''){ document.getElementById('schrest').innerHTML="";}
	   else{

	   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
      document.getElementById('schrest').innerHTML = this.responseText; //
    }
  };
  xhttp.open("GET", "get_clientNTIHCno_onregn.php?q="+dataString, true);
  xhttp.send();

	}
	}



  function agecalc(){
    var pn = $("#datepicker1").val();
    var dataString = "d="+pn;
    $.ajax({ type: "POST",   url: "time.php", data: dataString, cache: false,
          success: function(result){
                           $("#AGE1").val(result);
          }
         });
  }




	function upt(idxx){
    var separatedDataArray = idxx.split("__");
	    document.getElementById('NTIHCNO').value = separatedDataArray[0];
        document.getElementById('CNAME').value = separatedDataArray[1];
	    document.getElementById('schrest').innerHTML="";
		document.getElementById('myAGE1').value= separatedDataArray[3];
	}

    </script>

  <script type="text/javascript">

  </script>


	<script type="text/javascript">
function ajaxFunction(str)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
function stateChanged()
    {
    if(httpxml.readyState==4)
      {
document.getElementById("displayDiv").innerHTML=httpxml.responseText;
document.getElementById("msg").style.display='none';

      }
    }
	var url="registration_desk_oldpidsearch.php";
url=url+"?txt="+str;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
document.getElementById("msg").innerHTML="Please Wait ...";
document.getElementById("msg").style.display='inline';

  }
</script>



<script>
 var x=0,y=0;


</script>


<script> 
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script> 
   

</head>
<body class="hold-transition skin-blue sidebar-mini" style="background:url(assets/images/tf1.jpg);">
     
  <?php
  require('admin/connect/config.php');
  ?>
  
 <!--?php
 require('v2/header_cm.php');
 ?-->
    
	<div class="panel-body">  
	 
	<div class="col-md-6" style="background-color:transparent;">  
		 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:16%; border: 0px;">  
        <img src="assets/img/ntihclog2.png"width="70" height="90" style="border: 0px; ">   
      </td>
   
      <td style="width:28%; border: 0px;"> 
	   <a href="client_management.php">  
	   <center><img src="database icons/Medical-54-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Dashboard&nbsp;&nbsp;&nbsp;</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		<a href="client_lab.php?d1=0&d2=0"> 
       <center><img src="database icons/59449894425chart-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">   
        Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
   
      <td style="width:28%; border: 1px;"> <a href="client_lab_history.php">
        <center><img src="database icons/social_network-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        Client&nbsp;history  </center>    </a>
        <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		<a href="client_lab.php">
        <center><img src="database icons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        Requisition&nbsp; &nbsp; </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
		  
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
 
  
   </div> 
  
   <div class="col-md-6" style=" background-color:transparent;">  
  
  
   </div>
   </div>
     
   <div class="col-md-4" style=" background-color:transparent;">  
    <ul class="nav nav-tabs" style="border: 0px;"> 
    
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
      <td style="width:33.33333333%; border: 0px; background-color:transparent;">  <a data-toggle="tab" href="#tab1">
       <center><img src="database icons/queue-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> <br>
        <a href="client_management.php">Incoming <b class="data-taggle" class="tooltip" title="No. of clients due for medical services">
		&nbsp;
		  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND
				LABVIST ='1' AND TESTSTATUS ='NOT STARTED' GROUP BY NTIHCNO
				                        ORDER BY NTIHCNO DESC");
				$result->execute();
				$rowcount1 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount1;?>
		</a> </b></center>   </a> 
		</td> 
		
		<td style="width:33.33333333%;border:0px ; background-color:transparent;"> 
	 <a data-toggle="tab" href="#tab2">
          <center><img src="database icons/icon-resources-staffing.png" width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> <br>
           Completed
		   <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND
				LABVIST ='1' AND TESTSTATUS ='COMPLETED'
				                        ORDER BY NTIHCNO DESC");
				$result->execute();
				$rowcount3 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount3;?>
		  <center></a> 
         
	 </td>  
   
   <td style="width:33.33333333%;border: 0px ; background-color:transparent;">  
     <a data-toggle="tab" href="#tab3">
       <center><img src="database icons/press-nozbe.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> <br> 
         Pending &nbsp;
		  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE  
				LABVIST ='1' AND TESTSTATUS ='NOT STARTED' ORDER BY NTIHCNO DESC");
				$result->execute();
				$rowcount2 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount2;?>
 <center></a> 
     
	</td>
	 
 </tbody>
 </table>
   </ul>   
        <div class="panel-body">	
        <div class="widget-content tab-content" style="border:0px;" >  
            <div id="tab1" class="tab-pane active"> 
			 
			<div id="dialog-window" style="background-color:transparent;">
            <div id="scrollable-content" style="background-color:transparent;">
            <ul>
                               <div class=""  id="medicalvists" style="margin-left: -41px;"></div>
                                </div>
                                </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div> 

<style>
#dialog-window {
  height: 300px;
  border: 0px black solid;
  border-radius:7px;
  width:111%;
}

#scrollable-content {
  height: 300px;
  overflow: auto;
  background-color: transparent;
  width:111%;
}

#footer {
  height: 0px;
}
</style>
  
			
            </div>
            <div id="tab2" class="tab-pane"> 
		    <table id="example1ot" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
		             <th style="background-color:transparent;">VIST DATE</th>
					 <th style="background-color:transparent;">NTIHC.NO</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>  
                     <th colspan="2" style="background-color:transparent;text-align:center;">ACTION</th>  
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dtsxxc = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsxxc[0];
document.getElementById("myID").value=dtsxxc[1];  
document.getElementById("myAGE1").value=dtsxxc[2]; 
document.getElementById("myAGEGP").value=dtsxxc[3];
document.getElementById("mySEX").value=dtsxxc[4]; 
document.getElementById("myRSVNID").value=dtsxxc[5]; 
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' AND
				                       LABVIST ='1' AND TESTSTATUS ='COMPLETED'  
									    GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsxxc = $res['RID']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";  
		
		echo '<td>    
		 &nbsp;&nbsp;   &nbsp;&nbsp; 
		<a id="510__'.$dtsxxc.'" href="javascript:void(0)"  onclick="getvistdata(this.id)" data-toggle="tooltip" 
		title="Quick view" 
		<span class="glyphicon glyphicon-user"> </span></a> &nbsp;&nbsp; 
		   
		</td>'; 
		 echo "<td><a href=\"client_lab_hist.php?NTIHCNO=$res[NTIHCNO]\">CLICK</a>  </td>";     	
	}
	   
    ?>
	</tbody>
    </table>   
			 
            </div>
            <div id="tab3" class="tab-pane">
        
			 	 <table id="myhistory" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; margin-top:10px;">
        <thead>
        <tr> 
		              <th style="">DATE</th>
                      <th style="">NTIHC.NO.</th>
                      <th style="">NAME</th>
                      <th style="">ACTION</th>

           </tr> 
        </tfoot>
        <tbody>

<?php
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';

$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE  
				                       LABVIST ='1' AND TESTSTATUS ='NOT STARTED' AND LABOREDRSTATUS='NULL'
									    GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsxxcW = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";  
		
		echo '<td>    
		
		<a id="11409__'.$dtsxxcW.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
		<span class="glyphicon glyphicon-ok"> </span></a> &nbsp;    
		<a id="11509__'.$dtsxxcW.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a> 
	
		</td>';     	
	}
	   
    ?>
	
	  
	</tbody>
  </table>
			 
	        </div>
            
			
			
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
             <th style="width:39%; text-align:left; border:0px;">  <strong>Clients&nbsp;due&nbsp;for Testing</strong></th>
			 <th style="width:10%; text-align:left; border:0px;">   
			 <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
			 <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND
				 LABVIST ='1' AND TESTSTATUS ='NOT STARTED' 
				                        ORDER BY NTIHCNO DESC");
				$result->execute();
				$rowcount1 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount1;?>
			 </td>  
			 <th style="width:2%; text-align:left; border:0px;">  </th>
			 <th style="width:39%; text-align:left; border:0px;"><strong>No.&nbsp;completed clients</strong>  </th>
			 <th style="width:10%; text-align:left; border:0px;">  
			 <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5">
			  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND
				                       LABVIST ='1' AND TESTSTATUS ='COMPLETED' AND LABOREDRSTATUS='NULL'
									    GROUP BY NTIHCNO ORDER BY DATECREATED");
				$result->execute();
				$rowcount2 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount2;?>
		 </b>
			 </td>  
			 </tr>             
             </table> 
            </div>  
   </div> 
   </div>
   
          <div class="col-md-1" style=" background-color:transparent;"></div>  
          <div class="col-md-7" style=" background-color:transparent;">     
			    
			   
			  <center style="color:#000; font-weight:bold; font-size:12px;font:bold 16px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">
			  Clients Management - Laboratory</center><br>
			   
			   <div class=""  id="dem">  </div>
               <script> 
          function getstuffclientel(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[0];
		  var ddt = jose.split("__")[1];
		      postclient(ddt);
                $.ajax({
                       type    : 'POST',
					   data    :{bb:odno},
                       url     : 'medical/medical_get_lab.php?q='+odno,
                       success : function(data){
                                $('#dem').html(data);
								$("#demm").modal("show");
                                 }
               });
               } 
               </script>   

        <form class="form-horizontal" action="laboratory_process.php" method="post" style="height:auto;"/>  
				 
	    <input type="hidden" name="NTIHCNO" id="myNTIHCNO" required="required"  >
		
		<input type="hidden" id="myID" name="RID">
		
		<input type="hidden" name="AGE1" id="myAGE1"> 
		 
		<input type="hidden" id="myAGEGP" name="AGE_GROUP">
		
		<input type="hidden" id="myRSVNID" name="RSVNID">
		 
        <input type="hidden" id="mySEX" name="SEX">
		 
		
	    <input type="hidden"  name="TESTSTATUS" id="TESTSTATUS" value="PROGRESSING"  /> 
		
		<input type="hidden"  name="LABOREDRSTATUS" id="LABOREDRSTATUS" value="COMPLETED"  /> 
		<input type="hidden" id="REGISTERACCOUNT" name="REGISTERACCOUNT" value="<?php echo $rm; ?>" >  
		 
		<input type="hidden" name="TIMEOUT" id="CHECKIN" > 
		
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:20%;border:0px;">Test date </th>
	 <th style="width:28%;border:0px;"> <input type="date"  name="DATECREATED"  id="myDATECREATED"   
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
				
		 <th style="width:4%;border:0px;">  </th> 	  
					
   <th style="width:20%;border:0px;">Requesting unit</th>
   <td style="width:28%;"><input type="text" name="REQUESTINGUNIT"  id="myREQUESTINGUNIT"   
                style="width:100%; text-align:left;background-color:transparent;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:20%;border:0px;">Initiated by </th>
	 <th style="width:28%;border:0px;"> <input type="text"  name="SERVICEPROVIDER" id="mySERVICEPROVIDER"  
	 required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	 
	 <th style="width:4%;border:0px;">  </th> 
	 
     <th style="width:20%;border:0px;">Vist type</th>
     <td style="width:28%;"><input type="text" name="VISTTYPE" id="myVISTTYPE" 
				  style="width:100%; font-weight:normal; background-color:transparent;">  </th>
     </tr>
     <tr>  </tbody>  </table> 
	 
	 <input type="hidden" id="myCLIENTNAME" name="NAME">
	 
	 <br>
  
	 
  <input type="button" onClick="addRow16('mytable1')" value="Add" style="border-radius:9px;"/>
     <input type="button" onClick="deleteRow16('mytable1')" value="Remove" style="border-radius:9px;" />
     <input type="hidden" id="mytable_rows1" value="0"> <p></p>
    
    <table class="table table-table table tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
       <tr>
       <th>*</th>
        <th>SPECIMEN</th>
                    <th>HEAMATOLOGY/SEROLOGY</th>
                    <th>MALARIA</th>
                    <th>STOOL MICROSCOPY</th>
                    <th>URINE MICROSCOPY</th>
                    <th>SWABS.TYPE</th>
                    <th>WET.PREP</th>
                    <th>GRAM STAIN</th> 
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>  
  
     <br/><br/>
	 
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:20%;border:0px;">Lab technician </th>
	 <th style="width:28%;border:0px;">    </th> 
				
		 <th style="width:4%;border:0px;">  </th> 	  
					
   <th style="width:20%;border:0px;">Title</th>
   <td style="width:28%;"> </td> 
   </tr>
  <tr>
 </tbody>
 </table>        
             
       <br>             
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr> 
	 <th style="width:40%;border:0px;">  <center> 
               <input type="submit" name="button" id="button" value="Add results" style="border-radius:9px;"/> 
			  </center> </th>
	 
	 <th style="width:20%;border:0px;">  </th> 
				
	  <th style="width:40%;border:0px;">  
	  <center> <a href="client_lab.php">
       <center><img src="database icons/reset6.jpg" width="100" height="100" class="img-circle" <b class="" 
       data-toggle="tooltip" title="Refresh" style="border: 6px solid #ecf0f5; height:60px; width:60px;"> 
      </center> </a>
	   </td> 
   </tr>
  <tr>
 </tbody>
 </table>         
			   
               </form>
			  
			  
			  
			  
			  <hr>
			    <?php 
  $id = $_GET['NTIHCNO'];   
  $RSVNID = ''; 
  $dnx    = array();
  $fqx    = array(); 
  $aa    = array(); 
  
  $abb    = array();
  $acc    = array(); 
  $add    = array(); 
  $aee    = array();
  $aff    = array();  
   
  $DATECREATED = '';
  $NTIHCNO = '';   
  
  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory WHERE NTIHCNO = '$id' ";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $RSVNID          = $row['RSVNID'];  
	 $DATECREATED      = $row['DATECREATED'];  
	 $dnx[]    = $row['SPECIMEN'];
     $fqx[]       = $row['HEAMATOLOGY_SCROLOGY']; 
	 $aa[]    = $row['MALARIA'];
	  
     $abb[]       = $row['STOOL_MICROSCOPY']; 
	 $acc[]    = $row['URINE_MICROSCOPY'];
	 $add[]    = $row['SWABS_TYPE'];
     $aee[]       = $row['SWABS_WETPREP']; 
	 $aff[]    = $row['SWABS_GRAMSTAIN'];
	 
	 $TIMESTAMP  = $row['TIMESTAMP'];  
     $NTIHCNO  = $row['NTIHCNO']; 
	 
      } 
     ?>
            
	 <form class="form-horizontal"  method="post" action="client_lab_histpro2.php" 
	 style="height: auto;background-color:transparent;">
	  
	  <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr>  
       <th>*</th>
	    <th>SPECIMEN</th>
                    <th>HEAMATOLOGY/SEROLOGY</th>
                    <th>MALARIA</th>
                    <th>STOOL MICROSCOPY</th>
                    <th>URINE MICROSCOPY</th>
                    <th>SWABS.TYPE</th>
                    <th>WET.PREP</th>
                    <th>GRAM STAIN</th> 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
												   
			 <td> <select name="aa[]" type="text" value="<?php echo $aa[$s]; ?>" readonly=""  
												  style= "width:100%; background-color:#ecf0f5; "/>
												  <option value="<?php echo $aa[$s]; ?>"><?php echo $aa[$s]; ?></option>
						 <option>URINE</option> 
						 <option>STOOL</option> 
						 <option>SALIVA</option> 
						 <option>CSF</option> 
												  </select>
												  </td> 
												  
             <td> <select name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="" 
												 style= "width:100%; background-color:#ecf0f5; "/>
												 <option value="<?php echo $dnx[$s]; ?>"><?php echo $dnx[$s]; ?></option>
							 <option>HIV TEST </option> 
						     <option>Hb </option> 
                             <option>WBCT</option> 
             				 <option>SYPHILIS TEST</option> 
							 <option>BLOOD GROUPING</option> 
												  </select>
												 
                                                 </td> 
												 
             <td> <select  name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/>
												  <option value="<?php echo $fqx[$s]; ?>"><?php echo $fqx[$s]; ?></option>
							 <option>MALARIA MICROSCOPY </option> 
                             <option>MALARIA RDTs</option> 
             				 <option>OTHER HEAMOPATRASITES</option> 
												  </select>
												  </td> 
												  
		     <td> <select  name="abb[]" type="text" value="<?php echo $abb[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/>
												  <option value="<?php echo $abb[$s]; ?>"><?php echo $abb[$s]; ?></option>
									     <option>MACRO </option> 
                                         <option>MICRO</option> 
												  </select>
												  </td> 
												  
			<td> <select  name="acc[]" type="text" value="<?php echo $acc[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/>
												  <option value="<?php echo $acc[$s]; ?>"><?php echo $acc[$s]; ?></option>
							<option>MACROSCOPY </option> 
                            <option>MICROSCOPY</option>
             				<option>PROTEIN</option> 
							<option>SUGAR</option> 
             				<option>PREGNANCY</option> 
												  </select>
												  </td> 
												  
			<td> <select  name="add[]" type="text" value="<?php echo $add[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/>
												  <option value="<?php echo $add[$s]; ?>"><?php echo $add[$s]; ?></option>
							 <option>VIGINAL </option> 
                             <option>ORAL</option> 
							 <option>PENILE</option>
												  </select>
												  </td>
												  
			<td> <select  name="aee[]" type="text" value="<?php echo $aee[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/>
												  <option value="<?php echo $aee[$s]; ?>"><?php echo $aee[$s]; ?></option>
							 <option>VIGINAL </option> 
                             <option>ORAL</option> 
							 <option>PENILE</option> 
												  </select>
												  </td> 									   									  									  
          <td> <select  name="aff[]" type="text" value="<?php echo $aff[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/>
												  <option value="<?php echo $aff[$s]; ?>"><?php echo $aff[$s]; ?></option>
							 <option>POSITIVE </option> 
                             <option>NEGATIVE</option> 
												  </select>
												  </td>                                          
												   
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
  </tbody>
  </table>  
  
  <input type="hidden" name="RSVNID" value="<?php echo $RSVNID;?>" />
  <input type="hidden" name="NTIHCNO" value="<?php echo $NTIHCNO;?>" />
  <input type="hidden" name="UPDATEDBY" value="<?php echo $nameofuser;?>"  />
  
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr> 
	 <th style="width:25%;border:0px;">Client No. </th>
	  <th style="width:25%;border:0px;"> 
	 <input type="text" name="NTIHCNO" value="<?php echo $NTIHCNO;?>" 
	 style="width:100%; font-weight:normal; background-color:transparent;"/> </th>
	 
	 <th style="width:10%;border:0px;">  </th> 
				
	  <th style="width:40%;border:0px;">   <center>  
			   <input type="submit" name="buttonsend" id="button" value="Update test" style="border-radius:9px;"/>
			  </center> </td> 
   </tr>
  <tr>
 </tbody>
 </table>  
  </form>  
			 
	<hr>
 
      <form class="form-horizontal"  method="post" action="client_lab_histpro3.php" 
	 style="height: auto;background-color:transparent;">
	  <?php
					$c=mysqli_query($conn,"select * from cmpatientsregistration where NTIHCNO = '$id'");
					$crow=mysqli_fetch_array($c); 
					
					$d=mysqli_query($conn,"select * from laboratory where NTIHCNO = '$id'");
					$drow=mysqli_fetch_array($d); 
				    ?> 
   
	 
  <input type="hidden" name="RSVNID" value="<?php echo $crow['RSVNID']; ?>" />
  <input type="hidden" name="NTIHCNO" value="<?php echo $crow['NTIHCNO']; ?>" />
  <input type="hidden" name="AGE1" value="<?php echo $crow['AGE1']; ?>" />
  <input type="hidden" name="AGE_GROUP" value="<?php echo $crow['AGE_GROUP']; ?>" />
  <input type="hidden" name="SEX" value="<?php echo $crow['SEX']; ?>" />
  <input type="hidden" name="NAME" value="<?php echo $crow['CLIENTNAME']; ?>" /> 
  <input type="hidden" name="REQUESTINGUNIT" value="<?php echo $crow['REQUESTINGUNIT']; ?>" />
  <input type="hidden" name="REGISTERACCOUNT" value="<?php echo $crow['REGISTERACCOUNT']; ?>" />
  <input type="hidden" name="TESTEDBY" value="<?php echo $drow['TESTEDBY']; ?>" />
  <input type="hidden" name="TECHTITLE" value="<?php echo $drow['TECHTITLE']; ?>" />
  
	 <?php 
  $id = $_GET['NTIHCNO'];  
  $DATECREATED = '';
  $NTIHCNO = '';   
  $AGE1 = '';
  $AGE_GROUP = '';   
  $SEX = '';
  $NAME = '';   
  $REQUESTINGUNIT = '';   
  $REGISTERACCOUNT = '';
  $TESTEDBY = ''; 
  $TECHTITLE = '';  
  $LOTA = '';  $LOTB = '';  $LOTC = '';  $EXPIRYDATET1 = '';  $EXPIRYDATET2 = '';  $EXPIRYDATET3 = '';  
  $REACTIVITYT1 = '';  $REACTIVITYT2 = '';  $REACTIVITYT3 = '';  $FINALREACTIVITY = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM hivtests WHERE NTIHCNO = '$id' GROUP BY RSVNID DESC";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 $id  = $row['id']; 
     $RSVNID          = $row['RSVNID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO']; 
	  
	 $AGE1          = $row['AGE1'];  
	 $AGE_GROUP      = $row['AGE_GROUP'];   
     $SEX  = $row['SEX']; 
	 $NAME    = $row['NAME'];  
	 $REQUESTINGUNIT      = $row['REQUESTINGUNIT'];   
     $REGISTERACCOUNT  = $row['REGISTERACCOUNT']; 
	 $TESTEDBY      = $row['TESTEDBY'];   
     $TECHTITLE  = $row['TECHTITLE']; 
	 
	 $LOTA      = $row['LOTA'];   
     $LOTB  = $row['LOTB']; 
	 $LOTC      = $row['LOTC'];   
     $EXPIRYDATET1  = $row['EXPIRYDATET1']; 
	 $EXPIRYDATET2      = $row['EXPIRYDATET2'];   
     $EXPIRYDATET3  = $row['EXPIRYDATET3']; 
	 $REACTIVITYT1      = $row['REACTIVITYT1'];   
     $REACTIVITYT2  = $row['REACTIVITYT2']; 
	 $REACTIVITYT3      = $row['REACTIVITYT3'];   
     $FINALREACTIVITY  = $row['FINALREACTIVITY'];  
	       
      } 
     ?>
	 
	 <input type="hidden" name="id" value="<?php echo $id;?>" /> 
	    			 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;"></th>
	 <th style="width:25%;border:0px;">HIV Test 1  </th> 
	 <th style="width:25%;border:0px;"> HIV Test 2  </th>   
     <th style="width:25%;border:0px;">HIV Test 3</th>  </th>
     </tr>
     <tr>  </tbody>  </table> 
	 
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Kit name</th>
	 <th style="width:25%;border:0px;">Determine </th> 
	 <th style="width:25%;border:0px;">Start Pack </th>   
     <th style="width:25%;border:0px;">Unigold</th>  </th>
     </tr>
     <tr>  </tbody>  </table> 
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Lot No </th>
	 <th style="width:25%;border:0px;"> <input type="text"  name="LOTA" id="LOTA"  value="<?php echo $LOTA;?>"
	   style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	  
     <th style="width:25%;border:0px;">  <input type="text"  name="LOTB" id="LOTB" value="<?php echo $LOTB;?>" 
	   style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	 
     <td style="width:25%;"><input type="text"  name="LOTC" id="LOTC" value="<?php echo $LOTC;?>" 
	   style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
     </tr>
     <tr>  </tbody>  </table> 
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Expiry date</th>
	 <th style="width:25%;border:0px;"> <input type="date"  name="EXPIRYDATET1" id="EXPIRYDATET1" 
	 value="<?php echo $EXPIRYDATET1;?>"
	 style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	  
     <th style="width:25%;border:0px;">  <input type="date"  name="EXPIRYDATE2" id="EXPIRYDATE2" 
	 value="<?php echo $EXPIRYDATET2;?>"
	 style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	 
     <td style="width:25%;"><input type="date"  name="EXPIRYDATET3" id="EXPIRYDATET3" value="<?php echo $EXPIRYDATET3;?>" 
	 style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
     </tr>
     <tr>  </tbody>  </table> 
	 
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Reactivity</th>
	 <th style="width:25%;border:0px;"> <select  id="REACTIVITYT1" name="REACTIVITYT1"  value="<?php echo $REACTIVITYT1;?>" style="width:100%; font-weight:normal; background-color:transparent;"> 
	                            <option  value="<?php echo $REACTIVITYT1;?>" > <?php echo $REACTIVITYT1;?> </option>
                                <option>NR</option>
                                <option>R</option>
                                <option>INV</option>
                                <option>NT</option>
                                </select> </th> 
	  
     <th style="width:25%;border:0px;"> <select  id="REACTIVITYT2" name="REACTIVITYT2" value="<?php echo $REACTIVITYT2;?>"
	 required="required" style="width:100%; font-weight:normal; background-color:transparent;">
	                            <option value="<?php echo $REACTIVITYT2;?>"><?php echo $REACTIVITYT2;?>  </option>
                                <option>NR</option>
                                <option>R</option>
                                <option>INV</option>
                                <option>NT</option>
                                </select>   </th> 
	 
     <th style="width:25%;border:0px;"> <select  id="REACTIVITYT3" name="REACTIVITYT3" value="<?php echo $REACTIVITYT3;?>"
	 required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
	                            <option  value="<?php echo $REACTIVITYT3;?>"> <?php echo $REACTIVITYT3;?> </option>
                                <option>NR</option>
                                <option>R</option>
                                <option>INV</option>
                                <option>NT</option>
                                </select>   </th>
     </tr>
     <tr>  </tbody>  </table>  
 
	 <br>
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Final reactivity </th>
	 <th style="width75%;border:0px;"> <select name="FINALREACTIVITY" id="FINALREACTIVITY" value="<?php echo $FINALREACTIVITY;?>"
	 required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
	                            <option value="<?php echo $FINALREACTIVITY;?>"> <?php echo $FINALREACTIVITY;?><option>
                                <option>NEGATIVE</option>
                                <option>POSITIVE</option>
								<option>INV</option>
								<option>INDETERMINATE</option>
                                </select> 
	 </th>  
     </tr> </tbody>  </table> 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr> 
	 <th style="width:25%;border:0px;">  </th>
	  <th style="width:25%;border:0px;">   </th>
	 
	 <th style="width:10%;border:0px;">  </th> 
				
	  <th style="width:40%;border:0px;">   <center>  
			   <input type="submit" name="update" value="Add HIV test" style="border-radius:9px;"/>
			  </center> </td> 
   </tr>
  <tr>
 </tbody>
 </table> 
	 </form>
  
			 
			 
			  <hr>
			   
			   
			    <?php 
  $id = $_GET['NTIHCNO'];   
  $RSVNID = ''; 
  $dnx    = array();
  $fqx    = array(); 
   $aa    = array(); 
  $DATECREATED = '';
  $NTIHCNO = '';   
  
  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laborders WHERE NTIHCNO = '$id' GROUP BY RSVNID DESC";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $RSVNID          = $row['RSVNID'];  
	 $DATECREATED      = $row['DATECREATED'];  
	 $dnx[]    = $row['TESTDESCRIPTION'];
     $fqx[]       = $row['LABRESULTS']; 
	 $aa[]    = $row['TIMESTAMP'];  
     $NTIHCNO  = $row['NTIHCNO']; 
	 
      } 
     ?>
            
	 <form class="form-horizontal"  method="post" action="client_lab_histpro1.php" 
	 style="height: auto;background-color:transparent;">
	  
	  <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr>  
       <th>*</th>
	   <th>CREATED DATE</th>
       <th>TEST DESCRIPTION </th>  
       <th>LAB RESULTS</th> 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
												   
			 <td> <input  name="aa[]" type="text" value="<?php echo $aa[$s]; ?>" readonly=""  
												  style= "width:100%; background-color:#ecf0f5; "/></td> 
												  
             <td> <input name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="" 
												 style= "width:100%; background-color:#ecf0f5; "/>
                                                 </td> 
												 
             <td> <select  name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/>
												  <option value="<?php echo $fqx[$s]; ?>"><?php echo $fqx[$s]; ?></option>
												  <option>NEGATIVE</option>
												  <option>POSTIVE</option>
												  </select>
												  </td> 
												  
		     
                                                   
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
  </tbody>
  </table>  
  
  <input type="hidden" name="RSVNID" value="<?php echo $RSVNID;?>" />
  <input type="hidden" name="NTIHCNO" value="<?php echo $NTIHCNO;?>" />
  <input type="hidden" name="TESTSTATUS" value="COMPLETED" />
  
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr> 
	 <th style="width:20%;border:0px;">Client No. </th>
	  <th style="width:20%;border:0px;"> 
	 <input type="hidden" name="NTIHCNO" value="<?php echo $NTIHCNO;?>" 
	 style="width:100%; font-weight:normal; background-color:transparent;"/> </th>
	 
	 <th style="width:20%;border:0px;">  </th> 
				
	  <th style="width:40%;border:0px;">   <center>  
			   <input type="submit" name="buttonsend" id="button" value="Save results" style="border-radius:9px;"/>
			  </center> </td> 
   </tr>
  <tr>
 </tbody>
 </table>   
    
  </form>  
  
  
  
  
    
			    
			   <BR>
			   </div>
			   </div>
			   <div class="col-sm-12">
			   <div class="panel-body">
			   
			   <center style="color:#000; font-weight:bold; font-size:12px;font:bold 14px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">Clients due for urgent results &nbsp;&nbsp;  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND
				                       LABVIST ='1' AND TESTSTATUS ='PROGRESSING' 
									    GROUP BY NTIHCNO ORDER BY DATECREATED");
				$result->execute();
				$rowcount5 = $result->rowcount(); 
			 ?>
		  <?php echo $rowcount5;?> </center> 
			   
			    <table id="exampleXY" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
		             <th style="background-color:transparent;">VIST DATE</th>
					 <th style="background-color:transparent;">NTIHC&nbsp;NO.</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th> 
					 <th style="background-color:transparent;">REQUESTED&nbsp;BY</th>
					 <th style="background-color:transparent;">SUB&nbsp;UNIT</th>
					 <th style="background-color:transparent;">STATUS</th> 
                     <th style="background-color:transparent;">ACTION</th>  
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dtsxxcqX = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsxxcqX[0];
document.getElementById("myID").value=dtsxxcqX[1];  
document.getElementById("myAGE1").value=dtsxxcqX[2]; 
document.getElementById("myAGEGP").value=dtsxxcqX[3];
document.getElementById("mySEX").value=dtsxxcqX[4]; 
document.getElementById("myRSVNID").value=dtsxxcqX[5]; 
}
</script>     
         
<?php 
include_once("updatecmgt/config.php");
 
$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE  
				                       LABVIST ='1' AND TESTSTATUS ='PROGRESSING' 
									    GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsxxcqX = $res['RID']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICEPROVIDER']."</td>";
		echo "<td>".$res['REQUESTINGUNIT']."</td>"; 
		echo "<td>".$res['TESTSTATUS']."</td>";  
		
		echo '<td>    
		 &nbsp;&nbsp;   &nbsp;&nbsp; 
		<a id="5__'.$dtsxxcqX.'" href="javascript:void(0)"  onclick="getvistdata(this.id)" data-toggle="tooltip" 
		title="Quick view" 
		<span class="glyphicon glyphicon-user"> </span></a> &nbsp;&nbsp; 
		   
		</td>'; 
		 echo "<td><a href=\"client_lab_hist.php?NTIHCNO=$res[NTIHCNO]\">CLICK</a>  </td>";      	
	}
	   
    ?>
	</tbody>
    </table>   
			   
 
                         </div>
                    </div>
					
					
					
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: 1000px; margin-left: -220px;">
                                      <div class="modal-header" style="background-color:transparent;" >
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                       <h4 class="modal-title" id="myModalLabel"> </h4>
                                       </div>
                                       <div class="modal-body">
 
      
           <div class=""  id="getvist" >  </div>
                <script>

          function getvistdata(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/getepisode_labtests.php?q='+odno,
                       success : function(data){
                                $('#getvist').html(data);
                $("#impres2").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>
 

       
         </div>


                                        </div> 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>
						 
						 
						 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->


<!-- jQuery 2.2.3 -->

<script src="assets/lib/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- Page script -->
<script>
 
function getvistdata(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getepisode_labtests.php?q='+odno,
       success : function(data){
                $('#getvist').html(data);
$("#impres2").modal("show");
                 }
});
}


function getstuff(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getepisode2.php?q='+odno,
       success : function(data){
                $('#pettyview').html(data);
$("#impres").modal("show");
                 }
});
}


function gettestresults(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getresults2.php?q='+odno,
       success : function(data){
                $('#getresults').html(data);
$("#impres4").modal("show");
                 }
});
}

</script>

     <script> 
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/medicalvists_lab.php',
                       success : function(data){
                                $('#medicalvists').html(data);
                                 }
               });
               }, 2000);

          </script>
 
 
 </body>
 </html>
 <script>
   
   function calcsubtt(tableId){
       var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
      var sum = 0;
       for(var x=1; x<rowCount; x++) { //0
      // alert(table.rows[x].cells[2].childNodes[1].value);
         sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
       }
       document.getElementById("SUBTOTAL").value = ''+sum;
   
   }
   
  
  function addRow16(tableId){

   var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<select name="dnx[]" id="dnx'+rowCount+'"  autocomplete="off" required="required" '+ 
               'style= "margin-left:0px'+ 'background-color:transparent; width:100%;">'+
            '<option> </option>'+
            '<option>BLOOD</option>'+
						'<option>URINE</option>'+
						'<option>STOOL</option>'+
						'<option>SALIVA</option>'+
						'<option>CSF</option>'+
            '</select>';
 
     var  s2bb = '<select name="fqx[]" id="fqx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                    '<option>HIV TEST </option>'+
						    '<option>Hb </option>'+
                            '<option>WBCT</option>'+
             				'<option>SYPHILIS TEST</option>'+
							'<option>BLOOD GROUPING</option>'+
                    '</select>';
					
					 var  aw = '<select name="ab[]" id="ab'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                   '<option>MALARIA MICROSCOPY </option>'+
                            '<option>MALARIA RDTs</option>'+
             				'<option>OTHER HEAMOPATRASITES</option>'+
                    '</select>';
					
					 var  bw = '<select name="ac[]" id="ac'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                    '<option>MACRO </option>'+
                                        '<option>MICRO</option>'+
                    '</select>';
					
					 var  cw = '<select name="ad[]" id="ad'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                    '<option>MACROSCOPY </option>'+
                            '<option>MICROSCOPY</option>'+
             				'<option>PROTEIN</option>'+
							'<option>SUGAR</option>'+
             				'<option>PREGNANCY</option>'+
                    '</select>';
					
					 var  cwa = '<select name="ae[]" id="ae'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                     '<option>VIGINAL </option>'+
                            '<option>ORAL</option>'+
							'<option>PENILE</option>'+
                    '</select>';
					
					 var  cwb = '<select name="af[]" id="af'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                    '<option>VIGINAL </option>'+
                            '<option>ORAL</option>'+
							'<option>PENILE</option>'+
                    '</select>';
					
					 var  cwc = '<select name="ag[]" id="ag'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                   '<option>POSITIVE </option>'+
                            '<option>NEGATIVE</option>'+ 
                    '</select>';
					
					
      
          var row      = table.insertRow(rowCount);
      var row2     = '<td><input type="checkbox" ></td>'+
                                '<td>'+s1aa+' </td>'+
								'<td>'+s2bb+' </td>'+
								'<td>'+aw+' </td>'+
								'<td>'+bw+' </td>'+
								'<td>'+cw+' </td>'+
								'<td>'+cwa+' </td>'+
								'<td>'+cwb+' </td>'+
                                '<td>'+cwc+' </td>';
            row.innerHTML = row2;
          //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
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
      table.rows[x].cells[1].childNodes[0].id="dnx"+x;
      table.rows[x].cells[2].childNodes[0].id="fqx"+x; 
	  table.rows[x].cells[3].childNodes[0].id="ab"+x;
      table.rows[x].cells[4].childNodes[0].id="ac"+x; 
	  table.rows[x].cells[5].childNodes[0].id="ad"+x; 
	  table.rows[x].cells[3].childNodes[0].id="ae"+x;
      table.rows[x].cells[4].childNodes[0].id="af"+x; 
	  table.rows[x].cells[5].childNodes[0].id="ag"+x; 
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
       calcsubtt(tableId);
}
  </script>