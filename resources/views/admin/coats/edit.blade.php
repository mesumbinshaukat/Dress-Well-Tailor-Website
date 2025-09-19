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
                            <form action="{{url('coats/'.$coat->id)}}" method="POST">
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
                                    <input type="text" name="coustmer_name" value="{{$coat->coustmer_name}}" placeholder="Enter Name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Category</label>
                                    <div class="form-group">
                                        <select class="form-control" name="category" >
                                            <option value="" {{$coat->category == "" ? 'selected' : ''}}></option>
                                            <option value="shirt/waisecoat" {{$coat->category == "shirt/waisecoat" ? 'selected' : ''}}>shirt/waisecoat</option>
                                            <option value="shirt" {{$coat->category == "shirt" ? 'selected' : ''}}>shirt</option>
                                            <option value="waistcoat" {{$coat->category == "waistcoat" ? 'selected' : ''}}>waistcoat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" value="{{$coat->quantity}}" placeholder="Enter Quantity" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Shirt Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="length"value="{{$coat->length}}" placeholder="Enter length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Collar</label>
                                    <div class="form-group">
                                        <select class="form-control" name="collar">
                                            <option value="" {{$coat->collar == "" ? 'selected' : ''}}></option>
                                            <option value="regular" {{$coat->collar == "regular" ? 'selected' : ''}}>Regular</option>
                                            <option value="button_down" {{$coat->collar == "button_down" ? 'selected' : ''}}>Button Down</option>
                                            <option value="spread" {{$coat->collar == "spread" ? 'selected' : ''}}>Spread</option>
                                            <option value="cutaway" {{$coat->collar == "cutaway" ? 'selected' : ''}}>Cutaway</option>
                                            <option value="nothing" {{$coat->collar == "nothing" ? 'selected' : ''}}>Nothing</option>
                                            <option value="shirt_collar" {{$coat->collar == "shirt_collar" ? 'selected' : ''}}>Shirt Collar</option>
                                            <option value="sherwani_collar" {{$coat->collar == "sherwani_collar" ? 'selected' : ''}}>Sherwani Collar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Collar Size (Optional)</label>
                                    <input type="number" name="collar_size" value="{{$coat->collar_size}}" placeholder="Enter Collar Size" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" value="{{$coat->chest}}" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Daman</label>
                                    <div class="form-group">
                                        <select class="form-control" name="daman">
                                            <option value="" {{$coat->daman == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$coat->daman == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="round" {{$coat->daman == "round" ? 'selected' : ''}}>round</option>
                                            <option value="square" {{$coat->daman == "square" ? 'selected' : ''}}>square</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="waist" value="{{$coat->waist}}" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Kuff</label>
                                    <div class="form-group">
                                        <select class="form-control" name="kuff" >
                                            <option value="" {{$coat->kuff == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$coat->kuff == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="single" {{$coat->kuff == "single" ? 'selected' : ''}}>single</option>
                                            <option value="double" {{$coat->kuff == "double" ? 'selected' : ''}}>double</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" value="{{$coat->hip}}" placeholder="Enter Hip" class="form-control">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Patti</label>
                                    <div class="form-group">
                                        <select class="form-control" name="patti">
                                            <option value="" {{$coat->patti == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$coat->patti == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="simple_patti" {{$coat->patti == "simple_patti" ? 'selected' : ''}}>simple_patti</option>
                                            <option value="polo_patti" {{$coat->patti == "polo_patti" ? 'selected' : ''}}>polo_patti</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" value="{{$coat->shoulder}}" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Sleeves</label>
                                    <input type="text" name="sleeve" value="{{$coat->sleeve}}" placeholder="Enter Sleeves" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Kuff Size</label>
                                    <input type="text" name="Kuffs" value="{{$coat->Kuffs}}" placeholder="Enter Kuff" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Arm</label>
                                    <input type="text" name="arm" value="{{$coat->arm}}" placeholder="Enter Arm" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Neck</label>
                                    <input type="text" name="neck" value="{{$coat->neck}}" placeholder="Enter neck" class="form-control">
                                </div>
                                <div class="form-row">
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Shirt Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="shirt_pocket">
                                            <option value="" {{$coat->shirt_pocket == "" ? 'selected' : ''}}></option>
                                            <option value="no" {{$coat->shirt_pocket == "no" ? 'selected' : ''}}>No</option>
                                            <option value="1" {{$coat->shirt_pocket == "1" ? 'selected' : ''}}>1</option>
                                            <option value="2" {{$coat->shirt_pocket == "2" ? 'selected' : ''}}>2</option>
                                            <option value="nothing" {{$coat->shirt_pocket == "nothing" ? 'selected' : ''}}>Nothing</option>
                                            <option value="simple" {{$coat->shirt_pocket == "simple" ? 'selected' : ''}}>Simple</option>
                                            <option value="flape" {{$coat->shirt_pocket == "flape" ? 'selected' : ''}}>Flape</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Shirt Fitting</label>
                                    <div class="form-group">
                                        <select class="form-control" name="shirt_fitting">
                                            <option value="" {{$coat->shirt_fitting == "" ? 'selected' : ''}}></option>
                                            <option value="slim" {{$coat->shirt_fitting == "slim" ? 'selected' : ''}}>Slim</option>
                                            <option value="regular" {{$coat->shirt_fitting == "regular" ? 'selected' : ''}}>Regular</option>
                                            <option value="loose" {{$coat->shirt_fitting == "loose" ? 'selected' : ''}}>Loose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shirt Fitting Size (Optional)</label>
                                    <input type="number" name="shirt_fitting_size" value="{{$coat->shirt_fitting_size}}" placeholder="Enter Shirt Fitting Size" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pocket">
                                            <option value="" {{$coat->pocket == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$coat->pocket == "nothing" ? 'selected' : ''}}>Nothing</option>
                                            <option value="1" {{$coat->pocket == "1" ? 'selected' : ''}}>1</option>
                                            <option value="2" {{$coat->pocket == "2" ? 'selected' : ''}}>2</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <!-----------kjcgcijsdcijsdhc------->
                                <!-- {{-- <div class="mb-3">
                                    <label class="font-weight-bold">Collar</label>
                                    <input type="text" name="collar" placeholder="Enter Collar" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Kuff</label>
                                    <input type="text" name="kuff" placeholder="Enter Kuff" class="form-control">
                                </div> --}} -->
                                <h2 class="text-primary"><center>Wasit Coat Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Length</label>
                                    <input type="text" name="coat_length" value="{{$coat->coat_length}}" placeholder="Enter Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Cot Collar</label>
                                    <div class="form-group">
                                        <select class="form-control" name="cot_collar">
                                            <option value="" {{$coat->cot_collar == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$coat->cot_collar == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="sherwani_collar" {{$coat->cot_collar == "sherwani_collar" ? 'selected' : ''}}>sherwani_collar</option>
                                            <option value="v_gala" {{$coat->cot_collar == "v_gala" ? 'selected' : ''}}>v_gala</option>
                                            <option value="gol_gala" {{$coat->cot_collar == "gol_gala" ? 'selected' : ''}}>gol_gala</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat chest</label>
                                    <input type="text" name="coat_chest" value="{{$coat->coat_chest}}" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Wallet Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="wal_pocket">
                                            <option value="nothing">nothing</option>
                                            <option value="" {{$coat->wal_pocket == "" ? 'selected' : ''}}></option>
                                            <option value="1" {{$coat->wal_pocket == "1" ? 'selected' : ''}}>1</option>
                                            <option value="2" {{$coat->wal_pocket == "2" ? 'selected' : ''}}>2</option>
                                            <option value="3" {{$coat->wal_pocket == "3" ? 'selected' : ''}}>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Waist</label>
                                    <input type="text" name="coat_waist" value="{{$coat->coat_waist}}" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Side Choke</label>
                                    <input type="text" name="side_choke" value="{{$coat->side_choke}}" placeholder="Enter Choke" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Hip</label>
                                    <input type="text" name="coat_hip" value="{{$coat->coat_hip}}" placeholder="Enter hip" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Daman</label>
                                    <div class="form-group">
                                        <select class="form-control" name="coat_daman">
                                            <option value="" {{$coat->coat_daman == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$coat->coat_daman == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="round" {{$coat->coat_daman == "round" ? 'selected' : ''}}>round</option>
                                            <option value="square" {{$coat->coat_daman == "square" ? 'selected' : ''}}>square</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Shoulder</label>
                                    <input type="text" name="coat_shoulder" value="{{$coat->coat_shoulder}}" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Inside Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="ins_pocket">
                                            <option value="" {{$coat->ins_pocket == "" ? 'selected' : ''}}></option>
                                            <option value="no" {{$coat->ins_pocket == "no" ? 'selected' : ''}}>no</option>
                                            <option value="yes" {{$coat->ins_pocket == "yes" ? 'selected' : ''}}>yes</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coat Neck</label>
                                    <input type="text" name="coat_neck" value="{{$coat->coat_neck}}" placeholder="Enter Neck" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Cross Back</label>
                                    <input type="text" name="cross_back" value="{{$coat->cross_back}}" placeholder="Enter cross_back" class="form-control">
                                </div>
                                <!-- {{-- <div class="mb-3">
                                    <label class="font-weight-bold">Shalwar Zip</label>
                                    <div class="form-group">
                                        <select name="zip" value="{{$coat->shalwar_zip}}" class="form-control">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div> --}} -->
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Extra Details</label>
                                    <input type="textarea" name="textarea" value="{{$coat->textarea}}" placeholder="Enter Extra Details" class="form-control py-4">   
                                </div>
                                <h2 class="text-primary"><center>Trail & Delivery</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Trail Date</label>
                                    <input type="date" name="trail_date" value="{{$coat->trail_date}}" placeholder="Enter Date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Delivery Date</label>
                                    <input type="date" name="delivery_date" value="{{$coat->delivery_date}}" placeholder="Enter Date" class="form-control" required>
                                </div>
                                <h2 class="text-primary"><center>Payment</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Advance</label>
                                    <input type="number" name="advance" value="{{$coat->advance}}" placeholder="Enter Advance" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Total Amount</label>
                                    <input type="number" name="total_amount" value="{{$coat->total_amount}}" placeholder="Enter Amount" class="form-control" required>
                                </div>
                                <!------------sdckjsdckjsc---------->
                                <h2 class="text-primary"><center>Contact</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Contact</label>
                                    <input type="number" name="coustmer_contact" value="{{$coat->coustmer_contact}}" placeholder="Enter Contact" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Address</label>
                                    <input type="text" name="coustmer_address" value="{{$coat->coustmer_address}}" placeholder="Enter Address" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Save Record">
                                    <a href="{{route('coats.index')}}" class="btn btn-danger float-end">Back</a>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection