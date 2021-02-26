<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public static $map = [
        'id' => 'identifier',
        'nombre' => 'full_name',
        'password' => 'password',
        'email' => 'email_address',
        'updated_at' => 'last_modified',
        'created_at' => 'creation_date',
    ];

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
