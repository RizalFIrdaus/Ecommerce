<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HastagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'hastag' => $this->hastag,
            'product' => [
                'id' => $this->product->id,
                'category' => !$this->product->category ? null : [
                    'id' => $this->product->category->id,
                    'name' => $this->product->category->name,
                    'image' => $this->product->category->image,
                    'slug' => $this->product->category->slug,
                ],
                'name' => $this->product->name,
                'slug' => $this->product->slug,
                'image' => $this->product->ProductImages,
                'brand' => !$this->product->brand ? null : [
                    'id' => $this->product->brands->id,
                    'category' => [
                        'id' => $this->product->category->id,
                        'name' => $this->product->category->name,
                        'image' => $this->product->category->image,
                        'slug' => $this->product->category->slug,
                    ],
                    'name' => $this->product->brands->name,
                    'slug' => $this->product->brands->slug,
                    'image' => $this->product->brands->image,
                ],
                'description' => $this->product->description,
                'price' => $this->product->selling_price,
                'quantity' => $this->product->quantity,
                'weight' => $this->product->weight,
                'status' => $this->product->status,
                'meta_title' => $this->product->meta_tittle,
                'meta_keyword' => $this->product->meta_keyword,
                'meta_description' => $this->product->meta_description,
                'sold' => $this->product->sold,
                'province' => !$this->product->provice ? null : [
                    'id' => $this->product->provice->id,
                    'title' => $this->product->provice->title,
                    'slug' => $this->product->provice->slug,
                    'vector' => $this->product->provice->vector,
                    'description' => $this->product->provice->description,
                    'kebudayaan' => $this->product->provice->kebudayaan,
                    'makanan' => $this->product->provice->makanan,
                    'image' => $this->product->provice->image,
                ],
            ]
        ];
    }
}
