<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'assetManagement' => [
        'title'          => 'Asset management',
        'title_singular' => 'Asset management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'team'                     => 'Team',
            'team_helper'              => '',
        ],
    ],
    'asset'         => [
        'title'          => 'Isotopes',
        'title_singular' => 'Isotope',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'team'           => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
            'name'              => 'Name',
            'name_helper'       => '',
        ],
    ],
    'hospital'           => [
        'title'          => 'Hospitals',
        'title_singular' => 'Hospital',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'address'           => 'Address',
            'address_helper'    => '',
            'license_no'        => 'License No',
            'license_no_helper' => '',
            'expiry'            => 'Expiry',
            'expiry_helper'     => '',
            'rhso'              => 'RPO',
            'rhso_helper'       => '',
            'rep'               => 'BIR Name',
            'rep_helper'        => '',
            'created_by'        => 'Created By',
            'created_by_helper' => '',
            'date'              => 'Date',
            'date_helper'       => '',
            'contact_no'        => 'Contact No',
            'contact_no_helper' => '',
            'airline'           => 'Airline',
            'airline_helper'    => '',
            'airline_etd'       => 'Airline ETD',
            'airline_etd_helper'=> '',
            'airline_eta'       => 'Airline ETA',
            'airline_eta_helper'=> '',
            'vessel'            => 'Vessel',
            'vessel_helper'     => '',
            'vessel_etd'        => 'Vessel ETD',
            'vessel_etd_helper' => '',
            'vessel_eta'        => 'Vessel ETA',
            'vessel_eta_helper' => '',
            'stowage'           => 'Stowage',
            'stowage_helper'    => '',
            'rigging'           => 'Rigging',
            'rigging_helper'          => '',
            'placards'                => 'Placards',
            'placards_helper'         => '',
            'vehicle'           => 'Vehicle',
            'vehicle_helper'    => '',
            'vehicle_plate'           => 'Vehicle Plate',
            'vehicle_plate_helper'    => '',
            'vehicle_etd'             => 'Vehicle ETD',
            'vehicle_etd_helper'      => '',
            'vehicle_eta'             => 'Vehicle ETA',
            'vehicle_eta_helper'      => '',
            'forwarder'               => 'Forwarder',
            'forwarder_helper'        => '',
            'forwarder_plate'         => 'Forwarder Plate',
            'forwarder_plate_helper'  => '',
            'forwarder_etd'           => 'Forwarder ETD',
            'forwarder_etd_helper'    => '',
            'forwarder_eta'           => 'Forwarder ETA',
            'forwarder_eta_helper'    => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'stock'          => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'asset'                => 'Asset',
            'asset_helper'         => '',
            'current_stock'        => 'Price',
            'current_stock_helper' => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
            'team'                 => 'Team',
            'team_helper'          => '',
        ],
    ],
    'transaction'    => [
        'title'          => 'Manage Orders',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'hospital'              => 'Hospital',
            'hospital_helper'       => '',
            'rx_number'             => 'RX Number',
            'rx_number_helper'      => '',
            'asset'                 => 'Isotope',
            'asset_helper'          => '',
            'asset_product'         => 'Product',
            'asset_product_helper'  => '',
            'product_activity'      => 'Activity',
            'product_activity_helper'      => '',
            'activity_mci'          => 'mCi',
            'activity_mci_helper'      => '',
            'activity_mbq'          => 'MBq',
            'activity_mbq_helper'      => '',
            'discrepancy'           => 'Discrepancy',
            'discrepancy_helper'    => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
        ],
    ],
];
