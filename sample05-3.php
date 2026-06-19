<?php
session_start();
session_destroy();
header("Location: sample05-1.php");
