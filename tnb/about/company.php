<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging</title>
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Company Page (about/company.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-company: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->
<body class="page-company">
    <?php include '../component/menubar.php'; ?>

    <!-- Main Content -->

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