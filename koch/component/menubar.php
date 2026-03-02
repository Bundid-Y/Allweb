<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koch Packaging and Packing Services Co.,Ltd</title>
    <meta name="description"
        content="Smart, Fast, and Sustainable Solutions สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย - บริการบรรจุภัณฑ์และคลังสินค้าครบวงจร" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/logo 2.png" />

    <!-- Google Fonts: Inter (EN) + Sarabun (TH) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sarabun:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>

    <header class="header" id="header">
        <nav class="nav">
            <!-- Logo -->
            <a href="../main/index.php" class="logo">
                <img src="../img/company_logo/logo 2.png" alt="KOCH" onerror="this.style.display='none'">
                <span class="logo-text">KOCH</span>
            </a>

            <!-- Navigation Menu -->
            <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <!-- Dropdown 1 -->
                    <li class="nav-item dropdown-item">
                        <div class="nav-link dropdown-toggle">บริการของเรา <span class="arrow">▼</span></div>
                        <ul class="dropdown-menu">
                            <li><a href="../service/development.php"
                                    class="dropdown-link">บริการออกแบบและพัฒนาบรรจุภัณฑ์ครบวงจร</a></li>
                            <li><a href="../service/supply_management.php"
                                    class="dropdown-link">การจัดการการจัดหาบรรจุภัณฑ์</a></li>
                            <li><a href="../service/warehouse.php"
                                    class="dropdown-link">การจัดการคลังสินค้าและการดำเนินงาน</a></li>
                            <li><a href="../service/transportation.php"
                                    class="dropdown-link">บริการขนส่งและระบบบริหารจัดการภายใน</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown 2 -->
                    <li class="nav-item dropdown-item">
                        <div class="nav-link dropdown-toggle">เกี่ยวกับเรา <span class="arrow">▼</span></div>
                        <ul class="dropdown-menu">
                            <li><a href="../about/company.php" class="dropdown-link">บริษัท Koch</a></li>
                            <li><a href="../about/expertise.php" class="dropdown-link">ความเชี่ยวชาญ</a></li>
                            <li><a href="../about/vision.php" class="dropdown-link">วิสัยทัศน์</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="../main/partners.php" class="nav-link">พันธมิตร</a></li>
                    <li class="nav-item"><a href="../main/product.php" class="nav-link">สินค้า</a></li>
                    <li class="nav-item"><a href="../main/technology.php" class="nav-link">เทคโนโลยี</a></li>
                    <li class="nav-item"><a href="../main/branches.php" class="nav-link">สาขา</a></li>
                    <li class="nav-item"><a href="../main/contact.php" class="nav-link">ติดต่อเรา</a></li>
                    <li class="nav-item"><a href="../main/quotation.php" class="nav-link">ขอใบเสนอราคา</a></li>
                    <!-- Language Dropdown -->
                    <li class="nav-item dropdown-item">
                        <div class="nav-link dropdown-toggle">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                style="margin-right:5px;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                            ไทย <span class="arrow">▼</span>
                        </div>
                        <ul class="dropdown-menu" style="min-width: 120px;">
                            <li><a href="?lang=th" class="dropdown-link">ไทย</a></li>
                            <li><a href="?lang=en" class="dropdown-link">English</a></li>
                            <li><a href="?lang=zh" class="dropdown-link">中文</a></li>
                            <li><a href="?lang=ja" class="dropdown-link">日本語</a></li>
                        </ul>
                    </li>
                    <!-- Login Button -->
                    <li class="nav-item login-item">
                        <a href="../main/login.php" class="btn-login">
                            Login
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                style="margin-left:8px;">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                <polyline points="10 17 15 12 10 7"></polyline>
                                <line x1="15" y1="12" x2="3" y2="12"></line>
                            </svg>
                        </a>
                    </li>
                </ul>

                <!-- Close button for Mobile -->
                <div class="nav-close" id="navClose">✕</div>
            </div>

            <!-- Toggle Button (Hamburger) -->
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

</body>

</html>

<!-- CSS ของ menubar อยู่ใน: css/style.css หัวข้อ "Menubar Component (component/menubar.php)" -->
<!-- JS ของ menubar อยู่ใน: js/script.js หัวข้อ "Menubar Component (component/menubar.php)" -->