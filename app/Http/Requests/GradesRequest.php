<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class GradesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $required = $this->isMethod('post') ? 'required' : 'nullable';

        return [
            'name_ar' => [$required, 'string', 'max:255'],
            'name_en' => [$required, 'string', 'max:255'],
            'notes' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name_ar.required' => __('validation.required', ['attribute' => __('grade.stage_name_ar')]),
            'name_en.required' => __('validation.required', ['attribute' => __('grade.stage_name_en')]),
            'name_ar.string' => __('validation.string', ['attribute' => __('grade.stage_name_ar')]),
            'name_en.string' => __('validation.string', ['attribute' => __('grade.stage_name_en')]),
            'name_ar.max' => __('validation.max.string', ['attribute' => __('grade.stage_name_ar'), 'max' => 255]),
            'name_en.max' => __('validation.max.string', ['attribute' => __('grade.stage_name_en'), 'max' => 255]),
            'notes.string' => __('validation.string', ['attribute' => __('grade.grade_note')]),
        ];
    }
}
