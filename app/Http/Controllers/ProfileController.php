<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function password_view()
    {
        return view('profile.password');
    }

    public function profile_view()
    {
        $data = Auth::user();
        return view('profile.patch', compact('data'));
    }

    public function password_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => ['required', 'string'],
            'new_password' => ['required', 'string'],
            'confirm_password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return Redirect::back()->with([
                'message' => __('Old password missmatch'),
                'type' => 'error'
            ]);
        }

        if ($request->new_password != $request->confirm_password) {
            return Redirect::back()->with([
                'message' => __('Confirm password missmatch'),
                'type' => 'error'
            ]);
        }

        $password = Hash::make($request->new_password);
        User::find(Auth::user()->id)->update([
            "password" => $password
        ]);

        return Redirect::back()->with([
            'message' => __('Changed successfully'),
            'type' => 'success'
        ]);
    }

    public function profile_action(Request $request)
    {
        $data = Auth::user();

        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'identity' => ['required', 'string', 'unique:users,identity,' . $data->id],
            'email' => ['required', 'string', 'unique:users,email,' . $data->id],
            'phone' => ['required', 'string', 'unique:users,phone,' . $data->id],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        User::findorfail($data->id)->update(
            $request->all()
        );

        return Redirect::back()->with([
            'message' => __('Updated Successfully'),
            'type' => 'success'
        ]);
    }
}
