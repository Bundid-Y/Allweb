<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Contact</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
    <style>
        .map-bg-shape {
            position: absolute;
            top: -70px;
            right: -40px;
            bottom: -70px;
            left: 50%;
            background-color: #e82433;
            z-index: -1;
            clip-path: polygon(0 30px, 100% 0, 100% 100%, 0 calc(100% - 30px));
        }

        @media (max-width: 767px) {
            .contact-list {
                flex-direction: column !important;
                align-items: center !important;
                gap: 20px !important;
            }

            .contact-item {
                flex: none !important;
                width: 100% !important;
                max-width: 100% !important;
                align-items: center !important;
                flex-direction: column !important;
                text-align: center !important;
            }

            .contact-icon {
                margin-right: 0 !important;
                margin-bottom: 15px !important;
            }

            .tech_subtitle {
                font-size: 32px !important;
            }

            .map-bg-shape {
                left: 0 !important;
                right: 0 !important;
                top: 0 !important;
                bottom: 0 !important;
                height: 100% !important;
                clip-path: none !important;
                /* Make the background solidly wrap the map on mobile */
            }

            .tech_box_main {
                margin-top: 20px !important;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .contact-list {
                flex-wrap: nowrap !important;
                gap: 20px !important;
                justify-content: center !important;
            }

            .contact-item {
                min-width: 0 !important;
                max-width: none !important;
                flex: 0 1 auto !important;
            }

            .contact-text-group h4 {
                font-size: 16px !important;
            }

            .contact-text-group p {
                font-size: 13px !important;
                white-space: normal !important;
                word-break: break-word;
            }

            .contact-icon {
                width: 45px !important;
                height: 45px !important;
                margin-right: 10px !important;
            }

            .contact-icon svg {
                width: 20px !important;
                height: 20px !important;
            }
        }
    </style>
</head>

<body style="background-color: #fbfbfb;">
    <!-- Light grey background like standard modern sites to let white blocks pop -->
    <?php include '../component/menubar.php'; ?>

    <!-- CONTENT SECTION matching technology.php layout -->
    <div class="tech_section layout_padding" style="padding-top: 150px; padding-bottom: 90px; overflow: hidden;">

        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">

            <div class="row" style="display: flex; flex-direction: column; align-items: center; margin: 0 -15px;">

                <!-- Top Row: Content -->
                <div class="col-md-12"
                    style="width: 100%; max-width: 900px; padding: 0 15px; box-sizing: border-box; text-align: center; margin-bottom: 60px;">

                    <h1 class="tech_subtitle"
                        style="font-size: 40px; color: #1c1c1c; font-weight: bold; margin-bottom: 25px; position: relative; display: inline-block;">
                        ติดต่อเรา
                        <span
                            style="position: absolute; width: 80%; height: 4px; background-color: #e82433; left: 10%; bottom: -10px;"></span>
                    </h1>

                    <p class="tech_text"
                        style="font-size: 16px; color: #1c1c1c; line-height: 1.6; padding-top: 10px; margin-bottom: 50px;">
                        สอบถามข้อมูลบริการบรรจุภัณฑ์ครบวงจร หรือบริการอื่นๆ ของ KOCH
                        Packaging<br>เราพร้อมให้คำปรึกษาและประสานงานโดยทีมงานมืออาชีพ
                    </p>

                    <div class="contact-list"
                        style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; text-align: left;">
                        <!-- ที่อยู่ -->
                        <div class="contact-item"
                            style="display: flex; align-items: flex-start; flex: 1; min-width: 260px; max-width: 320px;">
                            <div class="contact-icon"
                                style="background: #325662; color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-right: 15px;">
                                <!-- SVG Map Pin -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="contact-text-group">
                                <h4 style="margin: 0 0 5px 0; font-size: 18px; color: #1c1c1c; font-weight: 700;">
                                    ที่อยู่สำนักงาน</h4>
                                <p style="margin: 0; color: #444; font-size: 15px; line-height: 1.5;">742/5 หมู่ที่ 1
                                    ตำบลหนองไผ่แก้ว<br>อำเภอบ้านบึง จ.ชลบุรี 20220</p>
                            </div>
                        </div>

                        <!-- เบอร์โทร -->
                        <div class="contact-item"
                            style="display: flex; align-items: flex-start; flex: 1; min-width: 200px; max-width: 250px;">
                            <div class="contact-icon"
                                style="background: #325662; color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-right: 15px;">
                                <!-- SVG Phone -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <div class="contact-text-group">
                                <h4 style="margin: 0 0 5px 0; font-size: 18px; color: #1c1c1c; font-weight: 700;">
                                    ติดต่อฝ่ายขาย</h4>
                                <p style="margin: 0; color: #444; font-size: 15px; line-height: 1.5;">
                                    089-8335550<br>090-9542354</p>
                            </div>
                        </div>

                        <!-- อีเมล -->
                        <div class="contact-item"
                            style="display: flex; align-items: flex-start; flex: 1; min-width: 280px; max-width: 350px;">
                            <div class="contact-icon"
                                style="background: #325662; color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-right: 15px;">
                                <!-- SVG Mail -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="contact-text-group">
                                <h4 style="margin: 0 0 5px 0; font-size: 18px; color: #1c1c1c; font-weight: 700;">อีเมล
                                </h4>
                                <p
                                    style="margin: 0; color: #444; font-size: 15px; line-height: 1.5; white-space: nowrap;">
                                    salesteam@koch-packaging.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Row: Map matching the image style -->
                <div class="col-md-10"
                    style="width: 100%; max-width: 1000px; padding: 0 15px; box-sizing: border-box; position: relative; margin-top: 50px;">
                    <!-- Red Polygon Background behind Map -->
                    <div class="map-bg-shape"></div>

                    <div class="tech_box_main" style="position: relative;">
                        <div class="tech_image"
                            style="box-shadow: 0 15px 40px rgba(0,0,0,0.15); height: 500px; background: #fff; display: flex; align-items: stretch; border-radius: 0;">
                            <iframe src="https://www.google.com/maps?q=13.161099,101.157816&hl=th&z=15&output=embed"
                                frameborder="0" style="border:0; width: 100%; height: 100%; display: block;"
                                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <?php include '../component/footer.php'; ?>
</body>

</html>