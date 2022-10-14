<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  App\Models\RandNum;

class RandNumController extends Controller
{
     /**
     * 
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return response()->json(['message' => 'Not found!'], 404);
    } 
    /**
     * Create rand_num Information.
     *
     * @return Response
     */
    public function create(Request $request)
    {
 
        if($request->quantity){

            for($i = 0 ; $i <= $request->quantity; $i++){
                $num[$i] =  mt_rand(1000000,9999999);
               }
               $rand_nums = implode(',', $num);
               
            try { 
    
                /** inserting new rand_nums */
    
                $data = RandNum::create([
                    'rand_nums_value'   => $rand_nums,
                    'quantity'          => $request->quantity,
                    'created_by'        => auth()->user()->id,
                ]); 
                return response()->json($data, 201);
    
            } catch (\Exception $e) {
                
                return response()->json(['message' => $e], 500);
            }

        }else{
            return response()->json(['message' => 'Number of quantity is required !'], 500);
        }
        
       

    }


   

}
