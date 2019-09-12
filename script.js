
$(document).ready(function() {
	
	$.ajax({
		url: "API.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var destinazione = $("#api");

			for (var i = 0; i < data.length; i++) {
				var album = data[i];
				var stampa =
					"<div class='apiAlbum'>" +
						"<h2>" + album.name + "</h2>" +
						"<h3>" + album.artist + "</h3>" +
						'<p>' + album.year + ", " + album.genre + "</p>" +
						'<img src="' + album.cover + '">' +
					"</div>";
				//aggiungo album all'HTML
				destinazione.append(stampa);
			}
		}
	});

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