<?php

namespace App\Http\Resources\Front;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AreaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id"     => $this->id,
            "name"   => $this->name,
            "slug"   => $this->slug,
            "status" => $this->status
        ];
    }
}
