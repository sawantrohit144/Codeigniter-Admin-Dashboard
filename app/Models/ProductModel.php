<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = ['categories_id',
                                'name',
                                'mrp',
                                'price',
                                'qty',
                                'image',
                                'short_desc',
                                'description',
                                'meta_title',
                                'meta_desc',
                                'meta_keyword',
                                'status'];

    public function category()
    {
        return $this->belongsTo('CategoryModel', 'categories_id');
    }

}
 ?>
