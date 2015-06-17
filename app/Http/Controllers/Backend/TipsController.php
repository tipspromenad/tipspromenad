<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Tip;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TipsController extends Controller
{
    public function testAjax($id, Request $request)
    {
        dd($id);
        $tips = App\Tip::find($id);
        return Response::json(['data' => array('message' => 'thanks for registering!', 'redirecturl' => '/')]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tips = Tip::all();
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
    public function store()
    {
        //
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
        $tipspromenad = Tip::find($id);
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
        Tip::find($id)->delete($id);
        return redirect()->back()->withFlashSuccess('Tipspromenaden är permanent raderad.');
    }
}
