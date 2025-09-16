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
                    <input type="search" class="form-control" id="coatsSearchInput" name="search" placeholder="Search by Name" value="{{$search}}"> 
                    <div class="input-group-prepend" >
                    <a href="{{route('coats.index')}}">
                        <button class="btn btn-primary input-group-text ml-1" type="button">Reset</button>
                    </a>
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
                        <h4 class="text-primary font-weight-bold">Shirt & Waist-Coat Details & Size</h4>
                        <a href="{{route('coats.create')}}" class="btn btn-primary float-end">Add Record</a>
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
                                        <th>Kuff-Size</th>
                                        <th>Arm</th>
                                        <th>Neck</th>
                                        <th>Kuff</th>
                                        <th>Collar</th>
                                        <th>patti</th>
                                        <th>Daman</th>
                                        <th>Shirt_pocket</th>
                                        <th>Pocket</th>
                                        <th>Coat_Length</th>
                                        <th>Coat_Chest</th>
                                        <th>Coat_Waist</th>
                                        <th>Coat_Hip</th>
                                        <th>Coat_Shoulder</th>
                                        <th>Coat_Neck</th>
                                        <th>Cross_Back</th>
                                        <th>Cot_Collar</th>
                                        <th>Wal_Pocket</th>
                                        <th>Side_choke</th>
                                        <th>Coat_Daman</th>
                                        <th>Inside_Pocket</th>
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
                                    @foreach ($coats as $item)
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
                                            <td>{{$item->Kuffs}}</td>
                                            <td>{{$item->arm}}</td>
                                            <td>{{$item->neck}}</td>
                                            <td>{{$item->kuff}}</td>
                                            <td>{{$item->collar}}</td>
                                            <td>{{$item->patti}}</td>
                                            <td>{{$item->daman}}</td>
                                            <td>{{$item->shirt_pocket}}</td>
                                            <td>{{$item->pocket}}</td>
                                            <td>{{$item->coat_length}}</td>
                                            <td>{{$item->coat_chest}}</td>
                                            <td>{{$item->coat_waist}}</td>
                                            <td>{{$item->coat_hip}}</td>
                                            <td>{{$item->coat_shoulder}}</td>
                                            <td>{{$item->coat_neck}}</td>
                                            <td>{{$item->cross_back}}</td>
                                            <td>{{$item->cot_collar}}</td>
                                            <td>{{$item->wal_pocket}}</td>
                                            <td>{{$item->side_choke}}</td>
                                            <td>{{$item->coat_daman}}</td>
                                            <td>{{$item->ins_pocket}}</td>
                                            <td>{{$item->textarea}}</td>
                                            <td>{{$item->trail_date}}</td>
                                            <td>{{$item->delivery_date}}</td>
                                            <td>{{$item->advance}}</td>
                                            <td>{{$item->total_amount}}</td>
                                            <td>{{$item->coustmer_contact}}</td>
                                            <td>{{$item->coustmer_address}}</td>
                                            <td><a href="{{url('coats/'.$item->id)}}" class="btn btn-primary btn-sm">Show</a></td>
                                            <td><a href="{{url('coats/'.$item->id.'/edit')}}" class="btn btn-success btn-sm">Edit</a></td>
                                            <td>
                                            <form action="{{url('coats/'.$item->id)}}" method="POST">
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
                        {{ $coats->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('coatsSearchInput');
    let searchTimeout;

    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            if (query.length >= 1) {
                window.location.href = '{{route("coats.index")}}?search=' + encodeURIComponent(query);
            }
        }, 500);
    });
});
</script>

@endsection