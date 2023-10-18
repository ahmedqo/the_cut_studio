<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use App\Rules\LinkRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ConsultController extends Controller
{
    public function index_action()
    {
        return response()->json(Consult::orderBy('id', 'DESC')->get()->map(function ($item) {
            return [
                'start' => $item->date . 'T' .  $item->hour,
                'title' => ucfirst($item->type()->name),
                'ev_type' => ucfirst($item->type()->name),
                'ev_email' => $item->email,
                'ev_phone' => $item->phone,
                'ev_name' => $item->name,
                'ev_date' => $item->date,
                'ev_hour' => $item->hour,
                'color' => '#B44E34',
            ];
        }));
    }

    public function times_action($date)
    {
        $data = Consult::where('date', $date)->pluck('hour')->toArray();
        return response()->json([
            'data' => $data,
        ]);
    }


    public function store_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', new LinkRule],
            'email' => ['required', 'string', new LinkRule],
            'phone' => ['required', 'string', new LinkRule],
            'date' => ['required', 'string', new LinkRule],
            'hour' => ['required', 'string', new LinkRule],
            'type' => ['required', new LinkRule],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        $hours = Consult::where('date', $request->date)->pluck('hour')->toArray();

        if (in_array($request->hour, $hours)) {
            return Redirect::back()->with([
                'message' => __('Hour reserved'),
                'type' => 'success'
            ]);
        }

        Consult::create($request->all());

        if (env('MAIL_FROM_ADDRESS')) {
            $obj = [
                'name' => 'The Cut Studio',
                'from' => env('MAIL_NOREPLAY_ADDRESS'),
                'to' => env('MAIL_FROM_ADDRESS'),
                'subject' => __('New Update')
            ];
            MAIL::raw(__('New Update Available Check The Link: ') . $_SERVER['HTTP_HOST'], function ($message) use ($obj) {
                $message->from($obj['from'], $obj['name']);
                $message->to($obj['to'])->subject($obj['subject']);
            });
        }

        return Redirect::back()->with([
            'message' => __('Created successfully'),
            'type' => 'success'
        ]);
    }
}
