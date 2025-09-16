<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use Illuminate\Http\Request;
use App\Http\Requests\SuitFormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class SuitController extends Controller
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
            $suits =  Suit::where('coustmer_name','LIKE',"%$search%")->orwhere('coustmer_contact','LIKE',"%$search%")->orwhere('id','LIKE',"$search")->orderBy($orderBy, $orderDirection)->paginate();
        }else {
            $suits = Suit::orderBy($orderBy, $orderDirection)->paginate(10);
        }
        
        return view('admin.suits.index',compact('suits','search','sort'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suits.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuitFormRequest $request)
    {
        try {
            $data=$request->validated();
            $datel = new Suit();
            $datel->coustmer_name = $request->coustmer_name;
            $datel->category = $request->category;
            $datel->quantity = $request->quantity;
            $datel->length = $request->length;
            $datel->chest = $request->chest;
            $datel->waist = $request->waist;
            $datel->hip = $request->hip;
            $datel->shoulder = $request->shoulder;
            $datel->chaak = $request->chaak;
            $datel->sleeve = $request->sleeve;
            $datel->cross_back = $request->cross_back;
            $datel->bress = $request->bress;
            $datel->kaj = $request->kaj;
            $datel->bress_nepal = $request->bress_nepal;
            $datel->daman = $request->daman;
            $datel->pent_length = $request->pent_length;
            $datel->pent_inside = $request->pent_inside;
            $datel->pent_fly = $request->pent_fly;
            $datel->pent_waist = $request->pent_waist;
            $datel->pent_hip = $request->pent_hip;
            $datel->pent_thai = $request->pent_thai;
            $datel->pent_knee = $request->pent_knee;
            $datel->pent_bottom = $request->pent_bottom;
            $datel->pocket = $request->pocket;
            $datel->hip_pocket = $request->hip_pocket;
            $datel->s_bottom = $request->s_bottom;
            $datel->french_fly = $request->french_fly;
            $datel->loops = $request->loops;
            $datel->textarea = $request->textarea;
            $datel->trail_date = $request->trail_date;
            $datel->delivery_date = $request->delivery_date;
            $datel->advance = $request->advance;
            $datel->total_amount = $request->total_amount;
            $datel->coustmer_contact = $request->coustmer_contact;
            $datel->coustmer_address = $request->coustmer_address;
           
            $datel->save();
            // Detail::create($data);

            return redirect('/suits')->with('message','Data Added Successfully');
        } catch (\Exception $ex) {
            return redirect('/suits')->with('message','Something Went Wrong'.$ex);
        }
            

    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suit  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Suit $suit)
    {
        return view('admin.suits.show',compact('suit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suit  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Suit $suit)
    {
        return view('admin.suits.edit',compact('suit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suit  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(SuitFormRequest $request, Suit $suit)
    {
        $data = $request->validated();
        $suit->fill($data);
        $suit->save();
        return redirect('/suits')->with('message','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suit  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suit $suit)
    {
        $suit->delete();
        return redirect()->back()->with('message','Student Deleted Successfully');
    }
}
