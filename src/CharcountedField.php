<?php

namespace ElevateDigital\CharcountedFields;

use Laravel\Nova\Fields\Field;

class CharcountedField extends Field
{

    public function maxChars(int $characters)
    {
        return $this->withMeta(['maxChars' => $characters]);
    }

    public function warningAt(int $characters)
    {
        return $this->withMeta(['warningAt' => $characters]);
    }

}
