@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Butlers">
    <meta name="author" content="">
    <title>Butlers</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/vendors.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <main>
        <div class="hero_single inner_pages background-image"
            data-background="url(https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80)">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Order Food</h1>
                            <p>Order food with home delivery or take away</p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="frame white"></div>
        </div>
        <!-- /hero_single -->

        <div class="container margin_60_40">
            <div class="row">



                {{-- <div class="col-lg-8">
                    <h3>Starters</h3>
                    <p>An malorum ornatus nostrum vel, graece iracundia laboramus cu ius. No pro mazim blandit
                        instructior, sumo voluptaria has et, vide persecuti abhorreant ne est.</p>
                    <table class="table table-striped cart-list menu-gallery">
                        <thead>
                            <tr>
                                <th>
                                    Item
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Order
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/1.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/1.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>1. Mexican Enchiladas</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$9.40</strong>
                                </td>
                                <td class="options">
                                    <div class="dropdown dropdown-options">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                                        <div class="dropdown-menu">
                                            <h5>Select an option</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_radio">Medium<small>+ $3.30</small>
                                                        <input type="radio" value="option1" name="options_1">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Large<small>+ $5.30</small>
                                                        <input type="radio" value="option2" name="options_1">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Extra Large<small>+ $8.30</small>
                                                        <input type="radio" value="option3" name="options_1">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <h5>Add ingredients</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <a href="#0" class="btn_1 small">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/2.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/2.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>2. Fajitas</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$6.80</strong>
                                </td>
                                <td class="options">
                                    <div class="dropdown dropdown-options">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                                        <div class="dropdown-menu">
                                            <h5>Select an option</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_radio">Medium<small>+ $3.30</small>
                                                        <input type="radio" value="option1" name="options_2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Large<small>+ $5.30</small>
                                                        <input type="radio" value="option2" name="options_2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Extra Large<small>+ $8.30</small>
                                                        <input type="radio" value="option3" name="options_2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <h5>Add ingredients</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <a href="#0" class="btn_1 small">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/3.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/3.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>3. Royal Fajitas</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$5.70</strong>
                                </td>
                                <td class="options">
                                    <div class="dropdown dropdown-options">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                                        <div class="dropdown-menu">
                                            <h5>Select an option</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_radio">Medium<small>+ $3.30</small>
                                                        <input type="radio" value="option1" name="options_3">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Large<small>+ $5.30</small>
                                                        <input type="radio" value="option2" name="options_3">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Extra Large<small>+ $8.30</small>
                                                        <input type="radio" value="option3" name="options_3">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <h5>Add ingredients</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <a href="#0" class="btn_1 small">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/4.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/4.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>4. Chicken Enchilada Wrap</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$5.20</strong>
                                </td>
                                <td class="options">
                                    <div class="dropdown dropdown-options">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                                        <div class="dropdown-menu">
                                            <h5>Select an option</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_radio">Medium<small>+ $3.30</small>
                                                        <input type="radio" value="option1" name="options_4">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Large<small>+ $5.30</small>
                                                        <input type="radio" value="option2" name="options_4">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_radio">Extra Large<small>+ $8.30</small>
                                                        <input type="radio" value="option3" name="options_4">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <h5>Add ingredients</h5>
                                            <ul class="clearfix">
                                                <li>
                                                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <a href="#0" class="btn_1 small">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Main Courses</h3>
                    <p>
                        An malorum ornatus nostrum vel, graece iracundia laboramus cu ius. No pro mazim blandit
                        instructior, sumo voluptaria has et, vide persecuti abhorreant ne est.
                    </p>
                    <table class="table table-striped cart-list menu-gallery">
                        <thead>
                            <tr>
                                <th>
                                    Item
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Order
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/5.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/5.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>5. Cheese Quesadilla</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$12.00</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/6.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/6.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>6. Chorizo & Cheese</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$24.71</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/7.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/7.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>7. Beef Taco</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$8.70</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/8.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/8.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>8. Minced Beef Double Layer</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$6.30</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/9.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/9.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>9. Piri Piri Chicken</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$7.40</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/10.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/10.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>10. Burrito Al Pastor</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$7.70</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Desserts</h3>
                    <p>
                        Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro.
                        Fuisset mentitum deleniti sit ea.
                    </p>
                    <table class="table table-striped cart-list menu-gallery">
                        <thead>
                            <tr>
                                <th>
                                    Item
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Order
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/11.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/11.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>11. Chocolate Fudge Cake</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$24.71</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/12.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/12.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>12. Cheesecake</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$7.50</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/9.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/9.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>19. Apple Pie & Custard</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$9.70</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-md-flex align-items-center">
                                    <figure>
                                        <a href="img/menu_items/large/10.jpg" title="Photo title"
                                            data-effect="mfp-zoom-in">
                                            <img src="img/menu_items/menu_items_placeholder.png"
                                                data-src="img/menu_items/10.jpg" alt="thumb" class="lazy">
                                        </a>
                                    </figure>
                                    <div class="flex-md-column">
                                        <h4>14. Profiteroles</h4>
                                        <p>
                                            Fuisset mentitum deleniti sit ea.
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <strong>$12.00</strong>
                                </td>
                                <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}



                <!-- /col -->
                <div class="col-lg-7 mx-auto" id="">
                    <div class="box_booking">
                        <div class="head">
                            <h3>Order Summary</h3>
                        </div>
                        <!-- /head -->
                        <div class="main">
                            @if (session('menu'))
                                <?php $total = 0; ?> <!-- Initialize the total variable -->

                                @foreach (session('menu') as $id => $name)
                                    <?php
                                    $total += $name['price'] * $name['quantity']; // Add the price * quantity to the total
                                    ?>
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#0">{{ $name['name'] }}</a><span>Rs.{{ $name['price'] }}</span>
                                        </li>
                                    </ul>
                                @endforeach


                                {{-- @php
                                    $currentTime = now(); // Get the current timestamp
                                    session(['last_access' => $currentTime]); // Store the timestamp in the session
                                @endphp --}}






                                <ul class="clearfix">
                                    <li>Subtotal<span>Rs.{{ $total }}</span></li>
                                    <li>Delivery fee<span>Rs.0</span></li>
                                    <li class="total">Total<span>Rs.{{ $total }}</span></li>
                                </ul>

                                {{-- @php
                                    session()->forget('menu'); // Clear the 'menu' session data
                                    session()->forget('last_access'); // Clear the 'last_access' session data
                                @endphp --}}



                            @endif
                            <div class="row opt_order">
                                <div class="col-6">
                                    <label class="container_radio">Delivery</small>
                                        <input type="radio" value="option1" name="opt_order" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="container_radio">Take away</small>
                                        <input type="radio" value="option1" name="opt_order">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="dropdown day">
                                <a href="#" data-toggle="dropdown">Day <span id="selected_day"></span></a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-content">
                                        <h4>Which day delivered?</h4>
                                        <div class="radio_select chose_day">
                                            <ul>
                                                <li>
                                                    <input type="radio" id="day_1" name="day" value="Today">
                                                    <label for="day_1">Today<em>-40%</em></label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="day_2" name="day"
                                                        value="Tomorrow">
                                                    <label for="day_2">Tomorrow<em>-40%</em></label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /people_select -->
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                            <div class="dropdown time">
                                <a href="#" data-toggle="dropdown">Time <span id="selected_time"></span></a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-content">
                                        <h4>Lunch</h4>
                                        <div class="radio_select add_bottom_15">
                                            <ul>
                                                <li>
                                                    <input type="radio" id="time_1" name="time" value="12.00am">
                                                    <label for="time_1">12.00<em>-40%</em></label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_2" name="time"
                                                        value="08.30pm">
                                                    <label for="time_2">12.30<em>-40%</em></label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_3" name="time"
                                                        value="09.00pm">
                                                    <label for="time_3">1.00<em>-40%</em></label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_4" name="time"
                                                        value="09.30pm">
                                                    <label for="time_4">1.30<em>-40%</em></label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /time_select -->
                                        <h4>Dinner</h4>
                                        <div class="radio_select">
                                            <ul>
                                                <li>
                                                    <input type="radio" id="time_5" name="time"
                                                        value="08.00pm">
                                                    <label for="time_1">20.00<em>-40%</em></label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_6" name="time"
                                                        value="08.30pm">
                                                    <label for="time_2">20.30<em>-40%</em></label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_7" name="time"
                                                        value="09.00pm">
                                                    <label for="time_3">21.00<em>-40%</em></label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="time_8" name="time"
                                                        value="09.30pm">
                                                    <label for="time_4">21.30<em>-40%</em></label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /time_select -->
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                            <a href="{{route('checkout') }}" class="btn_1 full-width mb_5">Order Now</a>
                            <div class="text-center"><small>No money charged on this steps</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </main>


    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="phpmailer/validate.js"></script>

</body>

</html>

@extends('layouts.footer')
