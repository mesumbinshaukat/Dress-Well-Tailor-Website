@extends('admin.dashboard')
@section('content')
    <div class="py-4" style="margin-top: 6%;width:79%;margin-left:21%">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-primary font-weight-bold">Edit Pant & Shirt Details & Size</h3>
                            
                        </div>
                        <div class="card-body">
                            <form action="{{url('pantshirts/'.$pantshirt->id)}}" method="POST">
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
                                    <label class="font-weight-bold">Customer Name</label>
                                    <input type="text" name="coustmer_name" placeholder="Enter Name" value="{{$pantshirt->coustmer_name}}" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Category</label>
                                    <div class="form-group">
                                        <select class="form-control" name="category" >
                                            <option value="" {{$pantshirt->category == "" ? 'selected' : ''}}></option>
                                            <option value="pant" {{$pantshirt->category == "pant" ? 'selected' : ''}}>Pant</option>
                                            <option value="shirt" {{$pantshirt->category == "shirt" ? 'selected' : ''}}>Shirt</option>
                                            <option value="pant & shirt" {{$pantshirt->category == "pant & shirt" ? 'selected' : ''}}>Pant & Shirt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" value="{{$pantshirt->quantity}}" placeholder="Enter Quantity" class="form-control">
                                </div>
                                
                                <h2 class="text-primary"><center>Shirt Measurements</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shirt Length</label>
                                    <input type="text" name="shirt_length" value="{{$pantshirt->shirt_length}}" placeholder="Enter Shirt Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Collar</label>
                                    <div class="form-group">
                                        <select class="form-control" name="collar">
                                            <option value="" {{$pantshirt->collar == "" ? 'selected' : ''}}></option>
                                            <option value="regular" {{$pantshirt->collar == "regular" ? 'selected' : ''}}>Regular</option>
                                            <option value="button_down" {{$pantshirt->collar == "button_down" ? 'selected' : ''}}>Button Down</option>
                                            <option value="spread" {{$pantshirt->collar == "spread" ? 'selected' : ''}}>Spread</option>
                                            <option value="cutaway" {{$pantshirt->collar == "cutaway" ? 'selected' : ''}}>Cutaway</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Collar Size (Optional)</label>
                                    <input type="number" name="collar_size" value="{{$pantshirt->collar_size}}" placeholder="Enter Collar Size" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" value="{{$pantshirt->chest}}" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Shirt Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="shirt_pocket">
                                            <option value="" {{$pantshirt->shirt_pocket == "" ? 'selected' : ''}}></option>
                                            <option value="no" {{$pantshirt->shirt_pocket == "no" ? 'selected' : ''}}>No</option>
                                            <option value="1" {{$pantshirt->shirt_pocket == "1" ? 'selected' : ''}}>1</option>
                                            <option value="2" {{$pantshirt->shirt_pocket == "2" ? 'selected' : ''}}>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="waist" value="{{$pantshirt->waist}}" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Shirt Fitting</label>
                                    <div class="form-group">
                                        <select class="form-control" name="shirt_fitting">
                                            <option value="" {{$pantshirt->shirt_fitting == "" ? 'selected' : ''}}></option>
                                            <option value="slim" {{$pantshirt->shirt_fitting == "slim" ? 'selected' : ''}}>Slim</option>
                                            <option value="regular" {{$pantshirt->shirt_fitting == "regular" ? 'selected' : ''}}>Regular</option>
                                            <option value="loose" {{$pantshirt->shirt_fitting == "loose" ? 'selected' : ''}}>Loose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shirt Fitting Size (Optional)</label>
                                    <input type="number" name="shirt_fitting_size" value="{{$pantshirt->shirt_fitting_size}}" placeholder="Enter Shirt Fitting Size" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" value="{{$pantshirt->shoulder}}" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Sleeve</label>
                                    <input type="text" name="sleeve" value="{{$pantshirt->sleeve}}" placeholder="Enter Sleeve" class="form-control">
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Arm</label>
                                    <input type="text" name="arm" value="{{$pantshirt->arm}}" placeholder="Enter Arm" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Neck</label>
                                    <input type="text" name="neck" value="{{$pantshirt->neck}}" placeholder="Enter Neck" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Cuff</label>
                                    <input type="text" name="cuff" value="{{$pantshirt->cuff}}" placeholder="Enter Cuff" class="form-control">
                                </div>
                            
                                <h2 class="text-primary"><center>Pant Measurements</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pant Length</label>
                                    <input type="text" name="pant_length" value="{{$pantshirt->pant_length}}" placeholder="Enter Pant Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pant Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pant_pocket">
                                            <option value="" {{$pantshirt->pant_pocket == "" ? 'selected' : ''}}></option>
                                            <option value="no" {{$pantshirt->pant_pocket == "no" ? 'selected' : ''}}>No</option>
                                            <option value="side" {{$pantshirt->pant_pocket == "side" ? 'selected' : ''}}>Side</option>
                                            <option value="back" {{$pantshirt->pant_pocket == "back" ? 'selected' : ''}}>Back</option>
                                            <option value="both" {{$pantshirt->pant_pocket == "both" ? 'selected' : ''}}>Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pant Pocket Size (Optional)</label>
                                    <input type="number" name="pant_pocket_size" value="{{$pantshirt->pant_pocket_size}}" placeholder="Enter Pant Pocket Size" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pant Waist</label>
                                    <input type="text" name="pant_waist" value="{{$pantshirt->pant_waist}}" placeholder="Enter Pant Waist" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pant Fitting</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pant_fitting">
                                            <option value="" {{$pantshirt->pant_fitting == "" ? 'selected' : ''}}></option>
                                            <option value="slim" {{$pantshirt->pant_fitting == "slim" ? 'selected' : ''}}>Slim</option>
                                            <option value="regular" {{$pantshirt->pant_fitting == "regular" ? 'selected' : ''}}>Regular</option>
                                            <option value="loose" {{$pantshirt->pant_fitting == "loose" ? 'selected' : ''}}>Loose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pant Fitting Measurement (Optional)</label>
                                    <input type="number" name="pant_fitting_measurement" value="{{$pantshirt->pant_fitting_measurement}}" placeholder="Enter Pant Fitting Measurement" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" value="{{$pantshirt->hip}}" placeholder="Enter Hip" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Belt Loop (Number of Loops)</label>
                                    <input type="number" name="belt_loop" value="{{$pantshirt->belt_loop}}" placeholder="Enter Number of Belt Loops" class="form-control" min="0">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Thigh</label>
                                    <input type="text" name="thigh" value="{{$pantshirt->thigh}}" placeholder="Enter Thigh" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Knee</label>
                                    <input type="text" name="knee" value="{{$pantshirt->knee}}" placeholder="Enter Knee" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Bottom</label>
                                    <input type="text" name="bottom" value="{{$pantshirt->bottom}}" placeholder="Enter Bottom" class="form-control">
                                </div>
                            </div>

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Extra Details</label>
                                    <input type="textarea" name="textarea" value="{{$pantshirt->textarea}}" placeholder="Enter Extra Details" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Delivery</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Delivery Date</label>
                                    <input type="date" name="delivery_date" value="{{$pantshirt->delivery_date}}" placeholder="Enter Date" class="form-control" required>
                                </div>
                                <h2 class="text-primary"><center>Payment</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Advance</label>
                                    <input type="number" name="advance" value="{{$pantshirt->advance}}" placeholder="Enter Advance" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Total Amount</label>
                                    <input type="number" name="total_amount" value="{{$pantshirt->total_amount}}" placeholder="Enter Amount" class="form-control" required>
                                </div>
                                <h2 class="text-primary"><center>Contact</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Customer Contact</label>
                                    <input type="number" name="coustmer_contact" value="{{$pantshirt->coustmer_contact}}" placeholder="Enter Contact" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Customer Address</label>
                                    <input type="text" name="coustmer_address" value="{{$pantshirt->coustmer_address}}" placeholder="Enter Address" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Save Record">
                                    <a href="{{route('pantshirts.index')}}" class="btn btn-danger float-end">Back</a>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
