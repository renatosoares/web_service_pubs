<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * Save publisher
     *
     * @param string $name
     * @param string $city
     * @param string $state
     * @param string $country
     *
     * @return void
     */
    public function scopeStore(string $name, string $city, string $state, string $country): void
    {
        // TODO
    }
}
