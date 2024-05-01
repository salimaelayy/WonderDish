<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'items',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addItem($menuId, $quantity)
    {
        $items = $this->items ?? [];

        // Check if the item already exists in the cart
        $existingItem = collect($items)->firstWhere('menu_id', $menuId);

        if ($existingItem) {
            // Update the quantity of the existing item
            $existingItem['quantity'] += $quantity;
        } else {
            // Add a new item to the cart
            $items[] = ['menu_id' => $menuId, 'quantity' => $quantity];
        }

        $this->items = $items;
        $this->save();
    }

    public function removeItem($menuId)
    {
        $items = $this->items ?? [];

        // Remove the item from the cart
        $items = array_values(array_filter($items, function ($item) use ($menuId) {
            return $item['menu_id'] !== $menuId;
        }));

        $this->items = $items;
        $this->save();
    }

    public function updateItemQuantity($menuId, $quantity)
    {
        $items = $this->items ?? [];

        // Find the item in the cart
        $itemKey = collect($items)->search(function ($item) use ($menuId) {
            return $item['menu_id'] === $menuId;
        });

        if ($itemKey !== false) {
            // Update the quantity of the item
            $items[$itemKey]['quantity'] = $quantity;
            $this->items = $items;
            $this->save();
        }
    }
}

