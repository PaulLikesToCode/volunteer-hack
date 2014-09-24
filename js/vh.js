$(document).ready(function() {
	$('div.org-content').hide();
});

// Shows/hides the appropriate div on the organization page
function searchVolunteerButton() {
	$('div.org-content').hide();
	var target_div = "div#"+$(this).data('div-id');
	$(target_div).show();
}

$('button.choice').on('click', searchVolunteerButton);

// $.ajax({
// 	type: "GET",
// 	url: "http://volunteer-hack-enpicket.15.126.231.221.xip.io/get_skills_data.php",
// 	success: function(response) {
// 		console.log(response);
// 	}
// });

function createProfile() {
	var fname = $('#update-volunteer-fn').val();
	var lname = $('#update-volunteer-ln').val();
	var email = $('#update-volunteer-em').val();
	var skills = $('#update-volunteer-skills').val().split(',');
	$.ajax({
		type: "POST",
		url: "create_volunteer.php",
		data: {
			fname: fname,
			lname: lname,
			email: email,
			skills: skills
		}
	})
	.done(function() {
		alert('Profile Created!');
	})
	.fail(function() {
		alert("Sorry");
	});
}

$('#update-volunteer-btn').on('click', createProfile);