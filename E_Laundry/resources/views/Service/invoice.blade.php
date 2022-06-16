<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ url ('/css/style.css') }}" rel="stylesheet">
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
</head>

<body class="bg-light">
    <div class="print-area">
        <div class="row">
            <div class="col-12"><h1>Invoice</h1></div>
        </div>
        <div class="row my-5">
            <div class="col-4">
                <p class="m-0 text-secondary">TO:</p>
                <p class="m-0">Nama Lengkap</p>
                <p class="m-0">Alamat:</p>
            </div>
            <div class="col-4">
                <p class="m-0 text-secondary">FROM:</p>
                <p class="m-0">E-Laundry Indonesia</p>
                <p class="m-0">Alamat:</p>
            </div>
            <div class="col-4">
                <p class="m-0 text-secondary">INFO:</p>
                <p class="m-0">Ammount: Rp XXX.XXX</p>
                <p class="m-0">Date: XX-XX-XXXX</p>
                <p class="m-0">Dues: XX-XX-XXXX</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">&nbsp;</div>
            <div class="col-8">
                <h5 class="m-0">Subject: <strong>Online Laundry Service Invoice</strong></h5>
                <table class="table table-borderless">
                    <thead>
                        <tr class="text-secondary">
                            <th>Item description</th>
                            <th>Qty</th>
                            <th>Rate</th>
                            <th style="text-align:right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a</td>
                            <td>b</td>
                            <th>c</th>
                            <td style="text-align:right">c</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Sub Total</td>
                            <td style="text-align:right">Rp XXX-XXX</td>
                        </tr>
                        <tr>
                            <td>TAX(10%)</td>
                            <td style="text-align:right">(10% x Harga)</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Total</td>
                            <td class="text-laundry" style="text-align:right"><h5><strong>Harga - (10% x Harga)</strong></h5></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-secondary mt-5">Note</p>
                <h5><strong>THANKS FOR THE BUSINESS</strong></h5>
                <div class="box bg-light mt-3">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Payment Details</td>
                                    <td style="text-align:right">GOPAY: EMAIL</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td style="text-align:right">TRANSFER MANUAL</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
            <div class="col-2">
                <img style="width:100%" src="{{ url ("/image/logoweb.png") }}">
            </div>
            <div class="col-4">
                <h3><strong>E-LAUNDRY</strong></h3>
                <p class="text-laundry">int.elaundry.com</p>
            </div>
            <div class="col-3">
                <h3><strong>&nbsp;</strong></h3>
                <p class="text-laundry">elaundry@gmail.com</p>
            </div>
            <div class="col-3">
                <h3><strong>&nbsp;</strong></h3>
                <p class="text-laundry">+62-001-008-009</p>
            </div>
        </div>
    </div>
</body>