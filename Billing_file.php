<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing_file extends Model
{
    public $timestamps=false;
    public $table= 'billing_file';
    public $fillable = [
        'rec_id',
        'company_name',
        'invoice_date',
        'kind_attention',
        'file_name',
      //  'created_date',
       // 'modified_date',
    ];

    use HasFactory;
}
