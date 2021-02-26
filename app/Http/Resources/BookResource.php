<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public static $map = [
        'id' => 'identifier',
        'titulo' => 'full_name',
        'descripcion' => 'descripcion',
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
