 
	    <table id="example1" class="table table-tabled table-bordered" 
		style="font-weight:normal; font-size:9px; width:100%; background-color:transparent; 
		border: 1px solid rgb(230, 220, 218); box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1) !important;">
        <thead>
        <tr>   
                  
		             <th style="background-color:transparent;">VIST&nbsp;DATE</th>
					 <th style="background-color:transparent;">NTIHC.NO</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>
                     <th style="background-color:transparent;">AGE</th>  
                     <th style="background-color:transparent;">ACTION</th>  
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[0];
document.getElementById("myID").value=dts[1];  
document.getElementById("myAGE1").value=dts[2]; 
document.getElementById("myAGEGP").value=dts[3];
document.getElementById("mySEX").value=dts[4]; 
document.getElementById("myRSVNID").value=dts[5]; 
document.getElementById("myDATECREATED").value=dts[6];  
document.getElementById("myREQUESTINGUNIT").value=dts[7];
document.getElementById("mySERVICEPROVIDER").value=dts[8];
document.getElementById("myVISTTYPE").value=dts[9];
document.getElementById("myCLIENTNAME").value=dts[10]; 
}
</script>    
         
<?php 
include_once("../updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' AND LABVIST ='1' 
                                                                       AND TESTSTATUS ='NOT STARTED'
                                                  AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']
	."***".$res['DATECREATED']."***".$res['REQUESTINGUNIT']."***".$res['SERVICEPROVIDER']
	."***".$res['VISTTYPE']."***".$res['CLIENTNAME'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>"; 
		echo "<td>".$res['AGE1']."</td>";  
		echo '<td>    
		
		<a id="4__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
		<span class="glyphicon glyphicon-ok"> </span></a> &nbsp;    
		<a id="5__'.$dts.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a> 
	
		</td>';     	
	}
	   
    ?>
	</tbody>
    </table>  
	  
	
	
	