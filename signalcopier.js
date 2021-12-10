$(document).ready(function(){
	$("form").submit(function (event) {
		
		// variables created to store the values of what the user inputs
		var firstname = document.getElementById("fname").value
		var contact = document.getElementById("contact").value
		var email = document.getElementById("email").value
		var result = document.getElementById('result')

		//make a post request by ajax

		$.post("signalcopier.php", {firstname: fname, contact:contact, email:email}, function(data){

			console.log(data)
			result.innerHTML= data
		})

	})
})