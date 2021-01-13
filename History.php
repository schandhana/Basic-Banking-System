<html>
<head>


	<style>
.container {
  position: relative;
}



.btn {
  position: absolute;
  top: 93%;
  left: 53%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: blue;
  color: white;
  font-size: 16px;
  padding: 3px 9px;
  border: black;
  cursor: pointer;
  border-radius: 3px;
  text-align: center;
}

h1{
	position:absolute;
	top:2px;
	right:33%;
}
.contain{
	position:absolute;
	top:80px;
	right:20%;
}
table,td{
	border:2px solid blue;
	width:800px;
background-color:yellow;
color:gray;
}
th
{
border:2px solid blue;
width:800px;

background-color:pink;
color:purple;


}
 body{
                width: 100%;
	height: 100vh;
                background:  url("https://thumbs.dreamstime.com/z/row-coins-bank-book-graph-business-finance-background-row-coins-bank-book-graph-business-139446654.jpg");
                background-size: cover;
	position: relative;
  overflow: hidden;
  font-family: sans-serif;
            }

</style>

<body>
	<center>
	<h1><center>View Transaction History</center></h1>
	<div class="container">
  
  
</div>
<div class="contain">
	
	<table ><center>
		<tr>
			<th>Sender_id</th>
			<th>Receiver_id</th>
			<th>Amount</th>
			
			
		</tr><br>



<?php
    $conn=mysqli_connect("remotemysql.com","HaRugBoV2Y","tkWcAra9ZC","HaRugBoV2Y");
    if($conn-> connect_error){
        die("Connection failed:".$conn-> connect_error);
    }
    $sql="SELECT * FROM HaRugBoV2Y.transfers";
    $result=$conn-> query($sql);
    if($result-> num_rows >0){
        while($row=$result->fetch_assoc()){
            echo"<tr><td>".$row["Sender"]."</td><td>".$row["Receiver"]."</td><td>".$row["Amount"]."</td></tr>";
        }
        echo"</table>";

    }
    else{
        echo"0 result";
    }

    $conn-> close();
    ?>


</table>
</center>

<a href="sec.php" class="btn">Back</a>





	</table>

	
</div>
</center>

</body>

</html>





