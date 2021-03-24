<!DOCTYPE html>
<head>
  <title>Ankit Shukla</title>
</head>
<body style="font-family: sans-serif">
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>
Output:
<?php
$text = "Not found";

if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];
    $total_checks = 0;
    // This is our numbers
    $num = "0123456789";
    $show = 15;


    for($i=0; $i<strlen($num); $i++ ) {
        $ch1 = $num[$i];


        for($j=0; $j<strlen($num); $j++ ) {
            $ch2 = $num[$j];  // Our second character

            for($k=0; $k<strlen($num); $k++ ) {
                $ch3 = $num[$k];

                for($l=0; $l<strlen($num); $l++ ) {
                    $ch4 = $num[$l];


            $try = $ch1.$ch2.$ch3.$ch4;

            $check = hash('md5', $try);
            $total_checks = $total_checks + 1;
            if ( $check == $md5 ) {
                $text = $try;
                break;
            }
            if ( $show > 0 ) {
                print "$check $try\n";
                $show = $show - 1;
            }
          }
        }
      }
    }
    print "Total checks: $total_checks";
    print "\n";
    // Compute elapsed time
    $time_post = microtime(true);
    print "Ellapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<p>PIN: <?= htmlentities($text); ?></p>
<form>
<input type="text" name="md5" size="40" value="" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><b><a href="pinmd5decoder.php">Another Code To Crack</a></b></li>
</ul>
</body>
</html>
