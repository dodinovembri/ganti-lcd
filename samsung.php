<?php include('components/heading.php') ?>

<!--Body Container-->
<div id="page-content">
    <?php include('components/home.php') ?>
    <!-- List Product -->
    <div class="container">
        <div class="row">
            <?php include('components/sidebar.php') ?>
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
                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort" onchange="window.location.href=this.value;">
                                        <option value="index.php">Tampil Semua</option>
                                        <option value="iphone.php">Iphone</option>
                                        <option value="oppo.php">Oppo - Android</option>
                                        <option value="vivo.php" >Vivo - Android</option>
                                        <option value="samsung.php" selected="selected">Samsung - Android</option>
                                        <option value="xiaomi.php">Xiaomi - Android</option>
                                        <option value="realme.php">Realme - Android</option>
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
                            <?php if ($value['category'] == 'samsung') { ?>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="void::" class="product-img">
                                            <!-- image -->
                                            <img src="assets/images/lcd-products/<?php echo $value['category'] ?>/<?php echo $value['image'] ?>" alt="image" title="">
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