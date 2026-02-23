<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Supply Management</title>
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
                <div class="details-box shape-angle-5">
                    <img src="../img/other/index/about/box_about.png" alt="Supply Management" style="width:100%; border-radius: 8px; position:relative; z-index:2;">
                </div>
            </div>
            <!-- Left: Details -->
            <div style="flex: 1; min-width: 300px;">
                <h1 class="details-title">Supply Management</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px;">ระบบบริหารจัดการบรรจุภัณฑ์อัจฉริยะ</h2>
                <p class="details-desc">
                    ยกระดับการจัดการบรรจุภัณฑ์ด้วยระบบ (Packaging Supply Management System) ที่ครอบคลุม ติดตามได้อย่างแม่นยำ และลดต้นทุนแอบแฝงในกระบวนการผลิต
                </p>
                <ul class="details-desc" style="margin-top: 15px; padding-left: 20px;">
                    <li>ติดตามสถานะบรรจุภัณฑ์หมุนเวียน (Returnable Packaging Tracking)</li>
                    <li>บริหารจัดการสินค้าคงคลังบรรจุภัณฑ์ (Inventory Management)</li>
                    <li>วิเคราะห์ข้อมูลและวางแผนการใช้งาน (Data Analytics & Planning)</li>
                    <li>ลดความสูญเสียและบรรจุภัณฑ์สูญหายอย่างมีประสิทธิภาพ</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
