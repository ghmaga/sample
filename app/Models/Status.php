<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content'];

    public function user()
    {//模型关联User，Statuses
        return $this->belongsTo(User::class);
    }
}
