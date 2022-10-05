<div class="col-12 col-lg-4">
    <div class="faith-blog-sidebar-area">

        <!-- Widget -->
        <div class="blog-widget-area">
            <h5>Categories</h5>
            <ul>
                <li><a href="/blog">Semua Kategori</a></li>
                <li><a href="/blog/saint">Saint</a></li>
                <li><a href="/blog/penelitian">Penelitian</a></li>
                <li><a href="/blog/prestasi">Prestasi</a></li>
                <li><a href="/blog/olahraga">Olahraga</a></li>
                <li><a href="/blog/warga">Warga Sekolah</a></li>
                <li><a href="/blog/politik">Politik</a></li>
                <li><a href="/blog/pendidikan">Pendidikan</a></li>
            </ul>
        </div>

        <!-- Widget -->
        <div class="blog-widget-area">
            <h5>Latest Posts</h5>

            <!-- Single Latest Blog Post -->
            @foreach ($lastt as $it => $itemm)
            <div class="single-latest-blog-post d-flex mb-30">
                <div class="latest-blog-post-thumb">
                    <img src="{{ URL::to('/') }}/fotoblog/{{ $itemm->foto_blog}}" class="img-thumbnail" />
                </div>
                <div class="latest-blog-post-content">
                    <a href="/blog/detailblog/{{ $itemm->id }}" class="post-title">{{ $itemm->judul }}</a>
                    <a href="#" class="post-date">{{ $itemm->tgl->toFormattedDateString() }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>