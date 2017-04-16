var xhr = new XMLHttpRequest();
xhr.open('GET', 'rss/wt2-rss.xml', true);
xhr.onreadystatechange = populateitems;
xhr.send();

function populateitems() {
	if(this.readyState == 4 && this.status == 200) {
		var response = this.responseXML.getElementsByTagName("item");
		console.log(response);
		for(var i = 0; i < response.length; i++) {
			console.log(response[i]);
			console.log(this.responseXML.documentElement.getElementsByTagName("title")[i],innerHTML);
			console.log(response.documentElement.getElementsByTagName("link")[i],innerHTML);
			console.log(response.documentElement.getElementsByTagName("description")[i],innerHTML);
		}
		var container = document.getElementById('feed-container');
		var row = document.createElement("div");
		row.className = "row";
		var rowItem = document.createElement("div");
		rowItem.className = "col-sm-6";
		rowItem.innerHTML = '<h3>' + response[i].title;
	}
}
