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
    <form action="/StorePayment" class="checkout-form" method="post">
        @csrf
        {{-- <input class="form-input my-3 @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror --}}
        
        <div class="input-line">
            <label for="name_on_card">Name on card</label>
            <input class="@error('name_on_card') is-invalid @enderror" type="text" name="name_on_card" id="name_on_card" placeholder="Your name and surname">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-line">
            <label for="card_number">Card number</label>
            <input class="@error('card_number') is-invalid @enderror" type="text" name="card_number" id="card_number" placeholder="1111-2222-3333-4444">
            @error('card_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-container">
            <div class="input-line">
                <label for="expiring_date">Expiring Date</label>
                <input class="@error('expiring_date') is-invalid @enderror" type="text" name="expiring_date" id="expiring_date" placeholder="09-21">
                @error('expiring_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="input-line">
                <label for="cvc">CVC</label>
                <input class="@error('cvc') is-invalid @enderror" type="text" name="cvc" id="cvc" placeholder="***">
                @error('cvc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>

        <div class="col-3">
            {{-- <a class="btn btn-warning" href="{{ url ('/order') }}">Continue</a> --}}
            <input class="btn btn-warning" type="submit" value="Continue">
        </div>
        

    </form>
</div>
</body>
</html>