<div class="col-12 col-lg-4">
    <div class="faith-blog-sidebar-area">

        <!-- Widget -->
        <div class="blog-widget-area">
            <h5>Pelajaran</h5>
            <ul>
                <li><a href="/nilai/kelasvii">Semua Pelajaran</a></li>
                <li><a href="/nilai/kelasvii/bali">BHS. Bali</a></li>
                <li><a href="/nilai/kelasvii/indo">BHS. Indonesia</a></li>
                <li><a href="/nilai/kelasvii/informatika">Informatika</a></li>
                <li><a href="/nilai/kelasvii/inggris">BHS. Inggris</a></li>
                <li><a href="/nilai/kelasvii/ipa">IPA</a></li>
                <li><a href="/nilai/kelasvii/ips">IPS</a></li>
                <li><a href="/nilai/kelasvii/matematika">Matematika</a></li>
                <li><a href="/nilai/kelasvii/pab">PAB</a></li>
                <li><a href="/nilai/kelasvii/pjok">PJOK</a></li>
                <li><a href="/nilai/kelasvii/pkn">PKN</a></li>
                <li><a href="/nilai/kelasvii/seni">Seni Budaya</a></li>
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