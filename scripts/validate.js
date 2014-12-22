// JavaScript 1.0 - validate.js
// Created March 31, 2013
// Created by Valery Y. Samovich
// Client-side forms validation

<!--
// Validate contact form input data
function validateContact(){
	
	// Variables declarations
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var message = document.getElementById('message').value;
	
	// email regular expression 
   	var emailRexExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	// if-else conditional statement for firstname
	if(name == ""){
		alert("Please enter a valid name!");
		document.getElementById('name').focus();
		return false;
	} 	
	
	// if-else conditional statement for email
	if (!emailRexExp.test(email)) {
		alert('Please enter a valid email address');
 		document.getElementById('email').focus();
		return false;
	}
	
	// if-else conditional statement for message
	if(message == ""){
		alert("Please type your message!");
		document.getElementById('message').focus();
		return false;
	}else{
		return true;
	}
}
//--> 