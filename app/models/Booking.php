<?php
class Booking {
    public $id;
    public $train_id;
    public $user_name;
    public $booking_date;

    public function __construct($id, $train_id, $user_name, $booking_date) {
        $this->id = $id;
        $this->train_id = $train_id;
        $this->user_name = $user_name;
        $this->booking_date = $booking_date;
    }

    public static function createBooking($pdo, $train_id, $user_name) {
        $sql = "INSERT INTO bookings (train_id, user_name, booking_date) VALUES (:train_id, :user_name, NOW())";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['train_id' => $train_id, 'user_name' => $user_name]);
    }
}
?>