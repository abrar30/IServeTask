<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $addresses = Address::all()->toArray();
        
        return view('crud.index', compact('addresses')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('crud.create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = new Address([
          'address1' => $request->get('address1'),
            'address2' => $request->get('address2'),
          'postcode' => $request->get('postcode'),
            'state' => $request->get('state'),
            'country' => $request->get('country')
        ]);

        $address->save();
        return redirect('/crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = Address::find($id);
        
        return view('crud.edit', compact('address','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $address = Address::find($id);
         $address->address1 = $request->get('address1');
         $address->address2 = $request->get('address2');
         $address->postcode = $request->get('postcode');
         $address->state = $request->get('state');
        $address-> country = $request->get('country');
        $address->save();
        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::find($id);
      $address->delete();

      return redirect('/crud');
    }
}
