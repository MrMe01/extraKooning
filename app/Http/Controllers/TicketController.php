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
        $tickets = Ticket::orderBy('id','ASC')->paginate(5);
        return view('tickets/index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $slug = null;
        if (Session::has('users'))
        {
            $slug = Session::get('slug');
        }else{
            Session::forget('slug');
        }


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
            $ticket->image      = $fileName;

        }
        if($request->hasFile('content')){
            $file = $request->file('content');
            $fileName = time().$file->getClientOriginalName();
            $file->move(public_path().'/files/tickets/content/',$fileName);
            $ticket->content      = $fileName;

        }

        $ticket->name           = $request->input('name');
        $ticket->description    = $request->input('description');
        $ticket->adult          = $request->input('adult');
        $ticket->child          = $request->input('child');
        
        //Si existe slug 
        if(Session::get('slug')){
            $path = Session::get('slug');

            $id = Activity::where('name',$path)->get();
            $ticket->activity_id = $id[0]->id;
            Session::forget('slug');
            $ticket->save();
            return redirect('Entradas/'.$path);


        }

        $ac = Activity::where('name',$request->input(('activity')))->get();
        
        $ticket->activity_id = $ac[0]->id;
        $ticket->save();
        return redirect('/Entradas');
        

        


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
    public function edit($slug)
    {
        $path = Session::get('slug');
        $ticket = Ticket::where('name',$slug)->get();
        $ticket = $ticket[0];

        $activities = Activity::all();
        return view('tickets/edit',compact('ticket','slug','activities','path'));
    }

    /**
     * Update the specified resource in storage.
     *p
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $ticket = Ticket::where('name',$slug);
        //$ticket = $ticket[0];

        $ticket->first()->fill($request->all())->save();
        return redirect('/Entradas');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $ticket = Ticket::where('name',$slug)->get();
        $ticket = $ticket[0];

        $ticket->delete();
        return redirect('/Entradas');
    }
}
