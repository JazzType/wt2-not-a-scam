function suggest(){

	othis = this;
	this.xhr = new XMLHttpRequest();

	this.game = null;
	this.timer =null;

	this.getmovie = function(){

		if(this.timer)
		{
			clearTimeout(this.timer);
		}

		this.timer = setTimeout(this.fetchgame,1000);
	}

	this.fetchgame = function(){
		othis.game = getElementById("search");

		if(othis.game.value == "")
		{
			return;
		}
		else
		{
			othis.xhr.onreadystatechange = othis.populate;

			othis.xhr.open("GET","gamesrch.php?game="+othis.game.value,true);

			othis.xhr.send();
		}
	}

	this.populate = function() {
		
	}
}