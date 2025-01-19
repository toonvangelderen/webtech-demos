<?php

/*
 * 
 *     echo json_encode(['error' => 'City parameter is required']);
 */



if (isset($_GET['city']) && !empty($_GET['city'])) {
    header('Content-Type: application/json');
    $city = $_GET['city'];
    $weatherData = fetchWeatherData($city);
    echo json_encode($weatherData);
    exit;
}


?>