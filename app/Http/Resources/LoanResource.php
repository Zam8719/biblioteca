<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
{

    public static $map = [
        'id' => 'identifier',
        'usuario' => 'user_id',
        'libro' => 'book_id',
        'fecha_salida' => 'fecha_salida',
        'fecha_entrada' => 'fecha_entrada',
    ];

    public function generateLinks($request)
    {
        return [
            [
                'rel' => 'self',
                'href' => route('book.show', $this->id),
                'href' => route('user.show', $this->id),
            ],
        ];
    }
    
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
