<section class="banner">
    <div class="box_slide_carousel">
        <div class="homi_slide owl-carousel owl-theme">
            <div class="item">
                <img alt="" src="public/images/banner.png" class="responsive" draggable="false" style="height:600px;">
            </div>
            <div class="item">
                <img alt="" src="public/images/banner1.png" class="responsive" draggable="false" style="height:600px;" >
            </div>
            <div class="item">
                <img alt="" src="public/images/banner0.png" class="responsive" draggable="false" style="height:600px;">
            </div>
        </div>
    </div>
</section>


<section id="menu" class="hm-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="menu_title line_after_heading section_heading">Menu</h2>
                <div class="viewmore_menu_home"><a class="animate_btn" href="Menu" title="Xem thêm tất cả sản phẩm">xem thêm tất cả sản phẩm</a></div>
            </div>
        </div>
        <div class="box-padding">
            <div class="hm_scrollview">
                <div class="hm_block_menu_items">
                    <h1 class="hm_menu_items_title">Món mới</h1>
                    <div class="row">
                        <?php
                        for ($i = 1; $i <= 4; $i++) {
                            $row = mysqli_fetch_array($data["SPn"]);
                            $giaL = $row["DonGia"] + 5000;
                            echo
                            '<div class="col-lg-3 col-md-6 col-6">
                                <a href="Menu/Details/'.$row["MaDU"].'">
                                    <div class="hm_menu_item">
                                        <div class="hm_item_image">
                                            <img src="public/upload/douong/' . $row["HinhAnh"] . '" alt="' . $row["TenDU"] . '" class="img-fluid">
                                        </div>
                                        <div class="hm_item_info">
                                            <div class="item_title">
                                                <h3>' . $row["TenDU"] . '</h3>
                                            </div>
                                            <div class="item_price">
                                                <div class="size">
                                                    <span>M</span><br>
                                                    <span>' . $row["DonGia"] . ' ₫</span>
                                                </div>
                                                
                                                <div class="size">
                                                    <span>L</span><br>
                                                    <span>' . $giaL . ' ₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
                <div class="hm_block_menu_items">
                    <h1 class="hm_menu_items_title">Bán chạy</h1>
                    <div class="row">
                        <?php
                        for ($i = 1; $i <= 4; $i++) {
                            $row = mysqli_fetch_array($data["SPh"]);
                            $giaL = $row["DonGia"] + 5000;
                            echo
                            '<div class="col-lg-3 col-md-6 col-6">
                                <a href="Menu/Details/'.$row["MaDU"].'">
                                    <div class="hm_menu_item">
                                        <div class="hm_item_image">
                                            <img src="public/upload/douong/' . $row["HinhAnh"] . '" alt="' . $row["TenDU"] . '" class="img-fluid">
                                        </div>
                                        <div class="hm_item_info">
                                            <div class="item_title">
                                                <h3>' . $row["TenDU"] . '</h3>
                                            </div>
                                            <div class="item_price">
                                                <div class="size">
                                                    <span>M</span><br>
                                                    <span>' . $row["DonGia"] . ' ₫</span>
                                                </div>
                                                
                                                <div class="size">
                                                    <span>L</span><br>
                                                    <span>' . $giaL . ' ₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="store" class="hm-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h2 class="store_title line_after_heading section_heading">cửa hàng</h2>
            </div>
            <div class="col-md-5">
                <div class="select text-center">
                    <div class="select-content">
                        <h1>Highland Coffee</h1>
                        <h3>Tìm kiếm cửa hàng</h3>
                        <div class="box-setup">
                            <select id="tocotoddress" style="display: none;">
                                <option value="0" disabled="" selected="">Chọn cửa hàng Aroma Coffe</option>
                                <option value="homi_3">CH 11 Lý Quốc Sư, Vạn Thạnh, Nha Trang</option>
                                <option value="homi_4">CH 102 Quang Trung, Lộc Thọ, Nha Trang</option>
                                <option value="homi_5">CH 12 Võ Thị Sáu, Phước Long, Nha Trang</option>
                                <option value="homi_6">CH 745 đường 2/4, Nha Trang</option>
                                <option value="homi_9">CH 1A Bắc Sơn, Vĩnh Hải, Nha Trang</option>
                                <option value="homi_7">CH 400 đường 23/10, Ngọc Hiệp, Nha Trang</option>
                                <option value="homi_10">CH 195 đường 22/8, Cam Thuận, Cam Ranh</option>
                                <option value="homi_8">CH 342 – 344 đường 2/4, Nha Trang</option>
                                <option value="homi_12">CH 2A Cao Bá Quát, Nha Trang</option>
                                <option value="homi_13">CH 44 Lý Tự Trọng, Diên Khánh</option>
                                <option value="homi_14">CH 469 Thống Nhất, Phan Rang – Tháp Chàm</option>
                                <option value="homi_15">CH 150 Nguyễn Chí Thanh, Cam Nghĩa, Cam Ranh, Khánh Hòa.</option>
                                <option value="homi_16">CH 40 Nguyễn Văn Trỗi, Cẩm Thủy, Cẩm Phả, Quảng Ninh.</option>
                            </select>
                            <div class="nice-select" tabindex="0"><span class="current">Chọn cửa hàng Highland Coffee</span>
                                <ul class="list">
                                    <li data-value="0" class="option selected disabled">Chọn cửa Highland Coffee</li>
                                    <li data-value="homi_3" class="option">CH 11 Lý Quốc Sư, Vạn Thạnh, Nha Trang</li>
                                    <li data-value="homi_4" class="option">CH 102 Quang Trung, Lộc Thọ, Nha Trang</li>
                                    <li data-value="homi_5" class="option">CH 12 Võ Thị Sáu, Phước Long, Nha Trang</li>
                                    <li data-value="homi_6" class="option">CH 745 đường 2/4, Nha Trang</li>
                                    <li data-value="homi_9" class="option">CH 1A Bắc Sơn, Vĩnh Hải, Nha Trang</li>
                                    <li data-value="homi_7" class="option">CH 400 đường 23/10, Ngọc Hiệp, Nha Trang</li>
                                    <li data-value="homi_10" class="option">CH 195 đường 22/8, Cam Thuận, Cam Ranh</li>
                                    <li data-value="homi_8" class="option">CH 342 – 344 đường 2/4, Nha Trang</li>
                                    <li data-value="homi_12" class="option">CH 2A Cao Bá Quát, Nha Trang</li>
                                    <li data-value="homi_13" class="option">CH 44 Lý Tự Trọng, Diên Khánh</li>
                                    <li data-value="homi_14" class="option">CH 469 Thống Nhất, Phan Rang – Tháp Chàm</li>
                                    <li data-value="homi_15" class="option">CH 150 Nguyễn Chí Thanh, Cam Nghĩa, Cam Ranh, Khánh Hòa.</li>
                                    <li data-value="homi_16" class="option">CH 40 Nguyễn Văn Trỗi, Cẩm Thủy, Cẩm Phả, Quảng Ninh.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="show_homi-house">
                            <div class="homi-house" data-value="homi_3">
                                <h2 class="text-center m-bottom">CH 11 Lý Quốc Sư, Vạn Thạnh, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>1 Lý Quốc Sư, Vạn Thạnh, Thành phố Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3561.199</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_4">
                                <h2 class="text-center m-bottom">CH 102 Quang Trung, Lộc Thọ, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>102 Quang Trung, Lộc Thọ, Thành phố Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3523.833</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_5">
                                <h2 class="text-center m-bottom">CH 12 Võ Thị Sáu, Phước Long, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>12 Võ Thị Sáu, Phước Long, Thành phố Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3880.655</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_6">
                                <h2 class="text-center m-bottom">CH 745 đường 2/4, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>745 đường 2/4, Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3561.199</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_9">
                                <h2 class="text-center m-bottom">CH 1A Bắc Sơn, Vĩnh Hải, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>1 Bắc Sơn, Vĩnh Hải, Thành phố Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0935.083.565</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_7">
                                <h2 class="text-center m-bottom">CH 400 đường 23/10, Ngọc Hiệp, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>14 Đường 23/10, Vĩnh Hiệp, Thành phố Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3891.911</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_10">
                                <h2 class="text-center m-bottom">CH 195 đường 22/8, Cam Thuận, Cam Ranh</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>195 Đường 23/10, Cam Thuận, Cam Ranh</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0889.414.040</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_8">
                                <h2 class="text-center m-bottom">CH 342 – 344 đường 2/4, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>342 – 344 đường 2/4, Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0376.439.903</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_12">
                                <h2 class="text-center m-bottom">CH 2A Cao Bá Quát, Nha Trang</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>2A Cao Bá Quát, Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3561.199</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_13">
                                <h2 class="text-center m-bottom">CH 44 Lý Tự Trọng, Diên Khánh</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>44 Lý Tự Trọng, Diên Khánh</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3561.199</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_14">
                                <h2 class="text-center m-bottom">CH 469 Thống Nhất, Phan Rang – Tháp Chàm</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>469 Thống Nhất, Phan Rang – Tháp Chàm</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3561.199</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_15">
                                <h2 class="text-center m-bottom">CH 150 Nguyễn Chí Thanh, Cam Nghĩa, Cam Ranh, Khánh Hòa.</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>150 Nguyễn Chí Thanh, Cam Nghĩa, Cam Ranh, Khánh Hòa.</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3561.199</li>
                                </ul>
                            </div>
                            <div class="homi-house" data-value="homi_16">
                                <h2 class="text-center m-bottom">CH 40 Nguyễn Văn Trỗi, Cẩm Thủy, Cẩm Phả, Quảng Ninh.</h2>
                                <ul class="homicontactList">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>40 Nguyễn Văn Trỗi, Cẩm Thủy, Cẩm Phả, Quảng Ninh.</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>0258.3561.199</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="homimaps active">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29800.201211152744!2d108.19530752550669!3d16.056322305226082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421831f07b5bbd%3A0xcd7a8fe73f0354a4!2sHighlands%20Coffee!5e0!3m2!1svi!2s!4v1665387413985!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="homimaps" data-maps="homi_3">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.307591842444!2d108.20089163164751!3d16.071444648324103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217b3ee661bef%3A0x516cdf137fb627ef!2s43%20Factory%20Coffee%20Roaster!5e0!3m2!1svi!2s!4v1665386839455!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_4">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.307591842444!2d108.20089163164751!3d16.071444648324103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142190960c9bcaf%3A0xe9a4810fc1584903!2sHighlands%20Coffee%20VTV8!5e0!3m2!1svi!2s!4v1665387039535!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_5">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.307591842444!2d108.20089163164751!3d16.071444648324103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421831f07b5bbd%3A0xcd7a8fe73f0354a4!2sHighlands%20Coffee!5e0!3m2!1svi!2s!4v1665387057055!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_6">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.307591842444!2d108.20089163164751!3d16.071444648324103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219fee947dab9%3A0x3727646c57b10d78!2sHighlands%20Coffee!5e0!3m2!1svi!2s!4v1665386538429!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_7">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.307591842444!2d108.20089163164751!3d16.071444648324103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217b3ee661bef%3A0x516cdf137fb627ef!2s43%20Factory%20Coffee%20Roaster!5e0!3m2!1svi!2s!4v1665386839455!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_8">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.307591842444!2d108.20089163164751!3d16.071444648324103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219e42dc3aa25%3A0xfedd98b7131e0435!2sHighlands%20Coffee!5e0!3m2!1svi!2s!4v1665386923450!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_9">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.307591842444!2d108.20089163164751!3d16.071444648324103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219fee947dab9%3A0x3727646c57b10d78!2sHighlands%20Coffee!5e0!3m2!1svi!2s!4v1665386538429!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_10">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51211.66218325069!2d108.17953830049815!3d16.070067543950884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ea2b2091e3%3A0xac96b212ef39b2f8!2zSGlnaGxhbmRzIENvZmZlZSA1MTcgVHLhuqduIEjGsG5nIMSQ4bqhbw!5e0!3m2!1svi!2s!4v1665387390144!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
                <div class="homimaps" data-maps="homi_11">
                    <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29800.201211152744!2d108.19530752550669!3d16.056322305226082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219daa5955333%3A0xb84cd7c38d03de72!2sHighlands%20Coffee!5e0!3m2!1svi!2s!4v1665387432528!5m2!1svi!2s" style="border:0;" width="100%"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>
