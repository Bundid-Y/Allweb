<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Products</title>
    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>
    <?php include '../component/menubar.php'; ?>

    <main>
        <!-- PRODUCT CATEGORY MENU SECTION -->
        <section class="product-category-section layout_padding" style="padding-top: 130px; padding-bottom: 90px;">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                <!-- Heading -->
                <h2
                    style="width: 100%; float: left; font-size: 40px; color: #111111; text-align: center; font-weight: bold; font-family: 'Prompt', sans-serif; margin-top: 0px; margin-bottom: 15px;">
                    ประเภทสินค้า
                </h2>
                <p
                    style="width: 100%; float: left; font-size: 16px; color: #242424; text-align: center; font-family: 'Prompt', sans-serif; margin-top: 0px; margin-bottom: 40px;">
                    ครอบคลุมวัสดุหลากหลายประเภท เช่น กระดาษ ไม้ พลาสติก และเหล็ก
                </p>

                <!-- Menu Bar -->
                <div class="category-menu-container" style="width: 100%; float: left; margin-bottom: 40px;">
                    <ul class="category-menu">
                        <li><a href="#all" class="active" onclick="filterCategory('all', event)">ทั้งหมด</a></li>
                        <li><a href="#mail" onclick="filterCategory('mail', event)">กล่องกระดาษ</a></li>
                        <li><a href="#corrugated" onclick="filterCategory('corrugated', event)">บรรจุภัณฑ์ไม้</a></li>
                        <li><a href="#diecut" onclick="filterCategory('diecut', event)">บรรจุภัณฑ์พลาสติก</a></li>
                        <li><a href="#accessory" onclick="filterCategory('accessory', event)">บรรจุภัณฑ์เหล็ก</a></li>
                    </ul>
                </div>

                <!-- Product Grid Contents -->
                <div class="product-grid">
                    <!-- Row 1: Mix for ALL -->
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/rsc.png" alt="RSC Box">
                        <div class="product-overlay"><span class="product-title">RSC Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="corrugated">
                        <img src="../img/products/Wooden/wooden_crates.png" alt="Wooden Crates">
                        <div class="product-overlay"><span class="product-title">Wooden Crates</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/plastic_container.png" alt="Plastic Container">
                        <div class="product-overlay"><span class="product-title">Plastic Container</span></div>
                    </div>
                    <div class="product-grid-item" data-category="accessory">
                        <img src="../img/products/Steel/steel_rack.png" alt="Steel Rack">
                        <div class="product-overlay"><span class="product-title">Steel Rack</span></div>
                    </div>

                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/die-cut.png" alt="Die-Cut Box">
                        <div class="product-overlay"><span class="product-title">Die-Cut Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="corrugated">
                        <img src="../img/products/Wooden/wooden_pallet.png" alt="Wooden Pallet">
                        <div class="product-overlay"><span class="product-title">Wooden Pallet</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box.png" alt="PP Box">
                        <div class="product-overlay"><span class="product-title">PP Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="accessory">
                        <img src="../img/products/Steel/steel_rack2.png" alt="Steel Rack 2">
                        <div class="product-overlay"><span class="product-title">Steel Rack 2</span></div>
                    </div>

                    <!-- Rest of items -->
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/ftd.png" alt="FTD Box">
                        <div class="product-overlay"><span class="product-title">FTD Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/osc.png" alt="OSC Box">
                        <div class="product-overlay"><span class="product-title">OSC Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/pallet.png" alt="Cardboard Pallet">
                        <div class="product-overlay"><span class="product-title">Cardboard Pallet</span></div>
                    </div>
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/fit_ser.png" alt="Fitting Box Service">
                        <div class="product-overlay"><span class="product-title">Fitting Box Service</span></div>
                    </div>

                    <div class="product-grid-item" data-category="corrugated">
                        <img src="../img/products/Wooden/wooden_case.png" alt="Wooden Case">
                        <div class="product-overlay"><span class="product-title">Wooden Case</span></div>
                    </div>

                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/plastic_pallet.png" alt="Plastic Pallet">
                        <div class="product-overlay"><span class="product-title">Plastic Pallet</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box_esd.png" alt="PP Box ESD">
                        <div class="product-overlay"><span class="product-title">PP Box ESD</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box_partition.png" alt="PP Box Partition">
                        <div class="product-overlay"><span class="product-title">PP Box Partition</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box_partition2.png" alt="PP Box Partition 2">
                        <div class="product-overlay"><span class="product-title">PP Box Partition 2</span></div>
                    </div>

                    <div class="product-grid-item" data-category="accessory">
                        <img src="../img/products/Steel/steel_rack3.png" alt="Steel Rack 3">
                        <div class="product-overlay"><span class="product-title">Steel Rack 3</span></div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="load-more-container">
                    <button class="load-more-btn">L O A D &nbsp;&nbsp; M O R E</button>
                </div>
            </div>

            <style>
                .category-menu-container {
                    display: flex;
                    justify-content: center;
                    margin-bottom: 40px;
                }

                .category-menu {
                    display: flex;
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    flex-wrap: wrap;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    float: left;
                }

                .category-menu li {
                    position: relative;
                    padding: 0 25px;
                }

                .category-menu li:not(:last-child)::after {
                    content: "";
                    position: absolute;
                    right: 0;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 1px;
                    height: 20px;
                    background-color: #d1d1d1;
                }

                .category-menu a {
                    text-decoration: none;
                    color: #555;
                    font-family: 'Prompt', sans-serif;
                    font-size: 18px;
                    font-weight: 500;
                    transition: all 0.3s ease;
                }

                .category-menu a:hover,
                .category-menu a.active {
                    color: #e82433;
                    /* KOCH Theme Red */
                }

                .product-grid {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 15px;
                    margin-bottom: 20px;
                    width: 100%;
                    float: left;
                }

                .product-grid-item {
                    width: 100%;
                    aspect-ratio: 1 / 1;
                    background-color: #f5f5f5;
                    overflow: hidden;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    opacity: 0;
                    position: relative;
                    animation: fadeIn 0.4s ease forwards;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                }

                .product-grid-item img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 0.4s ease;
                }

                .product-grid-item:hover img {
                    transform: scale(1.05);
                }

                .product-overlay {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.4) 60%, transparent 100%);
                    padding: 30px 15px 12px;
                    box-sizing: border-box;
                    pointer-events: none;
                    transform: translateY(100%);
                    opacity: 0;
                    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
                }

                .product-grid-item:hover .product-overlay {
                    transform: translateY(0);
                    opacity: 1;
                }

                .product-title {
                    color: #fff;
                    font-family: 'Prompt', sans-serif;
                    font-size: 16px;
                    font-weight: 500;
                    display: block;
                    text-align: center;
                    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
                    letter-spacing: 0.5px;
                }

                .load-more-container {
                    text-align: center;
                    margin-top: 40px;
                }

                .load-more-btn {
                    background: transparent;
                    border: 1px solid #333;
                    color: #333;
                    padding: 12px 40px;
                    font-family: 'Prompt', sans-serif;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }

                .load-more-btn:hover {
                    background: #333;
                    color: #fff;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: scale(0.95);
                    }

                    to {
                        opacity: 1;
                        transform: scale(1);
                    }
                }

                /* Responsive */
                @media (max-width: 1024px) {
                    .product-grid {
                        grid-template-columns: repeat(3, 1fr);
                    }
                }

                @media (max-width: 768px) {
                    .category-menu li {
                        padding: 10px 15px;
                    }

                    .product-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media (max-width: 480px) {
                    .category-menu {
                        flex-direction: column;
                        gap: 10px;
                    }

                    .category-menu li:not(:last-child)::after {
                        display: none;
                    }

                    .product-grid {
                        grid-template-columns: 1fr;
                    }
                }
            </style>

            <script>
                let currentLimit = 8;
                let currentCategory = 'all';

                function filterCategory(category, event) {
                    if (event) {
                        event.preventDefault();
                        // Update active class on menu
                        document.querySelectorAll('.category-menu a').forEach(link => {
                            link.classList.remove('active');
                        });
                        event.target.classList.add('active');
                    }

                    currentCategory = category;
                    currentLimit = 8; // Reset limit when filter changes
                    updateGrid(false);
                }

                function updateGrid(isLoadMore = false) {
                    const items = document.querySelectorAll('.product-grid-item');
                    let delay = 0;
                    let visibleCount = 0;
                    let totalMatch = 0;

                    items.forEach(item => {
                        if (!isLoadMore) {
                            item.style.animation = 'none'; // reset animation
                            item.offsetHeight; // trigger reflow
                        }

                        const isMatch = (currentCategory === 'all' || item.getAttribute('data-category') === currentCategory);

                        if (isMatch) {
                            totalMatch++;
                            if (visibleCount < currentLimit) {
                                if (!isLoadMore || item.style.display !== 'flex') {
                                    item.style.display = 'flex';
                                    item.style.animation = `fadeIn 0.4s ease ${delay}s forwards`;
                                    delay += 0.05; // stagger effect
                                }
                                visibleCount++;
                            } else {
                                item.style.display = 'none';
                                item.style.animation = 'none';
                            }
                        } else {
                            item.style.display = 'none';
                            item.style.animation = 'none';
                        }
                    });

                    // Update Load More button visibility
                    const loadMoreContainer = document.querySelector('.load-more-container');
                    if (loadMoreContainer) {
                        if (totalMatch > currentLimit) {
                            loadMoreContainer.style.display = 'block'; // Or 'text-align: center' parent handles it
                        } else {
                            loadMoreContainer.style.display = 'none';
                        }
                    }
                }

                // Initialize default view
                document.addEventListener('DOMContentLoaded', () => {
                    filterCategory('all', null);

                    const loadMoreBtn = document.querySelector('.load-more-btn');
                    if (loadMoreBtn) {
                        loadMoreBtn.addEventListener('click', () => {
                            currentLimit += 8;
                            updateGrid(true);
                        });
                    }
                });
            </script>
        </section>
    </main>

    <?php include '../component/footer.php'; ?>
</body>

</html>