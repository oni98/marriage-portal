<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    private $root = 'backend.package.';

    public function index()
    {
        $packages = Package::all();
        return view($this->root . 'index', ['packages' => $packages]);
    }

    public function create()
    {
        return view($this->root . 'create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $package = new Package();
            $package->name = $request->name;
            $package->price = $request->price;
            $package->limit = $request->limit;

            if ($package->save()) {
                DB::commit();
                return redirect()->route('packages.index')->with('success', 'Package created successfully');
            }

            DB::rollBack();
            return redirect()->back()->with('error', 'Package could not be created');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Package could not be created');
        }
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view($this->root . 'edit', ['package' => $package]);
    }

    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);
        $package->name = $request->name;
        $package->price = $request->price;
        $package->limit = $request->limit;

        if ($package->save()) {
            return redirect()->route('packages.index')->with('success', 'Package updated successfully');
        }

        return redirect()->back()->with('error', 'Package could not be updated');
    }


    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        if ($package->delete()) {
            return redirect()->back()->with('success', 'Package deleted successfully');
        }

        return redirect()->back()->with('error', 'Package could not be deleted');
    }
}
