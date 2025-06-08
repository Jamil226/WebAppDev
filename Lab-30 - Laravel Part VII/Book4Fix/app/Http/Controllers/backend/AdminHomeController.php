<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Admins;
use App\Models\backend\FAQs;
use App\Models\backend\Team;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TotalAdmins = Admins::count();
        $TotalTeam = Team::count();
        $TotalFAQs = FAQs::count();
        return view('backend.index', compact('TotalAdmins', 'TotalTeam', 'TotalFAQs'));
    }


    public function registerAdmin()
    {
        $url = url('/admin/register');
        $data = compact('url');
        return view('backend.admin-add')->with($data);
    }


    public function submitAdminRecord(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required',
                'contact' => 'required'
            ]
            );
        $admin = new Admins();
        $admin->first_name = $request['first_name'];
        $admin->last_name = $request['last_name'];
        $admin->email = $request['email'];
        $admin->contact = $request['contact'];
        $admin->password = $request['password'];
        // $admin->password = md5($request['password']);
        $admin->status = 1;
        $admin->save();
        return redirect('/admin/admins-list');
    }


    public function showAdminRecord()
    {

        $admins = Admins::all();

        // Calling the helper function for testing data
        // testData($admins);

    //     echo "<pre>";
    //     print_r($admins->toArray()); //toArry runs only when we have some data in DB
    //    echo  "</pre>";
    //     die;
        $data = compact('admins');
        return view('backend/admins-list')->with($data);

    }

        /**
     * Remove the specified resource from storage.
     */
    public function deleteAdminRecord(string $id)
    {
        $data  = Admins::find($id);
        if(!is_null($data)){
            $data->delete();
        }
        $data = compact('admins');
        return view('backend/admins-list')->with($data);


    }

    public function editAdminRecord($id)
    {

        $data  = Admins::find($id);
        if(is_null($data)){
            return view('backend.admins-list');
        } else {
            $url = url('/admin/update') . "/" . $id;
            $data = compact('admins', 'url');
            return view('backend.admin-add')->with($data);
        }

    }

}
