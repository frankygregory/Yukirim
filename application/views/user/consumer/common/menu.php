<ul class="nav navbar-nav side-nav">
    <li>
        <a href="<?=base_url()?>panel/home/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
    </li>

    <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#kirim"><i class="fa fa-fw fa-send"></i> Kirim <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="kirim" class="collapse">
            <li>
                <a href="<?=base_url()?>consumer/kirim/">All</a>
            </li>
            <li>
                <a href="<?=base_url()?>consumer/kirim/privates">Private</a>
            </li>
            <li>
                <a href="<?=base_url()?>consumer/kirim/publics">Public</a>
            </li>
            <li>
                <a href="<?=base_url()?>consumer/kirim/penawaran">Penawaran</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="<?=base_url()?>consumer/kiriman"><i class="fa fa-fw fa-dropbox"></i> Kiriman</a>

    </li>

    <li>
        <a href="<?=base_url()?>consumer/lokasi"><i class="fa fa-fw fa-map-marker"></i> Lokasi</a>
    </li>
    <li>
        <a href="<?=base_url()?>consumer/report"><i class="fa fa-fw fa-bar-chart"></i> Laporan</a>
    </li>
</ul>