<?php
/**
 * Demo page used to demonstrate CSS styling.
 *
 * PHP version 8
 *
 * @category Webtech_Demo
 * @package  Webtech_Demo
 * @author   Rafael Alexander Muijsert <rafael@muijsert.org>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

 require "../src/fetch_weather.php";
 require "../src/weather_api.php";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather API - Webtech Demo</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/partial/weather.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <?php require_once "../src/components/header.php" ?>
    <?php require_once "../src/components/navbar.php" ?>
    <main>
      <div class="container">
        <h1>Weather Information</h1>
        <div class="search-container">
          <input type="text" id="city-input" placeholder="Enter city name">
          <button class="btn-primary" onclick="getWeather()">Search</button>
        </div>
        <div id="weather-result"></div>
      </div>
    </main>
    <?php require_once "../src/components/footer.php" ?>
    <script src="/js/main.js"></script>
    <script src="/js/pages/weather.js"></script>
  </body>
</html>