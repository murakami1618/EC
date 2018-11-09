<div>
    @foreach($cartItems as $cartItem)
        <p>{{ $cartItem->name }}</p>
    @endforeach
</div>