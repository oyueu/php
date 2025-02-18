<?php
class Train {
    public $id;
    public $destination;
    public $departure_date;
    public $available_seats;

    public function __construct($id, $destination, $departure_date, $available_seats) {
        $this->id = $id;
        $this->destination = $destination;
        $this->departure_date = $departure_date;
        $this->available_seats = $available_seats;
    }

    public static function searchTrains($pdo, $destination, $date) {
        $sql = "SELECT * FROM trains WHERE destination LIKE :destination AND departure_date >= :date";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['destination' => "%$destination%", 'date' => $date]);

        $trains = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $trains[] = new Train($row['id'], $row['destination'], $row['departure_date'], $row['available_seats']);
        }
        return $trains;
    }
}
?>
