<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;

class RemindersController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'reminders' => Reminder::all()
        ],200);
    }

    public function show(Reminder $reminder)
    {
        return response()->json([
            'reminder' => $reminder
        ], 200);
    }

    public function store(Request $request)
    {
        $reminder = Reminder::create($request->all());
        return response()->json([
            'reminder' => $reminder
        ], 201);
    }

    public function update(Request $request, Reminder $reminder)
    {
        $reminder->update($request->all());
        return response()->json([
            'reminder' => $reminder
        ], 200);
    }

    public function delete(Reminder $reminder)
    {
        $reminder->delete();
        return response()->json(null, 204);
    }
}
