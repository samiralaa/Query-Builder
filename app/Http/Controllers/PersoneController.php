<?php

namespace App\Http\Controllers;

use App\Models\Persone;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persone=DB::table('persones')->get();
        return view('persones.index',compact('persone'));
    }


    public function create()
    {
     return view('persones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       DB::table('persones')->insert([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'age'=>$request->age,
        'size'=>$request->size,
        'created_at'=>$request->created_at,
        'updated_at'=>$request->updated_at

       ]);
       return view('persones.index');
    }

 
    public function show( $id)
    {
        $persones= DB::table('persones')->where('id',$id)->first();
        return view('persones.show',compact('persones'));
    }

 
    public function edit( $id)
    {
       $persone=DB::table('persones')->where('id',$id)->first();
        return view('persones.edit',compact('persone'));
    }

    public function update(Request $request,  $id)
    {
       DB::table('persones')->where('id',$id)->update([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'age'=>$request->age,
        'size'=>$request->size,
        'created_at'=>$request->created_at,
        'updated_at'=>$request->updated_at
       ]);
       return view('persones.index');
    }

    public function destroy( $id)
    {
        DB::table('persones')->where('id',$id)->delete();
    }
}
