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
                            <form action="{{url('details')}}" method="POST">
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
                                            <option value="kameez/shalwar">kameez/shalwar</option>
                                            <option value="kameez">kameez</option>
                                            <option value="shalwar">shalwar</option>
                                            <option value="kurta & pajama">kurta & pajama</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Kameez Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="length" placeholder="Enter length" class="form-control">
                                </div>
                                <!---2---->
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Collar</label>
                                    <div class="form-group">
                                        <select class="form-control" name="collar">
                                            <option value=""></option>
                                            <option value="Nothing">Nothing</option>
                                            <option value="Shirt-Collar">Shirt-Collar</option>
                                            <option value="Serwani-Collar">Serwani-Collar</option>
                                        </select>
                                    </div>
                                </div>
                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" placeholder="Enter Chest" class="form-control">
                                </div>
                                                                <!---2---->
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="font-weight-bold">Daman</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="daman">
                                                                            <option value=""></option>
                                                                            <option value="Nothing">Nothing</option>
                                                                            <option value="Round">Round</option>
                                                                            <option value="Square">Square</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="waist" placeholder="Enter Waist" class="form-control">
                                </div>
                                                                <!---2---->
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="font-weight-bold">Asteen</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="asteen">
                                                                            <option value=""></option>
                                                                            <option value="kurta_asteen">kurta_asteen</option>
                                                                            <option value="kuff_asteen">kuff_asteen</option>                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" placeholder="Enter Hip" class="form-control">
                                </div>
                                                                <!---2---->
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="font-weight-bold">Side Pocket</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="side_pocket">
                                                                            <option value=""></option>
                                                                            <option value="No">No</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>                                                                              
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                                                <!---2---->
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="font-weight-bold">Front Pocket</label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="front_pocket">
                                                                            <option value=""></option>
                                                                            <option value="No">No</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>                                                                              
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!---end 2---->
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Sleeves</label>
                                    <input type="text" name="sleeve" placeholder="Enter Sleeves" class="form-control">
                                </div>
                                                                <!---2---->
                                                                <div class="mb-3 form-group col-md-6">
                                                                    <label class="font-weight-bold">Fitting</label>
                                                                    <input type="text" name="fitting" placeholder="Enter Fitting" class="form-control">
                                                                </div>
                                                                <!---end 2---->
                                                            </div>
                                <!-----------kjcgcijsdcijsdhc------->
                                {{-- <div class="mb-3">
                                    <label class="font-weight-bold">Collar</label>
                                    <input type="text" name="collar" placeholder="Enter Collar" class="form-control">
                                </div> --}}
                                <div class="mb-3">
                                    <label class="font-weight-bold">Arm</label>
                                    <input type="text" name="arm" placeholder="Enter Arm" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Neck</label>
                                    <input type="text" name="neck" placeholder="Enter neck" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Kuff</label>
                                    <input type="text" name="kuff" placeholder="Enter Kuff" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Patti</label>
                                    <input type="text" name="patti" placeholder="Enter Patti" class="form-control">
                                </div>
                            
                                <h2 class="text-primary"><center>Shalwar Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shalwar Length</label>
                                    <input type="text" name="shalwar_length" placeholder="Enter Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pajama</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pajama">
                                            <option value=""></option>
                                            <option value="No">No</option>
                                            <option value="Pajama">Pajama</option>
                                            <option value="Pent-Pajama">Pent-Pajama</option>                                                                              
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shalwar Pauncha</label>
                                    <input type="text" name="shalwar_pauncha" placeholder="Enter pauncha" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pocket">
                                            <option value=""></option>
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>                                                                              
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shalwar gair</label>
                                    <input type="text" name="shalwar_gair" placeholder="Enter Gair" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Lastic/Dory</label>
                                    <div class="form-group">
                                        <select class="form-control" name="lastic">
                                            <option value=""></option>
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>                                                                              
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="font-weight-bold">Asan</label>
                                <input type="text" name="asan" placeholder="Enter Asan" class="form-control">
                            </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Shalwar Zip</label>
                                    <div class="form-group">
                                        <select name="shalwar_zip" class="form-control">
                                            <option value=""></option>
                                            <option value="zip_pocket">zip_pocket</option>
                                            <option value="straight_pocket">straight_pocket</option>
                                        </select>
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