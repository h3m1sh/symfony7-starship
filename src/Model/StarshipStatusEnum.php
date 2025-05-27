<?php

namespace App\Model;

enum StarshipStatusEnum: string
{
    case WAITING = 'waiting';
    case PROGRESS = 'in progress';
    case COMPLETED = 'completed';
}
