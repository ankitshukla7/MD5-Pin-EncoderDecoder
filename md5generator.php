<?php
$md5 = "Not computed";
if ( isset($_GET['code']) ) {
    $md5 = hash('md5', $_GET['code']);
}
?>
<!DOCTYPE html>
<head><title>MD5 Encoder</title></head>
<body>
<h1>MD5 Code Generator</h1>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="code" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<p><a href="md5generator.php">Reset</a></p>
</body>
</html>
