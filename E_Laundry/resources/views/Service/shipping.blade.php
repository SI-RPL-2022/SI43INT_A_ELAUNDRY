<!DOCTYPE html>
@include('layout.navbar')
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ url ('/css/style2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
<body>
    <div class="progress-checkout-container">
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Shipping</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Payment</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Review</span>
        </div>
    </div>
    <div class="form-container">
        <h2 class="form-title">Shipping Details</h2>
        <form action="" class="checkout-form">
            <div class="input-line">
                <label for="name">First line of address</label>
                <input type="text" name="name" id="name" placeholder="123">
            </div>
            <div class="input-line">
                <label for="name">Street name</label>
                <input type="text" name="name" id="name" placeholder="Electric Avenue">
            </div>
            <div class="input-container">
                <div class="input-line">
                    <label for="name">Post code</label>
                    <input type="text" name="name" id="name" placeholder="ABC-123">
                </div>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Select Shipping
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Same Day 24 hours</a></li>
                      <li><a class="dropdown-item" href="#">Reguler 3 Day</a></li>
                      <li><a class="dropdown-item" href="#">Free Delivery 5-7 Days</a></li>
                    </ul>
                  </div>
            </div>
            <div class="col-3"><a class="btn btn-warning" href="{{ url ('/payment') }}">Continue</a></div>
        </form>
    </div>
</body>
</html>