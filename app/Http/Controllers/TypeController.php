<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class TypeController extends Controller
{
    public function index_view()
    {
        $data = Type::orderBy('id', 'DESC')->get();
        return view('type.index', compact('data'));
    }

    public function store_view()
    {
        return view('type.store');
    }

    public function patch_view($id)
    {
        $data = Type::findorfail($id);
        return view('type.patch', compact('data'));
    }

    public function store_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        Type::create($request->all());

        return Redirect::back()->with([
            'message' => __('Created successfully'),
            'type' => 'success'
        ]);
    }

    public function patch_action(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        Type::findorfail($id)->update($request->all());

        return Redirect::back()->with([
            'message' => __('Updated successfully'),
            'type' => 'success'
        ]);
    }

    public function clear_action($id)
    {
        Type::findorfail($id)->delete();

        return Redirect::route('views.types.index')->with([
            'message' => __('Deleted successfully'),
            'type' => 'success'
        ]);
    }
}
