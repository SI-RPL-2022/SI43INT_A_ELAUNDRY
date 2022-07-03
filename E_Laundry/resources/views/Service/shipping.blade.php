<!DOCTYPE html>
@include('layout.navbar2')
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
    <div class="form-container">
        <h2 class="form-title">Shipping Details</h2>

        <form action="/StoreShipping" class="checkout-form" method="store">
            @csrf
            {{-- <input class="form-input my-3 @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror --}}

            <div class="input-line @error('address') is-invalid @enderror">
                <label for="address">First line of address</label>
                <input type="text" name="address" id="address" placeholder="123">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-line @error('street') is-invalid @enderror">
                <label for="street">Street Name</label>
                <input type="text" name="street" id="street" placeholder="Electric Avenue">
                @error('street')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <div class="input-line @error('post_code') is-invalid @enderror">
                    <label for="post_code">Post code</label>
                    <input type="text" name="post_code" id="post_code" placeholder="ABC-123">
                    @error('post_code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                
           
            </div>
                {{-- NOT DONE : Get value from dropdown, name="address" --}}
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Select Shipping
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      {{-- <li><input class="dropdown-item" href="#" id="delivery" name="delivery" value="Same Day 24 hours"></li> --}}
                      <li><a class="dropdown-item" href="#">Same Day 24 hours</a></li>
                      <li><a class="dropdown-item" href="#">Reguler 3 Day</a></li>
                      <li><a class="dropdown-item" href="#">Free Delivery 5-7 Days</a></li>
                    </ul>
                </div>

            </div>

            
            <div class="col-3"><a class="btn btn-warning" href="payment">Continue</a></div>
            {{-- <input class="btn btn-warning" type="submit" value="Continue"> --}}

        </form>

    </div>
</body>
</html>