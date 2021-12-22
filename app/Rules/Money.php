<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Money implements Rule
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
        if (!trim($value)) {
            return true;
        }
        $value = str_replace(",", "", $value);
        if (!is_numeric($value)) {
            return false;
        }

        __debug("Attribute", compact('attribute', 'value'));

        return ((float)$value) > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('The :attribute must be greater than $0.00.');
    }
}
