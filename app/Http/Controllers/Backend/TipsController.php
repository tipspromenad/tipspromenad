<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Tipspromenad;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tips = Tipspromenad::all();
        return view('backend.tips.tips-index', compact('tips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.tips.tips-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $tipspromenad = new Tip();
        $tipspromenad->user_id = access()->user()->id;
        $tipspromenad->name = $request->name;
        $tipspromenad->description = $request->description;
        $tipspromenad->save();

        $tips = Tipspromenad::all();
        return redirect()->action('Backend\TipsController@index')->withFlashSuccess('Tipspromenaden "'. $tipspromenad->name .'" är nu skapad.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tipspromenad = Tipspromenad::find($id);
        return view('backend.tips.tips-edit', compact('tipspromenad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return "destroy plz";
        Tipspromenad::find($id)->delete($id);
        return redirect()->back()->withFlashSuccess('Tipspromenaden är permanent raderad.');
    }
}
