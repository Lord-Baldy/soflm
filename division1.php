
            <?php
            require_once 'login.php';
            $conn = new mysqli($hn, $un , $pw, $db);
            if ($conn->connect_error) die($conn->connect_error);

            $query = "SELECT * FROM teams";
            $result = $conn->query($query);
            if (!$result) die($conn->error);

            $rows = $result->num_rows;

            for ($j = 0 ; $j < $rows ; ++$j)
            {
             $result->data_seek($j);
             echo 'Team names:' .  $result->fetch_assoc()['team_name'] . '<br>';
             echo 'Team names:' .  $result->fetch_assoc()['ground_name'] . '<br>';

            }
$result->close();
$conn->close();
?>


