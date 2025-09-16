<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Detail;
use App\Models\Suit;
use App\Models\Coat;
use App\Models\PantShirt;

class AdminController extends Controller
{
    public function login(){
        // echo Hash::make('raheem123');
        // exit();
        return view('admin.login');
    }
    public function make_login(Request $request){

        $data = array(
            'email' => $request->email,
            'password'=>$request->password,
            'role'=>'admin'
        );
        Alert::success('Login Successfully','Welcome To DressWell');
        // dd($data);
        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard');
        }else {
            return back()->withErrors(['message'=>'Invalid Email & Password']);
        }
    }

    public function dashboard(){

        return view('admin.dashboard');
        
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin.login');

    }

    public function globalSearch(Request $request){
        $query = $request->input('query');
        $module = $request->input('module');
        $results = [];

        if (strlen($query) < 2) {
            return response()->json($results);
        }

        if ($module === 'all' || $module === 'details') {
            $details = Detail::where('coustmer_name', 'LIKE', "%{$query}%")
                ->orWhere('category', 'LIKE', "%{$query}%")
                ->limit(5)
                ->get();
            
            foreach ($details as $detail) {
                $results[] = [
                    'id' => $detail->id,
                    'customer_name' => $detail->coustmer_name,
                    'category' => $detail->category,
                    'module' => 'Kameez/Shalwar',
                    'url' => route('details.show', $detail->id)
                ];
            }
        }

        if ($module === 'all' || $module === 'suits') {
            $suits = Suit::where('coustmer_name', 'LIKE', "%{$query}%")
                ->orWhere('category', 'LIKE', "%{$query}%")
                ->limit(5)
                ->get();
            
            foreach ($suits as $suit) {
                $results[] = [
                    'id' => $suit->id,
                    'customer_name' => $suit->coustmer_name,
                    'category' => $suit->category,
                    'module' => 'Suits',
                    'url' => route('suits.show', $suit->id)
                ];
            }
        }

        if ($module === 'all' || $module === 'coats') {
            $coats = Coat::where('coustmer_name', 'LIKE', "%{$query}%")
                ->orWhere('category', 'LIKE', "%{$query}%")
                ->limit(5)
                ->get();
            
            foreach ($coats as $coat) {
                $results[] = [
                    'id' => $coat->id,
                    'customer_name' => $coat->coustmer_name,
                    'category' => $coat->category,
                    'module' => 'Shirt & Waist Coat',
                    'url' => route('coats.show', $coat->id)
                ];
            }
        }

        if ($module === 'all' || $module === 'pantshirts') {
            $pantshirts = PantShirt::where('coustmer_name', 'LIKE', "%{$query}%")
                ->orWhere('category', 'LIKE', "%{$query}%")
                ->limit(5)
                ->get();
            
            foreach ($pantshirts as $pantshirt) {
                $results[] = [
                    'id' => $pantshirt->id,
                    'customer_name' => $pantshirt->coustmer_name,
                    'category' => $pantshirt->category,
                    'module' => 'Pant & Shirt',
                    'url' => route('pantshirts.show', $pantshirt->id)
                ];
            }
        }

        // Sort results by relevance (exact matches first)
        usort($results, function($a, $b) use ($query) {
            $aExact = stripos($a['customer_name'], $query) === 0 ? 1 : 0;
            $bExact = stripos($b['customer_name'], $query) === 0 ? 1 : 0;
            return $bExact - $aExact;
        });

        return response()->json(array_slice($results, 0, 10));
    }
}
