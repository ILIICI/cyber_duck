<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'company_id',
        'last_name',
        'email',
        'phone',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
