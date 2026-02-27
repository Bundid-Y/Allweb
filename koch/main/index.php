<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koch Packaging and Packing Services Co.,Ltd</title>
    <meta name="description"
        content="Smart, Fast, and Sustainable Solutions สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย - บริการบรรจุภัณฑ์และคลังสินค้าครบวงจร" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/logo 2.png" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sarabun:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
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

    <!-- SLIDER SECTION -->
    <div class="main-container section-slider">
        <div class="slider-wrapper" id="sliderWrapper">

            <div class="slide-track" id="slideTrack">
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-1.jpeg" alt="Slide 1"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-2.jpeg" alt="Slide 2"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-3.jpeg" alt="Slide 3"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-4.jpeg" alt="Slide 4"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-5.jpeg" alt="Slide 5"></div>
            </div>

            <button class="nav-btn prev" id="prevBtn">‹</button>
            <button class="nav-btn next" id="nextBtn">›</button>
        </div>
    </div>


    <!-- CONTENT / DETAILS SECTION — เกี่ยวกับเรา -->
    <div class="content-section layout_padding">
        <!-- ใช้ Flexbox แทน Bootstrap row/col -->
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px;">

            <!-- คอลัมน์ซ้าย: รูปภาพ -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box">
                    <div class="details-image">
                        <img src="../img/other/index/about/box_about.png" alt="Detail Image">
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


    <!-- CONTENT / DETAILS SECTION — บริการของเรา -->
    <div class="content-section layout_padding">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: left;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none;">
                    บริการของเรา
                </h1>
                <p class="details-desc" style="margin-top: 5px; margin-bottom: 20px; line-height: 1.8;">
                    บริการบรรจุภัณฑ์และการจัดการลอจิสติกส์แบบครบวงจร<br>ที่ตอบสนองทุกความต้องการของธุรกิจด้วยระบบที่ทันสมัย
                </p>
                <div class="details-action-group"></div>
            </div>
        </div>

        <!-- ส่วน Card Grid -->
        <div>
            <div class="details-box details-box-services">
                <div class="card-grid">
                    <a class="card" href="../service/development.php">
                        <div class="card__background"
                            style="background-image: url(../img/other/service/development/development.jpeg)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">Packaging Development</p>
                            <h3 class="card__heading">นวัตกรรมการออกแบบบรรจุภัณฑ์ครบวงจร</h3>
                        </div>
                    </a>
                    <a class="card" href="../service/supply_management.php">
                        <div class="card__background"
                            style="background-image: url(../img/other/service/supply/supply_management.jpeg)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">Packaging SupplyManagement System</p>
                            <h3 class="card__heading">ระบบบริหารจัดการบรรจุภัณฑ์อัจฉริยะ</h3>
                        </div>
                    </a>
                    <a class="card" href="../service/warehouse.php">
                        <div class="card__background"
                            style="background-image: url(../img/other/service/warehouse/warehouse.jpeg)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">Warehouse & Operation Management</p>
                            <h3 class="card__heading">บริหารจัดการคลังสินค้าและงานปฏิบัติการมืออาชีพ</h3>
                        </div>
                    </a>
                    <a class="card" href="../service/transportation.php">
                        <div class="card__background"
                            style="background-image: url(../img/other/service/transportation/Transportation.png)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">Transportation Inhouse Fleet & System</p>
                            <h3 class="card__heading">ระบบขนส่งอัจฉริยะ</h3>
                        </div>
                    </a>
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