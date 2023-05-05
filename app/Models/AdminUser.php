<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'trash','code','twod_weekly_bet_amount','threed_weekly_bet_amount','football_weekly_bet_amount','deleted','parent_id','phone','city','withdrawl_bank_name','withdrawl_bank_acc','weekly_income','km_weekly_income','balance','code_date','direct_agents','family_agents','direct_users','family_users','last_weekly_income','location_id','location_on_off'
    ];
    
}
