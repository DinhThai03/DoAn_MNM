<div class="wrapper-navbar">
    <div class="row">
        <div class="col-md-3 ">
            <div class="listmenu">
                <ul class="list-group list">
                    <h5>Hãng</h5>


                </ul>
            </div>
        </div>
        <div class="col">
            <div class="wrapper-content">
                <div class="container">
                    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>

                        <div class="carousel-inner ">
                            <div class="carousel-item active c-item" data-bs-interval="1000">
                                <img src="./image/1.webp" class="d-block w-100 c-img" alt="Slide 1">

                            </div>
                            <div class="carousel-item c-item">
                                <img src="./image/2.webp" class="d-block w-100 c-img" alt="Slide 2">

                            </div>
                            <div class="carousel-item c-item">
                                <img src="./image/3.webp" class="d-block w-100 c-img" alt="Slide 3">

                            </div>
                            <div class="carousel-item c-item">
                                <img src="./image/4.webp" class="d-block w-100 c-img" alt="Slide 4">

                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        </button>
                    </div>
                </div>
            </div>
            <div class="categories">

                <h3>Danh mục sản phẩm</h3>
                <ul>
                    <?php

                    if (isset($_GET['manhasanxuat']) && $_GET['manhasanxuat'] != '') {
                        $manhasanxuat = $_GET['manhasanxuat'];
                        // Gọi hàm lấy danh mục theo NSX
                        $categories =  getallcate_byID($manhasanxuat);
                    }
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                            echo '<li>
<a href="index.php?page_layout=category&manhasanxuat=' . $category['manhasanxuat'] . '&loai_id=' . $category['id'] . '">' . $category['tenloaisanpham'] . '</a>
</li>';
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="product-1">
                <div class="row pd-0">
                    <div class="container">
                        <div class="row">



                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

</div>