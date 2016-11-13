<?php
if (PHP_SAPI !== "cli") {
    exit;
}

define("ACM_SCOREBOARD", true);
require("./config.php");

$scoreboard_teams_css = "";
$scoreboard_teams_css .= ".table-scoreboard .scoreboard-problem {\n";
$scoreboard_teams_css .= "  text-indent: -9999px;\n";
$scoreboard_teams_css .= "}\n\n";

$k = 65;
foreach ($remap as $to) {
    $scoreboard_teams_css .= ".table-scoreboard .scoreboard-problem-" . chr($k) . " { background-color: " . $color[$to] . " !important; }\n";
    $k++;
}

file_put_contents("css/scoreboard.teams.css", $scoreboard_teams_css);

$resolver_teams_css = "";
$resolver_teams_css .= ".scoreboard-head .scoreboard-problem {\n";
$resolver_teams_css .= "  text-indent: -9999px;\n";
$resolver_teams_css .= "}\n\n";

$k = 65;
foreach ($remap as $to) {
    $resolver_teams_css .= ".scoreboard-head .scoreboard-problem-" . chr($k) . " { background-color: " . $color[$to] . " !important; }\n";
    $k++;
}

file_put_contents("css/resolver.teams.css", $resolver_teams_css);
