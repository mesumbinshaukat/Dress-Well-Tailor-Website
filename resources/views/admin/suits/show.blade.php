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
    <div class="maindiv rounded ml-5 mr-5" style="margin-top: 3%;padding-top: 1%;padding-bottom: 5%;margin-bottom: 40%;">
           <div class="border border-dark back6 my-2 mx-2" style="height: 480px">
            <h5 class="back5"></h5>
        <div>
                <img class="back1 my-2" src="{{asset('admintheme/css/logo.png')}}" alt="">
            </div>
            <div style="margin-top: -6%;">
                <h1 class="h4 heade text-dark text-center"><i>Dress Well Tailors & Fabric</i> </h1>
                <p class="h4 text-danger text-center"><i>Specialist in Coat, Pant, Sherwani & Shalwar Kameez</i> </p>
                    <p class="h4 text-primary text-center"><i>Shop No: G-101, G-57, Gulistan-e-Johar Harmain Tower & Shopping Mall</i> </p>
                    <p class="h4 text-dark text-center"><i>Contact: S.M Abdul Raheem - <i class="fa-brands fa-whatsapp text-success"></i> 0345-3319764  </i> </p>
                
            </div>

        <div class="cust mt-5 py-3 px-5" style="margin-left: 2%">
            
            <div class="row ">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Order No:</b>{{$suit->id}}</span></div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Trail Date: </b>{{$suit->trail_date}}</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Name:</b>{{$suit->coustmer_name}}</span></div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Delivery Date: </b>{{$suit->delivery_date}}</span> </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Contact No: </b>{{$suit->coustmer_contact}}</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Advance: </b>{{$suit->advance}}</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Address: </b>{{$suit->coustmer_address}}</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Total Amount: </b>{{$suit->total_amount}}</span> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Working Branch: </b>Gulistan-e-Johar</span> </div>
                </div>
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Category: </b>{{$suit->category}}</span> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div> <span class="fw-bolder text-dark"><b>Quantity: </b>{{$suit->quantity}}</span> </div>
                </div>
            </div>

    </div>
</div>
    <hr class="style5" style="background-color: #fff;border-top:2px dashed #8c8b8b">    
    <div class="back mt-5">
        <h5 class="back2"></h5>
            <div class="back3 mx-3">
                <table class="mt-5 table table-bordered py-4 px-5 my-3">
                    <thead class="bg-white text-primary">
                        <tr>

                            <th scope="col"><h5 class="text-primary text-center">Order no & Quant.</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Coat</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Pent</h5></th>
                            <th scope="col"><h5 class="text-primary text-center">Extra Details</h5></th>
  
    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-dark h5"><b>Name:</b> <span class="pl-4"></span> {{$suit->coustmer_name}}</span></td>                            
                            <td class="text-dark h5"><b>Length:</b><span class="pl-4"></span>  {{$suit->length}}</span></td>
                            <td class="text-dark h5"><b>Length:</b><span class="pl-4"></span>  {{$suit->pent_length}}</span></td>
                            <td class="text-dark h5"><b></b>{{$suit->textarea}}</span></td>

    
                        </tr>
                        <tr>
                            <td class="text-dark h5"><b>Order No.:</b> <span class="pl-4"></span> {{$suit->id}}</span></td>                           
                            <td class="text-dark h5"><b>Chest:</b><span class="pl-4"></span>  {{$suit->chest}}</span></td>
                            <td class="text-dark h5"><b>Inside:</b><span class="pl-4"></span>  {{$suit->pent_inside}}</span></td>

    
                        </tr>
                        <tr>
                            <td class="text-dark h5"><b>Quantity:</b><span class="pl-4"></span>  {{$suit->quantity}}</span></td>                            
                            <td class="text-dark h5"><b>Waist:</b><span class="pl-4"></span>  {{$suit->waist}}</span></td>
                            <td class="text-dark h5"><b>Fly:</b><span class="pl-4"></span>  {{$suit->pent_fly}}</span></td>
    
                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Hip:</b><span class="pl-4"></span>  {{$suit->hip}}</span></td>
                            <td class="text-dark h5"><b>Waist:</b><span class="pl-4"></span>  {{$suit->pent_waist}}</span></td>
    
                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Shoulder:</b> <span class="pl-4"></span> {{$suit->shoulder}}</span></td>
                            <td class="text-dark h5"><b>Hip:</b> <span class="pl-4"></span> {{$suit->pent_hip}}</span></td>



    
                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Sleeve:</b><span class="pl-4"></span>  {{$suit->sleeve}}</span></td>
                            <td class="text-dark h5"><b>Thai:</b><span class="pl-4"></span>  {{$suit->pent_thai}}</span></td>


                         
                        </tr>
                        <tr>

                            <td></td>                            
                            <td class="text-dark h5"><b>Cross_Back:</b><span class="pl-4"></span>  {{$suit->cross_back}}</span></td>
                            <td class="text-dark h5"><b>Knee:</b><span class="pl-4"></span>  {{$suit->pent_knee}}</span></td>


                          
                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Bress:</b><span class="pl-4"></span>  {{$suit->bress}}</span></td>
                            <td class="text-dark h5"><b>Bottom:</b><span class="pl-4"></span>  {{$suit->pent_bottom}}</span></td>



                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Kaj:</b><span class="pl-4"></span>  {{$suit->kaj}}</span></td>
                            <td class="text-dark h5"><b>Pocket:</b><span class="pl-4"></span>  {{$suit->pocket}}</span></td>
                            
                            

                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Double_Bress_Nepal:</b><span class="pl-4"></span>  {{$suit->bress_nepal}}</span></td>
                            <td class="text-dark h5"><b>Hip_Pocket:</b><span class="pl-4"></span>  {{$suit->hip_pocket}}</span></td>
                            
                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Daman:</b><span class="pl-4"></span>  {{$suit->daman}}</span></td>
                            <td class="text-dark h5"><b>S_Bottom:</b><span class="pl-4"></span>  {{$suit->s_bottom}}</span></td>
                            
                        </tr>
                        <tr>
                            <td></td>                            
                            <td class="text-dark h5"><b>Chaak:</b><span class="pl-4"></span>  {{$suit->chaak}}</span></td>
                            <td class="text-dark h5"><b>French_Fly:</b><span class="pl-4"></span>  {{$suit->french_fly}}</span></td>
                        </tr>
                        <tr>
                            <td></td>                            
                            <td></td>
                            <td class="text-dark h5"><b>Loops:</b><span class="pl-4"></span>  {{$suit->loops}}</span></td>
                        </tr>
    
                    </tbody>
                </table>
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

