<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TNB Logistics | บริการขนส่งและโลจิสติกส์ครบวงจร
    </title>
    <meta name="description" content="บริการขนส่งและโลจิสติกส์ครบวงจร" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lato:wght@400;700&family=Playfair+Display:wght@400;700&family=Sarabun:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Libraries: GSAP & Lenis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js" defer></script>
    <!-- Note: SplitText is a club plugin, typically requires local file or private CDN. 
         Assuming the provided scripts will handle its absence gracefully or it will be added if available. -->

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>

    <?php include '../component/menubar.php'; ?>

    <!-- SLIDER SECTION (Tap House Tilt Panel) — 6 Slides with Prev/Next -->
    <section class="tnb-home-slider" id="tnbHomeSlider">

        <!-- Prev / Next Navigation Buttons -->
        <button class="tnb-slider-nav tnb-slider-nav--prev" id="tnbSliderPrev"
            aria-label="Previous slide">&#8249;</button>
        <button class="tnb-slider-nav tnb-slider-nav--next" id="tnbSliderNext" aria-label="Next slide">&#8250;</button>

        <!-- Slides Track -->
        <div class="tnb-panel-container">
            <!-- Slide 1: Domestic Logistics -->
            <div class="tnb-panel tnb-slide tnb-slide--active" data-index="0">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Domestic</h1>
                            <p class="tnb-panel__addr"><span></span>โลจิสติกส์ในประเทศ</p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show1.png" alt="Domestic Logistics"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="tnb-panel tnb-slide" data-index="1">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Packaging</h1>
                            <p class="tnb-panel__addr"><span></span>นวัตกรรมบรรจุภัณฑ์</p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show2.png" alt="Packaging Development"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="tnb-panel tnb-slide" data-index="2">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Supply</h1>
                            <p class="tnb-panel__addr"><span></span>ระบบบริหารจัดการ</p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show3.jpeg" alt="Supply Management"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="tnb-panel tnb-slide" data-index="3">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Warehouse</h1>
                            <p class="tnb-panel__addr"><span></span>บริหารคลังสินค้า</p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show4.png" alt="Warehouse Operation"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="tnb-panel tnb-slide" data-index="4">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Transport</h1>
                            <p class="tnb-panel__addr"><span></span>ขนส่งอัจฉริยะ</p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show5.jpeg" alt="Transportation Fleet"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 6 -->
            <div class="tnb-panel tnb-slide" data-index="5">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Container</h1>
                            <p class="tnb-panel__addr"><span></span>บริการคอนเทนเนอร์</p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/service/container/Container.png" alt="Container Service"
                        class="tnb-panel__img" />
                </div>
            </div>
        </div>

        <!-- Dots Indicator -->
        <div class="tnb-slider-dots" id="tnbSliderDots" aria-label="Slide indicators">
            <button class="tnb-dot tnb-dot--active" data-index="0" aria-label="Slide 1"></button>
            <button class="tnb-dot" data-index="1" aria-label="Slide 2"></button>
            <button class="tnb-dot" data-index="2" aria-label="Slide 3"></button>
            <button class="tnb-dot" data-index="3" aria-label="Slide 4"></button>
            <button class="tnb-dot" data-index="4" aria-label="Slide 5"></button>
            <button class="tnb-dot" data-index="5" aria-label="Slide 6"></button>
        </div>
    </section>


    <!-- CONTENT / DETAILS SECTION — เกี่ยวกับเรา -->
    <div class="content-section layout_padding">
        <!-- ใช้ Flexbox แทน Bootstrap row/col -->
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px;">

            <!-- คอลัมน์ซ้าย: รูปภาพ -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box">
                    <div class="details-image">
                        <img src="../img/other/index/about/index_about.png" alt="Detail Image">
                    </div>
                </div>
            </div>

            <!-- คอลัมน์ขวา: เนื้อหา -->
            <div style="flex: 1; min-width: 300px;">
                <h1 class="details-title">เกี่ยวกับเรา</h1>

                <!-- ย่อหน้าแรก: เน้นว่า KOCH คือใคร และเป้าหมายคืออะไร -->
                <p class="details-desc">
                    KOCH คือผู้เชี่ยวชาญด้านบริการ Supply Chain ครบวงจร สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย
                    มุ่งเน้นการสร้างระบบที่ <strong>"Smart, Fast, and Sustainable"</strong>
                </p>

                <!-- ย่อหน้าที่สอง: เน้นบทบาท Partner และใช้ List เพื่อแจกแจงความเชี่ยวชาญ -->
                <p class="details-desc">
                    เราไม่ได้เป็นเพียงผู้ผลิตบรรจุภัณฑ์ แต่คือ <strong>"พันธมิตรเชิงกลยุทธ์"</strong>
                    ที่ช่วยยกระดับการบริหารจัดการโลจิสติกส์ให้มีประสิทธิภาพสูงสุด ด้วยความเชี่ยวชาญเฉพาะด้าน:
                </p>

                <ul class="details-desc"> <!-- ใช้ class เดียวกับ p เพื่อให้ฟอนต์เท่ากัน -->
                    <li>ระบบ VMI (Vendor Managed Inventory)</li>
                    <li>การออกแบบวิศวกรรมภายในองค์กร (In-house Engineering)</li>
                    <li>การปรับวิธีกรรมระบบอัตโนมัติที่ล้ำสมัย</li>
                </ul>

                <div class="details-action-group">
                </div>
            </div>

        </div>
    </div>


    <!-- CONTENT / DETAILS SECTION — บริการของเรา (News Card Style) -->
    <div class="tnb-services-section content-section layout_padding">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div class="tnb-services-section__heading">
            <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none;">
                บริการของเรา
            </h1>
            <p class="details-desc" style="margin-top: 5px; margin-bottom: 28px; line-height: 1.8;">
                บริการบรรจุภัณฑ์และการจัดการลอจิสติกส์แบบครบวงจร<br>ที่ตอบสนองทุกความต้องการของธุรกิจด้วยระบบที่ทันสมัย
            </p>
        </div>

        <!-- ส่วน News Card Grid — 6 บริการหลัก (3×2 Grid) -->
        <div class="tnb-news-content-wrapper">

            <!-- การ์ด 1: Packaging Development -->
            <div class="tnb-news-card">
                <a href="../service/development.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/development/development.jpeg" alt="Packaging Development"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Packaging Development</h2>
                    <div class="tnb-news-card__post-date">นวัตกรรมการออกแบบบรรจุภัณฑ์</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt">ออกแบบและพัฒนาบรรจุภัณฑ์ครบวงจร
                            ด้วยทีมวิศวกรภายในองค์กรที่มีประสบการณ์&hellip;</p>
                        <a href="../service/development.php" class="tnb-news-card__read-more">อ่านเพิ่มเติม &rsaquo;</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 2: Supply Management -->
            <div class="tnb-news-card">
                <a href="../service/supply_management.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/supply/supply_management.jpeg" alt="Supply Management"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Supply Management System</h2>
                    <div class="tnb-news-card__post-date">ระบบบริหารจัดการบรรจุภัณฑ์</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt">ระบบ VMI อัจฉริยะเพื่อบริหารจัดการสต็อคและ Supply Chain
                            ให้มีประสิทธิภาพสูงสุด&hellip;</p>
                        <a href="../service/supply_management.php" class="tnb-news-card__read-more">อ่านเพิ่มเติม
                            &rsaquo;</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 3: Warehouse & Operation -->
            <div class="tnb-news-card">
                <a href="../service/warehouse.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/warehouse/warehouse.jpeg" alt="Warehouse Management"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Warehouse &amp; Operation</h2>
                    <div class="tnb-news-card__post-date">บริหารคลังสินค้าและงานปฏิบัติการ</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt">บริหารจัดการคลังสินค้าและงานปฏิบัติการอย่างมืออาชีพ
                            ด้วยระบบที่ครบวงจร&hellip;</p>
                        <a href="../service/warehouse.php" class="tnb-news-card__read-more">อ่านเพิ่มเติม &rsaquo;</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 4: Transportation -->
            <div class="tnb-news-card">
                <a href="../service/transportation.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/transportation/Transportation.png" alt="Transportation"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Transportation Fleet</h2>
                    <div class="tnb-news-card__post-date">ระบบขนส่งอัจฉริยะ</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt">ระบบขนส่ง Inhouse Fleet ที่ทันสมัย
                            ครอบคลุมทุกเส้นทางด้วยระบบติดตามแบบ Real-time&hellip;</p>
                        <a href="../service/transportation.php" class="tnb-news-card__read-more">อ่านเพิ่มเติม
                            &rsaquo;</a>
                    </div>
                </div>
            </div>
            <!-- การ์ด 5: Domestic Logistics -->
            <div class="tnb-news-card">
                <a href="../service/domestic.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/domestic/truck1.png" alt="Domestic Logistics"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Domestic Logistics</h2>
                    <div class="tnb-news-card__post-date">โลจิสติกส์ภายในประเทศ</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt">บริการขนส่งภายในประเทศครบวงจร พร้อมระบบติดตามสินค้า Real-time
                            และทีมงานมืออาชีพ&hellip;</p>
                        <a href="../service/domestic.php" class="tnb-news-card__read-more">อ่านเพิ่มเติม &rsaquo;</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 6: Container Service -->
            <div class="tnb-news-card">
                <a href="../service/container.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/container/Container.png" alt="Container Service"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Container Service</h2>
                    <div class="tnb-news-card__post-date">บริการคอนเทนเนอร์</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt">รับ-ส่งตู้คอนเทนเนอร์ครบวงจร พร้อมผู้ชำนาญด้านท่าเรือและสตว์
                            Container Yard&hellip;</p>
                        <a href="../service/container.php" class="tnb-news-card__read-more">อ่านเพิ่มเติม &rsaquo;</a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- CONTENT / DETAILS SECTION — พันธมิตรที่ไว้วางใจเรา -->
    <div class="content-section section-partners" style="padding-top: 80px; padding-bottom: 80px;">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: left;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none;">
                    พันธมิตรที่ไว้วางใจเรา
                </h1>
                <p class="details-desc" style="margin-top: 5px; margin-bottom: 20px; line-height: 1.8;">
                    ความไว้วางใจจากบริษัทชั้นนำ เป็นเครื่องยืนยันถึง<br>คุณภาพและมาตรฐานการบริการระดับมืออาชีพของเรา
                </p>
            </div>
        </div>

        <!-- logo ลูกค้าเลื่อน loop slides -->
        <section class="loop-images-quotation" style="--bg: white; height: auto; min-height: 220px; padding: 20px 0;">
            <div class="login-track" style="--time: 60s; --total: 12;">
                <div class="login-item" style="--i: 1;"><img src="../img/customer_logo/Mazda.png" alt="image"></div>
                <div class="login-item" style="--i: 2;"><img src="../img/customer_logo/Suzuki.png" alt="image"></div>
                <div class="login-item" style="--i: 3;"><img src="../img/customer_logo/Changan.png" alt="image"></div>
                <div class="login-item" style="--i: 4;"><img src="../img/customer_logo/Kn.webp" alt="image"></div>
                <div class="login-item" style="--i: 5;"><img src="../img/customer_logo/Honda.png" alt="image"></div>
                <div class="login-item" style="--i: 6;"><img src="../img/customer_logo/Alpla.png" alt="image"></div>
                <div class="login-item" style="--i: 7;"><img src="../img/customer_logo/BROSE_Excellence.png"
                        alt="image"></div>
                <div class="login-item" style="--i: 8;"><img src="../img/customer_logo/nhk.webp" alt="image"></div>
                <div class="login-item" style="--i: 9;"><img src="../img/customer_logo/siamgoshi.jpg" alt="image"></div>
                <div class="login-item" style="--i: 10;"><img src="../img/customer_logo/dn.png" alt="image"></div>
                <div class="login-item" style="--i: 11;"><img src="../img/customer_logo/lat.png" alt="image"></div>
                <div class="login-item" style="--i: 12;"><img src="../img/customer_logo/mitsuboshi.png" alt="image">
                </div>
            </div>
        </section>
    </div>

    <!-- CONTENT / DETAILS SECTION — สินค้าแนะนำ -->
    <div class="content-section layout_padding section-products">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: left;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none; color: #ffffff;">
                    สินค้าแนะนำ
                </h1>
                <p class="details-desc" style="margin-top: 5px; margin-bottom: 20px; color: #ffffff; line-height: 1.8;">
                    ผลิตภัณฑ์บรรจุภัณฑ์คุณภาพสูง ออกแบบและพัฒนา<br>เพื่อรองรับทุกความต้องการของอุตสาหกรรม
                </p>
            </div>
        </div>

        <div class="Block_Expanding_Cards">
            <div class="card_holder_sB">
                <span class="US_City_sB _active" data-card-index="0">
                    <h1 class="card_h1 _active">RSC Box</h1>
                    <div class="card_shade _off"></div>
                    <div class="card_content _on">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred" href="../img/products/box/rsc.png" target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG _active">
                        <img class="Img_H100" src="../img/products/box/rsc.png" alt="RSC Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="1">
                    <h1 class="card_h1">FTD Box</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/Nyvq2juw4_o?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/ftd.png" alt="FTD Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="2">
                    <h1 class="card_h1">OSC Box</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/cHRDevKFDBw?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/osc.png" alt="OSC Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="3">
                    <h1 class="card_h1">Die-Cut Box</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/tUoA7sCrRto?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/die-cut.png" alt="Die-Cut Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="4">
                    <h1 class="card_h1">Cardboard Pallet</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/KDS5lCrj_ew?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/pallet.png" alt="Cardboard Pallet" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="5">
                    <h1 class="card_h1">Fitting Box Service</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/gZXx8lKAb7Y?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/fit_ser.png" alt="Fitting Box Service" />
                    </div>
                </span>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>