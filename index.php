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
  document.getElementById('mutts').src = muttsStripURL();
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
<img src="<?php echo getGenericSiteSource('comicskingdom', 'hagar-the-horrible') ?>">
<img id="bc" />
<img id="wizardOfId" />
<img src="<?php echo getGenericSiteSource('gocomics', 'getfuzzy') ?>">
<img id="mutts" />
<img src="<?php echo getGenericSiteSource('gocomics', 'andycapp') ?>">
<img src="<?php echo getGenericSiteSource('comicskingdom', 'beetle-bailey-1') ?>">
<img src="<?php echo getGenericSiteSource('gocomics', 'diamondlil') ?>">
<img src="<?php echo getArchieSource() ?>">
<img src="<?php echo getGenericSiteSource('comicskingdom', 'macanudo') ?>">
</body>
</html>
