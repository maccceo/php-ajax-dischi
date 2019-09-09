
$(document).ready(function() {
	
	// $.ajax({
	// 	url: "database.php",
	// 	method: "GET",
	// 	success: function(data) {
	// 		// console.log(data);
	// 		// var destinazione = $("#main-container");

	// 		// for (var i = 0; i < data.length; i++) {
	// 		// 	var hotel = data[i];
	// 		// 	var stampa =
	// 		// 		"<div class='hotel'>" +
	// 		// 			"<h1>" + hotel.name + "</h1>" +
	// 		// 			"<p>" + hotel.description + "</p>" +
	// 		// 			"<p class='quickinfo'><strong>Parcheggio?</strong> " + hotel.parking + "</p>" +
	// 		// 			"<p class='quickinfo'><strong>Voto:</strong> " + hotel.vote + "</p>" +
	// 		// 			"<p class='quickinfo'><strong>Distanza dal centro:</strong> " + hotel.distance_to_center + "Km</p>" +
	// 		// 		"</div>";
	// 		// 	//aggiungo hotel all'HTML
	// 		// 	destinazione.append(stampa);
	// 	// 	}
	// 	}
	// });


});


// function research() {
// 	var park = $("#park").is(":checked");
// 	var vote = $("#vote").val();
// 	var maxdistance = $("#maxdistance").val();

// 	console.log(park, vote, maxdistance);

// 	var preferences = {
// 		parking: park,
// 		vote: vote,
// 		distance_to_center: maxdistance
// 	}

// 	$.ajax({
// 		url: "database.php",
// 		method: "GET",
// 		data: preferences,
// 		success: function(data) {
// 			console.log(data);
			
// 		}
// 	});
// }