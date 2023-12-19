<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Alert</title>
    <!-- Include Bootstrap CSS if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            text-align: left;
            padding: 20px;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col-md-12 {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        p {
            color: #666;
            margin-bottom: 10px;
        }

        .btn-gmail {
            background-color: #ed176cd9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-gmail:hover {
            background-color: #b63726;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php
                include("../../connect.php");

                // Get the ID from the URL
                $id = isset($_GET['id']) ? $_GET['id'] : 0;

                // Query the database for the specific record
                $sql = "SELECT * FROM contacts WHERE id = $id";
                $result = $conn->query($sql);

                if ($result === false) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } else {
                    // Display the details
                    if ($row = $result->fetch_assoc()) {
                        echo '<h2>' . $row['NAME'] . '</h2>';
                        echo '<hr><p><b>Email:</b> ' . $row['email'] . '</p>';
                        echo '<hr><p><b>Lời nhắn:</b> ' . $row['message'] . '</p>';
                        echo '<hr><p><b>Thời gian gửi:</b> ' . $row['created_at'] . '</p>';
                        
                        // Button to compose email
                        echo '<p><a href="https://mail.google.com/mail/u/1/#inbox " target="_blank" class="btn-gmail" >Tư Vấn (qua Gmail)</a>';
                    } else {
                        echo 'Record not found.';
                    }
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</body>

</html>
