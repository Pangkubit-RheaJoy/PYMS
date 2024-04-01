<!DOCTYPE HTML>
<html>

<head>
    <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">

    <style>
        /* Custom CSS for colorful design */
        /* Panel styles */
        .panel {
            background-color: #f5f5f5;
            /* Light gray background */
            border: 1px solid #ddd;
            /* Light gray border */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Shadow effect */
            margin-bottom: 20px;
            /* Spacing between panels */
        }

        .panel-heading {
            background-color: #2a9df4;
            color: #fff;
            /* White text color */
            padding: 10px 15px;
            /* Padding inside panel heading */
            border-top-left-radius: 10px;
            /* Rounded corners for top left */
            border-top-right-radius: 10px;
            /* Rounded corners for top right */
        }

        .panel-body {
            padding: 20px;
            /* Padding inside panel body */
        }

        /* Table styles */
        .table {
            background-color: #fff;
            /* White background for tables */
            border: 1px solid #ddd;
            /* Light gray border */
            border-radius: 5px;
            /* Rounded corners */
        }

        .table th,
        .table td {
            border: none;
            /* No border for table cells */
            padding: 8px;
            /* Padding inside table cells */
        }

        /* Button styles */
        .btn {
            color: #fff;
            /* White text color */
            border-radius: 5px;
            /* Rounded corners */
            padding: 8px 16px;
            /* Padding inside buttons */
            cursor: pointer;
            /* Cursor style */
        }

        /* Input styles */
        .form-control {
            border-radius: 5px;
            /* Rounded corners for form controls */
            padding: 8px;
            /* Padding inside form controls */
        }
    </style>

</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <?php include('sidebar.php')?>
        </div>
        <div class="row">
            <div class="col-md-9 offset-md-3">
                <!-- Changed col-md-9 to col-md-9 offset-md-3 -->
                <!-- Main Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title d-inline">Product List</h4>
                                </div>

                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="product-list">
                                            <!-- Product list will be dynamically populated here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Cart</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="cart">
                                            <!-- Cart items will be dynamically populated here -->
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- Additional Panel for Cart -->
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Cart</h4>
                                </div>
                                <div class="panel-body">

                                    <div>
                                    <h4>Total: ₱<span id="total">0.00</span></h4>
                            <div class="form-group">
                                <label for="amountPaid">Amount Paid:</label>
                                <input type="number" class="form-control" id="amountPaid" placeholder="Enter amount">
                            </div>
                            <h4>Change: ₱<span id="change">0.00</span></h4>
                        </div>
                        <button class="btn btn-primary" onclick="checkout()">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Additional Panel -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Receipt Modal -->      

        <!-- Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
    // Sample product data
    var products = [{
            id: 1,
            name: "Canon Printer",
            price: 1500.00
        },
        {
            id: 2,
            name: "Canon Camera",
            price: 2000.00
        },
        {
            id: 3,
            name: "Ryzen 5 PC Set",
            price: 20000.00
        }
    ];

    // Function to display products
    function displayProducts() {
        var productList = $('#product-list');
        productList.empty();
        products.forEach(function(product) {
            var row = '<tr><td><span class="product-name">' + product.name +
                '</span></td><td><span class="product-price">₱' + product.price.toFixed(2) +
                '</span></td><td><i class="fas fa-cart-plus cart-icon" onclick="addToCart(' + product.id +
                ')"></i></td></tr>';
            productList.append(row);
        });
    }

    // Function to add product to cart
    function addToCart(productId) {
        var product = products.find(p => p.id === productId);
        var cart = $('#cart');
        var row = '<tr><td>' + product.name + '</td><td>₱' + product.price.toFixed(2) +
            '</td><td><button class="btn btn-danger" onclick="removeFromCart(' + product.id +
            ')"><i class="fas fa-trash"></i></button></td></tr>';
        cart.append(row);
        updateTotal(product.price);
    }

    // Function to remove product from cart
    function removeFromCart(productId) {
        var product = products.find(p => p.id === productId);
        var price = product.price;
        $('#cart tr').each(function() {
            if ($(this).find('td:first').text() === product.name) {
                $(this).remove();
            }
        });
        updateTotal(-price);
    }

    // Function to update total
    function updateTotal(amount) {
        var total = parseFloat($('#total').text());
        total += amount;
        $('#total').text(total.toFixed(2));
        updateChange(); // Call updateChange function whenever total is updated
    }

    // Function to update change
    function updateChange() {
        var total = parseFloat($('#total').text());
        var amountPaid = parseFloat($('#amountPaid').val());
        if (!isNaN(amountPaid)) {
            var change = amountPaid - total;
            $('#change').text(change.toFixed(2));
        }
    }
// Function for checkout
function checkout() {
    var total = parseFloat($('#total').text());
    var amountPaid = parseFloat($('#amountPaid').val());
    if (!isNaN(amountPaid)) {
        if (amountPaid >= total) {
            var change = amountPaid - total;
            $('#totalPaid').text(amountPaid.toFixed(2));
            $('#change').text(change.toFixed(2));
            // Reset cart and total
            $('#cart').empty();
            $('#total').text('0.00');
            $('#amountPaid').val('');
            // Display "Thank you for your purchase" message
            var message = $('<div>').css({
                'position': 'fixed',
                'top': '50%',
                'left': '50%',
                'transform': 'translate(-50%, -50%)',
                'background-color': 'white',
                'padding': '20px',
                'border': '1px solid black'
            }).text('Thank you for your purchase').appendTo('body');
            var okButton = $('<button>').text('OK').addClass('btn btn-primary').css({
                'margin-top': '10px',
                'margin-left': '50px' // Corrected margin-left property
            }).appendTo(message);
            okButton.on('click', function() {
                message.remove(); // Remove the message when OK button is clicked
            });
        } else {
            alert('Please enter an amount equal to or greater than the total.');
        }
    } else {
        alert('Please enter a valid amount.');
    }
}


    // Display products when the page loads
    $(document).ready(function() {
        displayProducts();
    });

    // Bind the checkout function to the checkout button click event
    $('#checkoutButton').click(function() {
        checkout();
    });

    // Bind the updateChange function to the input event of the amountPaid field
    $('#amountPaid').on('input', function() {
        updateChange();
    });
</script>


        <!-- new added graphs chart js-->
        <script src="js/Chart.bundle.js"></script>
        <script src="js/utils.js"></script>
        <!-- //new added graphs chart js-->

        <!-- Classie -->
        <!-- for toggle left push menu script -->
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
                showLeftPush = document.getElementById('showLeftPush'),
                body = document.body;

            showLeftPush.onclick = function() {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
            };


            function disableOther(button) {
                if (button !== 'showLeftPush') {
                    classie.toggle(showLeftPush, 'disabled');
                }
            }
        </script>
        <!-- //Classie -->

        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->

        <!-- side nav js -->
        <script src='js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
            $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->
</body>

</html>
