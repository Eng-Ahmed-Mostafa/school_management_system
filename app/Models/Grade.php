<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'notes'])]
class Grade extends Model
{
    // Get the translated name of the grade
    public function getNameTranslate()
    {
        $name = json_decode($this->name, true);
        $locale = app()->getLocale();
        return $name[$locale] ?? $name['en'] ?? null;
    }

    public function getTranslation(string $field,string $locale)
    {
        $value = $this->$field ? json_decode($this->$field, true) : [];
        return $value[$locale] ?? null;
    }

}
