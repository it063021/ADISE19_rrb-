# ADISE19_rrb-
Περιεχόμενα
1.	ΠΕΡΙΓΡΑΦΗ ΠΑΙΧΝΙΔΙΟΥ
2.	ΣΥΝΤΕΛΕΣΤΕΣ
3.	ΤΟΠΟΘΕΣΙΑ ΠΑΙΧΝΙΔΙΟΥ
4.	ΛΟΓΙΣΜΙΚΟ ΠΟΥ ΧΡΗΣΙΜΟΠΟΙΗΘΗΚΕ
5.	ΑΡΧΕΙΑ
6.	ΤΙ ΥΛΟΠΟΙΗΘΗΚΕ ΕΝ ΤΕΛΕΙ ΚΑΙ ΤΙ ΟΧΙ
7.	ΑΞΙΟΛΟΓΗΣΗ



ΠΕΡΙΓΡΑΦΗ ΠΑΙΧΝΙΔΙΟΥ

Πρόκειται για παιχνίδι τρίλιζας για δυο παίκτες. Υπάρχει ένα ταμπλό 3χ3 και κάθε παίκτης  χρησιμοποιεί από ένα σύμβολο (το Χ ή το Ο). Σκοπός του παιχνιδιού είναι η δημιουργία τρίλιζας, να δημιουργηθεί δηλαδή μια σειρά από τα ίδια σύμβολα. Η τρίλιζα μπορεί να δημιουργηθεί οριζοντίως, καθέτως και διαγωνίως. Το παιχνίδι τελειώνει άμεσα μόλις ένας από τους δυο παίκτες συμπληρώσει τρίλιζα. Αν γεμίσουν και τα εννέα κουτιά χωρίς να υπάρξει τρίλιζα, έχουμε ισοπαλία.

ΣΥΝΤΕΛΕΣΤΕΣ

Όλος ο κώδικας (php, HTML, css,  Javascript και Json) γράφηκε από τον Καρυπίδη Μιχαήλ, ΑΜ 063021. 

ΤΟΠΟΘΕΣΙΑ ΠΑΙΧΝΙΔΙΟΥ

Το παιχνίδι βρίσκεται στην διεύθυνση :  https://users.iee.ihu.gr/~it063021/ADISE19_rrb-/index.php

ΛΟΓΙΣΜΙΚΟ ΠΟΥ ΧΡΗΣΙΜΟΠΟΙΗΘΗΚΕ

Ο κώδικας γράφηκε στο περιβάλλον του editor Atom. Παράλληλα χρησιμοποιήθηκε το XAMPP για εξομοίωση του server και χρήση της mysql. Η διαχείριση της βάσης έγινε αρχικά με χρήση του phpmyadmin. Αργότερα, με την μεταφορά των αρχείων στο github και στο users.it.teithe χρησιμοποιήθηκε putty για να ξαναφτιάξω την βάση.

ΑΡΧΕΙΑ

Τα αρχεία του project είναι τα εξής:

•	index.php : είναι η βασική σελίδα. Ένας συνδυασμός από HTML και php. Εδώ πραγματοποιείται το login. Χρησιμοποιούνται οι συναρτήσεις Check_conn() και check_play(). Η πρώτη ελέγχει αν έχει συνδεθεί ο παίκτης, ενώ η δεύτερη επιτρέπει απλά την συνέχεια ενεργοποιώντας το button «Έναρξη παιχνιδιού». 

•	styles.css: Περιέχονται όλα τα styles όλων των files. Εδώ διαμορφώνεται οπτικά η τρίλιζα.

•	connection.php: Σε αυτό το αρχείο γίνεται η σύνδεση των παικτών. Δίνει μηνύματα επιτυχούς σύνδεσης ή αποτυχίας, καθώς και ενημέρωση όταν ο χρήστης έχει ήδη συνδεθεί. Χρησιμοποιείται η μέθοδος mysqli_connect().

