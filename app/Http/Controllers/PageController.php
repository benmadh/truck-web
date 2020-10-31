<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\VehicleModel;
use App\Brand;
use App\UploadFileMorph;
use App\Upcoming;
use Illuminate\Support\Facades\DB;

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
        
        $next_trucks = DB::table('upcomings')
                            ->join('upload_file_morph', 'upcomings.id', '=', 'upload_file_morph.related_id')
                            ->join('upload_file', 'upload_file_morph.upload_file_id', '=', 'upload_file.id')
                            ->where('upload_file_morph.related_type', '=', 'upcomings')
                            ->get();
        $upcomings = (array) json_decode($next_trucks);

        $vehicles =  Vehicle::latest()->limit(6)->get();

        return view('front-end.pages.index',\compact(['models', 'brands','vehicles','upcomings']));
    }

    // about us view
    public function aboutus()
    {
        $next_trucks = DB::table('upcomings')
                            ->join('upload_file_morph', 'upcomings.id', '=', 'upload_file_morph.related_id')
                            ->join('upload_file', 'upload_file_morph.upload_file_id', '=', 'upload_file.id')
                            ->where('upload_file_morph.related_type', '=', 'upcomings')
                            ->get();
        $upcomings = (array) json_decode($next_trucks);

        return view('front-end.pages.about', \compact(['upcomings']));
    }

    // car listing page
    public function listing(Request $request)
    {
        $vehicles = Vehicle::latest();
        $models = VehicleModel::all();
        $brands =  Brand::all();

        $type = $request->type;
        if($request->model != "")
        {
            $vehicles->where(function($query) use($request){
                $query->where('model', '=', $request->model)
                ->where('type', '=', $request->type );
            });         
        }

        if($request->brand != "")
        {
            //dd($request->brand);
            $vehicles->where(function($query) use($request){
                $query->where('brand', '=', $request->brand)
                        ->where('type', '=', $request->type );
            });
        }

        if($request->brand && $request->model)
        {
            $vehicles->where('model','=', $request->model)
                        ->where('brand', '=', $request->brand)
                        ->where('type', '=', $request->type );
        }
       
        return view('front-end.pages.listing')->with([
            'vehicles' => $vehicles->paginate(6),
            'models'   => $models,
            'brands'   => $brands
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
        
        $images = DB::table('upload_file')
                        ->join('upload_file_morph', 'upload_file.id', '=', 'upload_file_morph.upload_file_id') 
                        ->where('upload_file_morph.related_id', '=' , $id)
                        ->get();     
        return view('front-end.pages.truck-detail', \compact(['vehicle', 'truck_list','images']));
    }
}
