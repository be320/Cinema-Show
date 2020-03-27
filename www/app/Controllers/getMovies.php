<?php
$movieRepo = new MovieRepository();
$movies = [];
$data = $_GET;

$movies = $movieRepo->getAll();