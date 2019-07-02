<?php

namespace Muhghazaliakbar\CharcountedFields;

use Laravel\Nova\Fields\Expandable;
use Laravel\Nova\Fields\Field;

class FieldCounted extends Field
{
    use Expandable;

    public function maxChars(int $characters)
    {
        return $this->withMeta(['maxChars' => $characters]);
    }

    public function warningAt(int $characters)
    {
        return $this->withMeta(['warningAt' => $characters]);
    }

}
