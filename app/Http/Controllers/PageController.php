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
use App\Mail\ContactForm;
use Mail;

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
    
        $upcomings =  Upcoming::all();
        $upcoming_data = [];

        foreach($upcomings as $upcoming)
        {
            $upcoming_files = UploadFileMorph::where('related_id', '=', $upcoming->id)
                                           ->where('related_type', '=', 'upcomings')
                                           ->get();

            $brand = Brand::where('id', $upcoming->brand)->first();
            $modal = VehicleModel::where('id', $upcoming->modal)->first();

            $slug = $upcoming->dealUrl($modal->name, $brand->name);

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
                'files'     => $upload_file,
                'slug'      => $slug
            ];
        }

        $vehicles =  Vehicle::latest()->limit(12)->get();
        $vehicle_data = [];

        foreach($vehicles as $vehicle)
        {
            $file_morph = UploadFileMorph::where('related_id', '=', $vehicle->id)
                                            ->where('related_type', '=', 'vehicles')
                                            ->orderby('order','desc')
                                            ->get();
            $files = "";
           
            foreach($file_morph as $fileMorph)
            {
                $upload_files =  UploadFile::where('id', '=', $fileMorph->upload_file_id )
                                            ->orderBy('created_at','desc')
                                            ->get();
                
                foreach($upload_files as $upload_file)
                {
                    $files = json_decode($upload_file->formats);
                }
                
            }
            
            $modal = VehicleModel::findOrFail($vehicle->modal);
            $brand = Brand::findOrFail($vehicle->brand);

            $slug =  $this->dealUrl($vehicle->type,$modal->name,$brand->name);

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
        $upcoming_data = [];
        $upcomings =  Upcoming::all();

        foreach($upcomings as $upcoming)
        {
            $brand = Brand::where('id', $upcoming->brand)->first();
            $modal = VehicleModel::where('id', $upcoming->modal)->first();

            $slug = $upcoming->dealUrl($modal->name, $brand->name);

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
                'files'     => $upload_file,
                'slug'      => $slug
            ];
        }

        return view('front-end.pages.about', \compact(['upcoming_data']));
    }


    // car listing page
    public function listing(Request $request)
    {
        $vehicles = Vehicle::latest();
        $models = VehicleModel::all();
        $brands =  Brand::all();

        $type = $request->type;

        
        if($type != "")
        {
            $vehicles->where('type', '=', $type);  
        }

        if($request->model != "")
        {
            $vehicles->where('modal', '=', $request->model);         
        }

        if($request->brand != "")
        {
            //dd($request->brand);
            $vehicles->where('brand', '=', $request->brand);
        }

        if($request->brand && $request->model)
        {
            $vehicles->where('modal','=', $request->model)
                     ->where('brand', '=', $request->brand);
        }
       
        return view('front-end.pages.listing')->with([
            'vehicles' => $vehicles->paginate(6),
            'models'   => $models,
            'brands'   => $brands,
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
        
         //get upcomings trucks
        $upcoming_data = [];
        $upcomings =  Upcoming::all();

        $images = [];

        //get images
        $upload_file_morphs = UploadFileMorph::where('related_id', $vehicle->id)
                                        ->where('related_type', 'vehicles')
                                        ->orderBy('order','desc')
                                        ->get();

        foreach($upload_file_morphs as $upload_file_morph)
        {
            $upload_files = UploadFile::where('id',$upload_file_morph->upload_file_id)
                                        ->orderBy('created_at','desc')
                                        ->get();
            //dd($upload_files);
            foreach($upload_files as $upload_file)
            {   
                $images[] = $upload_file;
            }
        }

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

            $brand = Brand::where('id', $upcoming->brand)->first();
            $modal = VehicleModel::where('id', $upcoming->modal)->first();

            
            $slug = $upcoming->dealUrl($modal->name, $brand->name);
           
            $upcoming_data [] = 
            [
                'number'    => $upcoming->Number,
                'files'     => $upload_file,
                'slug'      => $slug
            ];
        }
        
        $main_image = "";

        foreach($images as $image)
        {
            $main_image = $image;
        }

        //dd($main_image);
        return view('front-end.pages.truck-detail', \compact(['vehicle', 'truck_list','images','upcoming_data','main_image']));
    }



    public function dealUrl($vehicle_type, $modal_name, $brand_name) 
    {   
       
        // replace non letter or digits by -
         $text = preg_replace('~[^\\pL\d]+~u', '-', $vehicle_type.'-'.$modal_name.'-'.$brand_name);
         
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

   public function submitContactForm(Request $request)
   {
        $form_data = 
        [
            'email'     => $request->email,
            'telephone' => $request->telefono,
            'address'   => $request->address,
            'message'   => $request->message ,
            'url'       => $request->url
        ];
        

        Mail::to('sajithradalage@yahoo.com')->send(new ContactForm($form_data));

        session()->flash('success','Abbiamo ricevuto la tua richiesta, un membro del nostro team ti contatterà');
        return redirect()->back();
   }
}
