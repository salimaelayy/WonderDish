<?php

namespace App\Http\Controllers;

use App\Models\CarteModel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("cart.carte");

    }
    public function show()
    {
        $user = auth()->user();
        $cart = $user->cart ?? null;

        $totalPrice = 0;
        if ($cart) {
            foreach ($cart->items as $item) {
                $totalPrice += $item['price'] * $item['quantity'];
            }
        }

        return view('cart', compact('cart', 'totalPrice'));
    }

    public function addToCart(Request $request, $menuId)
    {
        $user = $request->user();
        $cart = $user->cart ?? new CarteModel(['items' => []]);

        $cart->addItem($menuId, $request->input('quantity', 1));

        return response()->json(['message' => 'Item added to cart']);
    }

    public function removeFromCart(Request $request, $menuId)
    {
        $user = $request->user();
        $cart = $user->cart;

        if ($cart) {
            $cart->removeItem($menuId);
        }

        return response()->json(['message' => 'Item removed from cart']);
    }

    public function updateCartItem(Request $request, $menuId)
    {
        $user = $request->user();
        $cart = $user->cart;

        if ($cart) {
            $cart->updateItemQuantity($menuId, $request->input('quantity'));
        }

        return response()->json(['message' => 'Cart item updated']);
    }

    public function viewCart(Request $request)
    {
        $user = $request->user();
        $cart = $user->cart;

        if (!$cart) {
            return response()->json(['message' => 'Cart is empty']);
        }

        return response()->json(['cart' => $cart]);
    }
}
