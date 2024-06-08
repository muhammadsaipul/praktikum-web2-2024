<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Ramsey\Uuid\v1;

class MahasiswaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'npm' => 'required|max:8',
            'nik' => 'required',
            'no_telp' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ];
    }
}
