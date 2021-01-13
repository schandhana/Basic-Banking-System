<!DOCTYPE html>
<html>
<head>
	<title>Banking Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type ="text/css" href="cStyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body{
                width: 100%;
	height: 100vh;
                background:  url("https://images.unsplash.com/photo-1499002238440-d264edd596ec?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max");
                background-size: cover;
	position: relative;
  overflow: hidden;
  font-family: sans-serif;
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
</style>

</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Transfer money</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index3.html">Homepage</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Money Transfer</h2>
  <form class="form-horizontal" action="plsgod.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" >Sender's id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter sender's id" name="sender" autocomplete="off" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Receiver's id:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter receiver's id" name="receiver" autocomplete="off" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Amount:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Amount" name="amount" autocomplete="off" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit">Proceed To Pay</button>
      </div>
    </div>
  </form>
</div>
<a href="sec.php" class="btn">back</a>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>