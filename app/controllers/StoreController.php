<?php


class StoreController extends BaseController
{

    public function postAddCart()
    {
        $product = Product::find(Input::get('id'));
        $quantity = Input::get('quantity');

        Cart::insert([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => $quantity,
            'image' => $product->img_url,
            'description' => $product->description
        ]);
        return Redirect::to('/');
    }

    public function getCart()
    {
        return Cart::contents();
    }

    public function removeProduct($identifier)
    {
        $item = Cart::item($identifier);
        $item->remove();
        return Redirect::to('/');
    }

    public function getViewProduct($slug)
    {
        $product = Product::whereSlug($slug)->first();
        $cart = Cart::contents();
        return View::make('products.view')
            ->with('product', $product)
            ->with('title', $product->title)
            ->with('cart', $cart);
    }

    public function postDestroyCart()
    {
        Cart::destroy();
        return Redirect::to('/');
    }

} 