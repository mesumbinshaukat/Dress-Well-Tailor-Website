<?php

namespace App\Http\Controllers;

use App\Models\PantShirt;
use Illuminate\Http\Request;
use App\Http\Requests\PantShirtFormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class PantShirtController extends Controller
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
            $pantShirts = PantShirt::where('coustmer_name','LIKE',"%$search%")->orwhere('coustmer_contact','LIKE',"%$search%")->orwhere('id','LIKE',"$search")->orderBy($orderBy, $orderDirection)->paginate();
        }else {
            $pantShirts = PantShirt::orderBy($orderBy, $orderDirection)->paginate(10);
        }
        
        return view('admin.pantshirts.index',compact('pantShirts','search','sort'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pantshirts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PantShirtFormRequest $request)
    {
        try {
            $data=$request->validated();
            $pantShirt = new PantShirt();
            $pantShirt->coustmer_name = $request->coustmer_name;
            $pantShirt->category = $request->category;
            $pantShirt->quantity = $request->quantity;
            // Shirt measurements
            $pantShirt->shirt_length = $request->shirt_length;
            $pantShirt->chest = $request->chest;
            $pantShirt->waist = $request->waist;
            $pantShirt->shoulder = $request->shoulder;
            $pantShirt->sleeve = $request->sleeve;
            $pantShirt->arm = $request->arm;
            $pantShirt->neck = $request->neck;
            $pantShirt->collar = $request->collar;
            $pantShirt->cuff = $request->cuff;
            $pantShirt->shirt_pocket = $request->shirt_pocket;
            $pantShirt->shirt_fitting = $request->shirt_fitting;
            // Pant measurements
            $pantShirt->pant_length = $request->pant_length;
            $pantShirt->pant_waist = $request->pant_waist;
            $pantShirt->hip = $request->hip;
            $pantShirt->thigh = $request->thigh;
            $pantShirt->knee = $request->knee;
            $pantShirt->bottom = $request->bottom;
            $pantShirt->pant_pocket = $request->pant_pocket;
            $pantShirt->pant_fitting = $request->pant_fitting;
            $pantShirt->belt_loop = $request->belt_loop;
            $pantShirt->zipper = $request->zipper;
            // Common fields
            $pantShirt->textarea = $request->textarea;
            $pantShirt->trail_date = $request->trail_date;
            $pantShirt->delivery_date = $request->delivery_date;
            $pantShirt->advance = $request->advance;
            $pantShirt->total_amount = $request->total_amount;
            $pantShirt->coustmer_contact = $request->coustmer_contact;
            $pantShirt->coustmer_address = $request->coustmer_address;
           
            $pantShirt->save();

            return redirect('/pantshirts')->with('message','Data Added Successfully');
        } catch (\Exception $ex) {
            return redirect('/pantshirts')->with('message','Something Went Wrong'.$ex);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PantShirt $pantshirt)
    {
        return view('admin.pantshirts.show',compact('pantshirt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PantShirt $pantshirt)
    {
        return view('admin.pantshirts.edit',compact('pantshirt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PantShirtFormRequest $request, PantShirt $pantshirt)
    {
        $data = $request->validated();
        $pantshirt->fill($data);
        $pantshirt->save();
        return redirect('/pantshirts')->with('message','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PantShirt $pantshirt)
    {
        $pantshirt->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
