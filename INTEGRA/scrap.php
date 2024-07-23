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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,387;1,387&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="containerr d-flex">
        <div class="left-container">
            <div class="dashboard" style="margin-left: 10px;">
                <a href="integra.php">
                    <button type="button" class="btn bunadj">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart" viewBox="0 0 16 16" style="position: relative; left:-28px">
                        <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982"/>
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                      </svg>
                      <span style="margin: 15px; position: relative; left: -27px;">DashBoard</span></button>
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
                    <li><a class="dropdown-item" href="systeminventory.php">Provisioned From</a></li>
                    <li><a class="dropdown-item" href="#">Provisioned Details</a></li>
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
                <ul class="h hspace">
                  <li><a class="dropdown-item butn3" href="mouse_provision.php">Mouse</a></li>
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
                  <li><a class="dropdown-item" href="stockdetailslaptop.php">Stocks</a></li>
                </ul>
            </div>
            <div class="active-inventory">
                SCRAP & E_WASTE
            </div>
            <div class="dropdown system-inventory addhere4 jq4space">
                <button class="btn dropdown-toggle jq4 butn1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns butn2" viewBox="0 0 16 16">
                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z"/>
                  </svg>
                  <span style="margin-left: 15px;" class="butn2">Scrap & E_Waste I...</span>
                </button>
                <ul class="h hspace">
                    <li><a class="dropdown-item butn3" href="#">Scrap-On Premises</a></li>
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
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-primary flexbut">Laptop List</button>
                    <button type="button" class="btn flexbut">Mouse List</button>
                    <button type="button" class="btn flexbut">Keyboard</button>
                    <button type="button" class="btn flexbut">RAM</button>
                    <button type="button" class="btn flexbut">HDD</button>
                    <button type="button" class="btn flexbut">Battery</button>
                    <button type="button" class="btn flexbut">SDD</button>
                    <button type="button" class="btn flexbut">Bag</button>
                </div>
                <button class="alignbut">Upload Laptops</button>
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-primary flexbut2">CSV</button>
                    <button type="button" class="btn btn-primary flexbut2">PDF</button>
                    <nav class="navbar navbar-light" style="margin-left: 650px;">
                        <div class="container-fluid">
                          <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                        </div>
                      </nav>
                </div>

                <div class="container gcont">
                    <div class="row">
                        <div class="col">S No</div>
                        <div class="col">Host Name</div>
                        <div class="col">Serial No</div>
                        <div class="col">Device Type</div>
                        <div class="col">Status</div>
                        <div class="col">Purchase Date</div>
                        <div class="col">Waranty Date</div>
                        <div class="col">Action</div>
                    </div>
                    <div class="row">
                        <div class="col" style="text-align: center;">No data available in table</div>
                    </div>
                  </div>
                  <div class="d-flex" style="margin-top: 20px;">
                    <p style="margin-top: 5px;">Showing 0 to 0 of 0 entries</p>
                    <div style="margin-left: 300px;">
                        <button type="button" class="btn btn-secondary spacee ">Previous</button>
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
    $(".jq1").on("click",function(){
      window.location.href='systeminventory.php'

      $(".addhere1").toggleClass("jq1space")
      $(".hide1").fadeToggle() 
    })
    
    $(".jq2").on("click",function(){

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
      $(".h").toggleClass("hide4")
    })
    
  })
</script>
</body>
</html>