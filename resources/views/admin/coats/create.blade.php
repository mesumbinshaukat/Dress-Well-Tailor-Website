@extends('admin.dashboard')
@section('content')
    <div class="py-4" style="margin-top: 6%;width:79%;margin-left:21%">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-primary font-weight-bold">Add Coustmer Details & Size</h4>
                            
                        </div>
                        <div class="card-body">
                            <form action="{{url('coats')}}" method="POST">
                                @if ($errors->any())
                                <ul class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>           
                                    @endforeach
                                    
                                </ul>
                                    
                                @endif
                                @csrf
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Name</label>
                                    <input type="text" name="coustmer_name" placeholder="Enter Name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Category</label>
                                    <div class="form-group">
                                        <select class="form-control" name="category">
                                            <option value=""></option>
                                            <option value="shirt/waisecoat">shirt/waisecoat</option>
                                            <option value="shirt">shirt</option>
                                            <option value="waistcoat">waistcoat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Shirt Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="length" placeholder="Enter length" class="form-control">
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
                                            <option value="nothing">Nothing</option>
                                            <option value="shirt_collar">Shirt Collar</option>
                                            <option value="sherwani_collar">Sherwani Collar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Collar Size (Optional)</label>
                                    <input type="number" name="collar_size" placeholder="Enter Collar Size" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Daman</label>
                                    <div class="form-group">
                                        <select class="form-control" name="daman">
                                            <option value=""></option>
                                            <option value="nothing">nothing</option>
                                            <option value="Round">Round</option>
                                            <option value="Square">Square</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="waist" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Kuff</label>
                                    <div class="form-group">
                                        <select class="form-control" name="kuff">
                                            <option value=""></option>
                                            <option value="nothing">nothing</option>
                                            <option value="single">single</option>
                                            <option value="double">double</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" placeholder="Enter Hip" class="form-control">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Patti</label>
                                    <div class="form-group">
                                        <select class="form-control" name="patti">
                                            <option value=""></option>
                                            <option value="nothing">nothing</option>
                                            <option value="simple_patti">simple_patti</option>
                                            <option value="polo_patti">polo_patti</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Sleeves</label>
                                    <input type="text" name="sleeve" placeholder="Enter Sleeves" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Kuff Size</label>
                                    <input type="text" name="Kuffs" placeholder="Enter Kuff" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Arm</label>
                                    <input type="text" name="arm" placeholder="Enter Arm" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Neck</label>
                                    <input type="text" name="neck" placeholder="Enter neck" class="form-control">
                                </div>
                                
                                <div class="form-row">
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Shirt Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="shirt_pocket">
                                            <option value=""></option>
                                            <option value="no">No</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="nothing">Nothing</option>
                                            <option value="simple">Simple</option>
                                            <option value="flape">Flape</option>
                                        </select>
                                    </div>
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
                                    <label class="font-weight-bold">Shirt Fitting Size (Optional)</label>
                                    <input type="number" name="shirt_fitting_size" placeholder="Enter Shirt Fitting Size" class="form-control" step="0.1">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pocket">
                                            <option value=""></option>
                                            <option value="nothing">Nothing</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
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
                                <h2 class="text-primary"><center>Waise Coat Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Length</label>
                                    <input type="text" name="coat_length" placeholder="Enter Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Cot Collar</label>
                                    <div class="form-group">
                                        <select class="form-control" name="cot_collar">
                                            <option value=""></option>
                                            <option value="nothing">nothing</option>
                                            <option value="sherwani_collar">sherwani_collar</option>
                                            <option value="v_gala">v_gala</option>
                                            <option value="gol_gala">gol_gala</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat chest</label>
                                    <input type="text" name="coat_chest" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Wallet Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="wal_pocket">
                                            <option value=""></option>
                                            <option value="nothing">nothing</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Waist</label>
                                    <input type="text" name="coat_waist" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Side Choke</label>
                                    <input type="text" name="side_choke" placeholder="Enter Choke" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Hip</label>
                                    <input type="text" name="coat_hip" placeholder="Enter hip" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Daman</label>
                                    <div class="form-group">
                                        <select class="form-control" name="coat_daman">
                                            <option value=""></option>
                                            <option value="nothing">nothing</option>
                                            <option value="Round">Round</option>
                                            <option value="Square">Square</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Coat Shoulder</label>
                                    <input type="text" name="coat_shoulder" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Inside Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="ins_pocket">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coat Neck</label>
                                    <input type="text" name="coat_neck" placeholder="Enter Neck" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Cross Back</label>
                                    <input type="text" name="cross_back" placeholder="Enter cross_back" class="form-control">
                                </div>

                                <!-- {{-- <div class="mb-3">
                                    <label class="font-weight-bold">Shalwar Zip</label>
                                    <div class="form-group">
                                        <select name="shalwar_zip" class="form-control">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div> --}} -->
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Extra Details</label>
                                    <input type="textarea" name="textarea"  placeholder="Enter Extra Details" class="form-control py-4">   
                                </div>
                                <h2 class="text-primary"><center>Trail & Delivery</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Trail</label>
                                    <input type="date" name="trail_date" placeholder="Enter Date" class="form-control">
                                </div>
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
                                <!------------sdckjsdckjsc---------->
                                <h2 class="text-primary"><center>Contact</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Contact</label>
                                    <input type="number" name="coustmer_contact" placeholder="Enter Contact" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Address</label>
                                    <input type="text" name="coustmer_address" placeholder="Enter Address" class="form-control">
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