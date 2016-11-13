<?php
define("ACM_SCOREBOARD", true);
require("./config.php");

header("Content-Type: application/json");
$path = $scoreboard_json_teams;
if (isset($_GET["sudouser"]) && $_GET["sudouser"] === $username && isset($_GET["sudopass"]) && $_GET["sudopass"] === $password) {
    asort($remap);
    $path = $scoreboard_json_judges;
}

$json = json_decode(file_get_contents($path), true);
$new_json = array();
if (sizeof($remap) !== sizeof($json["solved"])) {
    $remap = array();
}

$new_json["solved"] = array();
$new_json["attempted"] = array();
$k = 65;
foreach ($remap as $to) {
    $new_json["solved"][chr($k)] = $json["solved"][$to];
    $new_json["attempted"][chr($k)] = $json["attempted"][$to];
    $k++;
}

$new_json["scoreboard"] = array();
$i = 0;
foreach ($json["scoreboard"] as $team) {
    $new_json["scoreboard"][$i] = array();
    $new_json["scoreboard"][$i]["id"] = $json["scoreboard"][$i]["id"];
    $new_json["scoreboard"][$i]["rank"] = $json["scoreboard"][$i]["rank"];
    $new_json["scoreboard"][$i]["solved"] = $json["scoreboard"][$i]["solved"];
    $new_json["scoreboard"][$i]["points"] = $json["scoreboard"][$i]["points"];
    $new_json["scoreboard"][$i]["name"] = $json["scoreboard"][$i]["name"];
    $new_json["scoreboard"][$i]["group"] = $json["scoreboard"][$i]["group"];
    $k = 65;
    foreach ($remap as $to) {
        $new_json["scoreboard"][$i][chr($k)] = $json["scoreboard"][$i][$to];
        $k++;
    }
    $i++;
}

echo json_encode($new_json);
