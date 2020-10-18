<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\VehicleModel;
use App\Brand;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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

    public function homeIndex()
    {
        $models = VehicleModel::all();
        $brands =  Brand::all();
        
        $next_trucks = Vehicle::limit(10)->get();

        $vehicles =  Vehicle::latest()->limit(6)->get();

        return view('front-end.pages.index',\compact(['models', 'brands','vehicles','next_trucks']));
    }

    // about us view
    public function aboutus()
    {
        $next_trucks = Vehicle::limit(10)->get();

        return view('front-end.pages.about', \compact(['next_trucks']));
    }

    // car listing page
    public function listing(Request $request)
    {
        $vehicles = Vehicle::latest()->paginate(6);

    
        if($request->model != "")
        {
            $vehicles->where('model_id', '=', $request->model);
        }

        if($request->brand != "")
        {
            $vehicles->where('model_id', '=', $request->model);
        }
        
        return view('front-end.pages.listing')->with([
            'vehicles' => $vehicles,
        ]);
    }

    public function contactus()
    {
        return view('front-end.pages.contactus');
    }

    public function truckDetail($slug, $id)
    {
        $vehicle = Vehicle::findOrFail($id);

        $truck_list = Vehicle::limit(10)->get();
        return view('front-end.pages.truck-detail', \compact(['vehicle', 'truck_list']));
    }
}
