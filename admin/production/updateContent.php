<?php
include("../../connect.php");

if (isset($_POST['option'])) {
    $option = $_POST['option'];

    if ($option === 'Option 1') {
        // Xử lý cho Option 1
        $sql = "SELECT * FROM contacts LIMIT 1";
    } elseif ($option === 'Option 2') {
        // Xử lý cho Option 2
        $sql = "SELECT * FROM your_table_for_option_2"; // 
    } elseif ($option === 'Option 3') {
        // Xử lý cho Option 3
        $sql = "SELECT * FROM your_table_for_option_3"; // 
    }

    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            echo '<ul class="list-group">';
            while ($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item">';
                echo '<strong>' . $row['NAME'] . '</strong> - ' . $row['message'] . ' ';
                echo '<span class="badge badge-secondary">' . $row['created_at'] . '</span>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p class="text-muted">Không có thông báo cho Option ' . substr($option, -1) . '.</p>';
        }
    }
}

$conn->close();
?>
