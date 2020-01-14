<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
       <title> ΤΡΙΛΙΖΑ</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="styles.css">
       <script type="text/javascript">
        function post_move() {
           var xhttp = new XMLHttpRequest();
        //   xhttp.open("POST", "triliza.php", true);
        //   xhttp.send();
           xhttp.open("GET", "triliza.php", true);
        }
       </script>

   </head>
   <body>

       <div class="pinakas" id="main">
           <span id="turn">Ξεκινάει ο Παίκτης 1</span>
           <div class="box" id="box1"></div>
           <div class="box" id="box2"></div>
           <div class="box" id="box3"></div>
           <div class="box" id="box4"></div>
           <div class="box" id="box5"></div>
           <div class="box" id="box6"></div>
           <div class="box" id="box7"></div>
           <div class="box" id="box8"></div>
           <div class="box" id="box9"></div>
       </div>

       <button id="play_bt" onclick="replay()">Έναρξη νέου παιχνιδιού</button>

       <script>
           var turn = document.getElementById("turn"),
               boxes = document.querySelectorAll("#main div"), X_or_O = 0;
           var yparxei_triliza=false;

           function syndiasmos(b1,b2,b3){
               b1.classList.add("win");
               b2.classList.add("win");
               b3.classList.add("win");
               turn.innerHTML = " Τρίλιζα !";
               turn.style.fontSize = "30px";
               var appl = new Audio('sounds/applause.mp3');
               appl.play();
               document.getElementById("main").style.pointerEvents = "none";
               }


           function elegxos(){

               var box1 = document.getElementById("box1"),
                   box2 = document.getElementById("box2"),
                   box3 = document.getElementById("box3"),
                   box4 = document.getElementById("box4"),
                   box5 = document.getElementById("box5"),
                   box6 = document.getElementById("box6"),
                   box7 = document.getElementById("box7"),
                   box8 = document.getElementById("box8"),
                   box9 = document.getElementById("box9");


             if(box1.innerHTML !== "" && box1.innerHTML === box2.innerHTML && box1.innerHTML === box3.innerHTML)
                {syndiasmos(box1,box2,box3);
                yparxei_triliza=true;}

             if(box4.innerHTML !== "" && box4.innerHTML === box5.innerHTML && box4.innerHTML === box6.innerHTML)
                {syndiasmos(box4,box5,box6);
                 yparxei_triliza=true;}

             if(box7.innerHTML !== "" && box7.innerHTML === box8.innerHTML && box7.innerHTML === box9.innerHTML)
                {syndiasmos(box7,box8,box9);
                 yparxei_triliza=true;}

             if(box1.innerHTML !== "" && box1.innerHTML === box4.innerHTML && box1.innerHTML === box7.innerHTML)
                {syndiasmos(box1,box4,box7);
                 yparxei_triliza=true;}

             if(box2.innerHTML !== "" && box2.innerHTML === box5.innerHTML && box2.innerHTML === box8.innerHTML)
                {syndiasmos(box2,box5,box8);
                 yparxei_triliza=true;}

             if(box3.innerHTML !== "" && box3.innerHTML === box6.innerHTML && box3.innerHTML === box9.innerHTML)
                {syndiasmos(box3,box6,box9);}

             if(box1.innerHTML !== "" && box1.innerHTML === box5.innerHTML && box1.innerHTML === box9.innerHTML)
                {syndiasmos(box1,box5,box9);
                yparxei_triliza=true;}

             if(box3.innerHTML !== "" && box3.innerHTML === box5.innerHTML && box3.innerHTML === box7.innerHTML)
                {syndiasmos(box3,box5,box7);
                yparxei_triliza=true;}

             if(box1.innerHTML !== "" && box2.innerHTML !== "" && box3.innerHTML !== "" && box4.innerHTML !== "" &&
                box5.innerHTML !== "" && box6.innerHTML !== "" && box7.innerHTML !== "" && box8.innerHTML !== "" &&
                box9.innerHTML !=="" && yparxei_triliza ==false){
                     turn.innerHTML = " Ισοπαλία !";
                     var boo = new Audio('sounds/boo.mp3');
                     boo.play();
                     }
              }


           for(var i = 0; i < boxes.length+1; i++){
                   post_move();
                   boxes[i].onclick = function(){
                   if(this.innerHTML !== "X" && this.innerHTML !== "O"){
                   if(X_or_O%2 === 0){
                      console.log(X_or_O);
                      this.innerHTML = "X";
                      turn.innerHTML = "Σειρά παίκτη 2";
                      var sel = new Audio('sounds/selection.mp3');
                      sel.play();
                      elegxos();
                      X_or_O += 1;
                   }else{
                       console.log(X_or_O);
                      this.innerHTML = "O";
                      turn.innerHTML = "Σειρά παίκτη 1";
                      var sel = new Audio('sounds/selection.mp3');
                      sel.play();
                      elegxos();
                      X_or_O += 1;
                   }
                 }
               };
           }

           function replay(){
               for(var i = 0; i < boxes.length; i++){
                   boxes[i].classList.remove("win");
                   boxes[i].innerHTML = "";
                   yparxei_triliza=false;
                   document.getElementById("main").style.pointerEvents = "auto";
                   turn.innerHTML = "Ξεκινάει ο Παίκτης 1";
                   turn.style.fontSize = "25px";
               }
           }

       </script>

       <div id="stats">
         <h2 align="center">Στατιστικά</h2>
         <hr>

         <table border: 1px solid;>
 <tr>
   <th></th>
   <th>Νίκες</th>
   <th>Ήττες</th>
   <th>Ισοπαλίες</th>
 </tr>
 <tr>
   <td>Παίκτης 1</td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td>Παίκτης 2</td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
</table>
<hr>
<button id="olika_stats" onclick='window.location.href = "stats_output.php"' >ΕΜΦΑΝΙΣΗ ΟΛΙΚΩΝ ΣΤΑΤΙΣΤΙΚΩΝ ΑΠΟ ΤΗΝ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ</button>
  </div>

       <footer>

       <hr>
       	<p> ΚΑΡΥΠΙΔΗΣ ΜΙΧΑΗΛ - AM 063021 </p>
       </footer>
   </body>
</html>
