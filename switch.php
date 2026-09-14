<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bpDays = 1;
        switch (true){
            case ($bpDays >= 1 && $bpDays <= 7):
                print "New battlepass user";
                break;
            case ($bpDays >= 8 && $bpDays <= 24):
                print "Battlepass enjoyer";
                break;
            case ($bpDays >= 25 && $bpDays <= 30):
                print "Battlepass for-renewal";
                break;
            default:
                print "Invalid number";
                break;
            }
        ?>
</body>
</html>