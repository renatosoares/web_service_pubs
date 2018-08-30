<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    public function store(string $name, string $city, string $state, string $country): void
    {
        DB::statement('SELECT public.sp_publishers_insert(:pub_name, :pub_city, :pub_state, :pub_country)', [
            'pub_name' => $name,
            'pub_city' => $city,
            'pub_state' => $state,
            'pub_country' => $country,
        ]);
    }
}
