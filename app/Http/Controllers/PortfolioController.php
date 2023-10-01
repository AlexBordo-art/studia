<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolio.index', ['portfolios' => $portfolios]);
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->projectName = $request->projectName;
        $portfolio->description = $request->description;
        $portfolio->imageURL = $request->imageURL;
        $portfolio->completionDate = $request->completionDate;
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }

    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio.show', ['portfolio' => $portfolio]);
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio.edit', ['portfolio' => $portfolio]);
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->projectName = $request->projectName;
        $portfolio->description = $request->description;
        $portfolio->imageURL = $request->imageURL;
        $portfolio->completionDate = $request->completionDate;
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route('portfolio.index');
    }
}