<h2>Available Trains</h2>
<table>
    <tr>
        <th>Destination</th>
        <th>Departure Date</th>
        <th>Available Seats</th>
        <th>Action</th>
    </tr>
    <?php foreach ($trains as $train): ?>
        <tr>
            <td><?php echo $train->destination; ?></td>
            <td><?php echo $train->departure_date; ?></td>
            <td><?php echo $train->available_seats; ?></td>
            <td>
                <form method="POST" action="index.php?action=book">
                    <input type="hidden" name="train_id" value="<?php echo $train->id; ?>">
                    <input type="text" name="user_name" placeholder="Your name" required>
                    <button type="submit">Book</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>