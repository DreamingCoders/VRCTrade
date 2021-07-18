<?php
$core = "true";
require('html/nav.php');

$pageView = "true";
  if($pageView == "true"){
    require('core/pageHandler.php');
  }
  display(model(index()));
?>
<h2>BTrade</h2>
<p>Handling at it's finest</p>
<?php
require('html/footer.php');
?>
