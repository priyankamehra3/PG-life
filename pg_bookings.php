
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <?php
    include "includes/head_links.php";
    ?>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            color: green;
            text-align: center;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
    include "includes/header.php";
    ?>
    <h2>Book a Room</h2>
    <form action="process_booking.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="check_in_date">Check-in Date:</label><br>
        <input type="date" id="check_in_date" name="check_in_date" required><br><br>

        <label for="check_out_date">Check-out Date:</label><br>
        <input type="date" id="check_out_date" name="check_out_date" required><br><br>

        <label for="room_type">Room Type:</label><br>
        <select id="room_type" name="room_type">
            <option value="single">Single</option>
            <option value="double">Double</option>
            <option value="suite">Suite</option>
        </select><br><br>

        <label for="special_requests">Special Requests:</label><br>
        <textarea id="special_requests" name="special_requests"></textarea><br><br>

        <input type="submit" value="Book Now">
        <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
    </form>
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
</body>
</html>
