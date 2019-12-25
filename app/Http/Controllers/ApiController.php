<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        try {
            foreach ($request->all() as $key => $item) {
                $itemKey = 'th_' . $key;
                Cache::store('redis')->put($itemKey, $item, 10);
            }
            return ['status' => 200, 'message' => 'Item inserted successfully!'];
        } catch (\Exception $e) {
            return ['status' => $e->getCode(), 'message' => $e->getMessage()];
        }
    }

    public function getAll()
    {
        $itemArray = [];
        $items = Redis::keys('laravel_cache:th_*');

        foreach ($items as $index => $key) {
            $key = str_replace('laravel_cache:', '', $key);
            $keyHeader = str_replace('th_', '', $key);
            $itemArray[$keyHeader] = Cache::get($key);
        }
        return $itemArray;
    }


    public function getByKey(Request $request)
    {
        $itemArray = [];
        $keys = explode(',', $request->keys);
        foreach ($keys as $key) {
            $searchKey = 'th_' . $key;
            $itemArray[$key] = Cache::get($searchKey);
        }
        return $itemArray;
    }

    public function updateKey(Request $request)
    {
        foreach ($request->all() as $key => $item) {
            $updateKey = 'th_' . $key;
            Cache::store('redis')->put($updateKey, $item, 10);
        }
    }
}
