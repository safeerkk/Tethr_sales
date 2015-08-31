<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Prospect;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Input;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $sales_sum = Prospect::where('status_closed', '1')->sum('sale_amount');
        $sales_quantity = Prospect::where('status_closed', '1')->sum('sale_quantity');
        $closed_count = Prospect::where('status_closed', '1')->count();
        $not_interested_count = Prospect::where('status_not_interested', '1')->count();

        $lead_prospects = Prospect::where('status_lead', '1')
            ->where('status_phone_introduction', '0')
            ->where('status_demo', '0')
            ->where('status_negotiation', '0')
            ->where('status_closed', '0')
            ->orderBy('company_name', 'asc')
            ->get();
        $phone_prospects = Prospect::where('status_lead', '1')
            ->where('status_phone_introduction', '1')
            ->where('status_demo', '0')
            ->where('status_negotiation', '0')
            ->where('status_closed', '0')
            ->orderBy('company_name', 'asc')
            ->get();
        $demo_prospects = Prospect::where('status_lead', '1')
            ->where('status_phone_introduction', '1')
            ->where('status_demo', '1')
            ->where('status_negotiation', '0')
            ->where('status_closed', '0')
            ->orderBy('company_name', 'asc')
            ->get();
        $negotiation_prospects = Prospect::where('status_lead', '1')
            ->where('status_phone_introduction', '1')
            ->where('status_demo', '1')
            ->where('status_negotiation', '1')
            ->where('status_closed', '0')
            ->orderBy('company_name', 'asc')
            ->get();

        return view('dashboard')
            ->with('sales_sum', $sales_sum)
            ->with('sales_quantity', $sales_quantity)
            ->with('not_interested_count', $not_interested_count)
            ->with('closed_count', $closed_count)
            ->with('lead_prospects', $lead_prospects)
            ->with('phone_prospects', $phone_prospects)
            ->with('demo_prospects', $demo_prospects)
            ->with('negotiation_prospects', $negotiation_prospects);

    }

    public function showByUser($id)
    {
        return Prospect::whereUserId($id)->get();
    }

    public function showProspect($id)
    {
        $sales_sum = Prospect::where('status_closed', '1')->sum('sale_amount');
        $sales_quantity = Prospect::where('status_closed', '1')->sum('sale_quantity');
        $closed_count = Prospect::where('status_closed', '1')->count();
        $not_interested_count = Prospect::where('status_not_interested', '1')->count();
        $prospect = Prospect::find($id);
        $users = User::lists('name','id');


        return view('prospect_details')
            ->with('prospect', $prospect)
            ->with('sales_sum', $sales_sum)
            ->with('sales_quantity', $sales_quantity)
            ->with('not_interested_count', $not_interested_count)
            ->with('closed_count', $closed_count)
            ->with('users', $users);
    }

    public function getInsertProspect()
    {
        $sales_sum = Prospect::where('status_closed', '1')->sum('sale_amount');
        $sales_quantity = Prospect::where('status_closed', '1')->sum('sale_quantity');
        $closed_count = Prospect::where('status_closed', '1')->count();
        $not_interested_count = Prospect::where('status_not_interested', '1')->count();
        $users = User::lists('name','id');


        return view('insert_prospect_details')
            ->with('sales_sum', $sales_sum)
            ->with('sales_quantity', $sales_quantity)
            ->with('not_interested_count', $not_interested_count)
            ->with('closed_count', $closed_count)
            ->with('users', $users);
    }

    public function postInsertProspect()
    {

        $input = Input::all();
        var_dump($input);
        $prospect = new Prospect;
         $prospect->company_name = $input['company_name'];

        $prospect->address = $input['address'];
        $prospect->phone_number = $input['phone_number'];
        $prospect->company_email = $input['company_email'];
        $prospect->company_website = $input['company_website'];
        $prospect->company_contact_person = $input['company_contact_person'];
        $prospect->company_contact_person_designation = $input['company_contact_person_designation'];
        $prospect->region = $input['region'];
        $prospect->sale_amount = $input['sale_amount'];
        $prospect->sale_quantity = $input['sale_quantity'];
        $prospect->last_contacted_date = $input['last_contacted_date'];
        $prospect->due_contact_date = $input['due_contact_date'];
        $prospect->comments = $input['comments'];
        $prospect->user_id = $input['assign_user'];
        switch ($input['changeStatus'])
        {
            case '1':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 0;
                $prospect->status_demo = 0;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '2':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 0;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '3':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 1;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '4':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 1;
                $prospect->status_negotiation = 1;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '5':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 1;
                $prospect->status_negotiation = 1;
                $prospect->status_closed = 1;
                $prospect->status_not_interested = 0;
                break;
            case '6':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 0;
                $prospect->status_demo = 0;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 1;
                break;
        }
        $prospect->save();
        $flash_message = $prospect->company_name.' has been successfully added';
        return Redirect::to('/')->with('message', $flash_message);
    }

    public function updateProspect($id)
    {
        $input = Input::all();
        $prospect = Prospect::find($id);
        //$prospect->company_name = $input['company_name'];
        $prospect->address = $input['address'];
        $prospect->phone_number = $input['phone_number'];
        $prospect->company_email = $input['company_email'];
        $prospect->company_website = $input['company_website'];
        $prospect->company_contact_person = $input['company_contact_person'];
        $prospect->company_contact_person_designation = $input['company_contact_person_designation'];
        //$prospect->region = $input['region'];
        $prospect->sale_amount = $input['sale_amount'];
        $prospect->sale_quantity = $input['sale_quantity'];
        $prospect->last_contacted_date = $input['last_contacted_date'];
        $prospect->due_contact_date = $input['due_contact_date'];
        $prospect->comments = $input['comments'];
        $prospect->user_id = $input['assign_user'];
        switch ($input['changeStatus'])
        {
            case '1':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 0;
                $prospect->status_demo = 0;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '2':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 0;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '3':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 1;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '4':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 1;
                $prospect->status_negotiation = 1;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 0;
                break;
            case '5':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 1;
                $prospect->status_demo = 1;
                $prospect->status_negotiation = 1;
                $prospect->status_closed = 1;
                $prospect->status_not_interested = 0;
                break;
            case '6':
                $prospect->status_lead = 1;
                $prospect->status_phone_introduction = 0;
                $prospect->status_demo = 0;
                $prospect->status_negotiation = 0;
                $prospect->status_closed = 0;
                $prospect->status_not_interested = 1;
                break;
        }
        $prospect->save();
        $flash_message = $prospect->company_name.' has been successfully updated';
        return Redirect::to('/')->with('message', $flash_message);
    }
    public function showUserBasedList()
    {
        $sales_sum = Prospect::where('status_closed', '1')->sum('sale_amount');
        $sales_quantity = Prospect::where('status_closed', '1')->sum('sale_quantity');
        $closed_count = Prospect::where('status_closed', '1')->count();
        $not_interested_count = Prospect::where('status_not_interested', '1')->count();
        $distinct_users =  Prospect::select(array(DB::raw('DISTINCT `users`.`name`'), 'users.id'))
            ->leftJoin('users', function($join)
            {
                $join->on('users.id', '=', 'prospects.user_id');
            })
            ->get();
        $prospects=array();
        foreach($distinct_users as $distinct_user)
        {

            $prospects[$distinct_user->id] = Prospect::where('user_id', $distinct_user->id)
                ->orderBy('due_contact_date', 'asc')
                ->get() ;
            $prospects[$distinct_user->id] = $prospects[$distinct_user->id]->reverse();
        }

        return view('user_prospects')
            ->with('distinct_users', $distinct_users)
            ->with('prospects', $prospects)
            ->with('sales_sum', $sales_sum)
            ->with('sales_quantity', $sales_quantity)
            ->with('not_interested_count', $not_interested_count)
            ->with('closed_count', $closed_count);
    }

}
