<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps=false;
    public $table= 'invoice';
        public $fillable = [
            'rec_id',
            'billing_file_id',
            'claim_number',
            'claim_location',
            'state_code',
            'state_name',
            'rate',
            'total_invoice_amount',
            'vertical',

            'gst_no',
            'igst',
            'cgst',

            'sgst',
            'billing_address',
            'invoice_no',

            'is_paid',
            'amount_recieved',
            'billing_paid_id',


            
        ];
    
        use HasFactory;
}
