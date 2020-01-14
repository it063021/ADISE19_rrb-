<?php
session_start();
//$_SESSION['conn']= null;


?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">

	<script type="text/javascript">
 function check_conn() {
	 var mid='<?php echo $_SESSION["conn"];?>';
	 	 if (mid == true) {
        document.getElementById("lb1").innerText= "Ο παίκτης συνδέθηκε";
			} else {
		 document.getElementById("lb1").innerText= "Δεν υπάρχει συνδεδεμένος παίκτης";
		 }
 }


 function check_play(){
	  var succ = new Audio('sounds/succ.mp3');
     if(document.getElementById("lb1").innerText== "Ο παίκτης συνδέθηκε"){
	            document.getElementById("bt3").disabled = false;
							document.getElementById("bt2").disabled = false;
							succ.play();
              }
   }



  </script>

</head>
<title>ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ</title>
<body>

	<H1> ΤΡΙΛΙΖΑ </H1>

	<div id='syndesi'>
 		<label> ΓΙΑ ΣΥΝΕΧΕΙΑ ΑΠΑΙΤΟΥΝΤΑΙ ΔΥΟ ΠΑΙΚΤΕΣ</label>
  </div>
 	 <form id="p1" action="connection.php" method="post" >
		<fieldset id="fld1" style="width:480px">
			<legend>Σύνδεση Παίκτη </legend>
	      <p>Username: <input type="text" name="name">
        	 Password: <input type="password" name="pass"></p>
      	 <p><button id="bt1">Σύνδεση παίκτη</button>
			      <label id="lb1"></label></p>
		</fieldset>

		<script>
		check_conn();
		</script>

	</form>

	<div id='enarxi'>
		<button id="bt3" disabled type="button" onclick='window.location.href = "triliza.php"';>Έναρξη Παιχνιδιού</button>
		<p><button id="bt2"  onclick='window.location.href = "logout.php"'>Αποσύνδεση παίκτη</button>
<script>
check_play();
</script>
	</div>

<footer>
<hr>
	<p> ΚΑΡΥΠΙΔΗΣ ΜΙΧΑΗΛ - AM 063021 </p>
</footer>

</body>
</html>
