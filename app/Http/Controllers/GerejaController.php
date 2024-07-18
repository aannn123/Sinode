<?php

namespace App\Http\Controllers;

use App\Models\Church;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

use App\Models\Gereja;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SeatChurch;

class GerejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gereja::all();

        return view('pages.gereja.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = Gereja::all();

        return view('pages.gereja.create')->with([
            'item' => $item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // Gereja::create($data);
        // return redirect()->route('gereja.index');
        $data = $request->all();
        $seat = (int)$data['seat'];
        $result = Gereja::create($data);
        for ($i=0; $i < $seat; $i++) { 
            SeatChurch::create([
                'churc_id' => $result['id'],
                'number' => $i+1,
                'status' => 'Active',
            ]);
        }
        return redirect()->route('gereja.index');
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
        $item = Gereja::findOrFail($id);

        return view('pages.gereja.edit')->with([
            'item' => $item
        ]);
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
        $data = $request->all();
        $gereja = Gereja::findOrFail($id);
        // for ($i=0; $i < $data['seat']; $i++) { 
        //     SeatChurch::create([
        //         'churc_id' => $gereja['id'],
        //         'number' => $i+1,
        //         'status' => 'Active',
        //     ]);
        // }
        $gereja->update($data);
        return redirect()->route('gereja.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gereja::findOrFail($id);
        $item->delete();

        return redirect()->route('gereja.index');
    }
}
