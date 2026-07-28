<?php
session_start();

session_unset();

session_destroy();

echo "<h2>Session Destroyed</h2>";
echo "<a href='dash.php'>Check Dashboard State Again</a>";