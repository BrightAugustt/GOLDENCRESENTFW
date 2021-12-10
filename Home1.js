$(document).ready(function(){
	//submit function runs when the user clicks submit.
	$("form").submit(function (event) {
		
		// variables created to store the values of what the user inputs
		var firstname = document.getElementById("fname").value
		var lastname = document.getElementById("lname").value
		var contact = document.getElementById("contact").value
		var email = document.getElementById("email").value
		var message = document.getElementById("message").value
		var result = document.getElementById('result')

		//make a post request by ajax

		$.post("Home1.php", {firstname: fname, lastname:lname, contact:contact, email:email, message:message}, function(data){

			console.log(data)
			result.innerHTML= data
		})

	})
})