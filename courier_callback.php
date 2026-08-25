<?php
// Whitelist Domain
header("Access-Control-Allow-Origin: https://www.fdedomestic.com/client");

// Callback Data
$waybill_id = $_POST["waybill_id"];
$delivery_status = $_POST["delivery_status"];
$last_update_time = $_POST["last_update_time"];

// Database Update Code
$conn = new mysqli("DB_HOST", "DB_USER", "DB_PASS", "DB_NAME");

if (!$conn->connect_error) {
    $stmt = $conn->prepare("UPDATE orders SET status = ?, updated_at = ? WHERE waybill_id = ?");
    $stmt->bind_param("sss", $delivery_status, $last_update_time, $waybill_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
