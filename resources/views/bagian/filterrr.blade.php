<div class="col-12 col-lg-4">
    <div class="faith-blog-sidebar-area">

        <!-- Widget -->
        <div class="blog-widget-area">
            <h5>Pelajaran</h5>
            <ul>
                <li><a href="/nilai/kelasvix">Semua Pelajaran</a></li>
                <li><a href="/nilai/kelasvix/bali">BHS. Bali</a></li>
                <li><a href="/nilai/kelasvix/indo">BHS. Indonesia</a></li>
                <li><a href="/nilai/kelasvix/informatika">Informatika</a></li>
                <li><a href="/nilai/kelasvix/inggris">BHS. Inggris</a></li>
                <li><a href="/nilai/kelasvix/ipa">IPA</a></li>
                <li><a href="/nilai/kelasvix/ips">IPS</a></li>
                <li><a href="/nilai/kelasvix/matematika">Matematika</a></li>
                <li><a href="/nilai/kelasvix/pab">PAB</a></li>
                <li><a href="/nilai/kelasvix/pjok">PJOK</a></li>
                <li><a href="/nilai/kelasvix/pkn">PKN</a></li>
                <li><a href="/nilai/kelasvix/seni">Seni Budaya</a></li>
            </ul>
        </div>

        <!-- Widget -->
        <div class="blog-widget-area">
            <h5>Latest Posts</h5>

            <!-- Single Latest Blog Post -->
            @foreach ($lastt as $it => $itemm)
            <div class="single-latest-blog-post d-flex mb-30">
                <div class="latest-blog-post-thumb">
                    <img src="/indexcss/img/lainnya/nilaii.png" height="400px" height="400px" alt="">
                </div>
                <div class="latest-blog-post-content">
                    <a href="#" class="post-title">{{ $itemm->judul_nilai }}</a>
                    <a href="#" class="post-date">{{ $itemm->tgl->toFormattedDateString() }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>