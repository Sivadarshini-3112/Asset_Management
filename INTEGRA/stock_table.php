<?php
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host_name = $_POST['host_name'];
    $serial_no = $_POST['serial_no'];
    $device_type = $_POST['device_type'];
    $status = $_POST['status'];
    $purchase_date = $_POST['purchase_date'];
    $warranty_date = $_POST['warranty_date'];

    // Insert the new record into the database
    $sql = "INSERT INTO stock (host_name, serial_no, device_type, status, purchase_date, warranty_date) VALUES ('$host_name', '$serial_no', '$device_type', '$status', '$purchase_date', '$warranty_date')";
    
    if ($con->query($sql) === TRUE) {
        header("Location: stockdetailslaptop.php?type=$device_type");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$type = isset($_GET['type']) ? $_GET['type'] : 'laptop';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload <?php echo ucfirst($type); ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: orange;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        label {
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New <?php echo ucfirst($type); ?> Record</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="host_name">Host Name</label>
                <input type="text" name="host_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="serial_no">Serial No</label>
                <input type="text" name="serial_no" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="device_type">Device Type</label>
                <input type="text" name="device_type" class="form-control" value="<?php echo $type; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="purchase_date">Purchase Date</label>
                <input type="date" name="purchase_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="warranty_date">Warranty Date</label>
                <input type="date" name="warranty_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</body>
</html>
