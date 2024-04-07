<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserPackage;
use Illuminate\Support\Facades\DB;

class UserPackageController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $userPackage = UserPackage::where('application_id', $request->application_id)->first();
            
            if(empty($userPackage))
                $userPackage = new UserPackage();

            $userPackage->application_id = $request->application_id;
            $userPackage->package_id = $request->package_id;

            if ($userPackage->save()) {
                DB::commit();
                return redirect()->back()->with('success', 'Package assigned successfully');
            }

            DB::rollBack();
            return redirect()->back()->with('error', 'Package could not be assigned');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Package could not be assigned');
        }
    }
}
