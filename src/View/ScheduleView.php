<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schedule</title>
    <link href="../View/Style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<pre id="info-screen">
    <?php
        foreach($departures as $departure) {
            print $departure['line']. " ";
            print $departure['destination']. " ";
            print $departure['in']. "'";
            print "<br />";
        }
    ?>



</pre>

</body>
</html>
