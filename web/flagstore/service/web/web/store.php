<?php
    session_start();
    # Session Protect a page so that users cannot enter this page without logging in first
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header('location: login.php');
        exit();
    }
?>
<html lang="en">
    <head>
        <title>Flag Store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        function send_request(element) {
            console.log(element.id)
            $.get(
                "test.php",
                {user: '<?php print($_SESSION['login_user'])?>',  item: element.id},
                function(data) {
                   alert('page content: ' + data);
                }
            );
        }
        </script>

        <style>
            .row.content {
                height: 1500px;
            }
            .sidenav {
                background-color: #f1f1f1;
                height: 100%;
                border-right: 1px solid grey;
            }

            .nopadding {
                padding: 0 !important;
            }
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                padding: 10% 0 0 0;
                width: 100%;
            }


            td, th {
                border: 1px solid #808080;
                text-align: left;
                padding: 15px;
                font-size: 18px;
            }

            td:nth-child(3) {
                width:20%;
            }

            tr:hover {
                background-color:#f5f5f5;
            }

            ul {
                list-style-type: none;
                margin: 5% 0 0 0;
                background-color: #f1f1f1;
            }

            li a {
                display: block;
                color: #000;
                padding: 5% 0 2% 2%;
                text-decoration: none;
                font-size:20px;
            }

            /* Change the link color on hover */
            li a:hover {
                background-color: #555;
                color: white;
            }
            .purchase_button {
                border-radius: 12px;
                background-color: white;
                padding: 1% 10%;
                font-size: 20px;
                font-weight: bold;
            }

            .purchase_button:hover {
                background-color: #f5f5f5;

            }

            .table-div {
                margin: 5% 0;
            }

            .store-head {
                border-bottom: 1px solid grey;
            }

            .navigation-menu {
                border-top: 1px solid grey;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="row content">
                <div class="col-sm-2 nopadding sidenav">
                    <i class="fa fa-user fa-3x" style="margin:2% 3% 0 10%; padding:8% 5% 0 5%;"></i>
                    <h3 style="display:inline; margin: 0 0 0 1%; padding: 0 3% 0 0;">User: <?php echo($_SESSION['login_user'])?></h3>
                    <ul class="navigation-menu">
                        <li><a href="store.php">Store</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="col-sm-10" style="padding: 2% 3px;">
                    <h2 class="store-head" style="text-align:center;">Flag Store. Feel free to buy what you need~</h2>
                    <form action="purchase.php" method="GET">
                        <input type="hidden" name="user" value="<?php echo($_SESSION['login_user'])?>">
                        <table class="table-div">
                            <tr>
                                <th>Item Name</th>
                                <th>Description</th>
                                <th>Price ($)</th>
                                <th>Purchase</th>
                            </tr>
                            <tr>
                                <td>Flag 1</td>
                                <td>Redeem me for free flag!</td>
                                <td>Free</td>
                                <td><button type="submit" class="purchase_button" name="item" value="free_flag">Redeem</input></td>
                            </tr>
                            <tr>
                                <td>Flag 2</td>
                                <td>Redeem me for the real flag!</td>
                                <td>Free</td>
                                <td><button type="submit" class="purchase_button" name="item" value="free_flag_2">Redeem</input></td>  
                            </tr>
                            <tr>
                                <td>Flag</td>
                                <td>I am not free so I must be the real flag!</td>
                                <td>$1</td>
                                <td><button type="submit" class="purchase_button" name="item" value="free_flag_3">Redeem</input></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>