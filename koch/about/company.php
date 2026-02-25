<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging</title>
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

        /* Styling for Company Text */
        .company-text-container {
            text-align: left;
        }

        .company-text-container p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 20px;
            text-indent: 40px;
        }

        .company-text-container strong {
            color: #325662;
            font-weight: 700;
        }

        /* Custom Styling for Company Image Shape */
        .company-image-wrap {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            border-radius: 8px;
            display: flex;
        }

        .company-image-wrap::before {
            content: '';
            position: absolute;
            bottom: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            background-color: #E82433;
            z-index: -1;
            border-radius: 8px;
            transform: rotate(-3deg);
            transform-origin: bottom left;
            opacity: 0.9;
            box-shadow: 0 10px 20px rgba(232, 36, 51, 0.2);
        }

        .company-image-inner {
            background-color: #ffffff;
            padding: 30px;
            position: relative;
            z-index: 2;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            border: 1px solid #f0f0f0;
            width: 100%;
            min-height: 480px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .company-image-inner img {
            width: 100%;
            max-width: 480px;
            display: block;
            margin: 0 auto;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .company-text-container p {
                font-size: 1rem;
                text-indent: 20px;
            }

            .company-image-wrap::before {
                bottom: -15px;
                left: -15px;
            }

            .company-image-inner {
                padding: 30px;
            }
        }
    </style>

    <div class="content-section layout_padding" style="margin-top: 100px; flex: 1;">
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
            <!-- Left: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column;">
                <div class="company-image-wrap">
                    <div class="company-image-inner">
                        <img src="../img/company_logo/logo.png" alt="Company Profile">
                    </div>
                </div>
            </div>
            <!-- Right: Details -->
            <div style="flex: 1; min-width: 300px; padding-bottom: 20px;">
                <h1 class="details-title">ข้อมูลบริษัท</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px; font-weight: 700;">ทำความรู้จักกับ
                    KOCH
                    Packaging</h2>

                <div class="company-text-container" style="margin-top: 20px;">
                    <p class="details-desc">
                        <strong>Koch Packaging and Packing Services Co., Ltd.</strong>
                        เป็นบริษัทไทยที่ดำเนินธุรกิจด้าน
                        การผลิตและให้บริการโซลูชันด้านบรรจุภัณฑ์ และซัพพลายเชนแบบครบวงจร ตั้งแต่การออกแบบ
                        การจัดหาวัตถุดิบ
                        การผลิต ไปจนถึงการบริหารคลังสินค้าและโลจิสติกส์อย่างมีประสิทธิภาพ
                    </p>
                    <p class="details-desc">
                        เริ่มต้นจากการให้บริการด้าน
                        ผลิตและจำหน่ายผลิตภัณฑ์บรรจุภัณฑ์จากกระดาษกระดาษลอนลูกฟูกและกระดาษแข็งลอนลูกฟูก
                        ซึ่งเป็นหัวใจของการปกป้องสินค้าในการขนส่งและจัดเก็บ จากนั้นได้พัฒนาให้บริการครอบคลุมทั้ง
                        <strong>Packaging
                            Supply Management System (VMI), Warehouse & Operation Management, Transportation
                            (In-house
                            Fleet &
                            System)</strong> และบริการด้านโลจิสติกส์อื่นๆ ที่เหมาะกับอุตสาหกรรมขนาดใหญ่
                        โดยเฉพาะอุตสาหกรรมยานยนต์และอิเล็กทรอนิกส์
                    </p>
                    <p class="details-desc">
                        ด้วยแนวคิดการพัฒนาอย่างต่อเนื่อง บริษัทมุ่งเน้นการปรับใช้
                        <strong>เทคโนโลยีอัตโนมัติและการบริหารจัดการข้อมูล</strong>
                        เพื่อให้บริการลูกค้าได้อย่างแม่นยำ รวดเร็ว และมีมาตรฐานสูง
                        พร้อมรองรับการเติบโตของธุรกิจทั้งในและต่างประเทศในอนาคต
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>