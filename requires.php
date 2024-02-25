<?php
/* It's loading all the files in the same directory as the main file. */
foreach (glob("Resources/*.php") as $filename) {
    require_once $filename;
}

/* It's loading all the files in the same directory as the main file. */
foreach (glob("Tools/*.php") as $filename) {
    require_once $filename;
}

/* It's loading all the files in the same directory as the main file. */
foreach (glob("Gates/*.php") as $filename) {
    require_once $filename;
}

/* It's loading all the files in the same directory as the main file. */
foreach (glob("admin_cmds/*.php") as $filename) {
    require_once $filename;
}