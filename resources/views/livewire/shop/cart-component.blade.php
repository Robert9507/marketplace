<div>    
    <a href="{{route('cart')}}" class="btn btn-primary">
        <i class="fas fa-shopping-cart"></i>
    </a>
    @auth
    {{\Cart::session(auth()->id())->getTotalQuantity()}}  
    @else
    0
    @endauth
</div>
