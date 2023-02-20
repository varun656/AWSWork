<?php

namespace App\Services;

use App\Http\Resources\SubcategoryResource;
use App\Models\Subcategory;

class SubcategoryService
{
    public function getAll()
    {
        return SubcategoryResource::collection(Subcategory::all());
    }

    public function create($data)
    {
        $subcategory = Subcategory::create($data);
        return new SubcategoryResource($subcategory);
    }

    public function update($data)
    {
        $name = $data['name'];
        $category_id = $data['category_id'];

        $id = $data['id'];
        $subcategory = Subcategory::find($id);

        $subcategory->name = $name;
        $subcategory->category_id = $category_id;

        $subcategory->save();

        // $subcategory = Subcategory::update($data);
        return new SubcategoryResource($subcategory);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $subcategory = Subcategory::find($data);
        $subcategory->delete();
    }

    public function subcategoriesByCategoryId($data)
    {
        $id = $data['id'];
//
        // $comments = Subcategory::find([10, 2])->categories;
        $subcategories = Subcategory::whereIn('category_id', $id)->orderBy('name', 'ASC')->get();

        // return SubcategoryResource::collection($Subcategories);

        return SubcategoryResource::collection($subcategories);

    }

}
