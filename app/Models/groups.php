<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class groups extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'student_id'
        ];

        public function students() {
            return $this->hasMany(students::class);

        }
    use SoftDeletes;
}
