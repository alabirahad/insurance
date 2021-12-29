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

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $user    = User::get();
        return view('admin.index')->with(compact('user'));
    }

    public function employeeClaim(Request $request)
    {
        $EmployeeClaim    = EmployeeClaim::get();
        return view('admin.employeeClaim')->with(compact('EmployeeClaim'));
    }
    
    public function homeClaim(Request $request)
    {
        $HomeClaim    = HomeClaim::get();
        return view('admin.homeClaim')->with(compact('HomeClaim'));
    }

    public function offShopClaim(Request $request)
    {
        $OfficeShopClaim    = OfficeShopClaim::get();
        return view('admin.offShopClaim')->with(compact('OfficeShopClaim'));
    }

    public function create(Request $request)
    {

        $view = view('country.create')->render();
        return response()->json(['html' => $view]);
    }

    public function store(Request $request)
    {
        try {
            $validate = Validator::make(request()->all(), [
                'name'   => 'required|regex:/^[a-zA-Z-. ]+$/u|unique:countries',
                'image'  => 'required',
                'status' => Rule::in(['active', 'inactive']),
            ]);

            if ($validate->fails()) {
                return Response::json(['success' => false, 'heading' => 'Validtion Error', 'message' => $validate->errors()], 422);
            }

            $image     = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/country'), $imageName);

            $target         = new Country;
            $target->name   = $request->name;
            $target->image  = $imageName ?? '';
            $target->status = 'active';
            // $target->updated_by = auth()->id();
            // $target->created_by = auth()->id();
            if ($target->save()) {
                return Response::json(['success' => true], 200);
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function edit(Request $request)
    {
        $target = Country::where('id', $request->id)->first();
        $view   = view('country.edit', compact('target'))->render();
        return response()->json(['html' => $view]);
    }

    public function update(Request $request)
    {
        try {
            $validate = Validator::make(request()->all(), [
                'name'   => 'required|regex:/^[a-zA-Z-. ]+$/u|unique:countries,id,' . $request->id,
                'status' => Rule::in(['active', 'inactive']),
            ]);
            if ($validate->fails()) {
                return Response::json(['success' => false, 'heading' => 'Validtion Error', 'message' => $validate->errors()], 422);
            }

            if (!empty($request->file('image'))) {
                $image     = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalName();
                $image->move(public_path('/uploads/country'), $imageName);
            }

            $target        = Country::where('id', $request->id)->first();
            $target->name  = $request->name ?? $target->name;
            $target->image = $imageName ?? $target->image;

            if ($target->update()) {
                return Response::json(['success' => true], 200);
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Request $request, $id)
    {
        $target = Country::find($id);

        if (empty($target)) {
            Session::flash('error', 'Invalid Data Id');
        }

        $fileName = 'uploads/country/' . $target->image;
        if (File::exists($fileName)) {
            File::delete($fileName);
        }

        if ($target->delete()) {
            Session::flash('success', "Country Delete Successfully!");
            return redirect()->back();
        } else {
            Session::flash('error', "Country Delete Unsuccessfully!");
            return redirect()->back();
        }
        return redirect('/country');
    }

    public function filter(Request $request)
    {
        $url = 'fil_search=' . urlencode($request->fil_search);
        return Redirect::to('country?' . $url);
    }

}
