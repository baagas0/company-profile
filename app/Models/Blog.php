<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Blog extends Model
{
    use HasFactory;
    use LogsActivity;

    protected static $logAttributes = ['judul' =>'title', ];
    protected static $recordEvents = ['created', 'updated', 'deleted'];

    protected static $logName = 'User Logs Activity';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName}";
    }
}
