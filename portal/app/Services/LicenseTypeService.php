<?php

namespace App\Services;

use App\Http\Resources\LicenseTypeResource;
use App\Models\LicenseType;

class LicenseTypeService
{
    public function getAll()
    {
        return LicenseTypeResource::collection(LicenseType::orderBy('name', 'ASC')->get());
    }

    public function create($data)
    {
        $licenseType = LicenseType::create($data);
        return new LicenseTypeResource($licenseType);
    }

    public function update($data)
    {
        $name = $data['name'];

        $id = $data['id'];
        $licenseType = LicenseType::find($id);

        $licenseType->name = $name;

        $licenseType->save();

        return new LicenseTypeResource($licenseType);

    }

    public function delete($data)
    {
        $licenseType = LicenseType::find($data);
        $licenseType->delete();
    }

}
