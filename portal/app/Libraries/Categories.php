<?php

namespace App\Libraries;

class Categories
{
    const CATEGORIES = [
        'Life Insurance',
        'Health Insurance',
        'Business Insurance',
        'Property Insurance',
        'Property & Casualty Insurance',
        'Individual Insurance',
        'International Health Insurance',
        'Travel Insurance',
        'Medical Insurance',
        'Insurance Licensing',
        'Insurance Agency',
        'Homeowners Insurance',
        'Renters Insurance',
        'Event Insurance',
    ];

    const SUBCATEGORIES = [
        'Health Insurance' => [
            'International health insurance',
            'Domestic health insurance ',
            'US health insurance',
        ],
        'Insurance Licensing' => [
            'Property & casualty license',
            'Accident, life, & health license',
        ],
        'Event Insurance' => [
            'Wedding insurance',
            'Event cancellation insurance',
        ],
    ];
}
