<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class DNI implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */

    public function passes($attribute, $value)
    {
        #$letrasDNI = "TRWAGMYFPDXBNJZSQVHLCKE";
        #$indice = (int)substr($dni, 0, 8) % 23;
        #$letraCalculada = $letrasDNI[$indice]; #letra dni correspondiente
        #$letraDNI = strtoupper(substr($dni, -1));
        if(strlen($value)!=9 || !is_numeric(substr($value, 0, 8)) || !ctype_alpha(substr($value, -1))){
            return false;
        #} elseif ($letraCalculada != $letraDNI){
        #    return false;
        }else {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El DNI introducido no es valido';
    }

}
