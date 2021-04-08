<?php

namespace App\Modules\PublicPages\Http\Validations;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Contracts\Validation\Validator;
use App\Modules\PublicPages\Exceptions\AxiosValidationExceptionBuilder;


class LoginValidation extends FormRequest
{

  public function rules()
  {
    return [

      'email' => 'required|email|exists:app_users,email',
      'password' => 'required|string',
    ];
  }

  public function authorize()
  {
    return true;
  }

  public function messages()
  {
    return [
      'email.exists' => 'Invalid details provided',
    ];
  }

  /**
   * Overwrite the validator response so we can customise it per the structure requested from the fronend
   *
   * @param \Illuminate\Contracts\Validation\Validator $validator
   * @return void
   */
  protected function failedValidation(Validator $validator)
  {
    /**
     * * And handle there. That will help for reuse. Handling here for compactness purposes
     * ? Who knows they might ask for a different format for the enxt validation
     */
    throw new AxiosValidationExceptionBuilder($validator);
  }
}
