<?php

namespace App\Http\Requests;
use App\Models\Announcement;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AnnouncementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'header'=>[
                'required',
                'max:255',
            ],
            'sub_header'=>[
                'required',
                'max:255',
            ],
            'description'=>[
                'required',
                'max:255',
            ],
            'photo'=>[
                'required',
                'max:255',
            ],
            'user_id'=>[
                'required'
            ],
        ];
    }
}
