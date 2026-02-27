<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Expertise</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>
    <?php include '../component/menubar.php'; ?>

    <!-- Main Content -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Custom Styling for Expertise Focus */
        .expertise-image-wrap {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            border-radius: 0;
            display: flex;
        }

        .expertise-image-wrap::before {
            content: '';
            position: absolute;
            bottom: -15px;
            /* Adjusting angle and placement to appear like an offset backing layer */
            right: -15px;
            width: 60%;
            height: 100%;
            background-color: #E82433;
            z-index: -1;
            border-radius: 0;
            transform: rotate(2deg);
            transform-origin: bottom right;
            opacity: 0.9;
        }

        .expertise-image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0;
            position: relative;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .expertise-text-list {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .expertise-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            background: #fdfdfd;
            padding: 15px;
            border-radius: 0;
            border-left: 4px solid #E82433;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
        }

        .expertise-number {
            color: #E82433;
            font-weight: 800;
            font-size: 1.5rem;
            line-height: 1;
        }

        .expertise-title {
            font-size: 1.1rem;
            color: #325662;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .expertise-desc {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        @media screen and (max-width: 1024px) {
            .expertise-row {
                flex-direction: column !important;
            }
            .expertise-image-wrap::before {
                width: 100%;
                right: -10px;
                bottom: -10px;
                transform: rotate(1deg);
            }
            .expertise-image-wrap {
                margin-bottom: 20px;
            }
        }
    </style>

    <div class="content-section layout_padding" style="margin-top: 100px; flex: 1;">
        <div class="expertise-row"
            style="display: flex; flex-wrap: wrap; align-items: stretch; gap: 40px; flex-direction: row-reverse;">
            <!-- Right: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column;">
                <div class="expertise-image-wrap">
                    <img src="../img/other/index/cardslides/cardslides-1.jpeg" alt="Our Expertise">
                </div>
            </div>
            <!-- Left: Details -->
            <div style="flex: 1; min-width: 300px; padding-bottom: 20px;">
                <h1 class="details-title">ความเชี่ยวชาญของเรา</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px; font-weight: 700;">ความเชี่ยวชาญเฉพาะด้าน
                    (Our Expertise)</h2>

                <p class="details-desc" style="margin-bottom: 20px;">
                    <strong>"ยกระดับการจัดการซัพพลายเชนสู่อนาคต ด้วยความเชี่ยวชาญระดับมืออาชีพ"</strong><br><br>
                    KOCH มุ่งมั่นสร้างสรรค์ระบบ Supply Chain ที่ "ฉลาด รวดเร็ว และยั่งยืน" สำหรับอุตสาหกรรมยานยนต์ในไทย
                    เราพร้อมเป็นพันธมิตรเชิงกลยุทธ์ที่ช่วยคุณบริหารจัดการโลจิสติกส์และระบบ VMI อย่างเต็มรูปแบบ
                    ด้วยโซลูชันด้านวิศวกรรมและเทคโนโลยีดิจิทัลที่ล้ำสมัยที่สุด
                </p>

                <div class="expertise-text-list">
                    <div class="expertise-item">
                        <div class="expertise-number">01</div>
                        <div>
                            <div class="expertise-title">Packaging Development</div>
                            <div class="expertise-desc">เชี่ยวชาญในการออกแบบและพัฒนาบรรจุภัณฑ์สำหรับอุตสาหกรรมยานยนต์
                                ครอบคลุมวัสดุหลากหลายประเภท เช่น กระดาษ เหล็ก ไม้ และพลาสติก</div>
                        </div>
                    </div>
                    <div class="expertise-item">
                        <div class="expertise-number">02</div>
                        <div>
                            <div class="expertise-title">Smart VMI System</div>
                            <div class="expertise-desc">พัฒนาระบบ VMI
                                เพื่อช่วยลูกค้าบริหารสต็อกบรรจุภัณฑ์ได้อย่างมีประสิทธิภาพ เชื่อมโยงข้อมูลการผลิต
                                การสั่งซื้อ และการจัดส่งแบบอัตโนมัติ ช่วยลดต้นทุน ลดปริมาณสต็อกคงค้าง</div>
                        </div>
                    </div>
                    <div class="expertise-item">
                        <div class="expertise-number">03</div>
                        <div>
                            <div class="expertise-title">Professional Warehouse</div>
                            <div class="expertise-desc">ให้บริการบริหารคลังสินค้าในพื้นที่บ้านบึงและบ่อวิน
                                รองรับทั้งงานบรรจุภัณฑ์และงานคลังสินค้าอุตสาหกรรม สามารถจัดเก็บ ควบคุม
                                และกระจายสินค้าได้อย่างเป็นระบบ</div>
                        </div>
                    </div>
                    <div class="expertise-item">
                        <div class="expertise-number">04</div>
                        <div>
                            <div class="expertise-title">Real-time Logistics</div>
                            <div class="expertise-desc">ให้บริการขนส่งด้วยรถของบริษัทเอง พร้อมระบบบริหารจัดการการขนส่ง
                                (TMS) ที่พัฒนาภายใน สามารถติดตามสถานะการขนส่งแบบ Real-time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>