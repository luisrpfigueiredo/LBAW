<?php

function getSiteStatistics() {
    global $conn;
    $stmt = $conn->prepare("SELECT
   (SELECT COUNT(*) FROM answers) AS answers,
   (SELECT COUNT(*) FROM votes) AS votes,
   (SELECT COUNT(*) FROM follows) AS follows,
   (SELECT COUNT(*) FROM bans) AS bans,
   (SELECT COUNT(*) FROM users  ) AS users,
   (SELECT COUNT(*) FROM users WHERE type='mod') AS mods,
   (SELECT COUNT(*) FROM users WHERE type='admin') AS admins,
   (SELECT COUNT(*) FROM password_resets) AS password_resets,
   (SELECT COUNT(*) FROM questions) AS questions,
   (SELECT COUNT(*) FROM warnings) AS warnings;");
    $stmt->execute();
    $rows = $stmt->fetch();

    return $rows;

}