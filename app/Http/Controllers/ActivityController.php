<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $activities = Activity::orderBy('id','ASC')->paginate(5);
//cambio
        return view('activities/index',compact('activities'));
    }
   /* public static function comprueba(Tipoentrada $ticket, $tickets_id)
    {
        if(count($tickets_id) > 0){
            for ($i=0; $i < count($tickets_id) ; $i++) { 
            
                if($tickets_id[$i] == $ticket->activity_id ){
                    return false;
                }
            }
        }
        return true;
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::orderBy('name','ASC')->get();
        return view('activities/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new Activity();

        if($request->hasFile('map')){
            $file = $request->file('map');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/activities/map/',$fileName);
            $actividad->map      = $fileName;

        }
        
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/activities/logo/',$fileName);
            
        }

        if($request->hasFile('fondo')){
            $file = $request->file('fondo');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/activities/fondo/',$fileName);
            
        }

        if($request->hasFile('terms')){
            $file = $request->file('terms');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/files/activities/terms/',$fileName);
            $actividad->terms      = $fileName;

        }

        $actividad->name        =  ucwords($request->input('name'));
        $actividad->description =  $request->input('description');
        $actividad->slogan      =  $request->input('slogan');
        $actividad->location    =  $request->input('location');
        $actividad->coordinates =  $request->input('coordinates');
        $actividad->background  =  $request->input('background');

        

        $categoryName = explode('/',$request->input('category'));
        $categoria = Category::where('name',$categoryName[0])->get();
        $actividad->category_id =   $categoria[0]->id;
        $actividad->save();


        return redirect('/Actividades');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $slug_a = explode('-',$slug);
        $name = $slug_a[0];
        $type = $slug_a[1];


        $category = Category::where('name',$name)
                            ->where('type',$type)
                            ->get();
        $activities = Activity::where('category_id',$category[0]->id)->get();



        return view('activities/show',compact('activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //dd($slug);
        $activity = Activity::where('name',$slug)->get();
        $activity = $activity[0];
        $categories = Category::all();
        //$actividades = Activity::all();
        //dd($actividades);

        return view('activities.edit',compact('activity','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $slug)
    {
        $activity = Activity::where('name',$slug)->get();
        $activity = $activity[0];
        
        $activity->fill($request->except('map','image','terms'));
        
        if($request->hasFile('map') ){

            $file = public_path().'/images/activities/map/'.$activity->map;
            \File::delete($file);

            $Nfile = $request->file('map');
            $FileName = time().$Nfile->getClientOriginalName();
            $Nfile->move(public_path().'/images/activities/map/',$FileName);
            $activity->map  = $FileName;

        }
/*
        if($request->hasFile('image') ){

            $file = public_path().'/images/activities/image/'.$activity->image;
            \File::delete($file);

            $Nfile = $request->file('image');
            $FileName = time().$Nfile->getClientOriginalName();
            $Nfile->move(public_path().'/images/activities/image/',$FileName);
            $activity->image  = $FileName;

        }*/
        if($request->hasFile('terms') ){

            $file = public_path().'/files/activities/terms/'.$activity->terms;
            \File::delete($file);

            $Nfile = $request->file('terms');
            $FileName = time().$Nfile->getClientOriginalName();
            $Nfile->move(public_path().'/files/activities/terms/',$FileName);
            $activity->terms  = $FileName;

        }
        

        $activity->save();

        return redirect('/Actividades');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $activity = Activity::where('name',$slug)->get();
        $activity = $activity[0];

        $file = public_path().'/images/activities/map/'.$activity->map;
        \File::delete($file);

        $file = public_path().'/images/activities/image/'.$activity->image;
        \File::delete($file);

        $file = public_path().'/files/activities/terms/'.$activity->terms;
        \File::delete($file);

        $activity->delete();
        return redirect('/Actividades');
    }
}
