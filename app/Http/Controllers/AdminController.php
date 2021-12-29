<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmployeeClaim;
use App\Models\HomeClaim;
use App\Models\OfficeShopClaim;
use App\Models\MgtStatus;
use File;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Redirect;
use Response;
use Session;
use Validator;
use Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $user    = User::get();
        return view('admin.index')->with(compact('user'));
    }

    public function adminDestroy(Request $request, $id)
    {
        $target = User::find($id);
        if (empty($target)) {
            Session::flash('error', 'Invalid Data Id');
        }
        if ($target->delete()) {
            Session::flash('success', "Admin Delete Successfully!");
            return redirect()->back();
        } else {
            Session::flash('error', "Admin Delete Unsuccessfully!");
            return redirect()->back();
        }
        return redirect('/admin');
    }

     public function adminCreate(Request $request)
    {
        return view('admin.adminCreate');
    }

    public function adminStore(Request $request)
    {
        try {
            // dd($request->all());
            $validate = Validator::make(request()->all(), [
                'name'     => 'required|regex:/^[a-zA-Z-. ]+$/u',
                'email'    => 'required|unique:users|email:rfc,dns',
                'password' => 'min:6|required',
            ]);
            if ($validate->fails()) {
                return redirect('admin/create')
                    ->withInput()
                    ->withErrors($validate);
            }

            $target                 = new User;
            $target->name           = $request->name;
            $target->email          = $request->email;
            $target->password       = Hash::make($request->password);
            if ($target->save()) {
                Session::flash('success', "Admin Created Successfully!");
                return redirect('admin');
            } else {
                Session::flash('error', "Admin Create Unuccessfull!");
                return redirect('admin/create');
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    
    public function adminEdit(Request $request, $id)
    {
        $target = User::where('id', $id)->first();
        return view('admin.adminEdit')->with(compact('target'));
    }

    public function adminUpdate(Request $request, $id)
    {
        try {
            $validate = Validator::make(request()->all(), [
                'name'   => 'required|regex:/^[a-zA-Z-. ]+$/u',
                'email'  => 'required|email:rfc,dns|unique:users,id,' . $request->id,
            ]);

            if ($validate->fails()) {
                return redirect('admin/' . $request->id . '/edit')
                    ->withInput()
                    ->withErrors($validate);
            }
            $target        = User::where('id', $request->id)->first();
            $target->name  = $request->name ?? $target->name;
            $target->email = $request->email ?? $target->email;

            if ($target->update()) {
                Session::flash('success', "Admin Updated Successfully!");
                return redirect('admin');
            } else {
                Session::flash('error', "Admin Update Unuccessfull!");
                return redirect('admin/' . $request->id . '/edit');
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }





    public function employeeClaim(Request $request)
    {
        $EmployeeClaim    = EmployeeClaim::get();
        return view('admin.employeeClaim')->with(compact('EmployeeClaim'));
    }

    public function employeeClaimDestroy(Request $request, $id)
    {
        $target = EmployeeClaim::find($id);
        if (empty($target)) {
            Session::flash('error', 'Invalid Data Id');
        }
        if ($target->delete()) {
            Session::flash('success', "Claim Delete Successfully!");
            return redirect()->back();
        } else {
            Session::flash('error', "Claim Delete Unsuccessfully!");
            return redirect()->back();
        }
        return redirect('/admin-employee-claim');
    }

    
    public function homeClaim(Request $request)
    {
        $HomeClaim    = HomeClaim::get();
        return view('admin.homeClaim')->with(compact('HomeClaim'));
    }

    public function homeClaimDestroy(Request $request, $id)
    {
        $target = HomeClaim::find($id);
        if (empty($target)) {
            Session::flash('error', 'Invalid Data Id');
        }
        if ($target->delete()) {
            Session::flash('success', "Claim Delete Successfully!");
            return redirect()->back();
        } else {
            Session::flash('error', "Claim Delete Unsuccessfully!");
            return redirect()->back();
        }
        return redirect('/admin-home-claim');
    }


    public function offShopClaim(Request $request)
    {
        $OfficeShopClaim    = OfficeShopClaim::get();
        return view('admin.offShopClaim')->with(compact('OfficeShopClaim'));
    }

    public function officeClaimDestroy(Request $request, $id)
    {
        $target = OfficeShopClaim::find($id);
        if (empty($target)) {
            Session::flash('error', 'Invalid Data Id');
        }
        if ($target->delete()) {
            Session::flash('success', "Claim Delete Successfully!");
            return redirect()->back();
        } else {
            Session::flash('error', "Claim Delete Unsuccessfully!");
            return redirect()->back();
        }
        return redirect('/admin-off-shop-claim');
    }

}
