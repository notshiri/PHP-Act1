<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $bpDays = 8;
        if ($bpDays >= 1 && $bpDays <= 7) {
            print "New battlepass user";
        } elseif ($bpDays >= 8 && $bpDays <= 24) {
            print "Battlepass enjoyer";
        } elseif ($bpDays >= 25 && $bpDays <= 30) {
            print "Battlepass for-renewal";
        } else
            print "Invalid number"
        ?>
</body>
</html>