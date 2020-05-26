<div class="col-lg-12 col-sm-12 col-12 main-section">
    <h3> Making Order </h3>
    <div class="dropdown">
        
        <button type="button" class="btn btn-info" data-toggle="dropdown">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Order <span class="badge badge-pill badge-danger">{{ count((array) session('order')) }}</span>
        </button>
        <div class="dropdown-menu">
            <div class="row total-header-section">
                <div class="col-lg-6 col-sm-6 col-6">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('order')) }}</span>
                </div>

                <?php $total = 0 ?>
                @foreach((array) session('order') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                @endforeach

                <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                    <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                </div>
            </div>

            @if(session('order'))
                @foreach((array) session('order') as $id => $details)
                    <div class="row order-detail">
                        <div class="col-lg-4 col-sm-4 col-4 order-detail-img">
                            <img src="{{ $details['photo'] }}" />
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 order-detail-product">
                            <p>{{ $details['name'] }}</p>
                            <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                    <a href="{{ url('order') }}" class="btn btn-primary btn-block">View all</a>
                </div>
            </div>
        </div>
    </div>
</div>