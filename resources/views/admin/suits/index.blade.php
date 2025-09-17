@extends('admin.dashboard')

@section('content')
<div class="py-4" style="margin-top: 6%;width:79%;margin-left:21%">
    <div class="container">
        <div class="row">
            
            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            <form action="" class="col-8 d-flex">
                <div class="form-group input-group mr-2" style="flex: 2;">
                    <input type="search" class="form-control" name="search" placeholder="Search by Name" value="{{$search}}"> 
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                    <div class="input-group-append ml-1">
                        <a href="{{route('suits.index')}}" class="btn btn-secondary">Reset</a>
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
                        <h4 class="text-primary font-weight-bold">Suit Details & Size</h4>
                        <a href="{{route('suits.create')}}" class="btn btn-primary float-end">Add Record</a>
                    </div>
                    <div class="card-body " style="overflow-x:auto;">
                        <!----Table Start------>
                        <table class="table-responsive ">
                            <table class="table table-bordered">
                                <thead class="text-dark">
                                    <tr>
                                        <th>Order No</th>
                                        <th>Coustmer_name</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>length</th>
                                        <th>Chest</th>
                                        <th>Waist</th>
                                        <th>Hip</th>
                                        <th>Shoulder</th>
                                        <th>Sleeves</th>
                                        <th>Cross_Back</th>
                                        <th>Bress</th>
                                        <th>Kaj</th>
                                        <th>Bress_Nepal</th>
                                        <th>Daman</th>
                                        <th>Chaak</th>
                                        <th>Pent_Length</th>
                                        <th>Pent_Inside</th>
                                        <th>Pent_Fly</th>
                                        <th>Pent_Waist</th>
                                        <th>Pent_Hip</th>
                                        <th>Pent_Thai</th>
                                        <th>Pent_Knee</th>
                                        <th>Pent_Bottom</th>
                                        <th>pent_Loops</th>
                                        <th>Pocket</th>
                                        <th>Hip_Pocket</th>
                                        <th>S_Bottom</th>
                                        <th>French_fly</th>
                                        <th>Extra_Details</th>
                                        <th>Trail_Date</th>
                                        <th>Delivery_Date</th>
                                        <th>Advance</th>
                                        <th>Total_amount</th>
                                        <th>Coustmer_contact</th>
                                        <th>Coustmer_address</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    @foreach ($suits as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->coustmer_name}}</td>
                                            <td>{{$item->category}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->length}}</td>
                                            <td>{{$item->chest}}</td>
                                            <td>{{$item->waist}}</td>
                                            <td>{{$item->hip}}</td>
                                            <td>{{$item->shoulder}}</td>
                                            <td>{{$item->sleeve}}</td>
                                            <td>{{$item->cross_back}}</td>
                                            <td>{{$item->bress}}</td>
                                            <td>{{$item->kaj}}</td>
                                            <td>{{$item->bress_nepal}}</td>
                                            <td>{{$item->daman}}</td>
                                            <td>{{$item->chaak}}</td>
                                            <td>{{$item->pent_length}}</td>
                                            <td>{{$item->pent_inside}}</td>
                                            <td>{{$item->pent_fly}}</td>
                                            <td>{{$item->pent_waist}}</td>
                                            <td>{{$item->pent_hip}}</td>
                                            <td>{{$item->pent_thai}}</td>
                                            <td>{{$item->pent_knee}}</td>
                                            <td>{{$item->pent_bottom}}</td>
                                            <td>{{$item->loops}}</td>
                                            <td>{{$item->pocket}}</td>
                                            <td>{{$item->hip_pocket}}</td>
                                            <td>{{$item->s_bottom}}</td>
                                            <td>{{$item->french_fly}}</td>
                                            <td>{{$item->textarea}}</td>
                                            <td>{{$item->trail_date}}</td>
                                            <td>{{$item->delivery_date}}</td>
                                            <td>{{$item->advance}}</td>
                                            <td>{{$item->total_amount}}</td>
                                            <td>{{$item->coustmer_contact}}</td>
                                            <td>{{$item->coustmer_address}}</td>
                                            <td><a href="{{url('suits/'.$item->id)}}" class="btn btn-primary btn-sm">Show</a></td>
                                            <td><a href="{{url('suits/'.$item->id.'/edit')}}" class="btn btn-success btn-sm">Edit</a></td>
                                            <td>
                                            <form action="{{url('suits/'.$item->id)}}" method="POST">
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
                        {{ $suits->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection