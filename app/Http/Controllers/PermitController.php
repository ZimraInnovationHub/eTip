<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\Owner;
use App\Models\Permit;
use App\Models\Trailer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permit = new Permit();

        $permit->title = $request['title'];
        $permit->lastname = $request['lastname'];
        $permit->firstname = $request['firstname'];
        $permit->email = $request['email'];
        $permit->phone = $request['phone'];
        $permit->address  = $request['address'];
        $permit->passport = $request['passport'];
        $permit->country = $request['country'];
        $permit->intended_country = $request['intended_country'];
        $permit->intended_address = $request['intended_address'];
        $permit->intended_code = $request['intended_code'];
        $permit->intended_date_of_travel = $request['intended_date_of_travel'];
        $permit->intended_port = $request['intended_port'];
        $permit->intended_port_code = $request['intended_port_code'];

        $permit->save();

        if ($permit->save()) {
            $vehicle = new Vehicle();
            $vehicle->make = $request['make'];
            $vehicle->body = $request['body'];
            $vehicle->reg_number = $request['reg_number'];
            $vehicle->chassis_number = $request['chassis_number'];
            $vehicle->engine_number = $request['engine_number'];
            $vehicle->engine_capacity = $request['engine_capacity'];
            $vehicle->country_of_manu = $request['country_of_manu'];
            $vehicle->country_code = $request['country_code'];
            $vehicle->y_o_m = $request['y_o_m'];
            $vehicle->value = $request['value'];
            $vehicle->currency = $request['currency'];
            $vehicle->insurance = $request['insurance'];
            $vehicle->permit_id = $permit->id;

            $vehicle->save();

            $trailer = new Trailer();
            $trailer->make = $request['t_make'];
            $trailer->body = $request['t_body'];
            $trailer->reg_number = $request['t_reg_number'];
            $trailer->chassis_number = $request['t_chassis_number'];
            $trailer->country_of_manu = $request['t_country_of_manu'];
            $trailer->country_code = $request['t_country_code'];
            $trailer->y_o_m = $request['t_y_o_m'];
            $trailer->value = $request['t_value'];
            $trailer->currency = $request['t_currency'];
            $trailer->insurance = $request['t_insurance'];
            $trailer->permit_id = $permit->id;

            $trailer->save();

            $goods = new Goods();

            $goods->description = $request['description'];
            $goods->serial_number = $request['serial_number'];
            $goods->value = $request['g_value'];
            $goods->currency = $request['g_currency'];
            $goods->permit_id = $permit->id;

            $goods->save();
        }

        $has_owner = $request['has_owner'];

        if ($has_owner == true) {
            $owner = new Owner();

            $owner->lastname = $request['o_lastname'];
            $owner->firstname = $request['o_firstname'];
            $owner->country = $request['o_country'];
            $owner->address = $request['o_address'];
            $owner->permit_id = $permit->id;

            $owner->save();

            if ($owner->save()) {
                $vehicle->owner_id = $owner->id;
                $vehicle->save();
            }
        } else {
            $owner = null;
        }

        $response = [
            'permit' => $permit,
            'vehicle' => $vehicle,
            'trailer' => $trailer,
            'owner' => $owner,
            'goods' => $goods
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function show(Permit $permit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function edit(Permit $permit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permit $permit)
    {
        $permit = Permit::find($permit->id);

        $permit->title = $request['title'];
        $permit->lastname = $request['lastname'];
        $permit->firstname = $request['firstname'];
        $permit->email = $request['email'];
        $permit->phone = $request['phone'];
        $permit->address  = $request['address'];
        $permit->passport = $request['passport'];
        $permit->country = $request['country'];
        $permit->intended_country = $request['intended_country'];
        $permit->intended_address = $request['intended_address'];
        $permit->intended_code = $request['intended_code'];
        $permit->intended_date_of_travel = $request['intended_date_of_travel'];
        $permit->intended_port = $request['intended_port'];
        $permit->intended_port_code = $request['intended_port_code'];

        $permit->save();

        $vehicle = Vehicle::where('permit_id', $permit->id)->first();
        $vehicle->make = $request['make'];
        $vehicle->body = $request['body'];
        $vehicle->reg_number = $request['reg_number'];
        $vehicle->chassis_number = $request['chassis_number'];
        $vehicle->engine_number = $request['engine_number'];
        $vehicle->engine_capacity = $request['engine_capacity'];
        $vehicle->country_of_manu = $request['country_of_manu'];
        $vehicle->country_code = $request['country_code'];
        $vehicle->y_o_m = $request['y_o_m'];
        $vehicle->value = $request['value'];
        $vehicle->currency = $request['currency'];
        $vehicle->insurance = $request['insurance'];
        $vehicle->permit_id = $permit->id;

        $vehicle->save();

        $trailer = Trailer::where('permit_id', $permit->id)->first();
        $trailer->make = $request['t_make'];
        $trailer->body = $request['t_body'];
        $trailer->reg_number = $request['t_reg_number'];
        $trailer->chassis_number = $request['t_chassis_number'];
        $trailer->country_of_manu = $request['t_country_of_manu'];
        $trailer->country_code = $request['t_country_code'];
        $trailer->y_o_m = $request['t_y_o_m'];
        $trailer->value = $request['t_value'];
        $trailer->currency = $request['t_currency'];
        $trailer->insurance = $request['t_insurance'];
        $trailer->permit_id = $permit->id;

        $trailer->save();

        $goods = Goods::where('permit_id', $permit->id)->first();

        $goods->description = $request['description'];
        $goods->serial_number = $request['serial_number'];
        $goods->value = $request['g_value'];
        $goods->currency = $request['g_currency'];
        $goods->permit_id = $permit->id;

        $goods->save();

        $has_owner = $request['has_owner'];

        if ($has_owner == true) {
            $owner = Owner::where('permit_id', $permit->id)->first();

            $owner->lastname = $request['o_lastname'];
            $owner->firstname = $request['o_firstname'];
            $owner->country = $request['o_country'];
            $owner->address = $request['o_address'];
            $owner->permit_id = $permit->id;

            $owner->save();

            if ($owner->save()) {
                $vehicle->owner_id = $owner->id;
                $vehicle->save();
            }
        } else {
            $owner = Owner::where('permit_id', $permit->id)->first();
        }

        $response = [
            'permit' => $permit,
            'vehicle' => $vehicle,
            'trailer' => $trailer,
            'owner' => $owner,
            'goods' => $goods
        ];

        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permit $permit)
    {
        //
    }
}
