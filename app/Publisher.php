<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Undocumented class
 */
class Publisher extends Model
{
    /**
     * Save publisher.
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

    /**
     * Search by name.
     *
     * @param string $name
     *
     * @return string
     */
    public function search(string $name): ?string
    {
        return $this->hydrate(
            DB::select('SELECT public.sp_publishers_select(:pub_name)', [
                'pub_name' => $name,
            ])
        )->first()->sp_publishers_select;
    }

    /**
     * Destroy by id.
     *
     * @param string $id
     *
     * @return void
     */
    public function del(string $id): void
    {
        Db::statement('select public.sp_publishers_delete(:pub_id);', [
            'pub_id' => $id,
        ]);
    }

    /**
     * Update table.
     *
     * @param string $id
     * @param string $name
     * @param string $city
     * @param string $state
     * @param string $country
     *
     * @return void
     */
    public function modernize(string $id, ?string $name, ?string $city, ?string $state, ?string $country): void
    {
        $pub = Publisher::find($id);

        DB::statement('select public.sp_publishers_update(
            :pub_id,
            :pub_name,
            :pub_city,
            :pub_state,
            :pub_country
        );', [
            'pub_id' => $id,
            'pub_name' => $name ?? $pub->name,
            'pub_city' => $city ?? $pub->city,
            'pub_state' => $state ?? $pub->state,
            'pub_country' => $country ?? $pub->country,
        ]);
    }
}
