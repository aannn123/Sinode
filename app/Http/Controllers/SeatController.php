<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seat;
use App\Models\Gereja;
use App\Models\SeatChurch;

use Illuminate\Pagination\Paginator;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function kursi()
    {
        $items = Gereja::all();

        return view('pages.seat.indexSeat')->with([
            'items' => $items
        ]);
    }

    public function setKursi($id)
    {
        $gereja = Gereja::where('id', $id)->first();
        $items = Seat::where('churc_id', $gereja->id)->paginate(25);
        // var_dump($items);die();

        return view('pages.seat.setKursi')->with([
            'items' => $items,
            'gereja' => $gereja
        ]);
    }

    public function setActive($id,$kursi)
    {
        $data = Seat::findOrFail($kursi);
        $gereja = Gereja::where('id', $id)->first();
        $data['status'] = 'Active';
        $data->update();
        return redirect()->route('setKursi',$gereja->id); 
    }

    public function setTidak($id,$kursi)
    {
        $data = Seat::findOrFail($kursi);
        $gereja = Gereja::where('id', $id)->first();
        $data['status'] = 'Tidak';
        $data->update();
        return redirect()->route('setKursi', $gereja->id);
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
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function setActive($id, $kursi)
    // {
    //     $data = SeatChurch::findOrFail($kursi);
    //     $gereja = Gereja::where('id', $id)->first();
    //     $data['status'] = 'Active';
    //     $data->update();
    //     return redirect()->route('setKursi', $gereja->id);

    // }


    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $gereja = Gereja::where('id', $id)->first();
        $seat = Seat::where('churc_id', $gereja->id)->first();
        $status = $request->input('status');

        var_dump($status);die();
        $seat->update();

        // $seat->save();

        // $status = $request->input('status');
        // $item = Seat::findOrFail($id);
        // $item->update($status);
        return redirect()->route('setKursi', $gereja->id);


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
