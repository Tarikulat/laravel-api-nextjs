<?php

namespace App\Http\Resources\Admin;

use App\Classes\Helper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id"         => $this->id,
            "name"       => $this->name,
            "slug"       => $this->slug,
            "status"     => $this->status,
            "image"      => Helper::getFilePath($this->img_path),
            "created_at" => $this->created_at,
            "created_by" => $this->whenLoaded('createdBy')
        ];
    }
}
