<?php

namespace App\Http\Controllers;

use App\Http\Resources\CrewResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Crew;


class CrewController extends Controller
{
    public function index()
    {
        return CrewResource::collection(Crew::all());
    }

    public function create(Request $request)
    {

        if (!empty($request->name)) {
            DB::table('crews')->insert(['name' => $request->name]);

            return response()->json([
                'status' => 'ok'
            ]);
        } else {
            return response()->json([
                'status' => 'not ok'
            ]);
        }
    }

    public function delete()
    {
        DB::table('crews')->truncate();
    }
}
