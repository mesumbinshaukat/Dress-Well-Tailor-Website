@extends('admin.dashboard')

@section('content')
<div class="py-4" style="margin-top: 6%;width:79%;margin-left:21%">
    <div class="container">
        <div class="row">
            <div class="alert">
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
              </div>

            
            <form action="" class="col-8 d-flex">
                <div class="form-group input-group mr-2" style="flex: 2;">
                    <input type="search" class="form-control" name="search" placeholder="Search by Name" value="{{$search}}"> 
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                    <div class="input-group-append ml-1">
                        <a href="{{route('pantshirts.index')}}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
                <div class="form-group" style="flex: 1;">
                    <select class="form-control" name="sort" id="sortSelect" onchange="this.form.submit()">
                        <option value="newest" {{$sort == 'newest' ? 'selected' : ''}}>Newest to Oldest</option>
                        <option value="oldest" {{$sort == 'oldest' ? 'selected' : ''}}>Oldest to Newest</option>
                        <option value="name_asc" {{$sort == 'name_asc' ? 'selected' : ''}}>Name A-Z</option>
                        <option value="name_desc" {{$sort == 'name_desc' ? 'selected' : ''}}>Name Z-A</option>
                        <option value="id_asc" {{$sort == 'id_asc' ? 'selected' : ''}}>Order ID Ascending</option>
                        <option value="id_desc" {{$sort == 'id_desc' ? 'selected' : ''}}>Order ID Descending</option>
                    </select>
                </div>
            </form>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-primary font-weight-bold">Pant & Shirt Details & Size</h4>
                        <a href="{{route('pantshirts.create')}}" class="btn btn-primary float-end">Add Record</a>
                    </div>
                    <div class="card-body " style="overflow-x:auto;">
                        <!----Table Start------>
                        <table class="table-responsive ">
                            <table class="table table-bordered">
                                <thead class="text-dark">
                                    <tr>
                                        <th>Order No</th>
                                        <th>Customer Name</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Shirt Length</th>
                                        <th>Chest</th>
                                        <th>Waist</th>
                                        <th>Shoulder</th>
                                        <th>Sleeve</th>
                                        <th>Arm</th>
                                        <th>Neck</th>
                                        <th>Collar</th>
                                        <th>Cuff</th>
                                        <th>Shirt Pocket</th>
                                        <th>Shirt Fitting</th>
                                        <th>Pant Length</th>
                                        <th>Pant Waist</th>
                                        <th>Hip</th>
                                        <th>Thigh</th>
                                        <th>Knee</th>
                                        <th>Bottom</th>
                                        <th>Pant Pocket</th>
                                        <th>Pant Fitting</th>
                                        <th>Belt Loop</th>
                                        <th>Zipper</th>
                                        <th>Extra Details</th>
                                        <th>Delivery Date</th>
                                        <th>Advance</th>
                                        <th>Total Amount</th>
                                        <th>Customer Contact</th>
                                        <th>Customer Address</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    @foreach ($pantShirts as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->coustmer_name}}</td>
                                            <td>{{$item->category}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->shirt_length}}</td>
                                            <td>{{$item->chest}}</td>
                                            <td>{{$item->waist}}</td>
                                            <td>{{$item->shoulder}}</td>
                                            <td>{{$item->sleeve}}</td>
                                            <td>{{$item->arm}}</td>
                                            <td>{{$item->neck}}</td>
                                            <td>{{$item->collar}}</td>
                                            <td>{{$item->cuff}}</td>
                                            <td>{{$item->shirt_pocket}}</td>
                                            <td>{{$item->shirt_fitting}}</td>
                                            <td>{{$item->pant_length}}</td>
                                            <td>{{$item->pant_waist}}</td>
                                            <td>{{$item->hip}}</td>
                                            <td>{{$item->thigh}}</td>
                                            <td>{{$item->knee}}</td>
                                            <td>{{$item->bottom}}</td>
                                            <td>{{$item->pant_pocket}}</td>
                                            <td>{{$item->pant_fitting}}</td>
                                            <td>{{$item->belt_loop}}</td>
                                            <td>{{$item->zipper}}</td>
                                            <td>{{$item->textarea}}</td>
                                            <td>{{$item->delivery_date}}</td>
                                            <td>{{$item->advance}}</td>
                                            <td>{{$item->total_amount}}</td>
                                            <td>{{$item->coustmer_contact}}</td>
                                            <td>{{$item->coustmer_address}}</td>
                                            <td><a href="{{url('pantshirts/'.$item->id)}}" class="btn btn-primary btn-sm">Show</a></td>
                                            <td><a href="{{url('pantshirts/'.$item->id.'/edit')}}" class="btn btn-success btn-sm">Edit</a></td>
                                            <td>
                                            <form action="{{url('pantshirts/'.$item->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn dele btn-danger btn-sm">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </table>
                        <!----Table End------>

                    </div>
                    <div class="row" style="margin-top: 2%;margin-left: 2%">
                        {{ $pantShirts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
