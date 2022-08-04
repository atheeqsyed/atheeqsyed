<?php
include ('interface.php');
include ('FileLogger.php');
include ('ScreenLogger.php');
$logger = new fileLogger();
$logger->log();
$logger = new screenLogger();
$logger->log();
