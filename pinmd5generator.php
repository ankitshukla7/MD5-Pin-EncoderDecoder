<?php
$error = false;
$md5 = false;
$pin = "";
if ( isset($_GET['pin']) )
{
    $pin = $_GET['pin'];
    if ( strlen($pin) != 4 )
    {
        $error = "Input must be exactly four numbers";
    }
    else if ( $pin[0] < "0" || $pin[0] > "9" ||  $pin[1] < "0" || $pin[1] > "9" || $pin[2] < "0" || $pin[2] > "9" || $pin[3] < "0"
              || $pin[3] > "9")
    {
        $error = "Input must four numbers";
    }
    else
    {
        $md5 = hash('md5', $pin);
    }
}
?>
<!DOCTYPE html>
<head><title>MD5 PIN Encoder</title></head>
<body>
<h1>MD5 PIN Generator</h1>
<?php
if ( $error !== false ) {
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}

if ( $md5 !== false ) {
    print "<p>MD5 value: ".htmlentities($md5)."</p>";
}
?>
<p>Please enter a four-number pin for encoding.</p>
<form>
<input type="text" name="pin" value="<?= htmlentities($pin) ?>"/>
<input type="submit" value="Compute MD5 for PIN"/>
</form>
<p><a href="pinmd5generator.php">Reset</a></p>
</body>
</html>
