<!DOCTYPE html>
@include('layout.navbar2')
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
</head>
<div class="form-container">
    <h2 class="form-title">Payment Details</h2>
    <form action="" class="checkout-form">
        <div class="input-line">
            <label for="name">Name on card</label>
            <input type="text" name="name" id="name" placeholder="Your name and surname">
        </div>
        <div class="input-line">
            <label for="name">Card number</label>
            <input type="text" name="name" id="name" placeholder="1111-2222-3333-4444">
        </div>
        <div class="input-container">
            <div class="input-line">
                <label for="name">Expiring Date</label>
                <input type="text" name="name" id="name" placeholder="09-21">
            </div>
            <div class="input-line">
                <label for="name">CVC</label>
                <input type="text" name="name" id="name" placeholder="***">
            </div>
        </div>
        <div class="col-3"><a class="btn btn-warning" href="{{ url ('/order') }}">Continue</a></div>
    </form>
</div>
</body>
</html>