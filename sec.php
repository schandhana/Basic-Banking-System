<html>
<head>


	<style>
.container {
  position: relative;
}
.button {
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


.btn {
  position: absolute;
  top: 85%;
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
h6{
	position:absolute;
	top:33px;
	right:43%;
}
.contain{
	position:absolute;
	top:80px;
	right:20%;
}
table,td{
	border:3px solid black;
	width:800px;
background-color:gray;
color:white;
}
th
{
border:3px solid black;
width:800px;

background-color:pink;
color:purple;


}

body
{
background-image: url("https://thumbs.dreamstime.com/z/row-coins-bank-book-graph-business-finance-background-row-coins-bank-book-graph-business-139446654.jpg");
}
  

</style>

<body>
	<center>
	<h1><center>BASIC BANKING SYSTEM</center></h1>
        <h6>Select And View User</h6>

	<div class="container">
  
  
</div>

<div class="contain">
	<form action="" method="POST">
		<center>
		<input type='text' name='Name' autocomplete="off">
		<input type='submit' name='search' value='search'>
	</center>
	</form>
	<table ><center>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Balance</th>
			
		</tr><br>



<?php
    $conn=mysqli_connect("remotemysql.com","HaRugBoV2Y","tkWcAra9ZC","HaRugBoV2Y");
    if($conn-> connect_error){
        die("Connection failed:".$conn-> connect_error);
    }
    $sql="SELECT * FROM customers";
    $result=$conn-> query($sql);
    if($result-> num_rows >0){
        while($row=$result->fetch_assoc()){
            echo"<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>".$row["Mobile"]."</td><td>".$row["Email"]."</td><td>".$row["Balance"]."</td></tr>";
        }
        echo"</table>";

    }
    else{
        echo"0 result";
    }

    $conn-> close();
    ?>


</table>










		<?php 
		$connection = mysqli_connect("localhost","root","","users");
		//$db = mysqli_select_db($connection,'test');
		if(isset($_POST['search']))
		{
			$Name = $_POST['Name'];
			$query ="SELECT * from customers WHERE Name='$Name' ";
			$query_run = mysqli_query($connection,$query);

			while($row = mysqli_fetch_array($query_run))
			{
				?>
				
				<?php
				echo "<h3>";
				echo "  id: "."  " .$row["id"]."<br>";
				echo "Name:"."  ".$row["Name"]."<br>";
				echo "  Mobile:"."  ".$row['Mobile']."<br>";
				echo "     Email:"."  ".$row['Email']."<br>";
				echo "      Balance: "."  ".$row['Balance'];
			}
		}
		?>
	</center>

<a href="plsgodhelp.php" class="btn">Transfer Money </a>



<br>

<a href="index3.html" class="button">Visit Home Page</a>


	</table>

	
</div>
</center>

</body>

</html>
