window.onload = startCountdown;
var countDownDate = new Date("Apr 6, 2017 18:30:00").getTime();
console.log(countDownDate);
var eSourceObject = new EventSource("new_deals.php");
eSourceObject.onopen = function() {
	console.log("Connection opened");
}
//eSourceObject.onmessage = function(eventObject) {
	eSourceObject.addEventListener("DealUpdate", function(eventObject) {
	console.log(eventObject);
	deal = document.getElementById("ldeal");
	deal.src = eventObject.deal_image;
	deal.onclick = gameinfo(eventObject.appid);
	countDownDate = new Date(eventObject.time).getTime();
	}, true);

eSourceObject.onerror = function(eObject) {
	console.log("Error");
	console.log(eObject);
}
// Set the date we're counting down to
function startCountdown() {
	console.log("Started countdown");
	// Update the count down every 1 second
	var x = setInterval(function() {
		// Get todays date and time
		var now = new Date().getTime();
		// Find the distance between now an the count down date
		var distance = countDownDate - now;
		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		// Display the result in the element with id="demo"
		document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
		// If the count down is finished, write some text 
		if (distance < 0) {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "EXPIRED";
		}
	}, 1000);

}
	document.getElementById("home").className = "active";

function gameinfo(a) {
window.location = "gamepage.php?appid="+a;
} 
