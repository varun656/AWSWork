<?php

namespace App\Services;

use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryService
{
    public function getAll()
    {
        return CategoryResource::collection(Category::orderBy('name', 'ASC')->get());
    }

    public function create($data)
    {
        $category = Category::create($data);
        return new CategoryResource($category);
    }

    public function update($data)
    {
        $name = $data['name'];

        $id = $data['id'];
        $category = Category::find($id);

        $category->name = $name;

        $category->save();

        // $category = Category::update($data);
        return new CategoryResource($category);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $category = Category::find($data);
        $category->delete();
    }

}
