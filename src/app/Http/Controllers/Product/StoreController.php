<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $data = $request->validated();

            $productImages = $data['product_imgs'];

            isset($data['preview_img']) ? $data['preview_img'] = Storage::disk('public')->put('/img', $data['preview_img']) : $data['preview_img'] = 'img/default.png';

            $tagsId = $data['tags'];
            // $colorsId = $data['colors'];

            unset($data['tags'], $data['product_imgs']);
            // unset($data['tags'], $data['colors']);

            $product = Product::firstOrCreate([
                'article' => $data['article'],
            ], $data);

            $product->tags()->attach($tagsId);
            // $product->colors()->attach($colorsId);

            foreach ($productImages as $productImage) {
                $currentImages = ProductImage::where('product_id', $product->id)->count();

                if ($currentImages > 2) continue;
                $filePath = Storage::disk('public')->put('/img', $productImage);
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $filePath,
                ]);
            }
        } catch (\Exception $exception) {
            abort(404);
        }

        return redirect()->route('product.index');
    }
}
