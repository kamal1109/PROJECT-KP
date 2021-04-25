<section class="bg-blog-style-2">
    <div class="container">
        <div class="row">
            <div class="blog-style-2">
                <div class="row">
                    <div class="row mt-8">
                        <?php foreach ($berita as $berita) { ?>
                            <div class="col-md-4 mb-3">
                                <br>
                                <div class="blog-img" style="width:385px;height:185px;">
                                    <a href="<?php echo base_url('berita/read/' . $berita->slug_berita); ?>"><img src="<?php echo base_url('assets/upload/image/' . $berita->gambar) ?>" alt="blog-img-10" class="img-responsive" /></a>
                                </div>
                                <!-- .blog-img -->
                                <div class="blog-content-box">
                                    <div class="blog-content">
                                        <h4><a href="<?php echo base_url('berita/read/' . $berita->slug_berita); ?>"><?php echo $berita->judul_berita; ?></a></h4>
                                        <ul class="meta-post">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date('d M Y', strtotime($berita->tanggal_publish)); ?></li>
                                            <li><i class="fa fa-user"></i> <?php echo $berita->nama; ?></li>
                                            <!-- <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $berita->hits; ?> Viewer</a></li> -->
                                        </ul>
                                        <p class="text-justify"><?php echo character_limiter(strip_tags($berita->isi), 200); ?></p>
                                        <a href="<?php echo base_url('berita/read/' . $berita->slug_berita); ?>"><i class="fa fa-chevron-right"></i> Selengkapnya</a>
                                    </div>
                                    <!-- .blog-content -->
                                </div>
                                <!-- .blog-content-box -->
                            </div>
                        <?php } ?>
                        <!-- .pagination_option -->

                        <!-- .sidebar -->
                    </div>
                    <!-- .col-md-4 -->
                    <div class="pagination-option">
                        <nav aria-label="Page navigation">
                            <?php if (isset($pagin)) {
                                echo $pagin;
                            }  ?>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- .row -->
            </div>
            <!-- .blog-style-2 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>