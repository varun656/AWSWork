<?php

namespace App\Services;

use App\Http\Resources\AgencyResource;
use App\Models\Agency;
use App\Models\AgencyLicenseTypes;

class AgencyService
{
    public function getAll()
    {
        return AgencyResource::collection(Agency::orderBy('name', 'ASC')->get());
    }

    public function create($data)
    {
        $agency = Agency::create($data);
        return new AgencyResource($agency);
    }

    public function update($data)
    {
        $id = $data['id'];
        $agency = Agency::find($id);

        if (isset($data['name'])) {
            $agency->name = $data['name'];
        }

        if (isset($data['country_id'])) {
            $agency->country_id = $data['country_id'];
        }

        if (isset($data['state_id'])) {
            $agency->state_id = $data['state_id'];
        }

        if (isset($data['city_id'])) {
            $agency->city_id = $data['city_id'];
        }

        if (isset($data['address'])) {
            $agency->address = $data['address'];
        }

        if (isset($data['mobile'])) {
            $agency->mobile = $data['mobile'];
        }

        if (isset($data['landline'])) {
            $agency->landline = $data['landline'];
        }

        if (isset($data['homepage'])) {
            $agency->homepage = $data['homepage'];
        }

        if (isset($data['logo'])) {
            $agency->logo = $data['logo'];
        }

        $agency->save();

        return new AgencyResource($agency);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $agency = Agency::find($data);
        $agency->delete();
    }

    public function agencyByUserId($data)
    {
        $userId = $data['user_id'];
        $visitor = Agency::where('user_id', $userId)->first();
        return new AgencyResource($visitor);
    }

    public function updateAgencyLicenses($data)
    {
        $agencyId = $data['agency_id'];
        $licenseNo = $data['license_nos'];
        $licenseState = $data['license_states'];
        $maxCountLicenseNo = count($licenseNo);
        $maxCountLicenseState = count($licenseState);

        $deletedRows = AgencyLicenseTypes::where('agency_id', $agencyId)->delete();

        for ($i = 0; $i < $maxCountLicenseNo; $i++) {
            if ($licenseNo[$i] != null) {

                $agencyLicense = new AgencyLicenseTypes;
                $agencyLicense->agency_id = $agencyId;
                $agencyLicense->license_type_id = $i;
                $agencyLicense->license_no = $licenseNo[$i];
                $agencyLicense->state_id = $licenseState[$i];
                $agencyLicense->save();

            }
        }

    }

}
