<!-- Footer Component -->
<footer class="footer-custom">
    <div class="footer-container">
        <!-- Column 1: Brand & Contact -->
        <div class="footer-col footer-brand">
            <h3 class="footer-logo">KOCH</h3>
            <p class="footer-desc">Smart, Fast, and Sustainable Solutions สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย</p>
            <ul class="footer-contact">
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span>742/5 หมู่ที่ 1 ตำบลหนองไผ่แก้ว อำเภอบ้านบึง จ.ชลบุรี 20220</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                    </svg>
                    <span>089-8335550, 090-9542354</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <span>salesteam@koch-packaging.com</span>
                </li>
            </ul>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-col">
            <h4 class="footer-title">Quick Links</h4>
            <ul class="footer-links">
                <li><a href="../main/index.php">หน้าหลัก</a></li>
                <li><a href="../about/company.php">เกี่ยวกับเรา</a></li>
                <li><a href="../main/product.php">สินค้า</a></li>
                <li><a href="../main/contact.php">ติดต่อเรา</a></li>
            </ul>
        </div>

        <!-- Column 3: Business Hours -->
        <div class="footer-col">
            <h4 class="footer-title">Business Hours</h4>
            <div class="footer-hours">
                <div class="hour-row">
                    <span class="day">จันทร์ - เสาร์ (ยกเว้นวันหยุดนักขัตฤกษ์)</span>
                    <span class="time">08:30 - 17:30 น.</span>
                </div>

            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <p>&copy; <?php echo date("Y"); ?> Koch Packaging and Packing Services Co.,Ltd. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<style>
    /* =========================================
   Footer Component Styles
   ========================================= */
    .footer-custom {
        background-color: #e82433;
        /* Primary red matching site theme */
        color: #ffffff;
        font-family: inherit;
        /* Uses Inter/Sarabun from body */
        padding-top: 70px;
        position: relative;
        margin-top: auto;
        /* Pushes to bottom if flex container */
        width: 100%;
        box-sizing: border-box;
        clear: both;
    }

    .footer-custom * {
        box-sizing: border-box;
    }

    .footer-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 40px;
        display: grid;
        grid-template-columns: 2fr 1fr 1.5fr;
        gap: 50px;
        margin-bottom: 50px;
    }

    .footer-col {
        display: flex;
        flex-direction: column;
    }

    .footer-logo {
        font-size: 28px;
        font-weight: 800;
        margin-top: 0;
        margin-bottom: 15px;
        color: #ffffff;
        letter-spacing: 1px;
    }

    .footer-brand .footer-desc {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14.5px;
        line-height: 1.6;
        margin-top: 0;
        margin-bottom: 25px;
    }

    .footer-contact {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-contact li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 15px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
        line-height: 1.5;
    }

    .footer-contact li svg {
        color: #ffffff;
        flex-shrink: 0;
        margin-top: 1px;
    }

    .footer-title {
        font-size: 18px;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 25px;
        color: #ffffff;
        position: relative;
        padding-bottom: 12px;
        display: inline-block;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 35px;
        height: 3px;
        background-color: #ffffff;
        border-radius: 3px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 14px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.75);
        text-decoration: none;
        font-size: 15px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .footer-links a::before {
        content: '›';
        color: #ffffff;
        font-size: 20px;
        line-height: 1;
        margin-right: 10px;
        transition: transform 0.3s ease;
    }

    .footer-links a:hover {
        color: #ffffff;
        transform: translateX(5px);
    }

    .footer-links a:hover::before {
        transform: translateX(3px);
    }

    .footer-hours {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .hour-row {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .hour-row .day {
        font-weight: 600;
        font-size: 14px;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .hour-row .time {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
    }

    .hour-row .time.closed {
        color: #ffffff;
        font-weight: 600;
    }


    .footer-bottom {
        background-color: rgba(0, 0, 0, 0.3);
        padding: 24px 0;
        width: 100%;
    }

    .footer-bottom-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .footer-bottom p {
        margin: 0;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.5);
    }

    /* =========================================
   Responsive Adjustments
   ========================================= */
    @media screen and (max-width: 1024px) {
        .footer-container {
            grid-template-columns: 1fr 1fr;
            gap: 40px 30px;
        }
    }

    @media screen and (max-width: 768px) {
        .footer-custom {
            padding-top: 50px;
        }

        .footer-container {
            grid-template-columns: 1fr;
            gap: 45px;
            padding: 0 24px;
        }

        .footer-bottom-container {
            padding: 0 24px;
        }
    }
</style>