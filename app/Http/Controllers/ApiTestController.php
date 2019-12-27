<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ApiTestController extends Controller
{
    public function store(Request $request)
    {
        try {
            Cache::store('file')->put('keys', 'item', '1');
            return ['status' => 201, 'message' => 'Item inserted successfully!'];
        } catch (\Exception $e) {
            return ['status' => $e->getCode(), 'message' => $e->getMessage()];
        }
    }

    public function getAll()
    {
        $storage = Cache::get('keys');
        return $storage;
    }


    public function updateKey(Request $request)
    {
        try {
            Cache::store('file')->put('keys', 'test 3', 1);
            return ['status' => 201, 'message' => 'Keys values updated successfully!'];
        } catch (\Exception $e) {
            return ['status' => $e->getCode(), 'message' => $e->getMessage()];
        }
    }
}
