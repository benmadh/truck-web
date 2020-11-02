<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\VehicleModel;
use App\Brand;
use App\UploadFileMorph;
use App\Upcoming;
use App\UploadFile;
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

        $upcomings =  Upcoming::all();
        $upcoming_data = [];

        foreach($upcomings as $upcoming)
        {
            $upcoming_files = UploadFileMorph::where('related_id', '=', $upcoming->id)
                                           ->where('related_type', '=', 'upcomings')
                                           ->get();
            $upload_file = "";

            foreach($upcoming_files as $files)
            {
                $thumb_images =  UploadFile::where('id', '=', $files->upload_file_id )
                                        ->get();
                foreach($thumb_images as $thumb_image)
                {
                    $upload_file = json_decode($thumb_image->formats);
                }
            }

            $upcoming_data [] = 
            [
                'number'    => $upcoming->Number,
                'files'     => $upload_file
            ];
        }


        $vehicles =  Vehicle::all();
        $vehicle_data = [];

        foreach($vehicles as $vehicle)
        {
            $file_morph = UploadFileMorph::where('related_id', '=', $vehicle->id)
                                           ->where('related_type', '=', 'vehicles')
                                            ->get();
            $files = "";

            foreach($file_morph as $fileMorph)
            {
                $upload_files =  UploadFile::where('id', '=', $fileMorph->upload_file_id )
                                        ->get();
                foreach($upload_files as $upload_file)
                {
                    $files = json_decode($upload_file->formats);
                }
                
            }
            
            $modal = VehicleModel::findOrFail($vehicle->modal);
            $brand = Brand::findOrFail($vehicle->brand);

            $slug =  $this->dealUrl($modal->name,$brand->name);

            $vehicle_data [] = 
            [
                'id'        => $vehicle->id,
                'number'    => $vehicle->number,
                'slud_url'  => $slug,
                'type'      => $vehicle->type,
                'modal'     => $modal->name,
                'brand'     => $brand->name,
                'files'     => $files
            ];
        }

         //dd($vehicle_data);
        
        return view('front-end.pages.index',\compact(['models', 'brands','vehicle_data','upcoming_data']));
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

        $next_trucks = DB::table('upcomings')
                        ->join('upload_file_morph', 'upcomings.id', '=', 'upload_file_morph.related_id')
                        ->join('upload_file', 'upload_file_morph.upload_file_id', '=', 'upload_file.id')
                        ->where('upload_file_morph.related_type', '=', 'upcomings')
                        ->get();

    $upcomings = (array) json_decode($next_trucks);

        return view('front-end.pages.truck-detail', \compact(['vehicle', 'truck_list','images','upcomings']));
    }



    public function dealUrl($modal_name,$brand_name) 
    {
        // replace non letter or digits by -
         $text = preg_replace('~[^\\pL\d]+~u', '-', $modal_name.'-'.$brand_name);

         // trim
         $text = trim($text, '-');

         // transliterate
         $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

         // lowercase
         $text = strtolower($text);

         // remove unwanted characters
         $text = preg_replace('~[^-\w]+~', '', $text);

         if (empty($text))
         {
           return 'n-a';
         }

         return $text;
   }
}
