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
    <div class="content-section layout_padding" style="margin-top: 100px;">
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px;">
            <!-- Left: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box shape-angle-1">
                    <img src="../img/other/index/about/box_about.png" alt="Company Profile" style="width:100%; position:relative; z-index:2;">
                </div>
            </div>
            <!-- Right: Details -->
            <div style="flex: 1; min-width: 300px;">
                <h1 class="details-title">ข้อมูลบริษัท</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px;">ทำความรู้จักกับ KOCH Packaging</h2>
                <p class="details-desc">
                    KOCH Packaging and Packing Services Co.,Ltd คือผู้นำด้านบริการ Supply Chain และโซลูชันบรรจุภัณฑ์แบบครบวงจรสำหรับอุตสาหกรรมยานยนต์ในประเทศไทย
                </p>
                <p class="details-desc">
                    ด้วยระบบและเทคโนโลยีที่ทันสมัย ผสานกับประสบการณ์อันยาวนาน เราพร้อมที่จะเติบโตเป็น <strong>"พันธมิตรเชิงกลยุทธ์"</strong> ที่แข็งแกร่งและไว้วางใจได้ของคุณ
                </p>
                <div class="details-action-group" style="margin-top:20px;">
                    <button class="btn-buy" style="border:none; padding:10px 20px; background-color:#325662; color:#fff; border-radius:4px; font-weight:bold; cursor:pointer;" onclick="window.location.href='../main/contact.php'">ติดต่อเรา</button>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
