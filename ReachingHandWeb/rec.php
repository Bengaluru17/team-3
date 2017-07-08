<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .inv {
  	-moz-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  	-webkit-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  	box-shadow:inset 0px 1px 0px 0px #fce2c1;
  	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25) );
  	background:-moz-linear-gradient( center top, #ffc477 5%, #fb9e25 100% );
  	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25');
  	background-color:#ffc477;
  	-webkit-border-top-left-radius:20px;
  	-moz-border-radius-topleft:20px;
  	border-top-left-radius:20px;
  	-webkit-border-top-right-radius:20px;
  	-moz-border-radius-topright:20px;
  	border-top-right-radius:20px;
  	-webkit-border-bottom-right-radius:20px;
  	-moz-border-radius-bottomright:20px;
  	border-bottom-right-radius:20px;
  	-webkit-border-bottom-left-radius:20px;
  	-moz-border-radius-bottomleft:20px;
  	border-bottom-left-radius:20px;
  	text-indent:0;
  	border:1px solid #eeb44f;
  	display:inline-block;
  	color:#0f010f;
  	font-family:Arial;
  	font-size:15px;
  	font-weight:bold;
  	font-style:normal;
  	height:50px;
  	line-height:50px;
  	text-decoration:none;
  	text-align:center;
  	text-shadow:1px 1px 0px #cc9f52;
  }
  .inv:hover {
  	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477) );
  	background:-moz-linear-gradient( center top, #fb9e25 5%, #ffc477 100% );
  	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477');
  	background-color:#fb9e25;
  }.inv:active {
  	position:relative;
  	top:1px;
  }
hr { border-width:3px;
}

.bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  </style>
</head>
<body>
  <div class="container-fluid bg-1 text-center">
<center>
<tr>
  <td>
    <br><br>
  <img src="reachinghand.jpg" class="img-responsive">
</td>
</tr><hr>
<br>
<br>
</div><center>
    <hr>

<form action="***" class="form-inline">
<label><h3>Search by Name </h3></label>
<input type="text" class="input-sm" id="name" placeholder="Enter Name">
<button type="submit" value="submit" class="inv">Get Record</button>

</form>
<br>

<form action="***">
<label><h3> Search by Grade </h3></label>
 <input type="text" class="input-sm" id="grade" placeholder="Enter Grade";>
  <button type="submit" value="submit" class="inv">Get Record</button>

</form>
</br>
