<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DNI implements ValidationRule
{
    private function esDNIValido($dni){
        #$letrasDNI = "TRWAGMYFPDXBNJZSQVHLCKE";
        #$indice = (int)substr($dni, 0, 8) % 23;
        #$letraCalculada = $letrasDNI[$indice]; #letra dni correspondiente
        #$letraDNI = strtoupper(substr($dni, -1));
        if(strlen($dni)!=9 || !is_numeric(substr($dni, 0, 8)) || !ctype_alpha(substr($dni, -1))){
            return false;
        #} elseif ($letraCalculada != $letraDNI){
        #    return false;
        }else {
            return true;
        }
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!$this->esDNIValido($value)) {
            $fail(__('validation.custom.dni')[$attribute]);
        }
    }
}
