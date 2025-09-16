@extends('admin.dash2')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('admintheme/css/index.css')}}">
    <style>
        @media print {
            body { 
                margin: 0 !important; 
                padding: 0 !important;
                font-size: 12px !important;
            }
            .maindiv {
                margin: 0 !important;
                padding: 10px !important;
                margin-bottom: 0 !important;
            }
            .border {
                border: 2px solid #000 !important;
                height: auto !important;
            }
            .table {
                font-size: 11px !important;
                margin: 0 !important;
            }
            .table th, .table td {
                padding: 4px !important;
                border: 1px solid #000 !important;
            }
            .h4, .h5 {
                font-size: 12px !important;
                margin: 2px 0 !important;
            }
            .text-center {
                text-align: center !important;
            }
            .row {
                margin: 2px 0 !important;
            }
            .col-md-6 {
                width: 50% !important;
                float: left !important;
            }
            .col-md-12 {
                width: 100% !important;
            }
            .customer-note {
                background: #f8f9fa !important;
                border: 1px solid #000 !important;
                padding: 8px !important;
                margin: 10px 0 !important;
                font-weight: bold !important;
                text-align: center !important;
            }
        }
    </style>
    <title>slip</title>
</head>
<body>
    <div class="maindiv rounded ml-5 mr-5" style="margin-top: %;padding-top: 1%;padding-bottom:5%;margin-bottom: 40%;">
           <div class="border border-dark back6 my-2 mx-2" style="height: 480px">
            <h5 class="back5"></h5>
        <div>
                <img class="back1 my-2" src="{{asset('admintheme/css/logo.png')}}" alt="">
            </div>
            <div style="margin-top:-8%;">
                <h1 class="fw-bold heade text-dark text-center"><i>Dress Well Tailors & Fabric</i> </h1>
                <p class="h4 text-danger text-center"><i>Specialist in Coat, Pant, Sherwani & Shalwar Kameez</i> </p>
                    <p class="h4 text-primary text-center"><i>Shop No: G-101, G-57, Gulistan-e-Johar Harmain Tower & Shopping Mall</i> </p>
                    <p class="h4 text-dark text-center"><i>Contact: S.M Abdul Raheem - <i class="fa-brands fa-whatsapp text-success"></i> 0345-3319764  </i> </p>
                
            </div>

        <div class="cust mt-5 py-3 px-5" style="margin-left: 2%">
            
            <div class="row ">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Order No:</b>{{$pantshirt->id}}</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Name:</b>{{$pantshirt->coustmer_name}}</span></div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Delivery Date: </b>{{$pantshirt->delivery_date}}</span> </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Contact No: </b>{{$pantshirt->coustmer_contact}}</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Advance: </b>{{$pantshirt->advance}}</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Address: </b>{{$pantshirt->coustmer_address}}</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Remaining Amount: </b>{{ $pantshirt->total_amount - $pantshirt->advance }}</span> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Category: </b>{{$pantshirt->category}}</span> </div>
                </div>
               <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Total Amount: </b>{{$pantshirt->total_amount}}</span> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Quantity: </b>{{$pantshirt->quantity}}</span> </div>
                </div>

                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Working Branch: </b>Gulistan-e-Johar</span> </div>
                </div>
            </div>
    </div>
