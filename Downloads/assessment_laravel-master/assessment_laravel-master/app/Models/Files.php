<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $table = 'files_tbl';
    protected $fillable = ['user_id', 'filename', 'filepath'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
