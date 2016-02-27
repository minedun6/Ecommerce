<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Laravel E-commerce</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="" class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="badge">
                        <i class="fa fa-shopping-cart"></i>&nbsp; {{ Cart::totalItems() }} items | {{ Cart::total() }} &dollar;
                    <b class="caret"></b>
                    </span>
                </a>
                <ul class="dropdown-menu" id="cart">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!is_null($cart))
                                        @foreach ($cart as $cart_item)
                                            <tr>
                                                <td>
                                                    <a class="thumbnail pull-left" href="#">
                                                        {{ HTML::image($cart_item->image, '$cart_item->name', ['class' => 'media-object', 'width' => 40, 'height' => 40]) }}
                                                    </a>
                                                    {{ $cart_item->name }}
                                                </td>
                                                <td class="text-center middle" style="text-align: center;">
                                                    <input type="text" class="form-control" size="1" value="{{ $cart_item->quantity }}">
                                                </td>
                                                <td class="text-center middle"><strong>&dollar;{{ $cart_item->price }}</strong></td>
                                                <td class="text-center middle"><strong>&dollar;{{ $cart_item->price * $cart_item->quantity }}</strong></td>
                                                <td class="middle">
                                                    {{ Form::open(['route' => ['cart.product.delete', $cart_item->identifier], 'method' => 'delete']) }}
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <span class="fa fa-trash"></span>
                                                    </button>
                                                    {{ Form::close() }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td><h5>Subtotal</h5></td>
                                        <td class="text-right"><h5><strong>&dollar; {{ Cart::totalWithoutTax() }}</strong></h5></td>
                                    </tr>
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td><h5>Tax</h5></td>
                                        <td class="text-right"><h5><strong>&dollar; {{ Cart::tax() }}</strong></h5></td>
                                    </tr>
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td><h3>Total</h3></td>
                                        <td class="text-right"><h3><strong>&dollar; {{ Cart::total() }}</strong></h3></td>
                                    </tr>
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>
                                            <button type="button" class="btn btn-default">
                                                <span class="fa fa-shopping-cart"></span> Continue Shopping
                                            </button></td>
                                        <td>
                                            <button type="button" class="btn btn-success">
                                                Checkout  <span class="fa fa-angle-double-right"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="badge">
                        <i class="fa fa-user"></i>
                        &nbsp;Espace User
                        <b class="caret"></b>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('login') }}">Log In</a></li>
                    <li><a href="{{ URL::to('register') }}">Register</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>