<div class="container">
    <div class="content-shop container">
        <div class="content-shop_left container">
            <div class="content-shop_left_text1 container">
                <p>Showing 1-9 of 57 results</p>
                <nav class="menu_popularity">
                    <ul>
                        <li>
                            <a href="#">
                                <p>Sort by popularity <i class="fa-solid fa-check"></i> </p>
                            </a>
                            <ul>
                                <li><a href="#">Modern sofa</a></li>
                                <li><a href="#">Modern chair</a></li>
                                <li><a href="#">Modern table</a></li>
                                <li><a href="#">Modern lamp</a></li>
                                <li><a href="#">Modern sofa</a></li>
                                <li><a href="#">Modern sofa</a></li>

                            </ul>
                        </li>

                    </ul>
                </nav>

            </div>

            <!-- <div class="content-shop_left_product1">
                <?php foreach ($spnew as $sp) {
                    $filename = $img_path . $img_product;
                    extract($sp);
                    echo '<div>
                    <a href="./detail.html"><img src="' . $filename . '" alt=""></a>
                    <a class="name_product" href="./detail.html">
                        <p>' . $name_product . '</p>
                    </a>
                    <center>
                        <div class="img_star_product">
                            <a href="#">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                            </a>
                        </div>
                    </center>
                    <p class="price_product">' . $price_product . '</p>
                </div>';
                }  ?>
            </div> -->
            <div class="container">
                <?php foreach ($spnew as $sp) {
                    $filename = $img_path . $img_product;
                    extract($sp);
                    echo '
                <div class="row">
                    <div class="col-sm">
                        <a href="index.php?act=detail"><img src="' . $filename . '" alt=""></a>
                        <a class="name_product" href="index.php?act=detail"">
                            <p>' . $name_product . ' </p>
                        </a>
                        <center>
                        <div class="img_star_product">
                            <a href="#">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                            </a>
                        </div>
                    </center>
                    <p class="price_product">' . $price_product . ' VNĐ</p>
                    </div>
                    <div class="col-sm">
                    <a href="index.php?act=detail""><img src="' . $filename . '" alt=""></a>
                    <a class="name_product" href="index.php?act=detail"">
                        <p>' . $name_product . '</p>
                        <center>
                        <div class="img_star_product">
                            <a href="#">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                            </a>
                        </div>
                    </center>
                <p class="price_product">' . $price_product . ' VNĐ</p>
                    </div>
                    <div class="col-sm">
                    <a href="index.php?act=detail""><img src="' . $filename . '" alt=""></a>
                    <a class="name_product" href="index.php?act=detail"">
                        <p>' . $name_product . '</p>
                    </a>
                    <center>
                    <div class="img_star_product">
                        <a href="#">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                        </a>
                    </div>
                </center>
                <p class="price_product">' . $price_product . ' VNĐ</p>
                    </div>
                </div>
                ';
                }  ?>

            </div>

            <div class="number_page">
                <div class="number">
                    <a href="">
                        <p>1</p>
                    </a>
                    <a href="">
                        <p>2</p>
                    </a>
                    <a href="">
                        <p>3</p>
                    </a>
                    <a href="">
                        <p>4</p>
                    </a>
                    <a href="">
                        <p>5</p>
                    </a>
                    <a href="">
                        <p>6</p>
                    </a>
                    <a href="">
                        <p>7</p>
                    </a>
                    <a href="">
                        <p>8</p>
                    </a>
                    <a href="">
                        <p>></p>
                    </a>
                </div>
                <p>view all</p>
            </div>
            <style>

            </style>
        </div>
        <div class="content-shop_right">
            <input class="search1" type="text" placeholder="Search...">
            <div class="content-shop_right_text">
                <ul class="list-group">
                    <li class="list-group-item disabled">Danh mục sản phẩm</li>
                    <?php
                    foreach ($dmlist as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=product&id_cate=" . $id_cate;
                        echo '<li class="list-group-item"><a href="' . $linkdm . '">' . $name_cate . '</a></li>';
                    }
                    ?>

                </ul>



                <!-- <a class="content-shop_right_text1_first" href="">
                    <p>Color</p>
                </a>
                <a class="content-shop_right_text1" href="">
                    <p>Black (25)</p>
                </a>
                <a class="content-shop_right_text1" href="">
                    <p>Blue (25)</p>
                </a>
                <a class="content-shop_right_text1" href="">
                    <p>Red (25)</p>
                </a>
                <a class="content-shop_right_text1" href="">
                    <p>Green (25)</p>
                </a>
                <a class="content-shop_right_text1" href="">
                    <p>Yellow (25)</p>
                </a>
                <a class="content-shop_right_text1" href="">
                    <p>Grey (25)</p>
                </a> -->
            </div>
            <div class="slidecontainer">
                <input type="range" min="1" max="800" value="50" class="slider" id="myRange">
                <div class="slidecontainer_all">
                    <p>Price:$ <span id="demo"></span></p>
                    <button class="button_filter">Filter</button>
                </div>
            </div>
        </div>
    </div>
</div>