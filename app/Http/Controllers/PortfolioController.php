<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

use Illuminate\Routing\Controller;

class PortfolioController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'projectName' => 'required|string|max:255',
            'description' => 'required|string',
            'imageURL' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'completionDate' => 'required|date'
        ]);

        $portfolio = new Portfolio();
        $portfolio->projectName = $request->projectName;
        $portfolio->description = $request->description;
        $portfolio->imageURL = $request->imageURL;
        $portfolio->completionDate = $request->completionDate;
        $portfolio->save();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item created successfully.');
    }
}