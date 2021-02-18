<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'parentId'=>$this->parentId,
            'categoryName'=>$this->categoryName,
            'isActive'=>$this->isActive,
            'icon'=>$this->icon,
        ];
    }
}