</div>
    <hr class="style5" style="background-color: #fff;border-top:2px dashed #8c8b8b">    
    <div class="back ">
        <h5 class="back2"></h5>
            <div class="back3 mx-3">
                <table class="mt-2 table table-bordered py-4 px-5">
                    <thead class="bg-white text-primary">
                        <tr>
                            <th scope="col"><h5 class="text-primary text-center">C.Details</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Shirt</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Pant</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Extra Details</h5></th>
  
    
                        </tr>
                    </thead>
                    <tbody >
                        <tr style="padding-bottom: 5px">
                            <td class="text-dark h5"><b>Name:</b><span class="pl-4"></span> {{$pantshirt->coustmer_name}}</span></td>
                            <td class="text-dark h5"><b>Shirt Length:</b><span class="pl-4"></span>  {{$pantshirt->shirt_length}}</span></td>
                            <td class="text-dark h5"><b>Pant Length:</b><span class="pl-4"></span>  {{$pantshirt->pant_length}}</span></td>
                            <td class="text-dark h5"><b></b>{{$pantshirt->textarea}}</span></td>

    
                        </tr>
                        <tr>
                            <td class="text-dark h5"><b>Order No:</b><span class="pl-4"></span> {{$pantshirt->id}}</span></td>
                            <td class="text-dark h5"><b>Chest:</b><span class="pl-4"></span>  {{$pantshirt->chest}}</span></td>
                            <td class="text-dark h5"><b>Pant Waist:</b><span class="pl-4"></span>  {{$pantshirt->pant_waist}}</span></td>

    
                        </tr>
                        <tr>
                            <td class="text-dark h5"><b>Quantity:</b><span class="pl-4"></span>  {{$pantshirt->quantity}}</span></td>
                            <td class="text-dark h5"><b>Waist:</b><span class="pl-4"></span>  {{$pantshirt->waist}}</span></td>
                            <td class="text-dark h5"><b>Hip:</b> <span class="pl-4"></span> {{$pantshirt->hip}}</span></td>
    
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Shoulder:</b><span class="pl-4"></span>  {{$pantshirt->shoulder}}</span></td>
                            <td class="text-dark h5"><b>Thigh:</b> <span class="pl-4"></span> {{$pantshirt->thigh}}</span></td>
    
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Sleeve:</b><span class="pl-4"></span>  {{$pantshirt->sleeve}}</span></td>
                            <td class="text-dark h5"><b>Knee:</b><span class="pl-4"></span>  {{$pantshirt->knee}}</span></td>



    
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Arm:</b> <span class="pl-4"></span> {{$pantshirt->arm}}</span></td>
                            <td class="text-dark h5"><b>Bottom:</b></b><span class="pl-4"></span>  {{$pantshirt->bottom}}</span></td>


                         
                        </tr>
                        <tr>

                            <td></td>
                            <td class="text-dark h5"><b>Neck:</b> <span class="pl-4"></span> {{$pantshirt->neck}}</span></td>
                            <td class="text-dark h5"><b>Pant Pocket:</b></b> <span class="pl-4"></span> {{$pantshirt->pant_pocket}}</span></td>


                          
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Collar:</b> <span class="pl-4"></span> {{$pantshirt->collar}}</span></td>
                            <td class="text-dark h5"><b>Pant Fitting:</b></b> <span class="pl-4"></span> {{$pantshirt->pant_fitting}}</span></td>



                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Cuff:</b> <span class="pl-4"></span> {{$pantshirt->cuff}}</span></td>
                            <td class="text-dark h5"><b>Belt Loop:</b> <span class="pl-4"></span> {{$pantshirt->belt_loop}}</span></td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Shirt Pocket:</b> <span class="pl-4"></span> {{$pantshirt->shirt_pocket}}</span></td>
                            <td class="text-dark h5"><b>Zipper:</b> <span class="pl-4"></span> {{$pantshirt->zipper}}</span></td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Shirt Fitting:</b> <span class="pl-4"></span> {{$pantshirt->shirt_fitting}}</span></td>
                            <td></td>
                            
                        </tr>
    
                    </tbody>
                </table>
              </div>
              <div class="customer-note text-center my-3 p-2 bg-light border">
                <p class="text-danger h5 mb-0"><strong>Customer are advised to collect their order within 2 months positively.</strong></p>
              </div>
              <div class="row" style="margin-top: 2%;">
                <div class="col-md-12 text-center py-2">
                    <p class="text-danger h4"><i>Specialist in Coat, Pant, Sherwani & Shalwar Kameez</i> </p>
                    <p class="text-primary h4"><i>Shop No. G-101, G-57, Gulistan-e-Johar Harmain Tower & Shopping Mall</i> </p>
                    <p class="text-dark text-center h4"><i>Contact: S.M Abdul Raheem - <i class="fa-brands fa-whatsapp text-success"></i> 0345-3319764  </i> </p>
                </div>
            </div>
    </div>
    </div>
</body>
</html>

@endsection

