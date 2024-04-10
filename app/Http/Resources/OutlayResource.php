<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutlayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'prepayment' => $this->prepayment,
            'prepayment_date' => $this->prepayment_date,
            'all_payment_date' => $this->all_payment_date,
            'comments' => $this->comments
        ];
    }
}
