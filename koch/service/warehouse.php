<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Warehouse</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <?php include '../component/menubar.php'; ?>
    
    <!-- Main Content -->
    <div class="content-section layout_padding" style="margin-top: 100px;">
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; flex-direction: row-reverse;">
            <!-- Right: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box shape-angle-3">
                    <img src="../img/other/index/about/box_about.png" alt="Warehouse Management" style="width:100%; position:relative; z-index:2; transform: scaleX(-1);">
                </div>
            </div>
            <!-- Left: Details -->
            <div style="flex: 1; min-width: 300px;">
                <h1 class="details-title">Warehouse & Operation</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px;">บริหารจัดการคลังสินค้าและงานปฏิบัติการมืออาชีพ</h2>
                <p class="details-desc">
                    ดูแลคลังสินค้าครบวงจรตั้งแต่การรับเข้า จัดเก็บ สุ่มตรวจ และกระจายสินค้า ด้วยมาตรฐานระดับสากล เพื่อให้กระบวนการผลิตของคุณไม่สะดุด
                </p>
                <ul class="details-desc" style="margin-top: 15px; padding-left: 20px;">
                    <li>ระบบจัดเก็บสินค้าอย่างเป็นหมวดหมู่และเข้าถึงง่าย (Smart Storage)</li>
                    <li>การทำงานที่รวดเร็ว ถูกต้อง และแม่นยำ (Fast Operation)</li>
                    <li>บุคลากรที่มีความเชี่ยวชาญเฉพาะด้าน (Professional Staff)</li>
                    <li>บูรณาการข้อมูลร่วมกับระบบซัพพลายเชนของคุณ</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
