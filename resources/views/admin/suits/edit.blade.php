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
                            <form action="{{url('suits/'.$suit->id)}}" method="POST">
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
                                    <input type="text" name="coustmer_name" placeholder="Enter Name" value="{{$suit->coustmer_name}}" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Category</label>
                                    <div class="form-group">
                                        <select class="form-control" name="category">
                                            <option value="" {{$suit->category == "" ? 'selected' : ''}}></option>
                                            <option value="coat/pent" {{$suit->category == "coat/pent" ? 'selected' : ''}}>coat/pent</option>
                                            <option value="coat" {{$suit->category == "coat" ? 'selected' : ''}}>coat</option>
                                            <option value="pent" {{$suit->category == "pent" ? 'selected' : ''}}>pent</option>
                                            <option value="sherwani" {{$suit->category == "sherwani" ? 'selected' : ''}}>Sherwani</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="font-weight-bold">Quantity</label>
                                    <input type="text" name="quantity" value="{{$suit->quantity}}" placeholder="Enter Quantity" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Coat Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 from-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="length" value="{{$suit->length}}" placeholder="Enter length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Bress</label>
                                    <div class="form-group">
                                        <select class="form-control" name="bress" >
                                            <option value="nothing" {{$suit->bress == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="single" {{$suit->bress == "single" ? 'selected' : ''}}>single</option>
                                            <option value="double" {{$suit->bress == "double" ? 'selected' : ''}}>double</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Chest</label>
                                    <input type="text" name="chest" value="{{$suit->chest}}" placeholder="Enter Chest" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Kaj</label>
                                    <div class="form-group">
                                        <select class="form-control" name="kaj">
                                            <option value="" {{$suit->kaj == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$suit->kaj == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="1" {{$suit->kaj == "1" ? 'selected' : ''}}>1</option>
                                            <option value="2" {{$suit->kaj == "2" ? 'selected' : ''}}>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 from-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="waist" value="{{$suit->waist}}" placeholder="Enter Waist" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Daman</label>
                                    <div class="form-group">
                                        <select class="form-control" name="daman" value="{{$suit->daman}}">
                                            <option value="" {{$suit->daman == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$suit->daman == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="round" {{$suit->daman == "round" ? 'selected' : ''}}>round</option>
                                            <option value="square" {{$suit->daman == "square" ? 'selected' : ''}}>square</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="hip" value="{{$suit->hip}}" placeholder="Enter Hip" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Bress Nepal</label>
                                    <div class="form-group">
                                        <select class="form-control" name="bress_nepal">
                                            <option value="" {{$suit->bress_nepal == "" ? 'selected' : ''}}></option>
                                            <option value="single_bress" {{$suit->bress_nepal == "single_bress" ? 'selected' : ''}}>Single Bress</option>
                                            <option value="double_bress" {{$suit->bress_nepal == "double_bress" ? 'selected' : ''}}>Double Bress</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Shoulder</label>
                                    <input type="text" name="shoulder" value="{{$suit->shoulder}}" placeholder="Enter Shoulder" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Chaak</label>
                                    <div class="form-group">
                                        <select class="form-control" name="chaak" value="{{$suit->chaak}}">
                                            <option value=""{{$suit->chaak == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$suit->chaak == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="side_chaak" {{$suit->chaak == "side_chaak" ? 'selected' : ''}}>side_chaak</option>
                                            <option value="back_chaak" {{$suit->chaak == "back_chaak" ? 'selected' : ''}}>back_chaak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                                <div class="mb-3">
                                    <label class="font-weight-bold">Sleeves</label>
                                    <input type="text" name="sleeve" value="{{$suit->sleeve}}" placeholder="Enter Sleeves" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Cross Back</label>
                                    <input type="text" name="cross_back" value="{{$suit->cross_back}}" placeholder="Enter Sleeves" class="form-control">
                                </div>
                                <h2 class="text-primary"><center>Pent Measurment</center></h2>
                                <div class="form-row">
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Length</label>
                                    <input type="text" name="pent_length" value="{{$suit->pent_length}}" placeholder="Enter Length" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="pocket">
                                            <option value="" {{$suit->pocket == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$suit->pocket == "nothing" ? 'selected' : ''}}>Nothing</option>
                                            <option value="cross" {{$suit->pocket == "cross" ? 'selected' : ''}}>cross</option>
                                            <option value="straight" {{$suit->pocket == "straight" ? 'selected' : ''}}>straight</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Inside</label>
                                    <input type="text" name="pent_inside" value="{{$suit->pent_inside}}" placeholder="Enter pauncha" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Hip Pocket</label>
                                    <div class="form-group">
                                        <select class="form-control" name="hip_pocket">
                                            <option value="" {{$suit->hip_pocket == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$suit->hip_pocket == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="1" {{$suit->hip_pocket == "1" ? 'selected' : ''}}>1</option>
                                            <option value="2" {{$suit->hip_pocket == "2" ? 'selected' : ''}}>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Fly</label>
                                    <input type="text" name="pent_fly" value="{{$suit->pent_fly}}" placeholder="Enter Gair" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">S_bottom</label>
                                    <div class="form-group">
                                        <select class="form-control" name="s_bottom">
                                            <option value="" {{$suit->s_bottom == "" ? 'selected' : ''}}></option>
                                            <option value="nothing" {{$suit->s_bottom == "nothing" ? 'selected' : ''}}>nothing</option>
                                            <option value="turpai" {{$suit->s_bottom == "turpai" ? 'selected' : ''}}>turpai</option>
                                            <option value="slai" {{$suit->s_bottom == "slai" ? 'selected' : ''}}>slai</option>
                                            <option value="folding" {{$suit->s_bottom == "folding" ? 'selected' : ''}}>folding</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Waist</label>
                                    <input type="text" name="pent_waist" value="{{$suit->pent_waist}}" placeholder="Enter Gair" class="form-control">
                                </div>
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">French_Fly</label>
                                    <input type="text" name="french_fly" value="{{$suit->french_fly}}" placeholder="Enter Front Slai" class="form-control">
                                </div>
                            
                                <div class="mb-3 form-group col-md-6">
                                    <label class="font-weight-bold">Hip</label>
                                    <input type="text" name="pent_hip" value="{{$suit->pent_hip}}" placeholder="Enter Gair" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="font-weight-bold">Loops</label>
                                    <div class="form-group">
                                        <select class="form-control" name="loops">
                                            <option value="" {{$suit->loops == "" ? 'selected' : ''}}></option>
                                            <option value="4" {{$suit->loops == "4" ? 'selected' : ''}}>4</option>
                                            <option value="5" {{$suit->loops == "5" ? 'selected' : ''}}>5</option>
                                            <option value="6" {{$suit->loops == "6" ? 'selected' : ''}}>6</option>
                                            <option value="8" {{$suit->loops == "8" ? 'selected' : ''}}>8</option>
                                            <option value="10" {{$suit->loops == "10" ? 'selected' : ''}}>10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Thai</label>
                                    <input type="text" name="pent_thai" value="{{$suit->pent_thai}}" placeholder="Enter Gair" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Knee</label>
                                    <input type="text" name="pent_knee" value="{{$suit->pent_knee}}" placeholder="Enter Gair" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Bottom</label>
                                    <input type="text" name="pent_bottom" value="{{$suit->pent_bottom}}" placeholder="Enter Gair" class="form-control">
                                </div>
                                <!-- <div class="mb-3">
                                    <label class="font-weight-bold">Shalwar Zip</label>
                                    <div class="form-group">
                                        <select name="zip" value="" class="form-control">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>  -->
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Extra Details</label>
                                    <input type="textarea" name="textarea" value="{{$suit->textarea}}" placeholder="Enter Extra Details" class="form-control py-4">   
                                </div>
                                <h2 class="text-primary"><center>Trail & Delivery</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Trail Date</label>
                                    <input type="date" name="trail_date" value="{{$suit->trail_date}}" placeholder="Enter Date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Delivery Date</label>
                                    <input type="date" name="delivery_date" value="{{$suit->delivery_date}}" placeholder="Enter Date" class="form-control" required>
                                </div>
                                <h2 class="text-primary"><center>Payment</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Advance</label>
                                    <input type="number" name="advance" value="{{$suit->advance}}" placeholder="Enter Advance" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Total Amount</label>
                                    <input type="number" name="total_amount" value="{{$suit->total_amount}}" placeholder="Enter Amount" class="form-control" required>
                                </div>
                                <!------------sdckjsdckjsc---------->
                                <h2 class="text-primary"><center>Contact</center></h2>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Contact</label>
                                    <input type="number" name="coustmer_contact" value="{{$suit->coustmer_contact}}" placeholder="Enter Contact" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="font-weight-bold">Coustmer Address</label>
                                    <input type="text" name="coustmer_address" value="{{$suit->coustmer_address}}" placeholder="Enter Address" class="form-control">
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