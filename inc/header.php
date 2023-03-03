<?php
header("access-control-allow-origin: *");
header("access-control-allow-credentials: true");
header("access-control-allow-methods: GET, POST, PUT, DELETE, OPTIONS");
header("access-control-allow-headers: accept, content-type", "access-control-allow-header");
header("access-control-allow-max-age: 3600");
header("content-type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    return 0;
}