•	triliza.php: Γραμμένο εξολοκλήρου σχεδόν σε javascript, με κομμάτια HTML (ο πίνακας έχει δημιουργηθεί με HTML). Χρησιμοποιεί την function elegxos() η οποία ελέγχει σε κάθε κλικ αν ισχύει κάποιο από τα 9 ifs που χρησιμοποιεί (8 οι περιπτώσεις της τρίλιζας και μια της ισοπαλίας). Αν υπάρχει τρίλιζα, χρησιμοποιείται η syndiasmos() για να ανακοινώσει την νίκη, να χρησιμοποιήσει styles στον νικηφόρο συνδυασμό και να σταματήσει το παιχνίδι.   Σε περίπτωση ισοπαλίας, δεν χρησιμοποιείται η syndiasmos()- γίνεται μια απλή ενημέρωση με το κατάλληλο ηχητικό από την elegxos(). Τέλος, η function replay() χρησιμοποιείται για επανέναρξη παιχνιδιού. Σε αυτό το αρχείο υπάρχει επίσης και το κουμπί εμφάνισης ολικών στατιστικών από την database και καλεί το επόμενο αρχείο, το stats_output.php. Υπάρχει div για την καταγραφή του ημερήσιου score, η οποία δεν υλοποιήθηκε.

•	stats_output.php: εδώ γίνεται σύνδεση του admin και αφού ελεγχθεί ( με ένα if) ότι έγινε σωστά η σύνδεση πραγματοποιείται ένα sql query και κάνουμε fetch  τα δεδομένα από την βάση. Κάνουμε convert σε json και εκτυπώνουμε και τις δυο εκδόσεις (mysqli_fetch_assoc  και json_encode).

•	logout.php: Χρήση της μεθόδου session_destroy()  για log out.

ΤΙ ΥΛΟΠΟΙΗΘΗΚΕ ΕΝ ΤΕΛΕΙ ΚΑΙ ΤΙ ΟΧΙ

Αρχικός σκοπός ήταν η δημιουργία ενός multiplayer tic tac toe game με σύνδεση των παικτών και καταχώρηση της επίδοσής τους.
Ο παίκτης τοποθετεί τον κωδικό του. Σε περίπτωση μη έγκυρου κωδικού , ενημερώνει τον χρήστη. Το ίδιο κάνει στις περιπτώσεις κενής αποστολής username ή password ή και των δύο. Εφόσον ο παίκτης κάνει log in επιτυχώς το button της έναρξη του παιχνιδιού γίνεται χρησιμοποιήσιμο. Αν ο ίδιος παίκτης προσπαθήσει να ξανακάνει log in ενημερώνεται ότι έχει ήδη συνδεθεί. 
Στην τρίλιζα δεν υλοποιείται όπως θα έπρεπε. Αφελώς υποτέθηκε ότι αποτελούσε το πιο δύσκολο κομμάτι και δημιουργήθηκε σε javascript. Μόλις τις τελευταίες μέρες έγινε αντιληπτό ότι ο browser θα έπρεπε να στέλνει με POST κάθε κίνηση στον πίνακα που θα ήταν στην βάση δεδομένων. Σε κάθε περίπτωση όμως η τρίλιζα δουλεύει σωστά σύμφωνα με τους κανόνες που την διέπουν. Σταματάει μόλις σχηματιστεί τρίλιζα και αναγνωρίζει την ισοπαλία. 
Υπήρξε πρόβλεψη καταγραφή ημερήσιου score σε div (τα οποία θα ενημέρωναν και την βάση) και κουμπί των  συνολικών score το οποίο υλοποιήθηκε.

ΑΞΙΟΛΟΓΗΣΗ

Σε καμία περίπτωση δεν υπάρχει η πεποίθηση ότι το παιχνίδι κατάφερε να καλύψει τους στόχους του μαθήματος. Έγινε πάντως μεγάλη προσπάθεια και αποκομίσθηκαν γνώσεις, που ήταν το ζητούμενο.  
