<?php
include 'db_connect.php';


$sql = "
    SELECT e.id, e.type, e.brand, e.hours_used, MAX(m.service_date) AS last_service
    FROM equipment e
    LEFT JOIN maintenance m ON e.id = m.equipment_id
    GROUP BY e.id
    HAVING last_service IS NULL OR last_service < CURDATE() - INTERVAL 90 DAY
";

$result = $conn->query($sql);
$equipments = [];//add it in array

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $equipments[] = $row;
    }
}

header('Content-Type: application/json');//Sets the HTTP header to indicate a JSON response.

//Uses json_encode() to convert the array into a JSON string.
echo json_encode($equipments);
$conn->close();
/*Joins the equipment table with the maintenance table.

//Uses LEFT JOIN to include all equipment, even if they have no maintenance records.

MAX(m.service_date) gets the most recent service date for each piece of equipment.

GROUP BY e.id ensures you're getting one row per equipment.

HAVING filters:

Equipment with no service at all (last_service IS NULL), or

Equipment that hasn’t been serviced in the last 90 days.*/
//max used for if wquipments have multiple entitied it gives most recent maintenance
?>
