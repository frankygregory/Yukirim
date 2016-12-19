<ul class="nav navbar-nav side-nav">
    <li>
        <a href="<?=base_url()?>expedition/home/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
    </li>

    <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#cari-kiriman"><i class="fa fa-fw fa-search-plus"></i> Cari Kiriman <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="cari-kiriman" class="collapse">
            <li>
                <a href="<?=base_url()?>expedition/cari_kiriman/">All</a>
            </li>
            <li>
                <a href="<?=base_url()?>expedition/cari_kiriman/privat">Private</a>
            </li>
            <li>
                <a href="<?=base_url()?>expedition/cari_kiriman/publik">Public</a>
            </li>
            <li>
                <a href="<?=base_url()?>expedition/cari_kiriman/penawaran">Penawaran</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="<?=base_url()?>expedition/kiriman"><i class="fa fa-fw fa-dropbox"></i> Kiriman</a>

    </li>

    <li>
        <a href="<?=base_url()?>expedition/kendaraan"><i class="fa fa-fw fa-truck"></i> Kendaraan</a>
    </li>
    <li>
        <a href="<?=base_url()?>expedition/supir"><i class="fa fa-fw fa-male"></i> Supir</a>
    </li>

    <li>
        <a href="<?=base_url()?>expedition/tagihan"><i class="fa fa-fw fa-archive"></i> Tagihan</a>
    </li>

    <li>
        <a href="<?=base_url()?>expedition/alat"><i class="fa fa-fw fa-tasks"></i> Alat</a>
    </li>
    <li>
        <a href="<?=base_url()?>expedition/report"><i class="fa fa-fw fa-bar-chart"></i> Laporan</a>
    </li>
</ul>