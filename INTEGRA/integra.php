<?php
include 'functions.php';
include 'db_connection.php'; 

$workingCount_lap = $con->query("SELECT COUNT(*) as count FROM stock WHERE status = 'working' AND device_type = 'laptop'")->fetch_assoc()['count'];
$notWorkingCount_lap= $con->query("SELECT COUNT(*) as count FROM stock WHERE status = 'not working' AND device_type = 'laptop'")->fetch_assoc()['count'];
$inWarrantyCount_lap = $con->query("SELECT COUNT(*) as count FROM stock WHERE warranty_date >= CURDATE() AND device_type = 'laptop'")->fetch_assoc()['count'];
$outOfWarrantyCount_lap = $con->query("SELECT COUNT(*) as count FROM stock WHERE  warranty_date  < CURDATE() AND device_type = 'laptop'")->fetch_assoc()['count'];



$mouse_avail_count = $con->query("SELECT COUNT(*) as count FROM stock WHERE  device_type = 'mouse'")->fetch_assoc()['count'];
$keyb_avail_count= $con->query("SELECT COUNT(*) as count FROM stock WHERE  device_type = 'keyboard'")->fetch_assoc()['count'];
$bag_avail_count = $con->query("SELECT COUNT(*) as count FROM stock WHERE  device_type = 'bag'")->fetch_assoc()['count'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .donut-chart {
            width: 185px;
            height: 185px;
        }
        .donut-hole {
            fill: white;
        }
        .donut-ring {
            fill: transparent;
            stroke: #d2d3d4;
            stroke-width: 2;
        }
        .donut-segment {
            fill: transparent;
            stroke-width: 2;
        }
        .heighttopbot{
          position: relative;
          top: -25px;
        }
        .heighttopbot2{
          position: relative;
          top: -30px;
        }
        .donut-text-1 {
            font-size: 6px;
            text-anchor: middle;
            fill: grey; 
        }
        .donut-text-2{
            font-size: 3px; 
            text-anchor: middle;
            fill: grey; 
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,387;1,387&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div>
    <div class="containerr d-flex">
      <div class="left-container">
        <div class="dashboard">   
          <a href="integra.php" class="btn butn1" id="dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart butn2" viewBox="0 0 16 16" style="position: relative; left:-28px">
              <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982"/>
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
            <span style="margin: 15px; position: relative; left: -27px;" class="butn2">Dashboard</span>
          </a>
        </div>

            <div class="active-inventory">
                ACTIVE INVENTORY
            </div>
            <div class="dropdown system-inventory addhere1">             
                <button class="btn dropdown-toggle jq1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
                      <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z"/>
                    </svg>
                    <span style="margin-left: 15px; margin-right: 15px;">System Inventory</span>
                 </button>
                <ul class="hide1 hspace">
                  <li><a class="dropdown-item" href="#">Provisioned Form</a></li>
                  <li><a class="dropdown-item" href="provisioned_list.php">Provisioned Details</a></li>
                  <li><a class="dropdown-item" href="#">Return History</a></li>
                  <li><a class="dropdown-item" href="#">Custom Report</a></li>
                </ul>
            </div>
            <div class="active-inventory">
                ACCESSORIES PROVISION
            </div>
            <div class="dropdown system-inventory addhere2">             
                <button class="btn dropdown-toggle jq2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z"/>
                  </svg>
                  <span style="margin-left: 15px;">Accessories Invent..</span>
                </button>
                <ul class="hide2 hspace">
                  <li><a class="dropdown-item" href="mouse_provision">Mouse</a></li>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z"/>
              </svg>
            <span style="margin-left: 15px; margin-right: 45px;">Inventory History</span>
            </button>
            <div class="active-inventory">
                STOCK INVENTORY
            </div>
            <div class="dropdown system-inventory addhere3">             
                  <button class="btn dropdown-toggle jq3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
                      <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z"/>
                    </svg>
                  <span style="margin-left: 15px; margin-right: 45px;">Stock Details</span>
                  </button>
                <ul class="hide3 hspace">
                  <li><a class="dropdown-item" href="stockdetailslaptop.php">Stock</a></li>
                </ul>
            </div>
            <div class="active-inventory">
                SCRAP & E_WASTE
            </div>
            <div class="dropdown system-inventory addhere4">              
                <button class="btn dropdown-toggle jq4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z"/>
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
            <div class="dashboard-right-content-size">
                <div class="grid-area grid-areass">
                    <div class="aa" >
                      <span>Provision List</span>
                      <div class="container heighttopbot">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><h1>2507</h1></li>
                                <li>Total Provisioned</li>
                            </ul>
                          </div>
                            <div class="col-md-6 text-center">
                              <svg class="donut-chart" viewBox="0 0 42 42" style="position:relative;left: 20px;">
                                <circle class="donut-hole" cx="21" cy="21" r="13"></circle>
                                <circle class="donut-ring" cx="21" cy="21" r="13"></circle>
                                <circle class="donut-segment donut-segment-1" cx="21" cy="21" r="13" stroke="#36a2eb" stroke-dasharray="10 1" stroke-dashoffset="10"></circle>
                                <circle class="donut-segment donut-segment-2" cx="21" cy="21" r="13" stroke="green" stroke-dasharray="10 0" stroke-dashoffset="10"></circle>
                                <circle class="donut-segment donut-segment-3" cx="21" cy="21" r="13" stroke="black" stroke-dasharray="10 50" stroke-dashoffset="50"></circle>
                                <text class="donut-text donut-text-1" x="22" y="21">38%</text>
                                <text class="donut-text donut-text-2" x="21.5" y="25">Weekly</text>
                            </svg>
                            </div>
                        </div>
                      </div>
                      <div class="heighttopbot2">
                        <div class="d-flex justify-content-between" style="margin-bottom: 5px">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16" >
                              <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                              <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -100px;">
                            <p>Active Provision </p>
                          </div>
                          <div>
                            <span>222</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-bottom: 5px">
                          <div style="background-color: #0dfdbd67;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-shield-minus" viewBox="0 0 16 16">
                              <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                              <path d="M5.5 7a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -90px;">
                            <p>Validation Pending </p>
                          </div>
                          <div>
                            <span>222</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-bottom: 5px">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-shield-minus" viewBox="0 0 16 16">
                              <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                              <path d="M5.5 7a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -80px;">
                            <p>Revalidation Pending</p>
                          </div>
                          <div>
                            <span>222</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-bottom: 5px">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-shield-minus" viewBox="0 0 16 16">
                              <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                              <path d="M5.5 7a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -120px;">
                            <p>Dual Asset</p>
                          </div>
                          <div>
                            <span>222</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="bb">
                      <p>Active Provisined Laptop Dashboard</p>
                      <div class="d-flex justify-content-around">
                        <div>
                          <h2>2430</h2>
                        </div>
                        <div>
                          <h2>2430</h2>
                          <p class="d-flex justify-content-center">PU</p>
                        </div>
                        <div>
                          <h2>2430</h2>
                          <p class="d-flex justify-content-center ">WFH</p>
                        </div>
                      </div>
                      <div style="position: relative;top: -20px;">
                        <p>PU In Waranty</p>
                        <div class="d-flex align-items-center justify-content-between" style="position: relative;top: -15px;">
                          <div class="bluebar"></div>
                          <div>432</div>
                        </div>
                        <p>PU Out Of Waranty</p>
                        <div class="d-flex align-items-center justify-content-between" style="position: relative;top: -15px;">
                          <div class="redbar"></div>
                          <div>1132</div>
                        </div>
                        <p>WFH-In Waranty</p>
                        <div class="d-flex align-items-center justify-content-between" style="position: relative;top: -15px;">
                          <div class="bluebar"></div>
                          <div>772</div>
                        </div>
                        <p>WFH-Out Of Waranty</p>
                        <div class="d-flex align-items-center justify-content-between" style="position: relative;top: -15px;">
                          <div class="redbar"></div>
                          <div>402</div>
                        </div>
                      </div>
                    </div>
                    <div class="cc">
                      <p style="margin-bottom: 40px;">Asset Stock List</p>
                      <div class="d-flex justify-content-between" style="margin-bottom:5px" >
                        <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                          </svg>
                        </div>
                        <div style="position: relative;left: -125px;">
                          <p>Working </p>
                        </div>
                        <div>
                        <span><?php echo $workingCount_lap; ?></span>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between" style="margin-bottom:5px" >
                        <div style="background-color: #0dfdbd67;width: 30px;height: 30px;border-radius: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-shield-minus" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                            <path d="M5.5 7a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                          </svg>
                        </div>
                        <div style="position: relative;left: -110px;">
                          <p>Not Working</p>
                        </div>
                        <div>
                          <span><?php echo $notWorkingCount_lap; ?></span>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between" style="margin-bottom:5px" >
                        <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                          </svg>
                        </div>
                        <div style="position: relative;left: -90px;">
                          <p>No Support Ticket</p>
                        </div>
                        <div>
                          <span>0</span>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between" style="margin-bottom:5px" >
                        <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
                          </svg>
                        </div>
                        <div style="position: relative;left: -120px;">
                          <p>IN Waranty </p>
                        </div>
                        <div>
                           <span><?php echo $inWarrantyCount_lap ; ?></span>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between" style="margin-bottom:5px" >
                        <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-exclamation-octagon" viewBox="0 0 16 16">
                            <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z"/>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                          </svg>
                        </div>
                        <div style="position: relative;left: -105px;">
                          <p>Out Of Waranty </p>
                        </div>
                        <div>
                        <span><?php echo $outOfWarrantyCount_lap; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="dd">
                      <span>Provision Accessories</span>
                      <div class="container" style="position: relative;top: -35px;">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-md-6">
                            <ul class="list-unstyled">
                              <li style="position: relative;left: -10px;">Total Provisioned</li>
                            </ul>
                          </div>
                            <div class="col-md-6 text-center">
                                <svg class="donut-chart" viewBox="0 0 42 42">
                                    <circle class="donut-hole" cx="21" cy="21" r="12"></circle>
                                    <circle class="donut-ring" cx="21" cy="21" r="12"></circle>
                                    <circle class="donut-segment donut-segment-1" cx="21" cy="21" r="12" stroke="#ff6347" stroke-dasharray="25 75" stroke-dashoffset="25"></circle>
                                    <circle class="donut-segment donut-segment-2" cx="21" cy="21" r="12" stroke="#36a2eb" stroke-dasharray="25 75" stroke-dashoffset="0"></circle>
                                    <circle class="donut-segment donut-segment-3" cx="21" cy="21" r="12" stroke="#ffce56" stroke-dasharray="50 50" stroke-dashoffset="50"></circle>
                                    <text class="donut-text donut-text-1" x="22" y="21">38%</text>
                                    <text class="donut-text donut-text-2" x="21.5" y="25">Weekly</text>
                                </svg>
                            </div>
                        </div>
                      </div>
                      <div style="position: relative;top: -55px;">
                        <div class="d-flex justify-content-between" style="margin-bottom:5px">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-mouse2" viewBox="0 0 16 16">
                              <path d="M3 5.188C3 2.341 5.22 0 8 0s5 2.342 5 5.188v5.625C13 13.658 10.78 16 8 16s-5-2.342-5-5.188V5.189zm4.5-4.155C5.541 1.289 4 3.035 4 5.188V5.5h3.5zm1 0V5.5H12v-.313c0-2.152-1.541-3.898-3.5-4.154M12 6.5H4v4.313C4 13.145 5.81 15 8 15s4-1.855 4-4.188z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -85px;">
                            <p>Active Mouse </p>
                          </div>
                          <div>
                            <span>0</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-bottom:5px">
                          <div style="background-color: #0dfdbd67;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-keyboard" viewBox="0 0 16 16">
                              <path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
                              <path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75zm-2 0A.25.25 0 0 1 2.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -95px;">
                            <p>Keyboard </p>
                          </div>
                          <div>
                            <span>0</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-bottom:5px">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-bag-dash" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -110px;">
                            <p>Bag </p>
                          </div>
                          <div>
                            <span>19</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ee">
                      <span>Accessories Stock List</span>
                      <div class="container" style="position: relative;top: -35px;">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-md-6">
                            <ul class="list-unstyled">
                              <li style="position: relative;left: -10px;">Total Available</li>
                            </ul>
                          </div>
                            <div class="col-md-6 text-center">
                                <svg class="donut-chart" viewBox="0 0 42 42">
                                    <circle class="donut-hole" cx="21" cy="21" r="12"></circle>
                                    <circle class="donut-ring" cx="21" cy="21" r="12"></circle>
                                    <circle class="donut-segment donut-segment-1" cx="21" cy="21" r="12" stroke="#ff6347" stroke-dasharray="25 75" stroke-dashoffset="25"></circle>
                                    <circle class="donut-segment donut-segment-2" cx="21" cy="21" r="12" stroke="#36a2eb" stroke-dasharray="25 75" stroke-dashoffset="0"></circle>
                                    <circle class="donut-segment donut-segment-3" cx="21" cy="21" r="12" stroke="#ffce56" stroke-dasharray="50 50" stroke-dashoffset="50"></circle>
                                    <text class="donut-text donut-text-1" x="22" y="21">38%</text>
                                    <text class="donut-text donut-text-2" x="21.5" y="25">Weekly</text>
                                </svg>
                            </div>
                        </div>
                      </div>
                      <div style="position: relative;top: -55px;">
                        <div class="d-flex justify-content-between" style="margin-top: 5px;">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-mouse2" viewBox="0 0 16 16">
                              <path d="M3 5.188C3 2.341 5.22 0 8 0s5 2.342 5 5.188v5.625C13 13.658 10.78 16 8 16s-5-2.342-5-5.188V5.189zm4.5-4.155C5.541 1.289 4 3.035 4 5.188V5.5h3.5zm1 0V5.5H12v-.313c0-2.152-1.541-3.898-3.5-4.154M12 6.5H4v4.313C4 13.145 5.81 15 8 15s4-1.855 4-4.188z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -105px;">
                            <p>Mouse </p>
                          </div>
                          <div>
                          <span><?php echo $mouse_avail_count; ?></span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-top: 5px;">
                          <div style="background-color: #0dfdbd67;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-keyboard" viewBox="0 0 16 16">
                              <path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
                              <path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75zm-2 0A.25.25 0 0 1 2.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -95px;">
                            <p>Keyboard </p>
                          </div>
                          <div>
                          <span><?php echo $keyb_avail_count; ?></span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-top: 5px;">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-bag-dash" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -110px;">
                            <p>Bag </p>
                          </div>
                          <div>
                          <span><?php echo $bag_avail_count; ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ff">
                      <span>Scrap List</span>
                      <div class="container" style="position: relative;top: -45px;">
                        <div class="row justify-content-center align-items-center">
                          <div class="col-md-6">
                            <ul class="list-unstyled">
                              <li style="position: relative;left: -10px;">Total Scrap</li>
                            </ul>
                          </div>
                            <div class="col-md-6 text-center">
                                <svg class="donut-chart" style="position: relative;" viewBox="0 0 42 42">
                                    <circle class="donut-hole" cx="21" cy="21" r="12"></circle>
                                    <circle class="donut-ring" cx="21" cy="21" r="12"></circle>
                                    <circle class="donut-segment donut-segment-1" cx="21" cy="21" r="12" stroke="#ff6347" stroke-dasharray="25 75" stroke-dashoffset="25"></circle>
                                    <circle class="donut-segment donut-segment-2" cx="21" cy="21" r="12" stroke="#36a2eb" stroke-dasharray="25 75" stroke-dashoffset="0"></circle>
                                    <circle class="donut-segment donut-segment-3" cx="21" cy="21" r="12" stroke="#ffce56" stroke-dasharray="50 50" stroke-dashoffset="50"></circle>
                                    <text class="donut-text donut-text-1" x="22" y="21">38%</text>
                                    <text class="donut-text donut-text-2" x="21.5" y="25">Weekly</text>
                                </svg>
                            </div>
                        </div>
                      </div>
                      <div style="position: relative;top: -65px;">
                        <div class="d-flex justify-content-between" style="margin-bottom: 5px;">
                          <div style="background-color: #9d0dfd5e;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-exclamation-octagon" viewBox="0 0 16 16">
                              <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z"/>
                              <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -90px;">
                            <p>Scrap-On Premises </p>
                          </div>
                          <div>
                            <span>0</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-bottom: 5px;">
                          <div style="background-color: #0dfdbd67;width: 30px;height: 30px;border-radius: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                            </svg>
                          </div>
                          <div style="position: relative;left: -90px;">
                            <p>E Waste-Asset Out</p>
                          </div>
                          <div>
                            <span>0</span>
                          </div>
                        </div>
                      </div>
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
    $(".jq1").on("click",function(){
      window.location.href='systeminventory.php'
      $(".addhere1").toggleClass("jq1space")
      $(".hide1").fadeToggle()
      $(".jq1").addClass("butn1") 
    })   
    $(".jq2").on("click",function(){
      window.location.href='provisioned_list.php'
      $(".addhere2").toggleClass("jq2space");
      $(".hide2").fadeToggle() 
    })
    $(".jq3").on("click",function(){
      window.location.href='stockdetailslaptop.php'
      $(".addhere3").toggleClass("jq3space");
      $(".hide3").fadeToggle() 
    })
    $(".jq4").on("click",function(){
      window.location.href='scrap.php'
      $(".addhere4").toggleClass("jq4space");
      $(".hide4").fadeToggle() 
    })
  })
</script>
</body>
</html>