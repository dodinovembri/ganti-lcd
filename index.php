<?php include('components/heading.php') ?>

<!--Body Container-->
<div id="page-content">
    <!-- List Product -->
    <!--Home Slider-->
    <section class="slideshow slideshow-wrapper">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" data-src="assets/images/slideshow/demo1-banner2c.jpg" src="assets/images/slideshow/demo1-banner2c.jpg" alt="MAKING BRAND VISIBLE" title="MAKING BRAND VISIBLE" width="2000" height="840" />
                    <img class="blur-up lazyload mobile-hide" data-src="assets/images/slideshow/demo1-banner2-mc.jpg" src="assets/images/slideshow/demo1-banner2-mc.jpg" alt="MAKING BRAND VISIBLE" title="MAKING BRAND VISIBLE" width="705" height="780" />
                    <div class="slideshow-content slideshow-overlay bottom-middle container d-flex justify-content-center align-items-center">
                        <div class="slideshow-content-in text-center">
                            <div class="wrap-caption animation style2 whiteText px-2">
                                <h2 class="mega-title ss-mega-title fs-1">Ganti LCD HP</h2>
                                <span class="mega-subtitle ss-sub-title fs-6">Ganti LCD dengan harga yang terjangkau.<br> Pesan sekarang juga.</span>
                                <div class="ss-btnWrap">
                                    <a class="btn btn-lg rounded btn-primary" href="https://wa.me/+6282183599197?text=Hallo..%20Saya%20ingin%20ganti%20LCD%20HP%20apakah%20bisa?">WhatsApp Sekarang!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home Slider--> 
    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-lg-none"><i class="icon icon an an-times-r"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filterBox filter-widget">
                        <div class="widget-title">
                            <h2 class="mb-0">Categories</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix sidebar_categories mb-0">
                                <li class="lvl-1"><a href="#" class="site-nav">Iphone</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Oppo - Android</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Vivo - Android</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Samsung - Android</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Xiaomi - Android</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Realme - Android</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                </div>
            </div>
            <!--End Sidebar-->

            <!--Main Content-->
            <?php
            $data = "data/products.json";
            $data_products = file_get_contents($data);
            $products = json_decode($data_products, true);
            ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                <!--Toolbar-->
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <ul class="list-unstyled d-flex align-items-center">
                            <li class="collection-view ms-sm-auto">
                                <div class="filters-toolbar__item collection-view-as d-flex align-items-center me-3">
                                    <a href="javascript:void(0)" class="change-view prd-grid change-view--active"><i class="icon an an-th" aria-hidden="true"></i><span class="tooltip-label">Grid View</span></a>
                                    <a href="javascript:void(0)" class="change-view prd-list"><i class="icon an an-th-list" aria-hidden="true"></i><span class="tooltip-label">List View</span></a>
                                </div>
                            </li>
                            <li class="filters-sort ms-auto ms-sm-0">
                                <div class="filters-toolbar__item">
                                    <label for="SortBy" class="hidden">Sort by:</label>
                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                        <option value="featured" selected="selected">Tampil Semua</option>
                                        <option value="best-selling">Iphone</option>
                                        <option value="title-ascending">Oppo - Android</option>
                                        <option value="title-descending">Vivo - Android</option>
                                        <option value="price-ascending">Samsung - Android</option>
                                        <option value="price-descending">Xiaomi - Android</option>
                                        <option value="created-ascending">Realme - Android</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Toolbar-->

                <!--Product Grid-->
                <div class="grid-products grid--view-items prd-grid">
                    <div class="row">
                        <?php
                        foreach ($products as $key => $value) { ?>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="void::" class="product-img">
                                        <!-- image -->
                                        <img src="assets/images/products/<?php echo $value['image'] ?>" alt="image" title="">
                                        <!-- End image -->
                                    </a>
                                    <!--End Product Image-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name text-uppercase">
                                        <a href="void::"><?php echo $value['name'] ?></a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">Rp. <?php echo number_format($value['selling_price'], 0, ',', '.'); ?></span>
                                    </div>
                                    <!--End Product Price-->
                                </div>
                                <!--End Product Details-->
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!--End Product Grid-->

                <!--Pagination Classic-->
                <hr class="clear">
            </div>
            <!--End Main Content-->
        </div>
    </div>
</div>
<!--End Body Container-->

<?php include('components/footing.php') ?>