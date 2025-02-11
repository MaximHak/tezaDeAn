<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('backend.user.index', compact('users'));
    }

    public function userStatus(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('users')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('users')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'full_name' => 'string|required',
            'username' => 'required',
            'email' => 'email|nullable|unique:users,email',
            'password' => 'min:4|required',
            'phone' => 'numeric|nullable',
            'photo' => 'string|required',
            'address' => 'string|nullable',
            'role' => 'required|in:admin,vendor,customer',
            'status' => 'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $slug = Str::slug($request->input('username'));
        $slug_count = User::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug .= time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        $status = User::create($data);
        if ($status) {
            return redirect()->route('user.index')->with('success', 'User was created!');
        } else {
            return back() - with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $cities = City::where(['status'=>'active'])->get();
        if ($user) {
            return view('backend.user.edit', compact('user','cities'));
        } else {
            return back()->with('error', 'Data not found');
        }
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

        $user = User::find($id);
        if ($user) {
            $this->validate($request, [
                'full_name' => 'string|required',
                'username' => 'required',
                'email' => 'email|nullable',
                'phone' => 'numeric|nullable',
                'photo' => 'string|required',
                'address' => 'string|nullable',
                'role' => 'required|in:admin,vendor,customer',
                'status' => 'nullable|in:active,inactive',
            ]);
            $data = $request->all();

            $data['password'] = Hash::make($request->password);
            $data['city_id'] = intval($data['city_id']);
            $status = $user->fill($data)->save();
            if ($status) {
                return redirect()->route('user.index')->with('success', 'User was updated!');
            } else {
                return back() - with('error', 'Something went wrong!');
            }
            return view('backend.user.edit', compact('user'));
        } else {
            return back()->with('error', 'Data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $status = $user->delete();
        if ($user) {
            if ($status) {
                return redirect()->route('user.index')->with('success', 'User successfully deleted!');
            } else {
                return back()->with('error', 'Something went wrong!');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }
}
