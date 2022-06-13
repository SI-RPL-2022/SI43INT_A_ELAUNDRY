<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
</head>

<style>
body{
    background: linear-gradient(110deg, #BBDEFB 60%,#42A5F5  60%);                        
}
        
.shop{
    font-size: 10px;
}

.space{
    letter-spacing: 0.8px !important;
}

.breadcrumb>li+li:before {
    content: "" !important
}

.breadcrumb {
    padding: 0px;
    font-size: 10px;
    color: #aaa !important;
}

.first {
    background-color: white ;
}

a {
    text-decoration: none !important;
    color: #aaa ;
}

.btn-lg,.form-control-sm:focus,
.form-control-sm:active,
a:focus,a:active {
    outline: none !important;
    box-shadow: none !important
}

.form-control-sm:focus{
    border:1.5px solid #4bb8a9 ; 
}

.btn-group-lg>.btn, .btn-lg {
    padding: .5rem 0.1rem;
    font-size: 1rem;
    border-radius: 0;
    color: white !important;
    background-color: #4bb8a9;
    height: 2.8rem !important;
    border-radius: 0.2rem !important;
}


.btn-outline-primary{
    background-color: #fff !important;
    color:#4bb8a9 !important;
    border-radius: 0.2rem !important;   
    border:1px solid #4bb8a9;
}

.card-2{
    margin-top: 40px !important;
}

.card-header{
    background-color: #fff;
    border-bottom:0px solid #aaaa !important;
}
        
.small{
    font-size: 9px !important;
}

.form-control-sm {
    height: calc(2.2em + .5rem + 2px);
    font-size: .875rem;
    line-height: 1.5;
    border-radius: 0;   
}

.cursor-pointer{
    cursor: pointer;
}

/* .boxed {
    padding: 0px 8px 0 8px ;
    background-color: #4bb8a9;
    color: white;
} */

.boxed-1{
    padding: 0px 8px 0 8px ;
    color: black !important;
    border: 1px solid #aaaa;
}

@media (max-width: 767px) {
    .breadcrumb-item+.breadcrumb-item {
        padding-left: 0
    }
}
</style>

<div class="col-md-5">
    <div class="card border-0 ">
        <div class="card-header card-2">
            <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER</p>
            <hr class="my-2">
        </div>
        <div class="card-body pt-0">
            <div class="row  justify-content-between">
                <div class="col-auto col-md-7">
                    <div class="media flex-column flex-sm-row">
                        <img class=" img-fluid" src="https://images.unsplash.com/photo-1635274605638-d44babc08a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80\" width="62" height="62">
                        <div class="media-body  my-auto">
                            <div class="row ">
                                <div class="col-auto"><p class="mb-0"><b>Dry Laundry</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">2KG</p></div>
                <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>RP 25000</b></p></div>
            </div>
            
            <hr class="my-2">
            <div class="row ">
                <div class="col">
                    <div class="row justify-content-between">
                        <div class="col-4"><p class="mb-1"><b>Subtotal</b></p></div>
                        <div class="flex-sm-col col-auto"><p class="mb-1"><b>RP 50000</b></p></div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col"><p class="mb-1"><b>Shipping</b></p></div>
                        <div class="flex-sm-col col-auto"><p class="mb-1"><b>Free</b></p></div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-4"><p ><b>Total</b></p></div>
                        <div class="flex-sm-col col-auto"><p  class="mb-1"><b>Rp 50000</b></p> </div>
                    </div><hr class="my-0">
                </div>
            </div>
            <div class="row mb-5 mt-4 ">
                <div class="col-md-7 col-lg-6 mx-auto"><button type="button" class="btn btn-block btn-outline-primary btn-lg">ADD GIFT CODE</button></div>
            <div class="col-3"><a class="btn btn-warning" href="{{ url ('/invoice') }}">Complete Order</a></div>
            </div>
            
        </div>
    </div>
</div>