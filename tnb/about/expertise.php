<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Expertise</title>
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Expertise Page (about/expertise.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-expertise: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->
<body class="page-expertise">
    <?php include '../component/menubar.php'; ?>

    <!-- Main Content -->

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