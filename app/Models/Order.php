<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = "order";

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $fillable = [
        "service_id",
        "freelancer_id",
        "buyer_id",
        "file",
        "note",
        "expired",
        "order_status_id",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    // belongs to user
    public function user_buyer()
    {
        return $this->belongsTo("App\Models\User", "buyer_id", "id");
    }

    public function user_freelancer()
    {
        return $this->belongsTo("App\Models\User", "freelancer_id", "id");
    }

    // belongs to service
    public function service()
    {
        return $this->belongsTo("App\Models\Service", "service_id", "id");
    }

    // belongs to order status
    public function order_status()
    {
        return $this->belongsTo("App\Models\OrderStatus", "order_status_id", "id");
    }
}