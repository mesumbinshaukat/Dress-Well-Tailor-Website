<?php

namespace App\Http\Controllers;

use App\Models\Coat;
use Illuminate\Http\Request;
use App\Http\Requests\CoatFormRequest;
use RealRashid\SweetAlert\Facades\Alert;


class CoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Alert::success('Data Inserted Successfully');
        $search = $request['search'] ?? "";
        $sort = $request['sort'] ?? "newest";
        
        // Determine sorting
        $orderBy = 'created_at';
        $orderDirection = 'desc';
        
        switch ($sort) {
            case 'oldest':
                $orderBy = 'created_at';
                $orderDirection = 'asc';
                break;
            case 'name_asc':
                $orderBy = 'coustmer_name';
                $orderDirection = 'asc';
                break;
            case 'name_desc':
                $orderBy = 'coustmer_name';
                $orderDirection = 'desc';
                break;
            case 'id_asc':
                $orderBy = 'id';
                $orderDirection = 'asc';
                break;
            case 'id_desc':
                $orderBy = 'id';
                $orderDirection = 'desc';
                break;
            default: // newest
                $orderBy = 'created_at';
                $orderDirection = 'desc';
        }
        
        if ($search !="") {
            $coats =  Coat::where('coustmer_name','LIKE',"%$search%")->orwhere('coustmer_contact','LIKE',"%$search%")->orwhere('id','LIKE',"$search")->orderBy($orderBy, $orderDirection)->paginate(10);
        }else {
            $coats = Coat::orderBy($orderBy, $orderDirection)->paginate(10);
        }
        
        // Append query parameters to pagination links
        $coats->appends($request->query());
        
        return view('admin.coats.index',compact('coats','search','sort'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coats.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoatFormRequest $request)
    {
        try {
            $data=$request->validated();
            $datel = new Coat();
            $datel->coustmer_name = $request->coustmer_name;
            $datel->category = $request->category;
            $datel->quantity = $request->quantity;
            $datel->length = $request->length;
            $datel->chest = $request->chest;
            $datel->waist = $request->waist;
            $datel->hip = $request->hip;
            $datel->shoulder = $request->shoulder;
            $datel->sleeve = $request->sleeve;
            $datel->arm = $request->arm;
            $datel->neck = $request->neck;
            $datel->Kuffs = $request->Kuffs;
            $datel->kuff = $request->kuff;
            $datel->collar = $request->collar;
            $datel->collar_size = $request->collar_size;
            $datel->patti = $request->patti;
            $datel->daman = $request->daman;
            $datel->pocket = $request->pocket;
            $datel->shirt_pocket = $request->shirt_pocket;
            $datel->shirt_fitting = $request->shirt_fitting;
            $datel->shirt_fitting_size = $request->shirt_fitting_size;
            $datel->coat_length = $request->coat_length;
            $datel->coat_chest = $request->coat_chest;
            $datel->coat_waist = $request->coat_waist;
            $datel->coat_hip = $request->coat_hip;
            $datel->coat_shoulder = $request->coat_shoulder;
            $datel->coat_neck = $request->coat_neck;
            $datel->cross_back = $request->cross_back;
            $datel->cot_collar = $request->cot_collar;
            $datel->wal_pocket = $request->wal_pocket;
            $datel->side_choke = $request->side_choke;
            $datel->coat_daman = $request->coat_daman;
            $datel->ins_pocket = $request->ins_pocket;
            $datel->textarea = $request->textarea;
            $datel->trail_date = $request->trail_date;
            $datel->delivery_date = $request->delivery_date;
            $datel->advance = $request->advance;
            $datel->total_amount = $request->total_amount;
            $datel->coustmer_contact = $request->coustmer_contact;
            $datel->coustmer_address = $request->coustmer_address;
           
            $datel->save();
            // Detail::create($data);

            return redirect('/coats')->with('message','Data Added Successfully');
        } catch (\Exception $ex) {
            return redirect('/coats')->with('message','Something Went Wrong'.$ex);
        }
            

    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coat  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Coat $coat)
    {
        return view('admin.coats.show',compact('coat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coat  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Coat $coat)
    {
        return view('admin.coats.edit',compact('coat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coat  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(CoatFormRequest $request, Coat $coat)
    {
        $data = $request->validated();
        $coat->fill($data);
        $coat->save();
        return redirect('/coats')->with('message','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coat  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coat $coat)
    {
        $coat->delete();
        return redirect()->back()->with('message','Student Deleted Successfully');
    }

    /**
     * Display the print view for the specified resource.
     *
     * @param  \App\Models\Coat  $coat
     * @return \Illuminate\Http\Response
     */
    public function print(Coat $coat)
    {
        return view('admin.coats.print', compact('coat'));
    }
}
