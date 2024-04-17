<?php 

namespace App\Traits;

use App\Models\User;

trait ModelHelpers{
    public function matches(Self $model): bool
    {
        return $this->id === $model->id;
    }
}