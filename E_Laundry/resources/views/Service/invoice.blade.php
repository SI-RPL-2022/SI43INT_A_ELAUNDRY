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
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
</head>

<style>
body{
background:#eee;
margin-top:20px;
}
.text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
</style>

<div class="col-md-12">   
    <div class="row">
           
           <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
               <div class="row">
                   <div class="receipt-header">
                       <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="receipt-left">
                               <img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
                           </div>
                       </div>
                       <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                           <div class="receipt-right">
                               <h5>E-Laundry.</h5>
                               <p>+62 823 3333 3333 <i class="fa fa-phone"></i></p>
                               <p>elaundry@gmail.com <i class="fa fa-envelope-o"></i></p>
                               <p>Indonesia<i class="fa fa-location-arrow"></i></p>
                           </div>
                       </div>
                   </div>
               </div>
               
               <div class="row">
                   <div class="receipt-header receipt-header-mid">
                       <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                           <div class="receipt-right">
                               <h5>Customer Name </h5>
                               <p><b>Mobile :</b> +62 829 5009 5009</p>
                               <p><b>Email :</b> customer@gmail.com</p>
                               <p><b>Address :</b> Jakarta, Indonesia</p>
                           </div>
                       </div>
                       <div class="col-xs-4 col-sm-4 col-md-4">
                           <div class="receipt-left">
                               <h3>INVOICE # 1</h3>
                           </div>
                       </div>
                   </div>
               </div>
               
               <div>
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th>Description</th>
                               <th>Amount</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="col-md-9">Payment for 06 June 2022</td>
                               <td class="col-md-3">Rp. 50.000/-</td>
                           </tr>
                           <tr>
                               <td class="text-right">
                               <p>
                                   <strong>Late Fees: </strong>
                               </p>
                               <p>
                                   <strong>Payable Amount: </strong>
                               </p>
                               <p>
                                   <strong>Balance Due: </strong>
                               </p>
                               </td>
                               <td>
                               <p>
                                   <strong>Rp. 5000/-</strong>
                               </p>
                               <p>
                                   <strong>RP. 55.000/-</strong>
                               </p>
                               <p>
                                   <strong>Rp. 10.000/-</strong>
                               </p>
                               </td>
                           </tr>
                           <tr>
                              
                               <td class="text-right"><h2><strong>Total: </strong></h2></td>
                               <td class="text-left text-danger"><h2><strong>Rp. 65.000/-</strong></h2></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
               
               <div class="row">
                   <div class="receipt-header receipt-header-mid receipt-footer">
                       <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                           <div class="receipt-right">
                               <p><b>Date :</b> 06 June 2022</p>
                               <h5 style="color: rgb(140, 140, 140);">Thank you for using our service.!</h5>
                           </div>
                       </div>
                       <div class="col-xs-4 col-sm-4 col-md-4">
                           <div class="receipt-left">
                               <h1>Stamp</h1>
                           </div>
                       </div>
                   </div>
               </div>
               
           </div>    
       </div>
   </div>