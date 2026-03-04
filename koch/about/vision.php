<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Vision</title>
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Vision Page (about/vision.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-vision: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->

<body class="page-vision">
    <?php include '../component/menubar.php'; ?>

    <!-- Main Content -->

    <div class="content-section layout_padding" style="margin-top: 100px; flex: 1;">
        <div class="flex-row"
            style="display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px; flex-direction: column;">
            <!-- Top: Details -->
            <div style="width: 100%; text-align: center;">
                <h1 class="details-title" style="text-align: center;" data-i18n="vision.title">วิสัยทัศน์และพันธกิจ</h1>

                <h2 style="font-size: 26px; color: #325662; margin-top: 20px; font-weight: 700;"
                    data-i18n="vision.subtitle">วิสัยทัศน์ (Vision)
                </h2>

                <div class="vision-text-container" style="margin-top: 30px;">
                    <p class="details-desc">
                        <strong data-i18n="vision.p1_1">โค้ช แพคเกจจิ้ง แอนด์ แพคกิ้ง เซอร์วิสเซส จำกัด</strong> <span
                            data-i18n="vision.p1_2">มุ่งมั่นก้าวสู่การเป็นผู้นำด้าน
                            Supply Chain Services สำหรับอุตสาหกรรมยานยนต์ ด้วยการพัฒนาโซลูชันที่</span> <strong
                            data-i18n="vision.p1_strong">ชาญฉลาด (Smart)
                            รวดเร็ว (Fast) และยั่งยืน (Sustainable)</strong>
                        <span data-i18n="vision.p1_3">เพื่อสนับสนุนการเติบโตของลูกค้าในทุกมิติของซัพพลายเชน</span>
                    </p>
                    <p class="details-desc">
                        <span data-i18n="vision.p2_1">บริษัทมีเป้าหมายในการเชื่อมโยงงานด้าน</span> <strong
                            data-i18n="vision.p2_strong">การพัฒนาบรรจุภัณฑ์ ระบบบริหารจัดการบรรจุภัณฑ์
                            (VMI) การบริหารคลังสินค้า และการขนส่ง</strong> <span
                            data-i18n="vision.p2_2">เข้าด้วยกันอย่างเป็นระบบ
                            เพื่อเพิ่มประสิทธิภาพ ลดต้นทุน และลดความซ้ำซ้อนในกระบวนการดำเนินงานของลูกค้า</span>
                    </p>
                    <p class="details-desc">
                        <strong>KOCH</strong> <span data-i18n="vision.p3_1">ให้ความสำคัญกับการพัฒนา</span> <strong
                            data-i18n="vision.p3_strong1">ระบบวิศวกรรมภายใน (In-house
                            Engineering)</strong> <span data-i18n="vision.p3_2">และ</span> <strong
                            data-i18n="vision.p3_strong2">ระบบดิจิทัล</strong> <span
                            data-i18n="vision.p3_3">เพื่อยกระดับความแม่นยำ ความโปร่งใส
                            และความสามารถในการควบคุมกระบวนการทำงานแบบเรียลไทม์ พร้อมทั้งมุ่งเน้นการเติบโตอย่างยั่งยืน
                            ควบคู่ไปกับความรับผิดชอบต่อสิ่งแวดล้อมและสังคม</span>
                    </p>
                </div>
            </div>

            <!-- Bottom: Image with custom red shape -->
            <div style="width: 100%; max-width: 600px; margin: 20px auto 40px auto;">
                <div class="vision-image-wrap">
                    <img src="../img/other/about/vision.png" alt="Vision and Mission">
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>