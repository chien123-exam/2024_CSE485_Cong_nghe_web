<?php
    $products = [
        [
            "id" => 1,
            "image" => "img/anh-gai-xinh-hoa-hau_012903484.jpg",
            "name" => "T-Shirt",
            "price" => "15.99",
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "id" => 2,
            "image" => "img/hinh-anh-cute-ve-meo-1.jpg",
            "name" => "Jean",
            "price" => "23",
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "id" => 3,
            "image" => "img/th (1).jpg",
            "name" => "Kaka",
            "price" => "25",
            "description" => "A comfortable and stylish Kaka."
        ],
        [
            "id" => 4,
            "image" => "img/hinh-anh-cute-ve-meo-1.jpg",
            "name" => "Ronal",
            "price" => "28",
            "description" => "A comfortable and stylish Ronal."
        ],
        [
            "id" => 5,
            "image" => "img/th (1).jpg",
            "name" => "Mesi",
            "price" => "30.5",
            "description" => "A comfortable and stylish Mesi."
        ],
        [
            "id" => 6,
            "image" => "img/anh-gai-xinh-hoa-hau_012903484.jpg",
            "name" => "Nerma",
            "price" => "40",
            "description" => "A gorgeous and elegant Nerma."
        ],

    ];
    $itemsPerPage = 3;
    $currentPage = isset($_GET["page"]) ? ($_GET["page"]) :1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage-1)*$itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="./css/style.css"> 
</head>
<body>
    <div>
        <?php
            echo '<div class = products>';
            foreach ($currentPageItems as $product) {
                echo '<div class="product">';
                    echo '<div><image class = "image_pro" img src="' . $product['image'] . '" alt=""></div>';
                    echo '<div class = "infor_pro">';
                        echo '<p>'. $product['name'] .'</p>';
                        echo '<p>'. $product['price'] .'</p>';
                        echo '<h4>'. $product['description'] .'</h4>';
                        
                    echo'</div>';
            echo '</div>';
            
            }
            echo '</div>';
        ?>
    </div>

    <div class="pagination">
        <?php if($currentPage>1): ?>
            <a href="?page=<?php echo $currentPage-1; ?>"><<</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">>></a>
        <?php endif; ?>
    </div>
</body>
</html>