<?php
    header('Content-Type: application/json');

    require_once 'Database.php';

    $db = Database::getInstance();
    $query = $db->query("SELECT id, fullname, birthDate, nationalId, address, phoneNumber, email FROM users");

    $users = [];

    while ($row = $query->fetchArray(SQLITE3_ASSOC)) {
        $users[] = $row;
    }

    echo json_encode($users);
?>
