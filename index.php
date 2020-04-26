<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Daily Strip Comics</title>
  <script type="text/javascript" src="comicsJavascript/comicsURL.js"></script>
  <script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('garfield').src = garfieldStripURL();
  document.getElementById('bc').src = bcStripURL();
  document.getElementById('wizardOfId').src = wizardOfIdStripURL();
});

</script>
  
</head>
<body>

<?php
include 'comicsPHP/htmlSaver.php';
include 'comicsPHP/comicsParser.php';
?>

<img id="garfield" />

<img src="<?php echo getDilbertSource() ?>">

<img src="<?php echo getHagarSource() ?>">

<img id="bc" />

<img id="wizardOfId" />

</body>
</html>
