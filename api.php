<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   
   $('#content').load("https://www.example.net/api/foobar.php");
   $('#api').load("https://www.example.net/api/foobar.php", { "players[]": [ "online" ] });
});
$.getJSON( "https://www.example.net/api/test.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
 
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "body" );
});
</script>
</head>
<body>

<h2>BPR API</h2>
<hr>

<p>JSON Data-</p>
<div id="content">Loading Content...</div>
<div id="api">Loading API...</div>


</body>
</html>
