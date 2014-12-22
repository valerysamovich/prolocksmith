<?php
// PHP Script 1.0 - contact.inc.php
// Created March 31, 2013
// Created by Valery Y. Samovich
// Contact script

// Variables
$invalid = "<a style='text-decoration:none;' href='javascript:history.back();'>Go back and try again</a></p>";

if(isset($_POST['submit'])){  
  
	$name = $_POST['name']; //gets the entered name  
	$email = $_POST['email']; //gets the entered email address  
	$message = $_POST['message']; //gets the entered message   
  
	$to = "valerysamovich@gmail.com"; //email address  
	
	// validating the fields  
	if($name != "" && $email != ""  && $message != ""){  
		mail($to, $name, $email, $message); //calling php mail function
		echo include ("includes/footer.inc.php");
	} else {  
		echo "<p style='text-align:center'>Please fill in all fields and submit again!</p>"; 
		echo $invalid; 
	}
}
?>
<!-- Content element -->
<div id="content-contact"> 
	<!-- Primary element -->
	<div id="primarycontent">
		<p id="content-header"><?php echo constant("CONTACT_HEADER"); ?></p>
		<p id="content-text">WE ARE PREPARED TO ANSWER ANY LOCKSMITH QUESTION YOU MIGHT HAVE. SUBMIT THE FORM BELOW AND WE WILL CONTACT YOU SHORTLY!</p>
        <p>PROLOCKSMITH<br />4364 South Kirkman Rd<br />Orlando, Fl 32811<br />(407) 319-8304</p><br />
    	<!--Form element-->
		<form action="index.php?pagelet=contacted" method="post" onsubmit="return validateContact();">
    	<fieldset>
      	<legend>Contact form</legend>
      	<!--Name text field-->
      	<div class="row">
        	<label for="name">Name:</label>
        	<input type="text" name="name" id="name" size="40" maxlength="40"  
        	   		value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" /><br />
      	</div>
      	<!--Email text field-->
      	<div class="row">
       	 	<label for="email">Email:</label>
        	<input type="text" name="email" id="email" size="40" maxlength="40"
        	   		value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /><br />
      	</div>
      	<!--Textarea-->
      	<div id="row">
        <label >Message:</label>
        <textarea rows="3" cols="40" name="message" id="message" >Message...</textarea><br/ >
      	</div>
      	<!--Buttons-->
      	<div class="submit">
        <input type="submit" name="submit" id="reset" value="Submit" />
        <input type="reset" name="reset" id="reset" value="Reset" />
      	</div>
    	</fieldset>
  		</form>
	</div>
	<!-- End of primary -->
	<!-- Left column element -->
	<div id="rightcolumn">
		<p id="column-header">24/7 EMERGENCY SERVICE</p>
		<p id="column-text">CALL NOW at 407-319-8304 for a 24/7 Emergency Access Services and free consultation.</p>
		<p id="column-image"><img src="images/emergency.jpg" width="180" height="180" alt="Locksmith 24/7 Emergency Service" /></p>
		<p id="column-footer">CALL NOW (407) 319-8304<br />ASK 10% DISCOUNT ONLINE</p>
	</div>
	<!-- End of Left column -->
</div>
<!-- End of content -->