<?php

session_start();
session_destroy();
header('LOCATION: log.php');