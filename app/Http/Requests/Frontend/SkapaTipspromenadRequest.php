<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;

class SkapaTipspromenadRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
            'name' => 'required',
            'mobile' => 'required',
            'mobile_question' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name.required' => 'Du måste ange ett namn.',
                'mobile.required' => 'Du måste ange om denna tipspromenad går att svara på i mobilen.',
                'mobile_question.required' => 'Du måste ange om även frågorna skall synas i mobilen.',
            ];
    }
}
