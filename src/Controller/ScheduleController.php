<?php
    require_once('../Modell/TextFileScheduleService.php');

    // 1. bemenő adatok, validálni
    if(!isset($_GET['stop']) || !preg_match('/^[0-9]*$/',$_GET['stop'])) {
        $stop = 1;
    } else {
        $stop = $_GET['stop'];
    }

    // 2. model-beli osztálynak valami függvényét
    $scheduleService = new TextFileScheduleService();
    $departures = $scheduleService->getDepartures($stop);

    // 3. meghívunk egy view-t
    require('../View/ScheduleView.php');
?>

