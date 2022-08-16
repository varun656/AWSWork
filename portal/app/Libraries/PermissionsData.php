<?php

namespace App\Libraries;

class PermissionsData
{
    const ROLES = [
        'super-admin',
        'admin',
        'agency',
        'agent',
        'visitor',
    ];

    const PERMISSIONS = [

        /********************* FOR SUPER-ADMIN *********************/

        'super-admin' => [
            'User' => [
                'view-users' => 'can view users',
                'view-user' => 'can view user',
                'add-user' => 'add user',
                'edit-user' => 'edit user',
                'delete-user' => 'delete user',
            ],

            'Question' => [
                'view-questions' => 'can view questions',
                'view-question' => 'can view question',
                'add-question' => 'add question',
                'edit-question' => 'edit question',
                'delete-question' => 'delete question',
                'answer-question' => 'answer question',

            ],

            'Profile' => [
                'view-profile' => 'can view profile',
                'add-profile' => 'add profile',
                'edit-profile' => 'edit profile',
                'delete-profile' => 'delete profile',
            ],

            'Space' => [
                'view-space' => 'can view space',
                'add-space' => 'add space',
                'edit-space' => 'edit space',
                'delete-space' => 'delete space',
            ],

        ],

        /********************* FOR ADMIN *********************/

        'admin' => [
            'User' => [
                'view-users' => 'can view users',
                'view-user' => 'can view user',
                'add-user' => 'add user',
                'edit-user' => 'edit user',
                'delete-user' => 'delete user',
            ],

            'Question' => [
                'view-questions' => 'can view questions',
                'view-question' => 'can view question',
                'add-question' => 'add question',
                'edit-question' => 'edit question',
                'delete-question' => 'delete question',
                'answer-question' => 'answer question',

            ],

            'Profile' => [
                'view-profile' => 'can view profile',
                'add-profile' => 'add profile',
                'edit-profile' => 'edit profile',
                'delete-profile' => 'delete profile',
            ],

            'Space' => [
                'view-space' => 'can view space',
                'add-space' => 'add space',
                'edit-space' => 'edit space',
                'delete-space' => 'delete space',
            ],

        ],

        /********************* FOR agency *********************/

        'agency' => [
            'User' => [
                'view-users' => 'can view users',
                'view-user' => 'can view user',
                'add-user' => 'add user',
                'edit-user' => 'edit user',
                'delete-user' => 'delete user',
            ],

            'Question' => [
                'view-questions' => 'can view questions',
                'view-question' => 'can view question',
                'add-question' => 'add question',
                'edit-question' => 'edit question',
                'delete-question' => 'delete question',
                'answer-question' => 'answer question',

            ],

            'Profile' => [
                'view-profile' => 'can view profile',
                'add-profile' => 'add profile',
                'edit-profile' => 'edit profile',
                'delete-profile' => 'delete profile',
            ],

            'Space' => [
                'view-space' => 'can view space',
                'add-space' => 'add space',
                'edit-space' => 'edit space',
                'delete-space' => 'delete space',
            ],

        ],

        /********************* FOR AGENTS *********************/

        'agent' => [

            'Question' => [
                'view-questions' => 'can view questions',
                'view-question' => 'can view question',
                'answer-question' => 'answer question',

            ],

            'Profile' => [
                'view-profile' => 'can view profile',
                'edit-profile' => 'edit profile',
            ],

            'Space' => [
                'view-space' => 'can view space',
                'add-space' => 'add space',
                'edit-space' => 'edit space',
                'delete-space' => 'delete space',
            ],

        ],

        /********************* FOR VISITOR *********************/

        'admin' => [
            'User' => [
                'view-users' => 'can view users',
                'view-user' => 'can view user',
                'add-user' => 'add user',
                'edit-user' => 'edit user',
                'delete-user' => 'delete user',
            ],

            'Question' => [
                'view-questions' => 'can view questions',
                'view-question' => 'can view question',
                'add-question' => 'add question',
                'edit-question' => 'edit question',
                'delete-question' => 'delete question',
                'answer-question' => 'answer question',

            ],

            'Profile' => [
                'view-profile' => 'can view profile',
                'add-profile' => 'add profile',
                'edit-profile' => 'edit profile',
                'delete-profile' => 'delete profile',
            ],

            'Space' => [
                'view-space' => 'can view space',
                'add-space' => 'add space',
                'edit-space' => 'edit space',
                'delete-space' => 'delete space',
            ],

        ],

    ];
}
