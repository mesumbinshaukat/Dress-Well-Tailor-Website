<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Requests\DetailFormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class DetailController extends Controller
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
            $details = Detail::where('coustmer_name','LIKE',"%$search%")->orwhere('coustmer_contact','LIKE',"%$search%")->orwhere('id','LIKE',"$search")->orderBy($orderBy, $orderDirection)->paginate(10);
        }else {
            $details = Detail::orderBy($orderBy, $orderDirection)->paginate(10);
        }
        
        // Append query parameters to pagination links
        $details->appends($request->query());
        
        return view('admin.details.index',compact('details','search','sort'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.details.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetailFormRequest $request)
    {
        try {
            $data=$request->validated();
            $datel = new Detail();
            $datel->coustmer_name = $request->coustmer_name;
            $datel->category = $request->category;
            $datel->quantity = $request->quantity;
            $datel->length = $request->length;
            $datel->chest = $request->chest;
            $datel->waist = $request->waist;
            $datel->asteen = $request->asteen;
            $datel->hip = $request->hip;
            $datel->side_pocket = $request->side_pocket;
            $datel->shoulder = $request->shoulder;
            $datel->front_pocket = $request->front_pocket;
            $datel->sleeve = $request->sleeve;
            $datel->fitting = $request->fitting;
            $datel->collar = $request->collar;
            $datel->arm = $request->arm;
            $datel->neck = $request->neck;
            $datel->kuff = $request->kuff;
            $datel->patti = $request->patti;
            $datel->daman = $request->daman;
            $datel->shalwar_length = $request->shalwar_length;
            $datel->pajama = $request->pajama;
            $datel->shalwar_pauncha = $request->shalwar_pauncha;
            $datel->pocket = $request->pocket;
            $datel->shalwar_gair = $request->shalwar_gair;
            $datel->lastic = $request->lastic;
            $datel->asan = $request->asan;
            $datel->shalwar_zip = $request->shalwar_zip;
            $datel->textarea = $request->textarea;
            $datel->trail_date = $request->trail_date;
            $datel->delivery_date = $request->delivery_date;
            $datel->advance = $request->advance;
            $datel->total_amount = $request->total_amount;
            $datel->coustmer_contact = $request->coustmer_contact;
            $datel->coustmer_address = $request->coustmer_address;
           
            $datel->save();
            // Detail::create($data);

            return redirect('/details')->with('message','Data Added Successfully');
        } catch (\Exception $ex) {
            return redirect('/details')->with('message','Something Went Wrong'.$ex);
        }
            

    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('admin.details.show',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        return view('admin.details.edit',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(DetailFormRequest $request, Detail $detail)
    {
        $data = $request->validated();
        $detail->fill($data);
        $detail->save();
        return redirect('/details')->with('message','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
