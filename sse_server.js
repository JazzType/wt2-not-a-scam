var http = require("http");
var fs = require("fs");
var deals =
http.createServer(function (req, res) {
  var index = "./sse.html";
  var fileName;
  var interval;

  if (req.url === "/")
    fileName = index;
  else
    fileName = "." + req.url;

  if (fileName === "./stream") {
    res.writeHead(200, {"Content-Type":"text/event-stream", "Cache-Control":"no-cache", "Connection":"keep-alive"});
    res.write("retry: 10000\n");
    res.write("event: newdeal\n");
    //res.write("data: " + (new Date()) + "\n\n");
    //res.write("data: " + (new Date()) + "\n\n");
    var file = fs.readFileSync('games/deals.json');
    
    fs.watch('games/deals.json', (curr, prev) => {
      var contents = JSON.parse(file);
      //console.log(file);
      console.log(JSON.parse(file));
      res.end("data: " + JSON.stringify(contents) + "\n\n");
  });
       //interval = setInterval(function() {
   //   res.write("data: " + (new Date()) + "\n\n");
   // }, 1000);
    req.connection.addListener("close", function () {
      clearInterval(interval);
    }, false);
  } else if (fileName === index) {
    fs.exists(fileName, function(exists) {
      if (exists) {
        fs.readFile(fileName, function(error, content) {
          if (error) {
            res.writeHead(500);
            res.end();
          } else {
            res.writeHead(200, {"Content-Type":"text/html"});
            res.end(content, "utf-8");
          }
        });
      } else {
        res.writeHead(404);
        res.end();
      }
    });
  } else {
    res.writeHead(404);
    res.end();
  }

}).listen(8080, "127.0.0.1");
console.log("Server running at http://127.0.0.1:8080/");