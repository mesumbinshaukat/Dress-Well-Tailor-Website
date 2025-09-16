@extends('admin.dashboard')
@section('content')
    <div class="py-4" style="margin-top: 6%;width:79%;margin-left:21%">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-primary font-weight-bold">Edit Coustmer Details & Size</h4>
                            
                        </div>
                        <div class="card-body">
                            <form action="{{url('details/'.$detail->id)}}" method="POST">
                                @if ($errors->any())
                                <ul class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>           
                                    @endforeach
                                    
                                </ul>
                                    
                                @endif
                                @csrf
                                @method("PUT")
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Name</label>
                                    <input type="text" name="coustmer_name" placeholder="Enter Name" value="{{$detail->coustmer_name}}" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Category</label>
                                    <div class="form-group">
                                        <select class="form-control" name="category" >
                                            <option value="" {{$detail->category == "" ? 'selected' : ''}}></option>
                                            <option value="kameez/shalwar" {{$detail->category == "kameez/shalwar" ? 'selected' : ''}}>kameez/shalwar</option>
                                            <option value="kameez" {{$detail->category == "kameez" ? 'selected' : ''}}>kameez</option>
                                            <option value="shalwar" {{$detail->category == "shalwar" ? 'selected' : ''}}>shalwar</option>
                                            <option value="kurta & pajama" {{$detail->category == "kurta & pajama" ? 'selected' : ''}}>kurta & pajama</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" value="{{$detail->quantity}}" placeholder="Enter Quantity" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Kameez Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="length" value="{{$detail->length}}" placeholder="Enter length" class="form-control">
                                </div>
                                                                <!---2---->
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Collar</label>
                                    <div class="form-group">
                                        <select class="form-control" name="collar">
                                            <option value="" {{$detail->collar == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$detail->collar == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="shirt_collar" {{$detail->collar == "shirt_collar" ? 'selected' : ''}}>shirt_collar</option>
                                            <option value="sherwani_collar" {{$detail->collar == "sherwani_collar" ? 'selected' : ''}}>sherwani_collar</option>
                                        </select>
                                    </div>
                                </div>
                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" value="{{$detail->chest}}" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Daman</label>
                                    <div class="form-group">
                                        <select class="form-control" name="daman">
                                            <option value="" {{$detail->daman == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$detail->daman == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="round" {{$detail->daman == "round" ? 'selected' : ''}}>round</option>
                                            <option value="square" {{$detail->daman == "square" ? 'selected' : ''}}>square</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="waist" value="{{$detail->waist}}" placeholder="Enter Waist" class="form-control">
                                </div>
                                                                                                <!---2---->
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="font-weight-bold">Asteen</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="asteen">
                                                                            <option value="" {{$detail->asteen == "" ? 'selected' : ''}}></option>
                                                                            <option value="kurta_asteen" {{$detail->asteen == "kurta_asteen" ? 'selected' : ''}}>kurta_asteen</option>
                                                                            <option value="kuff_asteen" {{$detail->asteen == "kuff_asteen" ? 'selected' : ''}}>kuff_asteen</option>                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" value="{{$detail->hip}}" placeholder="Enter Hip" class="form-control">
                                </div>
                                                                                                <!---2---->
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="font-weight-bold">Side Pocket</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="side_pocket">
                                                                            <option value="" {{$detail->side_pocket == "" ? 'selected' : ''}}></option>
                                                                            <option value="no" {{$detail->side_pocket == "no" ? 'selected' : ''}}>no</option>
                                                                            <option value="1" {{$detail->side_pocket == "1" ? 'selected' : ''}}>1</option>
                                                                            <option value="2" {{$detail->side_pocket == "2" ? 'selected' : ''}}>2</option>                                                                              
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" value="{{$detail->shoulder}}" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                                                                                <!---2---->
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="font-weight-bold">Front Pocket</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="front_pocket">
                                                                            <option value="" {{$detail->front_pocket == "" ? 'selected' : ''}}></option>
                                                                            <option value="no" {{$detail->front_pocket == "no" ? 'selected' : ''}}>no</option>
                                                                            <option value="1" {{$detail->front_pocket == "1" ? 'selected' : ''}}>1</option>
                                                                            <option value="2" {{$detail->front_pocket == "2" ? 'selected' : ''}}>2</option>                                                                              
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Sleeves</label>
                                    <input type="text" name="sleeve" value="{{$detail->sleeve}}" placeholder="Enter Sleeves" class="form-control">
                                </div>
                                                                <!---2---->
                                                                <div class="mb-3 form-group col-md-6">
                                                                    <label class="font-weight-bold">Fitting</label>
                                                                    <input type="text" name="fitting" value="{{$detail->fitting}}" placeholder="Enter Fitting" class="form-control">
                                                                </div>
                                                                <!---end 2---->
                                                            </div>
                                <!-----------kjcgcijsdcijsdhc------->
                                <div class="mb-3">
                                    <label class="font-weight-bold">Arm</label>
                                    <input type="text" name="arm" value="{{$detail->arm}}" placeholder="Enter Arm" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Neck</label>
                                    <input type="text" name="neck" value="{{$detail->neck}}" placeholder="Enter neck" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Kuff</label>
                                    <input type="text" name="kuff" value="{{$detail->kuff}}" placeholder="Enter Kuff" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Patti</label>
                                    <input type="text" name="patti" value="{{$detail->patti}}" placeholder="Enter Patti" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Shalwar Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="shalwar_length" value="{{$detail->shalwar_length}}" placeholder="Enter Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pajama</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pajama" >
                                            <option value="" {{$detail->pajama == "" ? 'selected' : ''}}></option>
                                            <option value="no" {{$detail->pajama == "no" ? 'selected' : ''}}>no</option>
                                            <option value="pajama" {{$detail->pajama == "pajama" ? 'selected' : ''}}>pajama</option>
                                            <option value="pent_pajama" {{$detail->pajama == "pent_pajama" ? 'selected' : ''}}>pent_pajama</option>                                                                              
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pauncha</label>
                                    <input type="text" name="shalwar_pauncha" value="{{$detail->shalwar_pauncha}}" placeholder="Enter pauncha" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pocket" >
                                            <option value="" {{$detail->pocket == "" ? 'selected' : ''}}></option>
                                            <option value="no" {{$detail->pocket == "no" ? 'selected' : ''}}>no</option>
                                            <option value="yes" {{$detail->pocket == "yes" ? 'selected' : ''}}>yes</option>                                                                              
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">gair</label>
                                    <input type="text" name="shalwar_gair" value="{{$detail->shalwar_gair}}" placeholder="Enter Gair" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Lastic/Dory</label>
                                    <div class="form-group">
                                        <select class="form-control" name="lastic" value="{{$detail->lastic}}">
                                            <option value="" {{$detail->lastic == "" ? 'selected' : ''}}></option>
                                            <option value="no" {{$detail->lastic == "no" ? 'selected' : ''}}>no</option>
                                            <option value="yes" {{$detail->lastic == "yes" ? 'selected' : ''}}>yes</option>                                                                             
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-3 ">
                                    <label class="font-weight-bold">Asan</label>
                                    <input type="text" name="asan" value="{{$detail->asan}}" placeholder="Enter Asan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Shalwar Zip</label>
                                    <div class="form-group">
                                        <select name="shalwar_zip" class="form-control">
                                            <option value="" {{$detail->shalwar_zip == "" ? 'selected' : ''}}></option>
                                            <option value="zip_pocket" {{$detail->shalwar_zip == "zip_pocket" ? 'selected' : ''}}>zip_pocket</option>
                                            <option value="straight_pocket" {{$detail->shalwar_zip == "straight_pocket" ? 'selected' : ''}}>straight_pocket</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Extra Details</label>
                                    <input type="textarea" name="textarea" value="{{$detail->textarea}}" placeholder="Enter Extra Details" class="form-control py-4">   
                                </div>
                                <h2 class="text-primary"><center>Delivery</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Delivery Date</label>
                                    <input type="date" name="delivery_date" value="{{$detail->delivery_date}}" placeholder="Enter Date" class="form-control" required>
                                </div>
                                <h2 class="text-primary"><center>Payment</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Advance</label>
                                    <input type="number" name="advance" value="{{$detail->advance}}" placeholder="Enter Advance" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Total Amount</label>
                                    <input type="number" name="total_amount" value="{{$detail->total_amount}}" placeholder="Enter Amount" class="form-control" required>
                                </div>
                                <!------------sdckjsdckjsc---------->
                                <h2 class="text-primary"><center>Contact</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Contact</label>
                                    <input type="number" name="coustmer_contact" value="{{$detail->coustmer_contact}}" placeholder="Enter Contact" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Address</label>
                                    <input type="text" name="coustmer_address" value="{{$detail->coustmer_address}}" placeholder="Enter Address" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Save Record">
                                    <a href="{{route('details.index')}}" class="btn btn-danger float-end">Back</a>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection