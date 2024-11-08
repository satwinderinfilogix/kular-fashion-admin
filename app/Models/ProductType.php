<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Department;

class ProductType extends Model
{
    use SoftDeletes;
    protected $guarded =[];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function productTypeDepartments()
    {
        return $this->hasMany(ProductTypeDepartment::class, 'product_type_id')->with('departments');
    }
}
