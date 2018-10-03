$(document).ready(function(){
	$.ajax({
		url: "http://localhost/IOTProject/Server/server.php",
		method: "GET",
		success: function(data) {
			console.log("success2")
			console.log(data);
			var player = [];
			var score = [];
			//console.log(data["time"]);
//var i in data
/*			for(var i in data) {
				player.push("time " + data[0]);
				score.push(data[0]);
				console.log(player)
				console.log(score)
			}
*/
		for(var i in data) {
				player.push("time " + data[i].time);
				score.push(data[i].soilMoisture);
				console.log(player)
				console.log(score)
			}



			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Soil Moisture Level',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});