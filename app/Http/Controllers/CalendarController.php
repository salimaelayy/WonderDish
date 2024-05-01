<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\User;
use App\Notifications\ReservationNotification;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("calendar.calendar");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

// dd($request);

        $data = [
            "title" => $request->title,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd
        ];

        Calendar::create($data);


        // Notify staff member
        // if ($request->has('user_id')) {
        //     $staffMember = User::find($request->user_id);
        //     if ($staffMember) {
        //         $staffMember->notify(new ReservationNotification($reservation));
        //     } else {
        //         // Handle case where staff member is not found
        //         return back()->with('error', 'Staff member not found.');
        //     }
        // } else {
        //     // Handle case where user_id is not provided in the request
        //     return back()->with('error', 'User ID not provided.');
        // }
    
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendar $calendar)
    {
        //

        $events = Calendar::all()->map(function (Calendar $event) {
            $start = $event->dateStart . " " . $event->timeStart;
            $end = $event->dateEnd . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->name,
                "color" => "#000",



            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendar $calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendar $calendar)
    {
        //
    }
}
