﻿<?php 
include("incl/config.php");

$pageTitle = "Visa källkod";
$pageId = "source";

// Include code from source.php to display sourcecode-viewer
$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("src/source.php");
$pageStyle=$sourceStyle;
?>


<?php include("incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<div id="content">
<?php echo "$sourceBody"; ?>
<hr>
</div>

<?php include("incl/footer.php"); ?>