<?php
http_response_code(400);
echo json_encode(
    array("message" => "Bad Request.")
);
