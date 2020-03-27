<?php
$movieRepo = new MovieRepository();
$movies = [];
$movie = '';
$data = $_GET;

$movies = $movieRepo->getAll();
