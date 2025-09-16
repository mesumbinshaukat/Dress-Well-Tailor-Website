@extends('admin.dashboard')
@section('content')
    <div class="py-4" style="margin-top: 6%;width:79%;margin-left:21%">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-primary font-weight-bold">Add Pant & Shirt Details & Size</h3>
                            
                        </div>
                        <div class="card-body">
                            <form action="{{url('pantshirts')}}" method="POST">
                                @if ($errors->any())
                                <ul class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>           
                                    @endforeach
                                    
                                </ul>
                                    
                                @endif
                                @csrf
                                <div class="mb-3">
                                    <label class="font-weight-bold">Customer Name</label>
                                    <input type="text" name="coustmer_name" placeholder="Enter Name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Category</label>
                                    <div class="form-group">
                                        <select class="form-control" name="category">
                                            <option value=""></option>
                                            <option value="pant">Pant</option>
                                            <option value="shirt">Shirt</option>
                                            <option value="pant & shirt">Pant & Shirt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control">
                                </div>
                                
                                <h2 class="text-primary"><center>Shirt Measurements</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shirt Length</label>
                                    <input type="text" name="shirt_length" placeholder="Enter Shirt Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Collar</label>
                                    <div class="form-group">
                                        <select class="form-control" name="collar">
                                            <option value=""></option>
                                            <option value="regular">Regular</option>
                                            <option value="button_down">Button Down</option>
                                            <option value="spread">Spread</option>
                                            <option value="cutaway">Cutaway</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Shirt Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="shirt_pocket">
                                            <option value=""></option>
                                            <option value="no">No</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="waist" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Shirt Fitting</label>
                                    <div class="form-group">
                                        <select class="form-control" name="shirt_fitting">
                                            <option value=""></option>
                                            <option value="slim">Slim</option>
                                            <option value="regular">Regular</option>
                                            <option value="loose">Loose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Sleeve</label>
                                    <input type="text" name="sleeve" placeholder="Enter Sleeve" class="form-control">
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Arm</label>
                                    <input type="text" name="arm" placeholder="Enter Arm" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Neck</label>
                                    <input type="text" name="neck" placeholder="Enter Neck" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Cuff</label>
                                    <input type="text" name="cuff" placeholder="Enter Cuff" class="form-control">
                                </div>
                            
                                <h2 class="text-primary"><center>Pant Measurements</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pant Length</label>
                                    <input type="text" name="pant_length" placeholder="Enter Pant Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pant Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pant_pocket">
                                            <option value=""></option>
                                            <option value="no">No</option>
                                            <option value="side">Side</option>
                                            <option value="back">Back</option>
                                            <option value="both">Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pant Waist</label>
                                    <input type="text" name="pant_waist" placeholder="Enter Pant Waist" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pant Fitting</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pant_fitting">
                                            <option value=""></option>
                                            <option value="slim">Slim</option>
                                            <option value="regular">Regular</option>
                                            <option value="loose">Loose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" placeholder="Enter Hip" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Belt Loop</label>
                                    <div class="form-group">
                                        <select class="form-control" name="belt_loop">
                                            <option value=""></option>
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Thigh</label>
                                    <input type="text" name="thigh" placeholder="Enter Thigh" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Zipper</label>
                                    <div class="form-group">
                                        <select class="form-control" name="zipper">
                                            <option value=""></option>
                                            <option value="front">Front</option>
                                            <option value="side">Side</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Knee</label>
                                    <input type="text" name="knee" placeholder="Enter Knee" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Bottom</label>
                                    <input type="text" name="bottom" placeholder="Enter Bottom" class="form-control">
                                </div>
                            </div>

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Extra Details</label>
                                    <input type="textarea" name="textarea" placeholder="Enter Extra Details" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Delivery</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Delivery Date</label>
                                    <input type="date" name="delivery_date" placeholder="Enter Date" class="form-control" required>
                                </div>
                                <h2 class="text-primary"><center>Payment</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Advance</label>
                                    <input type="number" name="advance" placeholder="Enter Advance" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Total Amount</label>
                                    <input type="number" name="total_amount" placeholder="Enter Amount" class="form-control" required>
                                </div>
                                <h2 class="text-primary"><center>Contact</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Customer Contact</label>
                                    <input type="number" name="coustmer_contact" placeholder="Enter Contact" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Customer Address</label>
                                    <input type="text" name="coustmer_address" placeholder="Enter Address" class="form-control">
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
