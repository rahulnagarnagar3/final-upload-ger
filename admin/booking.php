<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

$session_id = session_id();

$stmt = $db->prepare("SELECT * FROM services JOIN booking ON services.ID = booking.service_id WHERE (status = 'free' OR (status <> 'free' AND session = :session)) ");
$stmt->bindParam(":session", $session_id);
$stmt->execute();
$result = $stmt->fetchAll();

class Event {}
class Tags {}
$events = array();

foreach($result as $row) {
  $e = new Event();
  $e->id = $row['service_id'];
  $e->text = "";
  $e->tags = new Tags();
  $e->tags->status = $row['status'];
  $e->tags->doctor = $row['service_type'];
  $events[] = $e;
}

header('Content-Type: application/json');
echo json_encode($events);

?>