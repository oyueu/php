<?php
require_once __DIR__ . '/../models/Train.php';

class BookingController {

    public function search() {
        if (isset($_GET['destination']) && isset($_GET['date'])) {
            $destination = $_GET['destination'];
            $date = $_GET['date'];

            if (!empty($destination) && !empty($date)) {
                include __DIR__ . '/../views/search_form.php';
            } else {
                echo "Please enter search criteria.";
            }
        } else {
            include __DIR__ . '/../views/search_form.php';
        }
    }
}
