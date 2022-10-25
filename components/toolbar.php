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
                        <option>Pilih Kategori</option>
                        <option value="index.php">Tampil Semua</option>
                        <option value="iphone.php">Iphone</option>
                        <option value="oppo.php">Oppo - Android</option>
                        <option value="vivo.php">Vivo - Android</option>
                        <option value="samsung.php">Samsung - Android</option>
                        <option value="xiaomi.php">Xiaomi - Android</option>
                        <option value="realme.php">Realme - Android</option>
                    </select>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--End Toolbar-->