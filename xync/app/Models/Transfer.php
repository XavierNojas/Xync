<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'tbl_transactions';
    protected $fillable = ['reference_number', 'sender_name', 'sender_contact', 'recipient_name', 'recipient_contact', 
    'transaction_type', 'amount_local_currency', 'currency_conversion_code', 'amount_converted',
    'transaction_status','branch_sent', 'branch_recieved', 'transfer_fee_id', 'datetime_transaction'];

}