<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Rules\LinkRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function index_view()
    {
        $data = Project::orderBy('id', 'DESC')->get();
        return view('project.index', compact('data'));
    }

    public function store_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', new LinkRule],
            'email' => ['required', 'string', new LinkRule],
            'phone' => ['required', 'string', new LinkRule],
            'type' => ['required', new LinkRule],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        Project::create($request->all());

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

    public function clear_action($id)
    {
        Project::findorfail($id)->delete();

        return Redirect::route('views.projects.index')->with([
            'message' => __('Deleted successfully'),
            'type' => 'success'
        ]);
    }
}
