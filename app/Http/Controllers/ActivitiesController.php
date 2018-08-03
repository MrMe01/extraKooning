<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cities = Cities::orderBy('id','ASC')->paginate(5);
        //$empleados= Valach\Empleado::with('emergencias')->get();
       // $categories = Categories::orderBy('id','ASC')->paginate(5);
        $actividades = Activity::orderBy('id','ASC')->paginate(5);
        $categorias = Category::all();


        $tickets = Ticket::all();

        $tickets_id = array();

        if(count($tickets) > 0){
            for ($i=0; $i < count($tickets) ; $i++) { 
            
                if(self::comprueba($tickets[$i],$tickets_id)){
                    array_push($tickets_id,$tickets[$i]->activities_id);
                }
            }
        }




        return view('activities/index',compact('actividades','categorias','tickets_id'));
    }



    //Filtro
    public static function comprueba(Tipoentrada $ticket, $tickets_id)
    {
        if(count($tickets_id) > 0){
            for ($i=0; $i < count($tickets_id) ; $i++) { 
            
                if($tickets_id[$i] == $ticket->activities_id ){
                    return false;
                }
            }
        }
        return true;
    }

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
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/activities/image/',$fileName);
            $actividad->image      = $fileName;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $actividades)
    {
        //dd($actividades);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
       //dd($activity);
        $categories = Category::all();
        //$actividades = Activity::all();
        //dd($actividades);

        return view('activities.edit',compact('activity','categories'));
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
        return "Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Destroy";
    }
}
