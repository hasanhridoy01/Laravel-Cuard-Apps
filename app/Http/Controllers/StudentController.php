<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\student;

class StudentController extends Controller
{

    /**
     * Add New Student Form Method
     */
    public function AddNewStudentForm()
    {
    	return view('students.create');
    }

    /**
     * Insert New Student Method
     */
    public function InsertNewStudent(Request $request)
    {   
    	//form validation
    	$this -> validate($request, [
            'name' => 'required',
            'email' => 'required | unique:students',
            'cell' => 'required | unique:students',
            'uname' => 'required | unique:students',
    	]);

    	if ( $request-> hasFile('photo') ) {
    		//file Upload
	    	$imgaes = $request -> file('photo');
	    	$photo_name = md5(time().rand()) .'.'. $imgaes -> getClientOriginalExtension();
	    	$imgaes -> move(public_path('media/student/'), $photo_name);
    	}else{
    		$photo_name = '';
    	}

    	//Data Send With Database
    	student::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'cell' => $request -> cell,
            'uname' => $request -> uname,
            'photo' => $photo_name,
    	]);
        
        //Redirect Back Page
    	return redirect('student-all') -> with('success', 'Student Data Added Successful');
    }

    /**
     * View All Student Method
     */
    public function ViewAllStudent()
    {   
    	$all_student_data = student::latest() -> get();
    	return view('students.index', compact('all_student_data'));
    }

    /**
     * Show Single Student Method
     */
    public function ShowSingleStudent($id)
    {   
    	$single_student_data = student::find($id);
    	return view('students.show' , compact('single_student_data'));
    }

    /**
     * Edit Single Student Method
     */
    public function EditSingleStudent($id)
    {
    	$edit_data = student::find($id);
    	return view('students.edit', compact('edit_data'));
    }

    /**
     * Delete Single Student Method
     */
    public function DeleteSingleStudent($id)
    {
    	$delete_student_data = student::find($id);
    	$delete_student_data -> delete();

    	//Redirect Back Page
    	return redirect() -> back() -> with('success', 'Student Data Deleted Successful');
    }

    /**
     * Update Single Student Method
     */
    public function UpdateSingleStudent(Request $update, $id)
    {   
    	//value recive
    	$update_data = student::find($id);
        
        //file Upload
        if ( $update -> hasFile('new_photo') ) {
        	//file Upload
	    	$imgaes = $update -> file('new_photo');
	    	$photo_name = md5(time().rand()) .'.'. $imgaes -> getClientOriginalExtension();
	    	$imgaes -> move(public_path('media/student/'), $photo_name);
	    	unlink('media/student/' . $update -> old_photo );
        }else{
        	$photo_name = $update -> old_photo;
        }

        //data Update
    	$update_data -> name = $update -> name;
    	$update_data -> email = $update -> email;
    	$update_data -> cell = $update -> cell;
    	$update_data -> uname = $update -> uname;
    	$update_data -> photo = $photo_name;
    	$update_data -> update();

    	//Redirect Back Page
    	return redirect() -> back() -> with('success', 'Student Data Updated Successful'); 
    }
}
