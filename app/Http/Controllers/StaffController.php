<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $all_staff_data = staff::latest() -> get();
        return view('staff.index', compact('all_staff_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //form validation
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required | unique:staff',
            'cell' => 'required | unique:staff',
            'photo' => 'required | unique:staff',
        ]);
        
        //file Upload
        if ( $request -> hasFile('photo') ) {
            //file upload
            $imgaes = $request -> file('photo');
            $photo_name = md5(time().rand()) .'.'. $imgaes -> getClientOriginalExtension();
            $imgaes -> move(public_path('media/staff/') , $photo_name);
        }else{
            $photo_name = '';
        }

        //Data Send on Database
        staff::create([
            'name'  => $request -> name,
            'email'  => $request -> email,
            'cell'  => $request -> cell,
            'uname'  => $request -> uname,
            'photo'  => $photo_name,
        ]);
        
        //redirect on index page
        return redirect(route('staff.index')) -> with('success', 'Staff Data Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $single_show_data = staff::find($id);
        return view('staff.show', compact('single_show_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $single_edit_data = staff::find($id);
        return view('staff.edit', compact('single_edit_data'));
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
       $update_data = staff::find($id);

       //file upload
       if ( $request -> hasFile('new_photo') ) {
           //file upload
           $imgaes = $request -> file('new_photo');
           $photo_name = md5(time().rand()) .'.'. $imgaes -> getClientOriginalExtension();
           $imgaes -> move(public_path('media/staff/') , $photo_name);
           unlink('media/staff/' . $request -> old_photo );
       }else{
           $photo_name = $request -> old_photo;
       }

       $update_data -> name = $request -> name;
       $update_data -> email = $request -> email;
       $update_data -> cell = $request -> cell;
       $update_data -> uname = $request -> uname;
       $update_data -> photo = $photo_name;
       $update_data -> update();

       //redirect on index page
       return redirect(route('staff.index')) -> with('success', 'Staff Data Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        //delete staff
        $delete_data = staff::find($id);
        $delete_data -> delete();

        //redirect on index page
        return redirect(route('staff.index')) -> with('success', 'Staff Data Deleted Successful');
    }
}
