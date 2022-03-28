<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
