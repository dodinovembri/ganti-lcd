<?php include('components/heading.php') ?>

<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Tutup Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 bottom-link"><a href="login.html">Home</a></li>
        <li class="lvl1 bottom-link"><a href="#">Kategori Produk</a></li>
    </ul>
</div>
<!--End Mobile Menu-->

<!--Body Container-->
<div id="page-content">
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
                                <li class="lvl-1"><a href="#" class="site-nav">Shoes</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Accessories</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Collections</a></li>
                                <li class="lvl-1"><a href="#" class="site-nav">Sale</a></li>
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
                                        <option value="featured" selected="selected">Featured</option>
                                        <option value="best-selling">Best selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-ascending">Date, old to new</option>
                                        <option value="created-descending">Date, new to old</option>
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
                <div class="pagination">
                    <ul>
                        <li class="prev"><a href="#"><i class="icon align-middle an an-caret-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next"><a href="#"><i class="icon align-middle an an-caret-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <!--End Pagination Classic-->
            </div>
            <!--End Main Content-->
        </div>
    </div>
</div>
<!--End Body Container-->

<?php include('components/footing.php') ?>