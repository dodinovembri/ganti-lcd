<?php include('components/heading.php') ?>  
        
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="index.html">Home</a>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Kategori Produk</a>
        </li>
    </ul>
</div>
<!--End Mobile Menu-->

<!--Body Container-->
<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <!--Category Grid-->
        <div class="container">
            <!--Category Masonary Grid-->
            <div class="grid-categorys grid-mr-20">
                <div class="grid-masonary category-page-grid style1">
                    <div class="grid-sizer col-6 col-sm-6 col-md-6 col-lg-6"></div>
                    <div class="row mx-0">
                        <?php
                        $data = "data/category.json";
                        $data_category = file_get_contents($data);
                        $categories = json_decode($data_category, true);
                        ?>
                        <?php
                        foreach ($categories as $key => $value) { ?>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 category-grid-item cl-item">
                                <div class="category-item position-relative overflow-hidden zoomscal-hov">
                                    <a href="products.php" class="category-link">
                                        <div class="zoom-scal"><img class="blur-up lazyload" data-src="assets/images/collection/<?php echo $value['image']; ?>" src="assets/images/collection/<?php echo $value['image']; ?>" alt="collection" title="" /></div>
                                        <div class="details">
                                            <div class="inner">
                                                <h3 class="category-title"><?php echo $value['name']; ?></h3>
                                                <span class="counts mt-0 mt-md-1"><?php echo $value['total_product']; ?> Products</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--End Category Masonary Grid-->
        </div>
        <!--End Category Grid-->
    </div>
    <!--End Body Container-->

</div>
<!--End Page Wrapper-->

<?php include('components/footing.php') ?>