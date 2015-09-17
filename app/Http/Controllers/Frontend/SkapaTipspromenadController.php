<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Frontend\SkapaTipspromenadRequest;
use App\Question;
use App\Tipspromenad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SkapaTipspromenadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SkapaTipspromenadRequest $request)
    {
        if ( Auth::user() ){
            $user_id = Auth::user()->id;
            $unique_hash_id = null;
        }
        else{
            // The reserved characters are: ampersand ("&") dollar ("$") plus sign ("+") comma (",") forward slash ("/") colon (":") semi-colon (";") equals ("=") question mark ("?") 'At' symbol ("@") and pound ("#").

            // The characters generally considered unsafe are: space, question mark ("?"), less than and greater than ("<>") open and close brackets ("[]") open and close braces ("{}") pipe ("|") backslash ("\") caret ("^") tilde ("~") and percent ("%"). I may have forgotten one or more, which leads to me echoing Carl V's answer. In the long run you are probably better off using a "white list" of allowed characters and then encoding the string rather than trying to stay abreast of characters that are disallowed by servers and systems.
            $user_id = null;
            $unique_hash_id = bcrypt($request->name);
            $unsafeCharacters = [
                                    '/','?','&','$','+',',',':',';','=','@','#',
                                    ' ','<','>','[',']','{','}','|','\\','^','~','%'
                                ];
            $unique_hash_id = str_replace($unsafeCharacters, '-', $unique_hash_id);
        }
        $slug = Str::slug($request->name);
        $skapadTipspromenad = Tipspromenad::create([
                'name' => $request->name,
                'slug' => $slug,
                'mobile' => $request->mobile,
                'stop_date' => $request->stop_date,
                'user_id' => $user_id,
                'unique_hash_id' => $unique_hash_id,
                'showHelp' => 1
            ]);
        $skapadTipspromenad->idCode = $skapadTipspromenad->id + 1000;
        $skapadTipspromenad->save();
        return redirect( action('Frontend\SkapaTipspromenadController@edit',
            [
                'tipsId' => $skapadTipspromenad->id,
                'slug' => $slug,
                'unique_hash_id' => $unique_hash_id
            ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($tipsId, $slug, $unique_hash_id = null)
    {
        if(Auth::guest() && $unique_hash_id != null && $tipspromenad = Tipspromenad::where('unique_hash_id', $unique_hash_id)->where('id', $tipsId)->where('slug', $slug)->first()){
            return view('frontend.skapa.tipspromenad', compact('tipspromenad'));
            return [
                    'guest' => 'asd',
                    'tipspromenad' => $tipspromenad
                    ];
        }
        elseif (Auth::user() && $tipspromenad = Tipspromenad::where('user_id', Auth::user()->id)->where('id', $tipsId)->where('slug', $slug)->first()) {
            $tipspromenad = Tipspromenad::find($tipsId);
            return view('frontend.skapa.tipspromenad', compact('tipspromenad'));
            return [
                    'tadaa' => 'You successfully loaded the awesome tipspromenad',
                    'tipspromenad' => $tipspromenad
                    ];
        }
        else{

            if($unique_hash_id == null){
                return redirect()->guest('auth/login');
            }
                $errorHead = 'Nej du, nu blev det tokigt!';
                $errorBody = 'Den länk du försökte nå går inte att hitta, du måste antingen logga in eller använda den exakta adressen för att nå din tipspromenad';
            return view('frontend.error', compact('errorHead','errorBody'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
        //
    }

    public function dontShowHelpAgain(Request $request)
    {
        $tipspromenad = Tipspromenad::find($request->tipsID);
        $tipspromenad->showHelp = 0;
        $tipspromenad->save();
        return 'success';
    }

    public function setOrderOfQuestions(Request $request)
    {
        $tipspromenad = Tipspromenad::find($request->tipsID);
        $tipspromenad->order_of_questions = $request->order_of_questions;
        $tipspromenad->save();
        return ['success' => $tipspromenad->order_of_questions];
    }
    public function getOrderOfQuestions($tipsID)
    {
        $tipspromenad = Tipspromenad::find($tipsID);
        if(is_array($tipspromenad->order_of_questions)){
            return $tipspromenad->order_of_questions;
        }
        else{
            return [];
        }
    }

    public function getSelectedQuestions($tipsID)
    {
        $tipspromenad = Tipspromenad::find($tipsID);
        $selectedQuestions = $tipspromenad->questions;
        return $selectedQuestions;
    }
    public function getAllQuestions($tipsID)
    {
        $questions = Question::with(['user', 'tipspromenader'])->get();

        foreach ($questions as $question) {
            $question['tipspromenaderCount'] = $question->tipspromenaderCount();
            $question['created_at_diffForHumans'] = $question->created_at->diffForHumans();

            foreach ($question->tipspromenader as $tipspromenad) {
                if($tipspromenad->id == $tipsID){
                    $question['selectedQuestion'] = true;
                }
            }
        }
        // selectedQuestion
        return $questions;
    }

    public function saveAndSyncSelectedQuestions(Request $request)
    {
        $tipspromenad = Tipspromenad::find($request->tipsID);
        $tipspromenad->syncQ($request->order_of_questions);
        return $tipspromenad->order_of_questions;
    }

}
