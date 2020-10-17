<?php

include "include/connect.php";



$sql = "SELECT book.order_id,book.date,book.datebook,book.Advlt,book.payments,tour.Advlt_price,tour.Chid_price,tour.Tour_name,customer.cus_name 
FROM  (( `book`
INNER JOIN customer ON book.cus_ID = customer.cus_ID )
INNER JOIN tour ON book.Tour_ID = tour.Tour_ID ) WHERE book.cus_ID = '". $_SESSION['cus_ID']."' ";




$result = $con->query($sql) or die($con->error);
$rowdeteil =$result ->fetch_assoc() ;
?>

<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<form name="frmMain" action="" >
<script >
	function fncSum()
	{
		 if(isNaN(document.frmMain.txtNumberA.value) || document.frmMain.txtNumberA.value == "")
		 {
			alert('(Number A)Please input Number only.');
			document.frmMain.txtNumberA.focus();
			return;
		 }

		 if(isNaN(document.frmMain.txtNumberB.value) || document.frmMain.txtNumberB.value == "")
		 {
			alert('(Number B)Please input Number only.');
			document.frmMain.txtNumberB.focus();
			return;
		 }

		 document.frmMain.txtNumberC.value = parseFloat(document.frmMain.txtNumberA.value) * parseFloat(document.frmMain.txtNumberB.value) + parseFloat(document.frmMain.txtNumberc.value) * parseFloat(document.frmMain.txtNumberd.value) ;
	}
</script>
<input type="text" name="txtNumberA" value="" OnChange="fncSum();"> <br>
 <input type="text" name="txtNumberB" value="<?php echo $rowdeteil ['Chid_price']; ?>" OnChange="fncSum();"> <br>


 <input type="text" name="txtNumberc" value="0" OnChange="fncSum();"> <br>
 <input type="text" name="txtNumberd" value="<?php echo $rowdeteil ['Chid_price']; ?>" OnChange="fncSum();"> <br>


A + B  = <input type="text" name="txtNumberC" value=""><br>
</form>
</body>
</html>


<!-- <DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
       
  function a(){    
      
       var int1 = document.getElementById("input1").value;
       var int2 = document.getElementById("input2").value;
       var int3 = document.getElementById("input3").value;
       var int4 = document.getElementById("input4").value;
              
       var n1 = parseInt(int1);
       var n2 = parseInt(int2);  
       var n3 = parseInt(int3);
       var n4 = parseInt(int4); 
                       
       if ((isNaN(n1))||(isNaN(n2))||(isNaN(n3))||(isNaN(n4))){
           document.getElementById("show").setAttribute("color","red");
           show.innerHTML="ERROR";
       }    
       else {         
          s=n1*n2+n3*n4;      
          document.getElementById("show").setAttribute("color","green");
          show.innerHTML=s;
       }
      } 
</script>
</head>

<body>
      
      <center>
        ช่อง1  : <input id="input1" name="input1" type="number" min="1" max="4" size="10" /><br />
        ช่อง2  : <input id="input2" name="input2"  value="2" size="10" /><br />
        ช่อง1  : <input id="input3" name="input3" type="number" value="0"  min="1" max="8"size="10" /><br />
        ช่อง2  : <input id="input4" name="input4" value="2" size="10" /><br />
        
              
        ผลลัพธ์ : <font id="show" color=""></font> <br />         
    
        <button onclick="javascript: a();">+</button>
      </center>

      
              
      
</body>
</html> -->