<?php

namespace App\Enums;

class TripStatusEnum
{
    public const TRIP_STATUS_ENUM = [
        'FIND_DRIVER',
        'ASSIGN_TO_DRIVER',
        'DRIVER_TO_SOURCE',
        'DRIVER_TO_DESTINATION',
        'TRIP_ENDED'
    ];

    public const SUGGESTED_DRIVER_STATUS_ENUM = [
        'ASSIGNED', 'REJECTED', 'ACCEPTED'
    ];
}
