<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Product $product)
    {
        try {
            $data = $request->validated();

            if (isset($data['preview_img'])) $data['preview_img'] = Storage::disk('public')->put('/img', $data['preview_img']);

            $tagsId = $data['tags'];

            unset($data['tags']);

            $product = Product::firstOrCreate([
                'article' => $data['article'],
            ], $data);

            $product->update($data);

            $product->tags()->sync($tagsId);
        } catch (\Exception $exception) {
            abort(404);
        }

        return view('product.show', compact('product'));
    }
}
