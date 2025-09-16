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
                            <form action="{{url('suits')}}" method="POST">
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
                                            <option value="coat/pent">coat/pent</option>
                                            <option value="coat">coat</option>
                                            <option value="pent">pent</option>
                                            <option value="sherwani">Sherwani</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Coat Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="length" placeholder="Enter length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Bress</label>
                                    <div class="form-group">
                                        <select class="form-control" name="bress">
                                            <option value=""></option>
                                            <option value="Nothing">Nothing</option>
                                            <option value="Single">Single</option>
                                            <option value="Double">Double</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Kaj</label>
                                    <div class="form-group">
                                        <select class="form-control" name="kaj">
                                            <option value=""></option>
                                            <option value="Nothing">Nothing</option>
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
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" placeholder="Enter Hip" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Bress Nepal</label>
                                    <div class="form-group">
                                        <select class="form-control" name="bress_nepal">
                                            <option value=""></option>
                                            <option value="single_bress">Single Bress</option>
                                            <option value="double_bress">Double Bress</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Chaak</label>
                                    <div class="form-group">
                                        <select class="form-control" name="chaak">
                                            <option value=""></option>
                                            <option value="nothing">nothing</option>
                                            <option value="side_chaak">side_chaak</option>
                                            <option value="back_chaak">back_chaak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                                <div class="mb-3">
                                    <label class="font-weight-bold">Sleeves</label>
                                    <input type="text" name="sleeve" placeholder="Enter Sleeves" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Cross Back</label>
                                    <input type="text" name="cross_back" placeholder="Enter Cross Back" class="form-control">
                                </div>
                                <!-----------kjcgcijsdcijsdhc------->
                                {{-- <div class="mb-3">
                                    <label class="font-weight-bold">Collar</label>
                                    <input type="text" name="collar" placeholder="Enter Collar" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Kuff</label>
                                    <input type="text" name="kuff" placeholder="Enter Kuff" class="form-control">
                                </div> --}}
                                <h2 class="text-primary"><center>Pent Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pent Length</label>
                                    <input type="text" name="pent_length" placeholder="Enter Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pocket">
                                            <option value=""></option>
                                            <option value="Nothing">Nothing</option>
                                            <option value="Cross">Cross</option>
                                            <option value="Straight">Straight</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pent Inside</label>
                                    <input type="text" name="pent_inside" placeholder="Enter Inside" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Hip Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="hip_pocket">
                                            <option value=""></option>
                                            <option value="Nothing">Nothing</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pent Fly</label>
                                    <input type="text" name="pent_fly" placeholder="Enter Fly" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">S_bottom</label>
                                    <div class="form-group">
                                        <select class="form-control" name="s_bottom">
                                            <option value=""></option>
                                            <option value="Nothing">Nothing</option>
                                            <option value="Turpai">Turpai</option>
                                            <option value="Slai">Slai</option>
                                            <option value="Folding">Folding</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pent Waist</label>
                                    <input type="text" name="pent_waist" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">French Fly</label>
                                    <input type="text" name="french_fly" placeholder="Enter French  Fly" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Pent Hip</label>
                                    <input type="text" name="pent_hip" placeholder="Enter Hip" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Loops</label>
                                    <div class="form-group">
                                        <select class="form-control" name="loops">
                                            <option value=""></option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="8">8</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Pent Thai</label>
                                    <input type="text" name="pent_thai" placeholder="Enter Thai" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Pent Knee</label>
                                    <input type="text" name="pent_knee" placeholder="Enter Knee" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Pent Bottom</label>
                                    <input type="text" name="pent_bottom" placeholder="Enter Bottom" class="form-control">
                                </div>
                                 <!-- <div class="mb-3">
                                    <label class="font-weight-bold">Shalwar Zip</label>
                                    <div class="form-group">
                                        <select name="shalwar_zip" class="form-control">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>  -->
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Extra Details</label>
                                    <input type="textarea" name="textarea" placeholder="Enter Extra Details" class="form-control">
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
                                    <a href="{{route('suits.index')}}" class="btn btn-danger float-end">Back</a>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection