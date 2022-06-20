<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url ('/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>DashboardAdmin</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>E-Laundry</h2>
            </div>
            <div class="search">
                <input type="text" id="search" placeholder="Search here">
                <label for="search"> <i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="{{ url ("/image/logoweb.png") }}" alt="">
            </div>
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-th-large"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url ('/feedback') }}">
                            <i class="fas fa-address-book" aria-hidden="true"></i>
                            <div>Customer Feedback</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url ('/userprofile1') }}">
                            <i class="fas fa-user-circle"></i>
                            <div>Admin Info</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                            <div class="number">27350</div>
                            <div class="card-name">All Order</div>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-list-ul"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">2900</div>
                            <div class="card-name">New Order</div>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">27350</div>
                            <div class="card-name">Completed Order</div>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>
                <div class="charts">
                    <div class="chart">
                        <h2>Order Statistic</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script src="{{ url ('/js/chart1.js') }}"></script>
</body>
</html>