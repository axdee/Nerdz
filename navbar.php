<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
        }
        .navbar {
            display: flex;
            
          
        }
        .navbar a {
            padding: 14px 20px;
            display: block;
            color: white;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            display: none;
        }
        .content.active {
            display: block;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.navbar a').click(function(){
                var target = $(this).attr('data-target');
                $('.content').removeClass('active');
                $('#' + target).addClass('active');
            });
        });
    </script>
</head>
<body>

<?php
$tabs = [
    'Your Product' => 'your_product',
    'Add Shop' => 'add_shop',
    'Add Product' => 'add_product',
    'Edit Product' => 'edit_product'
    
];

function generateNavbar($tabs) {
    echo '<div class="navbar">';
    foreach ($tabs as $tab => $target) {
        echo "<a data-target=\"$target\">$tab</a>";
    }
    echo '</div>';
}

generateNavbar($tabs);
?>

<div id="your_product" class="content active mt-4">
<?php
include("productcard.php");
$cards = [
    ['title' => 'Card 1', 'content' => 'Content for card 1'],
    ['title' => 'Card 2', 'content' => 'Content for card 2'],
    ['title' => 'Card 3', 'content' => 'Content for card 3'],
    ['title' => 'Card 4', 'content' => 'Content for card 4'],
    ['title' => 'Card 5', 'content' => 'Content for card 5'],
    ['title' => 'Card 6', 'content' => 'Content for card 6'],
    ['title' => 'Card 7', 'content' => 'Content for card 7'],
    ['title' => 'Card 8', 'content' => 'Content for card 8'],
    ['title' => 'Card 9', 'content' => 'Content for card 9'],
];

echo renderCardGrid($cards);
?>

</div>

<div id="edit_product" class="content">
    <?php
    include('edit_product.php');
    ?>
</div>

<div id="add_shop" class="content">
<?php
    include('add_shop.php');
    ?>
</div>

<div id="add_product" class="content">
    <?php
    include('add_product.php');
    ?>
</div>

</body>
</html>
