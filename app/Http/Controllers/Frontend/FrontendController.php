<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('frontend.index');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function macros()
	{
		return view('frontend.macros');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function error()
	{
		$errorHead = 'Nu gick något snett!';
		$errorBody = 'Något blev fel, försök igen, är det rätt länk? Är du inloggad?';
		return view('frontend.error', compact('errorHead', 'errorBody'));
	}
}
