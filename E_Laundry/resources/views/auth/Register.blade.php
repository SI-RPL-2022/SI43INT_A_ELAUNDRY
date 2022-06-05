<!DOCTYPE html>
<html lang="id">
@include("layout.navbar")
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ url ('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
</head>
<body>
    <section class="full-bg">
        <div class="container my-5">
            <div class="regist-box">
                <h2 style="text-align:center">REGISTRATION FORM</h2>
                <div class="row">
                    <div class="col-md-9 col-lg-8 mx-auto">
                        <form action="/Register" method="post">
                            @csrf
                            <input class="form-input my-3 @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            <input class="form-input my-3 @error('mobile_number') is-invalid @enderror" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
                                @error('mobile_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            <input class="form-input my-3 @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address" type="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            <input class="form-input my-3 @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" type="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            <input class="form-input my-3 @error('confirm_password') is-invalid @enderror" name="confirm_password" id="confirm_password" placeholder="Confirm Password" type="password">
                                @error('confirm_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            <input class= "form-btn my-3 text-light" type="submit" name="" value="Continue">
                        </form>
                    </div>
                </div>
                <p style="text-align:center">Already have an account?<a href="{{ url ('/Login') }}"> Sign In →</a></p>
            </div>
        </div>
    </section>
@include("layout.footer")
</body>
</html>