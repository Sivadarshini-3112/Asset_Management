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
        echo "New record created successfully";
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
    <title>Device Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="containerr d-flex">
        <!-- Sidebar with navigation -->
        <div class="left-container">
            <div class="dashboard">
                <a href="integra.php">
                    <button type="button" class="btn bunadj">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart" viewBox="0 0 16 16">
                            <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982"/>
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        <span>DashBoard</span></button>
                </a>
            </div>
            <div class="active-inventory">ACTIVE INVENTORY</div>
            <!-- Additional navigation items -->
            <!-- Include your other navigation items here -->
        </div>
        
        <!-- Main content -->
        <div class="dashboard-right-content">
            <div class="topprofile">
                <div class="user-icon">
                    <div class="user-avatar"></div>
                    <div class="active-symbol"></div>
                </div>
            </div>

            <div class="dashboard-right-content-size">
                <div class="d-flex justify-content-start">
                    <button type="button" class="laptop btn flexbut">Laptop List</button>
                    <button type="button" class="mouse btn flexbut">Mouse List</button>
                    <button type="button" class="keyboard btn flexbut">Keyboard</button>
                    <button type="button" class="ram btn flexbut">RAM</button>
                    <button type="button" class="hdd btn flexbut">HDD</button>
                    <button type="button" class="battery btn flexbut">Battery</button>
                    <button type="button" class="sdd btn flexbut">SDD</button>
                    <button type="button" class="bag btn flexbut">Bag</button>
                </div>
                <button class="alignbut">Upload <?php echo $type; ?></button>

                <!-- Form to add a new record -->
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

                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-primary flexbut2">CSV</button>
                    <button type="button" class="btn btn-primary flexbut2">PDF</button>
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="container gcont" style="padding:10px; color:black;">
    <table class="table table-bordered" style="color: black">
        <thead class="thead-dark">
            <tr style="color: black">
                <th>S No</th>
                <th>Host Name</th>
                <th>Serial No</th>
                <th>Device Type</th>
                <th>Status</th>
                <th>Purchase Date</th>
                <th>Warranty Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM stock WHERE device_type='${type}'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $index = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$index}</td>";
                    echo "<td>".$row["host_name"]."</td>";
                    echo "<td>".$row["serial_no"]."</td>";
                    echo "<td>".$row["device_type"]."</td>";
                    echo "<td>".$row["status"]."</td>";
                    echo "<td>".$row["purchase_date"]."</td>";
                    echo "<td>".$row["warranty_date"]."</td>";
                    echo "<td><button class='noborder'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                           <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                      </svg></button></td>";
                    echo "</tr>";
                    $index++;
                }
            } else {
                echo "<tr><td colspan='8'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<br><br><br><br><br>


                <div class="d-flex" style="margin-top: 20px;">
                    <p style="margin-top: 5px;">Showing 1 to 10 of 380 entries</p>
                    <div style="margin-left: 400px;">
                        <button type="button" class="btn btn-secondary spacee ">Previous</button>
                        <button type="button" class="btn btn-primary  spacee">1</button>
                        <button type="button" class="btn btn-secondary spacee">2</button>
                        <button type="button" class="btn btn-secondary spacee">3</button>
                        <button type="button" class="btn btn-secondary spacee">4</button>
                        <button type="button" class="btn btn-secondary spacee">5</button>
                        <button type="button" class="btn btn-secondary spacee">...</button>
                        <button type="button" class="btn btn-secondary spacee">40</button>
                        <button type="button" class="btn btn-secondary spacee">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="usericon.js"></script>
    <script>
        $(document).ready(function(){
            // Add active class based on the selected type
            var type = '<?php echo $type; ?>';
            $("." + type).addClass("btn-primary");

            // Toggle sidebar menu items
            $(".jq1").on("click",function(){
                window.location.href='systeminventory.php'
                $(".addhere1").toggleClass("jq1space")
                $(".hide1").fadeToggle() 
            })

            $(".jq2").on("click",function(){
                $(".addhere2").toggleClass("jq2space");
                $(".hspace").toggleClass("hide2") 
            })

            $(".jq3").on("click",function(){
                window.location.href='stockdetailslaptop.php'
                $(".addhere3").toggleClass("jq3space");
                $(".h").toggleClass("hide3") 
            })

            $(".jq4").on("click",function(){
                window.location.href='scrap.php'
                $(".addhere4").toggleClass("jq4space");
                $(".hide4").fadeToggle() 
            })

            $(".laptop").on("click",function(){
                window.location.href='stockdetailslaptop.php'
            })

            $(".mouse").on("click",function(){
                window.location.href = 'stockdetailslaptop.php?type=mouse';
            })

            $(".keyboard").on("click",function(){
                window.location.href='stockdetailslaptop.php?type=keyboard'
            })
            $(".ram").on("click",function(){
        window.location.href='stockdetailslaptop.php?type=RAM'
      })
      $(".hdd").on("click",function(){
        window.location.href='stockdetailslaptop.php?type=HDD'
      })
      $(".battery").on("click",function(){
        window.location.href='stockdetailslaptop.php?type=battery'
      })
      $(".sdd").on("click",function(){
        window.location.href='stockdetailslaptop.php?type=SDD'
      })
      $(".bag").on("click",function(){
        window.location.href='stockdetailslaptop.php?type=bag'
      })
    })
  </script>
</body>
</html>