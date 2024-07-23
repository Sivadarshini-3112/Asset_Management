<?php
include 'db_connection.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,387;1,387&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="containerr d-flex">
        <div class="left-container">
            <div class="dashboard " style="margin-left: 10px;">
                <a href="integra.php">
                    <button type="button" class="btn bunadj">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-house-heart" viewBox="0 0 16 16" style="position: relative; left:-28px">
                            <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982" />
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                        </svg>
                        <span style="margin: 15px; position: relative; left: -27px;">DashBoard</span>
                    </button>
                </a>
            </div>
            <div class="active-inventory">
                ACTIVE INVENTORY
            </div>
            <div class="dropdown system-inventory addhere1 jq1space">
                <button class="btn dropdown-toggle jq1 butn1" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-columns butn2" viewBox="0 0 16 16">
                        <path
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z" />
                    </svg>
                    <span style="margin-left: 15px; margin-right: 15px;" class="butn2">System Inventory</span>
                </button>
                <ul class="h hspace ">
                    <li><a class="colored-marker dropdown-item butn3" href="systeminventory.php">Provisioned Form</a>
                    </li>
                    <li><a class="dropdown-item" href="provisioned_list.php">Provisioned Details</a></li>
                    <li><a class="dropdown-item" href="#">Return History</a></li>
                    <li><a class="dropdown-item" href="#">Custom Report</a></li>
                </ul>
            </div>
            <div class="active-inventory">
                ACCESSORIES PROVISION
            </div>
            <div class="dropdown system-inventory addhere2">
                <button class="btn dropdown-toggle jq2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-columns" viewBox="0 0 16 16">
                        <path
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z" />
                    </svg>
                    <span style="margin-left: 15px;">Accessories Invent..</span>
                </button>
                <ul class="hide2 hspace">
                    <li><a class="dropdown-item" href="mouse_provision.php">Mouse</a></li>
                    <li><a class="dropdown-item" href="#">KeyBoard</a></li>
                    <li><a class="dropdown-item" href="#">RAM</a></li>
                    <li><a class="dropdown-item" href="#">HDD</a></li>
                    <li><a class="dropdown-item" href="#">SSD</a></li>
                    <li><a class="dropdown-item" href="#">Battery</a></li>
                    <li><a class="dropdown-item" href="#">Bag</a></li>
                    <li><a class="dropdown-item" href="#">Display</a></li>
                    <li><a class="dropdown-item" href="#">Accessories History</a></li>
                </ul>
            </div>
            <div class="active-inventory">
                TRANSACTION HISTORY
            </div>
            <button class="btn" style="position: relative;left: 10px;" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z" />
                </svg>
                <span style="margin-left: 15px; margin-right: 45px;">Inventory History</span>
            </button>
            <div class="active-inventory">
                STOCK INVENTORY
            </div>
            <div class="dropdown system-inventory addhere3">
                <button class="btn dropdown-toggle jq3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-columns" viewBox="0 0 16 16">
                        <path
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z" />
                    </svg>
                    <span style="margin-left: 15px; margin-right: 45px;">Stock Details</span>
                </button>
                <ul class="hide3 hspace">
                    <li><a class="dropdown-item" href="stockdetailslaptop.php">Stocks</a></li>
                </ul>
            </div>
            <div class="active-inventory">
                SCRAP & E_WASTE
            </div>
            <div class="dropdown system-inventory addhere4">
                <button class="btn dropdown-toggle jq4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-columns" viewBox="0 0 16 16">
                        <path
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z" />
                    </svg>
                    <span style="margin-left: 15px;">Scrap & E_Waste I...</span>
                </button>
                <ul class="hide4 hspace">
                    <li><a class="dropdown-item" href="scrap.php">Scrap-On Premises</a></li>
                    <li><a class="dropdown-item" href="#">E Waste-Asset Out </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-right-content">
            <div class="topprofile">
                <div class="user-icon">
                    <div class="user-avatar"></div>
                    <div class="active-symbol"></div>
                </div>
            </div>
            <div class="dashboard-right-content-size" style="background-color: white;padding: 20px;">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p>Add Details</p>
                    <div class="grid-area">
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="serial_number" class="form-label">SERIAL NUMBER</label>
                                <select id="serial_number" name="serial_number" class="form-select">
                                    <?php
                                    $sql = "SELECT host_name FROM asset_details";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["host_name"] . "'>" . $row["host_name"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <button type="submit" class="btn btn-primary" style="position: relative;top: 32px;">Get
                                    Details</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="formGroupExampleInput" class="form-label">EMPLOYEE ID</label>
                                <input type="text" class="form-control" id="empid" placeholder="EMPLOYEE ID">
                            </div>
                            <div class="mb-3 col">
                                <label for="formGroupExampleInput2" class="form-label">EMPLOYEE NAME</label>
                                <input type="text" class="form-control" id="empname" placeholder="EMPLOYEE NAME">
                            </div>
                            <div class="mb-3 col">
                                <label for="formGroupExampleInput" class="form-label">EMAIL ID</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="formGroupExampleInput" class="form-label">PHONE NUMBER</label>
                                <input type="text" class="form-control" id="phone" placeholder="9988997755">
                            </div>
                            <div class="mb-3 col">
                                <label for="devicetype" class="form-label">DEVICE TYPE</label>
                                <select id="devicetype" class="form-select">
                                    <?php
                                    $sql = "SELECT device_type FROM stock";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["device_type"] . "'>" . $row["device_type"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="emptype" class="form-label">EMPLYOMENT TYPE</label>
                                <select id="emptype" class="form-select">
                                    <?php
                                    $sql = "SELECT emp_type FROM employee";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["emp_type"] . "'>" . $row["emp_type"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="department" class="form-label">DEPARTMENT</label>
                                <select id="department" class="form-select">
                                    <?php
                                    $sql = "SELECT department_name FROM department";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["department_name"] . "'>" . $row["department_name"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="project" class="form-label">PROJECT</label>
                                <select id="project" class="form-select">
                                    <?php
                                    $sql = "SELECT project FROM department";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["project"] . "'>" . $row["project"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="branch" class="form-label">BRANCH</label>
                                <select id="branch" class="form-select">
                                    <?php
                                    $sql = "SELECT branch FROM department";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["branch"] . "'>" . $row["branch"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="report" class="form-label">REPORTING HEAD</label>
                                <input type="text" class="form-control" id="report" placeholder="Account Head">
                            </div>
                            <div class="mb-3 col">
                                <label for="account" class="form-label">ACCOUNT HEAD</label>
                                <input type="text" class="form-control" id="account" placeholder="Reporting Head">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="grid-area">
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="assettype" class="form-label">ASSET TYPE</label>
                                <input type="text" class="form-control" id="assettype" value="EMPLOYEE ID">
                            </div>
                            <div class="mb-3 col">
                                <label for="assetmake" class="form-label">ASSET MAKE</label>
                                <input type="text" class="form-control" id="assetmake" value="EMPLOYEE ID">
                            </div>
                            <div class="mb-3 col">
                                <label for="assetmodel" class="form-label">ASSET MODEL</label>
                                <input type="text" class="form-control" id="assetmodel" value="EMPLOYEE ID">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="hostname" class="form-label">HOST-NAME</label>
                                <input type="text" class="form-control" id="hostname" value="EMPLOYEE ID">
                            </div>
                            <div class="mb-3 col">
                                <label for="serialno" class="form-label">SERIAL NUMBER</label>
                                <input type="text" class="form-control" id="serialno" value="EMPLOYEE ID">
                            </div>
                            <div class="mb-3 col">
                                <label for="bitlock" class="form-label">BIT-LOCKER STATUS</label>
                                <select id="bitlock" class="form-select">
                                    <option value="yes">Yes</option>
                                    <option selected value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="edr" class="form-label">EDR INSTALLED</label>
                                <select id="edr" class="form-select">
                                    <option value="yes">Yes</option>
                                    <option selected value="no">No</option>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="assetowner" class="form-label">ASSET OWNER</label>
                                <input type="text" class="form-control" id="assetowner" value="EMPLOYEE ID">
                            </div>
                            <div class="mb-3 col">
                                <label for="purdate" class="form-label">PURCHASE DATE</label>
                                <input type="text" class="form-control" id="purdate" value="EMPLOYEE ID">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="keyboard" class="form-label">KEYBOARD</label>
                                <input type="text" class="form-control" id="keyboard" value="0">
                            </div>
                            <div class="mb-3 col">
                                <label for="mouse" class="form-label">MOUSE</label>
                                <input type="text" class="form-control" id="mouse" value="0">
                            </div>
                            <div class="mb-3 col">
                                <label for="charger" class="form-label">IS CHARGER PROVIDED?</label>
                                <select id="charger" class="form-select">
                                    <option value="yes">Yes</option>
                                    <option selected value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="bag" class="form-label">IS BAG PROVIDED?</label>
                                <select id="bag" class="form-select">
                                    <option value="yes">Yes</option>
                                    <option selected value="no">No</option>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="provdate" class="form-label">PROVISION DATE</label>
                                <input type="text" class="form-control" id="provdate">
                            </div>
                            <div class="mb-3 col">
                                <label for="provby" class="form-label">PROVISIONED BY</label>
                                <input type="text" class="form-control" id="provby" value="EMPLOYEE ID">
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" style="margin-left: 20px;width: 110px;" type="submit" value="Submit">
                    <input class="btn btn-secondary" style="margin-left: 30px;width: 110px" type="submit"
                        value="Cancel">
                </form>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $serial_number = $_POST['serial_number'];
        $sql = "
               SELECT e.emp_id,a.host_name, e.emp_name, e.emp_type, e.phone, e.email,
                      d.branch,d.project, d.department_name, d.reporting_head, d.account_head,
                      a.asset_type, a.asset_make, a.asset_model, a.bit_locker_status,s.serial_no,s.device_type,s.purchase_date
               FROM employee e
               INNER JOIN department d ON e.emp_id = d.e_id
               INNER JOIN asset_details a ON e.emp_id = a.e_id
               INNER JOIN stock s ON s.host_name = a.host_name
               WHERE a.host_name = '$serial_number'
           ";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<script>';
                echo 'document.getElementById("serial_number").value = "' . $row["host_name"] . '";';
                echo 'document.getElementById("empid").value = "' . $row["emp_id"] . '";';
                echo 'document.getElementById("empname").value = "' . $row["emp_name"] . '";';
                echo 'document.getElementById("email").value = "' . $row["email"] . '";';
                echo 'document.getElementById("phone").value = "' . $row["phone"] . '";';
                echo 'document.getElementById("report").value = "' . $row["reporting_head"] . '";';
                echo 'document.getElementById("account").value = "' . $row["account_head"] . '";';
                echo 'document.getElementById("department").value = "' . $row["department_name"] . '";';
                echo 'document.getElementById("branch").value = "' . $row["branch"] . '";';
                echo 'document.getElementById("project").value = "' . $row["project"] . '";';
                echo 'document.getElementById("emptype").value = "' . $row["emp_type"] . '";';

                echo 'document.getElementById("assettype").value = "' . $row["asset_type"] . '";';
                echo 'document.getElementById("assetmake").value = "' . $row["asset_make"] . '";';
                echo 'document.getElementById("assetmodel").value = "' . $row["asset_model"] . '";';
                
                echo 'document.getElementById("devicetype").value = "' . $row["device_type"] . '";';

                echo 'document.getElementById("hostname").value = "' . $row["host_name"] . '";';
                echo 'document.getElementById("serialno").value = "' . $row["serial_no"] . '";';
                echo 'document.getElementById("bitlock").value = "' . $row["bit_locker_status"] . '";';
                echo 'document.getElementById("purdate").value = "' . $row["purchase_date"] . '";';
                echo 'document.getElementById("assetowner").value = "' . $row["emp_id"] . '";';

                echo '</script>';
            }
        }
    }
    ?>
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="usericon.js"></script>
    <script>
        $(document).ready(function () {
            $(".jq1").on("click", function () {
                window.location.href = 'systeminventory.php'
                $(".addhere1").toggleClass("jq1space")
                $(".h").toggleClass("hide1")
            })
            $(".jq2").on("click", function () {
                window.location.href = '#'
                $(".addhere2").toggleClass("jq2space");
                $(".hide2").fadeToggle()
            })
            $(".jq3").on("click", function () {
                window.location.href = 'stockdetailslaptop.php'
                $(".addhere3").toggleClass("jq3space");
                $(".hide3").fadeToggle()
            })
            $(".jq4").on("click", function () {
                window.location.href = 'scrap.php'
                $(".addhere4").toggleClass("jq4space");
                $(".hide4").fadeToggle()
            })
        })
    </script>
</body>

</html>