<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'prospects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_name', 'address', 'phone_number', 'company_email', 'company_contact_person', 'user_id',
        'status_lead', 'status_phone_introduction','company_website','company_contact_person_designation','business_card_path','region', 'status_demo', 'status_negotiation', 'status_closed', 'status_not_interested'
        , 'sale_amount', 'sale_quantity', 'last_contacted_date', 'due_contact_date', 'comments'];
}
