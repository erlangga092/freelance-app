<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = "tagline";

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $fillable = [
        "service_id",
        "tagline",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    // belongs to service
    public function service()
    {
        return $this->belongsTo("App\Models\Service", "service_id", "id");
    }
}