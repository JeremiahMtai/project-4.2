<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Saving_mod;
use App\Models\Save;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{
    

    public function uploadsavingmod (Request $request)
    {
        $data=new saving_mod;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('savingmod', $imagename); 

        $data->image=$imagename;

        $data->title=$request->title;

        $data->description=$request->description;

        $data->amount=$request->amount;

        $data->save();

        return redirect()->back()->with('message','Product Added Successfully !!');


    }

    // show members on user user dashboard

    // show saving
    public function show_savings()
    {
        $data=saving_mod::paginate(2);
       
        return view('admin.show_savings',compact('data'));
    }

    // delete saving
    public function deletesaving($id)
    {
        $data=saving_mod::find($id);

        $data->delete();
        
        return redirect()->back()->with('message','Saving Delete Successfully !!');
    }

    // update saving
    public function updatesaving($id)
    {
        $data=saving_mod::find($id);

        return view('admin.updatesaving',compact('data'));
    }

    // upd saving
    public function updsaving(Request $request, $id)
    {
        $data=saving_mod::find($id);


        $image=$request->file;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('savingmod', $imagename); 

            $data->image=$imagename;
        }

        $data->title=$request->title;

        $data->description=$request->description;

        $data->amount=$request->amount;

        $data->save();

        return redirect()->back()->with('message','Saving Updated Successfully !!');

    }

    // save
    public function save(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $saving_mod=saving_mod::find($id);

            $save =new save;

            $save->name=$user->name;

            $save->phone=$user->phone;

            $save->address=$user->address;

            $save->saving_type=$saving_mod->title;

            $save->amount=$saving_mod->amount;

            $save->save();

            return redirect()->back()->with('message','You Have Saved Successfully. Thanks !!');
        }
        else
        {
            return redirect('login');
        }
    }
   

    // add members
    public function addmembers(Request $request)
    {
        $data=new member;   
    

        $data->name=$request->name;

        $data->gender=$request->gender;

        $data->phone=$request->phone;

        $data->address=$request->address;

        $data->save();

        return redirect()->back()->with('message','Product Added Successfully !!');


    }

    public function member_saving ()
    {
        return view('admin.m_saving');
    }

    public function member_loan ()
    {
        return view('admin.m_loan');
    }

    public function members ()
    {
        $data=member::all();

        return view('admin.members',compact('data'));
    }
}
