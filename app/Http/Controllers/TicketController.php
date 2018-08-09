<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Ticket;
use Session;
use Illuminate\Http\Request;

class TicketController extends Controller
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
        $slug = null;
        $slug = Session::get('slug');
         
        $activities = Activity::all();
        return view('tickets/create',compact('activities','slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Ticket();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/tickets/image/',$fileName);
            $actividad->map      = $fileName;

        }
        if($request->hasFile('content')){
            $file = $request->file('content');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/files/tickets/content/',$fileName);
            $actividad->map      = $fileName;

        }

        $ticket->name           = $request->input('name');
        $ticket->description    = $request->input('description');
        $ticket->adult          = $request->input('adult');
        $ticket->child          = $request->input('child');


        if(Session::get('slug')){
            $path = Session::get('slug');
            Session::forget('slug');
            return redirect('Entradas/'.$path);
        }
        return redirect('Entradas');
        

        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        Session::put('slug', $slug);
        
        
        $activity = Activity::where('name',$slug)->get();
        $activity = $activity[0];

        $tickets = Ticket::where('activity_id',$activity->id)->paginate(5);
        $activityy = $activity->name;

        return view('tickets/show',compact('tickets','activityy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Ticket Edit';
    }

    /**
     * Update the specified resource in storage.
     *p
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
}
