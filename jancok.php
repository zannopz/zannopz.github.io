<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio Zann_Opz</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="avatar.png" class="logo" alt="Avatar" />
        </div>
        <h1 style="color: darkgray">Portfolio <span style="color: green">Zann_Opz</span></h1>
        <div class="list">
            <?php
            $items = [
                ["image" => "6.png", "price" => "45$", "name" => "Sản phẩm"],
                ["image" => "3.png", "price" => "45$", "name" => "Sản phẩm"],
                ["image" => "9.png", "price" => "45$", "name" => "Sản phẩm"],
            ];

            foreach ($items as $item) {
                echo '<div class="item">';
                echo '<img src="' . $item['image'] . '" alt="Product Image">';
                echo '<div class="content">';
                echo '<div class="itemtext"><img src="' . $item['image'] . '" alt="Product Image"><span>' . $item['price'] . '</span><span>' . $item['name'] . '</span></div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="menu">
        <ul>
            <li><i class="fa-regular fa-keyboard"></i></li>
            <li><i class="fa-regular fa-pen-to-square"></i></li>
            <li><i class="fa-regular fa-user"></i><i class="fa-solid fa-caret-down"></i></li>
            <li id="next"><i class="fa-solid fa-arrow-right"></i></li>
        </ul>
    </div>
</body>
</html>
