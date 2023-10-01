<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|string'
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();
        return redirect('/services');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();
        return redirect('/services');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/services');
    }

    public function order($id)
    {
        //Logic for ordering the service
    }
}
