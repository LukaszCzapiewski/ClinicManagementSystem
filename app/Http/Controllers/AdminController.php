<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;


class AdminController extends Controller
{
    public function addview(){


        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        //$doctor->

        $doctor=new doctor;
        

        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->office=$request->office;
        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfuly');


    }

    public function show_appointments(){

        $data=appointment::all();

        return view('admin.show_appointments',compact('data'));
    }


    public function approve_appointment($id){

    $data=appointment::find($id);

    $data->status='Approved';

    $data->save();

    return redirect()->back();

    }

    public function show_doctor(){

        $data = doctor::all();

        return view('admin.show_doctor', compact('data'));
    }

    public function delete_doctor($id){

        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function mainpanel(){
        return view('admin.home');
    }
}
