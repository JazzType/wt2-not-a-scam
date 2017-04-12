var xhr = new XMLHttpRequest();

var timer = null;

function getgame() {
	if(timer) {
		clearTimeout(timer);
	}
	timer = setTimeout(fetchgame,2300);
}

 function fetchgame() {
	game = document.getElementById("search");
	if(game.value == "") {
		return;
	}
	else {
		xhr.onreadystatechange = populate;
		xhr.open("GET","gamesrch.php?game="+game.value,true);
		xhr.send();
	}
}

function populate() {
	if(this.readyState == 4 && this.status == 200) {
	console.log(this.responseText);
		var datalist = document.getElementById("datalist-search");
		datalist.innerHTML = "";
		var game_list = JSON.parse(this.responseText);
		var option = document.createElement("option");
		for (var i = 0; i < game_list.length; i++) {
			option = document.createElement("option");
			option.name = game_list[i].id;
			option.innerHTML = game_list[i].title;
			option.id = game_list[i].id;
			datalist.appendChild(option);
		}
	}
}

function navigateToApp() {
	if(document.getElementById('search').value != "") {
		var currentValue = document.getElementById('search').value;
		var currentOptions = document.getElementById('datalist-search').childNodes;
		for(var i = 0; i < currentOptions.length; i++) {
			if(currentOptions[i].value === currentValue) {					
				window.location = 'gamepage.php?appid=' + currentOptions[i].id;
			}
		}
	}
}
