<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Vision</title>
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

        /* Styling for Vision Text */
        .vision-text-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: left;
        }

        .vision-text-container p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 20px;
            text-indent: 40px;
        }

        .vision-text-container strong {
            color: #325662;
        }

        /* Custom Styling for Vision Image Shape */
        .vision-image-wrap {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            border-radius: 0;
            display: flex;
        }

        .vision-image-wrap::before {
            content: '';
            position: absolute;
            bottom: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            background-color: #E82433;
            z-index: -1;
            border-radius: 0;
            transform: rotate(-3deg);
            transform-origin: bottom left;
            opacity: 0.9;
            box-shadow: 0 10px 20px rgba(232, 36, 51, 0.2);
        }

        .vision-image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0;
            position: relative;
            z-index: 2;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            display: block;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .vision-text-container p {
                font-size: 1rem;
                text-indent: 20px;
            }

            .vision-image-wrap::before {
                bottom: -15px;
                left: -15px;
            }
        }
    </style>

    <div class="content-section layout_padding" style="margin-top: 100px; flex: 1;">
        <div class="flex-row"
            style="display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px; flex-direction: column;">
            <!-- Top: Details -->
            <div style="width: 100%; text-align: center;">
                <h1 class="details-title" style="text-align: center;">วิสัยทัศน์และพันธกิจ</h1>

                <h2 style="font-size: 26px; color: #325662; margin-top: 20px; font-weight: 700;">วิสัยทัศน์ (Vision)
                </h2>

                <div class="vision-text-container" style="margin-top: 30px;">
                    <p class="details-desc">
                        <strong>โค้ช แพคเกจจิ้ง แอนด์ แพคกิ้ง เซอร์วิสเซส จำกัด</strong> มุ่งมั่นก้าวสู่การเป็นผู้นำด้าน
                        Supply Chain Services สำหรับอุตสาหกรรมยานยนต์ ด้วยการพัฒนาโซลูชันที่ <strong>ชาญฉลาด (Smart)
                            รวดเร็ว (Fast) และยั่งยืน (Sustainable)</strong>
                        เพื่อสนับสนุนการเติบโตของลูกค้าในทุกมิติของซัพพลายเชน
                    </p>
                    <p class="details-desc">
                        บริษัทมีเป้าหมายในการเชื่อมโยงงานด้าน <strong>การพัฒนาบรรจุภัณฑ์ ระบบบริหารจัดการบรรจุภัณฑ์
                            (VMI) การบริหารคลังสินค้า และการขนส่ง</strong> เข้าด้วยกันอย่างเป็นระบบ
                        เพื่อเพิ่มประสิทธิภาพ ลดต้นทุน และลดความซ้ำซ้อนในกระบวนการดำเนินงานของลูกค้า
                    </p>
                    <p class="details-desc">
                        <strong>KOCH</strong> ให้ความสำคัญกับการพัฒนา <strong>ระบบวิศวกรรมภายใน (In-house
                            Engineering)</strong> และ <strong>ระบบดิจิทัล</strong> เพื่อยกระดับความแม่นยำ ความโปร่งใส
                        และความสามารถในการควบคุมกระบวนการทำงานแบบเรียลไทม์ พร้อมทั้งมุ่งเน้นการเติบโตอย่างยั่งยืน
                        ควบคู่ไปกับความรับผิดชอบต่อสิ่งแวดล้อมและสังคม
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