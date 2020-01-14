<?php
session_start();

$db_host="/home/student/it/2006/it063021/mysql/run/mysql.sock";
$db_name="players_stats";
$db_user= $_POST["name"];
$db_pass= $_POST["pass"];

$_SESSION['conn'] = false;

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
  echo '<script type="text/JavaScript">
        window.alert("Λάθος username ή password !");
        window.location.href = "index.php";
       </script>' ;
    exit;
}
else {
    if ( $_SESSION['already_logged']==true) {
    echo '<script type="text/JavaScript">
          window.alert("Ο χρήστης είναι ήδη συνδεδεμένος !");
          window.location.href = "index.php";
         </script>' ;

  }
  else {
  echo '<script type="text/JavaScript">
     window.alert("Ο παίκτης συνδέθηκε επιτυχώς !");
     window.location.href = "index.php";
     </script>' ;
     $_SESSION['conn'] = true;
     $_SESSION['already_logged']=true;
   }
  }
