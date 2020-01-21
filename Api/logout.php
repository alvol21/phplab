<?php
session_start();
unset($_SESSION);
session_destroy();
header("Location: http://127.0.0.1:3000");