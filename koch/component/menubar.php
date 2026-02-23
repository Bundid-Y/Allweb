<!doctype html>
<html lang="th">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Koch Packaging and Packing Services Co.,Ltd</title>
  <meta name="description" content="Smart, Fast, and Sustainable Solutions สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย - บริการบรรจุภัณฑ์และคลังสินค้าครบวงจร" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../img/company_logo/logo 2.png" />
    
  <!-- Google Fonts: Inter (EN) + Prompt (TH) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
                            <li><a href="../service/development.php" class="dropdown-link">บริการออกแบบและพัฒนาบรรจุภัณฑ์ครบวงจร</a></li>
                            <li><a href="../service/supply_management.php" class="dropdown-link">การจัดการการจัดหาบรรจุภัณฑ์</a></li>
                            <li><a href="../service/warehouse.php" class="dropdown-link">การจัดการคลังสินค้าและการดำเนินงาน</a></li>
                            <li><a href="../service/transportation.php" class="dropdown-link">บริการขนส่งและระบบบริหารจัดการภายใน</a></li>
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
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:5px;"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
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
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left:8px;"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
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

    <style>
        /* ===== CSS Variables & Reset ===== */
        :root {
            --header-height: 65px;
            --header-height-compact: 55px;
            --primary-color: #D50032;
            --primary-dark: #a80028;
            --primary-glow: rgba(213, 0, 50, 0.15);
            --text-color: #2d3436;
            --text-muted: #636e72;
            --bg-glass: rgba(255, 255, 255, 0.92);
            --bg-glass-scroll: rgba(255, 255, 255, 0.97);
            --shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
            --shadow-scroll: 0 4px 24px rgba(0, 0, 0, 0.10);
            --transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            --radius: 12px;
        }

        body {
            font-family: 'Inter', 'Prompt', sans-serif;
            margin: 0;
            background-color: #ffffff;
            min-height: 200vh;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* ===== Header — Glassmorphism Card ===== */
        .header {
            position: fixed;
            top: 18px;
            left: 50%;
            transform: translateX(-50%);
            /* ไม่เต็มจอ — ขนาดพอดีกับเนื้อหา */
            width: auto;
            background: var(--bg-glass);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border: 1px solid rgba(255, 255, 255, 0.55);
            z-index: 1000;
            transition: var(--transition);
        }

        /* Scroll-responsive: Header จะ compact ลงเมื่อ scroll */
        .header.scrolled {
            top: 8px;
            border-radius: 8px;
            background: var(--bg-glass-scroll);
            box-shadow: var(--shadow-scroll);
            border-color: rgba(0, 0, 0, 0.04);
        }

        .header.scrolled .nav {
            height: var(--header-height-compact);
        }

        .header.scrolled .logo img {
            height: 32px;
        }

        .nav {
            height: var(--header-height);
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 0 24px;
            transition: height 0.35s ease;
        }

        /* ===== Logo ===== */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.4rem;
            color: #0a1e3b;
            letter-spacing: -0.5px;
            flex-shrink: 0;
            font-family: 'Inter', sans-serif;
            transition: var(--transition);
        }

        .logo:hover {
            transform: scale(1.03);
        }

        .logo img {
            height: 38px;
            width: auto;
            transition: height 0.35s ease;
        }

        /* ===== Desktop Navigation Container ===== */
        .nav-menu {
            flex-shrink: 0;
        }

        /* ===== Desktop Navigation List — ระยะเท่ากัน ===== */
        .header .nav-list {
            display: flex;
            align-items: center;
            /* ใช้ gap เท่ากันทุกรายการ */
            gap: 0px;
            height: 100%;
        }

        .header .nav-item {
            height: 100%;
            display: flex;
            align-items: center;
            /* Staggered fade-in animation */
            opacity: 0;
            animation: fadeSlideIn 0.5s ease forwards;
        }

        /* Staggered delay สำหรับแต่ละเมนู */
        .header .nav-item:nth-child(1) { animation-delay: 0.05s; }
        .header .nav-item:nth-child(2) { animation-delay: 0.10s; }
        .header .nav-item:nth-child(3) { animation-delay: 0.15s; }
        .header .nav-item:nth-child(4) { animation-delay: 0.20s; }
        .header .nav-item:nth-child(5) { animation-delay: 0.25s; }
        .header .nav-item:nth-child(6) { animation-delay: 0.30s; }
        .header .nav-item:nth-child(7) { animation-delay: 0.35s; }
        .header .nav-item:nth-child(8) { animation-delay: 0.40s; }
        .header .nav-item:nth-child(9) { animation-delay: 0.45s; }
        .header .nav-item:nth-child(10) { animation-delay: 0.50s; }

        @keyframes fadeSlideIn {
            from {
                opacity: 0;
                transform: translateY(-8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== Login Item — เส้นคั่นบางๆ ===== */
        .header .login-item {
            margin-left: 12px;
            padding-left: 16px;
            border-left: 1px solid rgba(0, 0, 0, 0.07);
            height: 36% !important;
        }

        /* ===== Nav Link — padding เท่ากันทุกเมนู ===== */
        .header .nav-link {
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-color);
            transition: var(--transition);
            cursor: pointer;
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            /* ★ padding ซ้าย-ขวาเท่ากันทุกตัว = ระยะเท่ากัน */
            padding: 0 6px;
            white-space: nowrap;
            letter-spacing: 0.01em;
        }

        /* Effect: hover ลอยขึ้น + เปลี่ยนสี */
        .header .nav-link:hover,
        .header .nav-link.active-link {
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Effect: เส้นวิ่งจากตรงกลาง + มุมโค้ง */
        .header .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(90deg, var(--primary-color), #ff4d6d);
            transition: width 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
            border-radius: 3px 3px 0 0;
        }

        .header .nav-link:hover::after {
            width: 70%;
        }

        /* ลบเส้นใต้จาก Dropdown toggle */
        .header .dropdown-toggle::after {
            display: none;
        }

        /* ===== Login Button — Gradient + Sheen ===== */
        .header .btn-login {
            position: relative;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--primary-color) 0%, #ff1a4a 100%);
            color: #ffffff !important;
            padding: 10px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.35s ease;
            box-shadow: 0 4px 14px rgba(213, 0, 50, 0.25);
            height: auto !important;
            line-height: normal;
            font-family: 'Inter', sans-serif;
            overflow: hidden;
            letter-spacing: 0.03em;
        }

        /* Effect: แสงวิ่ง (Sheen) */
        .header .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.25), transparent);
            transition: 0.6s;
        }

        .header .btn-login:hover::before {
            left: 100%;
        }

        .header .btn-login:hover {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 24px rgba(213, 0, 50, 0.35);
        }

        .header .btn-login:active {
            transform: translateY(0) scale(0.98);
        }

        /* ===== Dropdown (Desktop) ===== */
        .header .dropdown-item {
            position: relative;
        }

        .header .arrow {
            font-size: 0.6rem;
            margin-left: 5px;
            transition: var(--transition);
            opacity: 0.5;
        }

        .header .dropdown-item:hover .arrow {
            transform: rotate(180deg);
            color: var(--primary-color);
            opacity: 1;
        }

        .header .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(12px);
            min-width: 240px;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 3px solid var(--primary-color);
        }

        .header .dropdown-item:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .header .dropdown-link {
            display: flex;
            align-items: center;
            padding: 12px 22px;
            font-size: 0.92rem;
            color: var(--text-color);
            transition: var(--transition);
            border-bottom: 1px solid rgba(0, 0, 0, 0.03);
            position: relative;
        }

        .header .dropdown-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary-color);
            border-radius: 0 2px 2px 0;
            transform: scaleY(0);
            transition: transform 0.25s ease;
        }

        .header .dropdown-link:hover {
            background-color: rgba(213, 0, 50, 0.04);
            color: var(--primary-color);
            padding-left: 28px;
        }

        .header .dropdown-link:hover::before {
            transform: scaleY(1);
        }

        .header .dropdown-link:last-child {
            border-bottom: none;
        }

        /* ===== Mobile Toggle Button ===== */
        .nav-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            margin-left: auto;
        }

        .nav-toggle span {
            width: 24px;
            height: 2px;
            background-color: var(--text-color);
            border-radius: 2px;
            transition: var(--transition);
        }

        .nav-close {
            display: none;
        }

        /* Hamburger animation เมื่อเปิดเมนู */
        .nav-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 6px);
            background-color: var(--primary-color);
        }

        .nav-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .nav-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -6px);
            background-color: var(--primary-color);
        }

        /* ===== RESPONSIVE DESIGN (Mobile/Tablet) ===== */
        @media screen and (max-width: 1024px) {
            .header {
                top: 10px;
                width: 95%;
                border-radius: 10px;
            }

            .header.scrolled {
                border-radius: 8px;
            }

            .nav {
                justify-content: space-between;
                gap: 0;
                padding: 0 20px;
            }

            .nav-toggle {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                top: -100%;
                left: 0;
                width: 100%;
                background-color: #ffffff;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                padding: 5rem 1.5rem 2rem;
                border-radius: 0;
                transition: .4s ease-in-out;
                z-index: -1;
                text-align: left;
                max-height: 100vh;
                overflow-y: auto;
                display: block;
                margin-left: 0;
            }

            .nav-menu.show-menu {
                top: 0;
            }

            .header .nav-list {
                flex-direction: column;
                gap: 0;
                align-items: flex-start;
                height: auto;
                justify-content: flex-start;
            }

            .header .nav-item {
                width: 100%;
                height: auto;
                border-bottom: 1px solid #eee;
                display: block;
                /* ปิด animation บนมือถือ */
                opacity: 1;
                animation: none;
            }

            .header .login-item {
                margin-left: 0;
                margin-top: 25px;
                border-left: none;
                border-bottom: none;
                display: flex;
                justify-content: center;
                height: auto !important;
                padding-left: 0;
            }

            .header .btn-login {
                width: 100%;
                justify-content: center;
                padding: 14px;
                border-radius: 8px;
            }

            .header .dropdown-menu {
                position: static;
                box-shadow: none;
                border: none;
                transform: none;
                visibility: visible;
                opacity: 1;
                display: none;
                padding: 0;
                background: #fafafa;
                border-top: none;
                border-radius: 0;
                backdrop-filter: none;
            }

            .header .dropdown-item.active .dropdown-menu {
                display: block;
            }

            .header .dropdown-item.active .arrow {
                transform: rotate(180deg);
            }

            .header .nav-link {
                display: flex;
                justify-content: space-between;
                width: 100%;
                height: auto;
                font-size: 1.1rem;
                padding: 16px 0;
            }

            .header .nav-link:hover {
                transform: none;
            }

            .header .nav-link::after {
                display: none;
            }

            .header .dropdown-link {
                font-size: 1rem;
                padding: 14px 20px;
            }

            .header .dropdown-link::before {
                display: none;
            }

            /* ปุ่มปิดเมนู (✕) บนมือถือ */
            .nav-close {
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                top: 18px;
                right: 20px;
                width: 40px;
                height: 40px;
                font-size: 1.5rem;
                color: var(--text-color);
                cursor: pointer;
                border-radius: 50%;
                transition: var(--transition);
                z-index: 10;
            }

            .nav-close:hover {
                background: rgba(213, 0, 50, 0.08);
                color: var(--primary-color);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('header');
            const navMenu = document.getElementById('navMenu');
            const navToggle = document.getElementById('navToggle');
            const navClose = document.getElementById('navClose');
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const navLinks = document.querySelectorAll('.header .nav-list .nav-item > a.nav-link');

            /* ===== Scroll Effect: Header compact เมื่อ scroll ลง ===== */
            let lastScroll = 0;
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                if (currentScroll > 40) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                lastScroll = currentScroll;
            }, { passive: true });

            /* ===== ฟังก์ชันเปิดเมนู ===== */
            function openMenu() {
                navMenu.classList.add('show-menu');
                navToggle.classList.add('active');
                document.body.style.overflow = 'hidden'; /* ล็อค scroll เวลาเปิดเมนู */
            }

            /* ===== ฟังก์ชันปิดเมนู ===== */
            function closeMenu() {
                navMenu.classList.remove('show-menu');
                navToggle.classList.remove('active');
                document.body.style.overflow = ''; /* คืน scroll */
            }

            /* ===== Hamburger Toggle — เปิด/ปิดเมนู ===== */
            if (navToggle) {
                navToggle.addEventListener('click', () => {
                    if (navMenu.classList.contains('show-menu')) {
                        closeMenu();
                    } else {
                        openMenu();
                    }
                });
            }

            /* ===== ปุ่ม ✕ ปิดเมนู ===== */
            if (navClose) {
                navClose.addEventListener('click', () => {
                    closeMenu();
                });
            }

            /* ===== คลิกลิงก์เมนูแล้วปิดเมนูอัตโนมัติ (มือถือ) ===== */
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 1024) {
                        closeMenu();
                    }
                });
            });

            /* ===== Resize: ปิดเมนูอัตโนมัติเมื่อกลับเป็น Desktop ===== */
            window.addEventListener('resize', () => {
                if (window.innerWidth > 1024) {
                    closeMenu();
                }
            });

            /* ===== Mobile Dropdown Toggle ===== */
            dropdownItems.forEach(item => {
                const link = item.querySelector('.nav-link');
                if (link) {
                    link.addEventListener('click', (e) => {
                        if (window.innerWidth > 1024) return;
                        e.preventDefault();
                        item.classList.toggle('active');
                        if (item.classList.contains('active')) {
                            link.style.color = 'var(--primary-color)';
                        } else {
                            link.style.color = 'var(--text-color)';
                        }
                    });
                }
            });
        });
    </script>
