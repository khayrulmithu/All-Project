<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

 <script src="//code.jquery.com/jquery-3.6.4.min.js"></script>


    
</head>
<body>
<script type="text/javascript">

  function sel() {
  
  var item = document.getElementById("sel");
  //item.style.visibility="hidden";

  if(item.value=="pass1"){

    var pa = document.getElementById("pa");

    pa.style.visibility="visible";


  }

  else {

    var pa = document.getElementById("pa");

    pa.style.visibility="hidden";
  }

 }

 </script>


<div style="margin-left: 30%; margin-top: 7%;">

  Show this page

  <form action="" method="POST" style="text-align: center;" >

      <input style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="name" required placeholder =" Enter your username"> <br>

      
</form>

      <select onchange="sel()" id="sel" name="passType" style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; ">
        <option  value="pass1">Text Password</option>
        <option value="pass2">Graphical Password</option>
      </select>




      <div id="pa">
      <input  style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass" required placeholder ="Enter your password"> </div> <br>

<form action="" method="POST" style="text-align: center;" >

      <button onclick="sel()" class="btn btn-success" type="submit" name="btn" style="width:100%; height: 45px; font-size: 22px; ">
        Login
      </button>

    </form>


</div>

<button onclick="sel()">press</button>

</body>
</html>