<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $data = $request->validated();

            isset($data['preview_img']) ? $data['preview_img'] = Storage::disk('public')->put('/img', $data['preview_img']) : $data['preview_img'] = 'img/default.png';

            $tagsId = $data['tags'];
            // $colorsId = $data['colors'];

            unset($data['tags']);
            // unset($data['tags'], $data['colors']);

            $product = Product::firstOrCreate([
                'article' => $data['article'],
            ], $data);

            $product->tags()->attach($tagsId);
            // $product->colors()->attach($colorsId);
        } catch (\Exception $exception) {
            abort(404);
        }

        return redirect()->route('product.index');
    }
}
