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
            .no-print {
                display: none;
            }
            .col-md-6 {
                width: 50% !important;
                float: left !important;
                display: inline-block !important;
            }
            .row {
                display: block !important;
                width: 100% !important;
            }
            .row::after {
                content: "";
                display: table;
                clear: both;
            }
        }
        .back1 {
            width: 70px;
            height: 70px;
            margin-left: 2%;
        }
        .back6 {
            background: white;
        }
        /* Ensure columns work on screen too */
        .col-md-6 {
            width: 50%;
            float: left;
            padding: 0 15px;
        }
        .row {
            display: block;
            width: 100%;
        }
        .row::after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    <title>slip</title>
</head>
<body>
    <div class="maindiv rounded ml-5 mr-5" style="margin-top: 2%;padding-top: 1%;padding-bottom: 9%;margin-bottom: 10%;">
           <div class="border border-dark back6 my-2 mx-2" style="height: 490px">
            <h5 class="back5"></h5>
        <div>
                <img class="back1 my-2" src="{{asset('admintheme/css/logo.png')}}" alt="">
            </div>
            <div style="margin-top: -6%;">
                <h1 class="fw-bold heade text-dark text-center"><i>Dress Well Tailors & Fabric</i> </h1>
                <p class="h4 text-danger text-center"><i>Specialist in Coat, Pant, Sherwani & Shalwar Kameez</i> </p>
                    <p class="h4 text-primary text-center"><i>Shop No: G-101, G-57, Gulistan-e-Johar Harmain Tower & Shopping Mall</i> </p>
                    <p class="h4 text-dark text-center"><i>Contact: S.M Abdul Raheem - <i class="fa-brands fa-whatsapp text-success"></i> 0345-3319764  </i> </p>
                
            </div>

        <div class="cust mt-5 py-3 px-5" style="margin-left: 2%">
            
            <div class="row ">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Order No:</b><span class="pl-1"></span>{{$coat->id}}</span></div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Trail Date: </b><span class="pl-1"></span>{{$coat->trail_date}}</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Name:</b><span class="pl-1"></span>{{$coat->coustmer_name}}</span></div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Delivery Date: </b><span class="pl-1"></span>{{$coat->delivery_date}}</span> </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Contact No: </b><span class="pl-1"></span>{{$coat->coustmer_contact}}</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Advance: </b><span class="pl-1"></span>{{$coat->advance}}</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Address: </b><span class="pl-1"></span>{{$coat->coustmer_address}}</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Total Amount: </b><span class="pl-1"></span>{{$coat->total_amount}}</span> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Working Branch: </b><span class="pl-1"></span>Gulistan-e-Johar</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Category: </b><span class="pl-1"></span>{{$coat->category}}</span> </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Quantity: </b><span class="pl-1"></span>{{$coat->quantity}}</span> </div>
                </div>
            </div>


    </div>
</div>
<br>
    <hr class="style5" style="background-color: #fff;border-top:2px dashed #8c8b8b">    
    <div class="back mt-5">
        <h5 class="back2"></h5>
            <div class="back3 mx-3">
                <table class="mt-1 table table-bordered py-4 px-5 my-3">
                    <thead class="bg-white text-primary">
                        <tr>
                            <th scope="col"><h5 class="text-primary text-center">Order no & Quant.</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Shirt</h5></th>
                            <th scope="col"><h5 class="text-primary text-center"></h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Waist-Coat</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Extra Details</h5></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-dark h5"><b>Name:</b> <span class="pl-4"></span>{{$coat->coustmer_name}}</span></td>
                            <td class="text-dark h5"><b>Length:</b><span class="pl-4"></span> {{$coat->length}}</span></td>
                            <td class="text-dark h5"><b>Shirt_Pocket:</b><span class="pl-4"></span> {{$coat->shirt_pocket}}</span></td>
                            <td class="text-dark h5"><b>Length:</b><span class="pl-4"></span> {{$coat->coat_length}}</span></td>
                            <td class="text-dark h5"><b></b>{{$coat->textarea}}</span></td>
                        </tr>
                        <tr>
                            <td class="text-dark h5"><b>Order No:</b><span class="pl-4"></span> {{$coat->id}}</span></td>
                            <td class="text-dark h5"><b>Chest:</b> <span class="pl-4"></span>{{$coat->chest}}</span></td>
                            <td class="text-dark h5"><b>Pocket:</b> <span class="pl-4"></span>{{$coat->pocket}}</span></td>
                            <td class="text-dark h5"><b>Chest:</b><span class="pl-4"></span> {{$coat->coat_chest}}</span></td>
                        </tr>
                        <tr>
                            <td class="text-dark h5"><b>Quantity:</b><span class="pl-4"></span> {{$coat->quantity}}</span></td>
                            <td class="text-dark h5"><b>Waist:</b><span class="pl-4"></span> {{$coat->waist}}</span></td>
                            <td class="text-dark h5"><b>Kuff-Size:</b> <span class="pl-4"></span>{{$coat->Kuffs}}</span></td>
                            <td class="text-dark h5"><b>Waist:</b> <span class="pl-4"></span>{{$coat->coat_waist}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Hip:</b><span class="pl-4"></span> {{$coat->hip}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>Hip:</b><span class="pl-4"></span> {{$coat->coat_hip}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Shoulder:</b><span class="pl-4"></span> {{$coat->shoulder}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>Shoulder:</b><span class="pl-4"></span> {{$coat->coat_shoulder}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Sleeve:</b><span class="pl-4"></span> {{$coat->sleeve}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>Neck:</b> <span class="pl-4"></span>{{$coat->coat_neck}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Arm:</b> <span class="pl-4"></span>{{$coat->arm}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>Cross-Back:</b><span class="pl-4"></span> {{$coat->cross_back}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Neck:</b> <span class="pl-4"></span>{{$coat->neck}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>Collar:</b> <span class="pl-4"></span>{{$coat->cot_collar}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Kuff:</b> <span class="pl-4"></span>{{$coat->kuff}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>wallet-Pocket:</b> <span class="pl-4"></span>{{$coat->wal_pocket}}</span></td>     
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Collar:</b><span class="pl-4"></span> {{$coat->collar}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>side_choke:</b><span class="pl-4"></span> {{$coat->side_choke}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Patti:</b><span class="pl-4"></span> {{$coat->patti}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>Daman:</b><span class="pl-4"></span> {{$coat->coat_daman}}</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-dark h5"><b>Daman:</b><span class="pl-4"></span> {{$coat->daman}}</span></td>
                            <td></td>
                            <td class="text-dark h5"><b>Inside-Pocket:</b><span class="pl-4"></span> {{$coat->ins_pocket}}</span></td>
                        </tr>

    
                    </tbody>
                </table>
              </div>
              
              <div class="row" style="margin-top: 1%;">
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

