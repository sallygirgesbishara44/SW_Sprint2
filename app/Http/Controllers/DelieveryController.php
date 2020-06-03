<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelieveryController extends Controller
{
    //
          use Illuminate\Http\Request;
       
          /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            // return view('Delievery.Delievery', [ 'All_ORDERS' => \App\order::all()]);
            return view('Delievery.Delievery', [ 'All_ORDERS' => \App\order::wherenull('status')->get()]);
         
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            // return view('Delievery.show', [ 'profile' => \App\Customer::findOrFail($id)])->with('id',$id);
            return view('Delievery');
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
            $order = \App\order::findOrFail($id);
            return view('Delievery.edit',['order' => $order]);
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
            //
            $order = \App\order::findOrFail($id);
            $order->status = 'READY';
            $order->save();
            $request->session()->flash('status', 'The order is updated');
             return redirect()->route('Delievery.index');
    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    

}

