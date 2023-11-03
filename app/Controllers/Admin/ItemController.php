<?php

namespace Lamo\Stubs\Controllers\Admin;

use Lamo\Stubs\Exceptions\LogicException;
use Lamo\Stubs\Models\Item;
use Illuminate\Http\JsonResponse;

class ItemController extends Controller
{

    /*
     * 支持 Cursor分页 或 Page 分页
     * page 0 是 cursor, 其他是分页
     */
    public function index(): JsonResponse
    {
        $this->validate([
            'limit' => 'integer|max:100|min:5',
            'page' => 'integer',
            'total' => 'integer'
        ]);
        $offset = $this->input('offset');
        $limit = (int)$this->input('limit', 20);
        $page = (int)$this->input('page', 0);
        $total = (int)$this->input('total', 0);

        $query = Item::query();

        if (!$total) {
            $total = $query->count();
        }

        $items = [];
        if ($total) {
            if ($offset) {
                $query->whereKey($offset, '<');
            }

            if ($page) {
                $items = $query->orderByKey('desc')->forPage($page, $limit)->get();
                if (!$offset) {
                    $offset = $items->first()->id;
                }
            } else {
                $items = $query->orderByKey('desc')->limit($limit)->get();
                if (count($items) < $limit) {
                    $offset = '';
                } else {
                    $offset = $items->first()->id;
                }
            }
        }
        $data = [
            'total' => $total,
            'offset' => $offset,
            'items' => $items,
        ];
        return $this->sendSuccessJson($data);
    }

    public function show($id): JsonResponse
    {
        $itemObj = Item::query()->whereKey($id)->firstOrFail();

        return $this->sendSuccessJson($itemObj);
    }

    public function store(): JsonResponse
    {
        $this->validate([
            'id' => 'string',
            'name' => 'string',
            'slug' => 'string',
        ]);
        $id = $this->input('id');
        $laravelId = $this->input('laravel_id');
        $name = $this->input('name');

        // 判断slug是否已存在
        if ($id) {
            $hasExist = Item::query()
                ->where('laravel_id', $laravelId)
                ->whereKey($id, '!=')
                ->exists();
            if ($hasExist) {
                throw new LogicException('slug.exists');
            }
            $itemObj = Item::query()->whereKey($id)->firstOrFail();
        } else {
            $itemObj = new Item();
        }
        $itemObj->laravel_id = $laravelId;
        $itemObj->name = $name;

        $itemObj->save();
        return $this->sendSuccessJson();
    }

    public function destroy($id): JsonResponse
    {
        Item::query()->whereKey($id)->delete();
        return $this->sendSuccessJson();
    }
}
