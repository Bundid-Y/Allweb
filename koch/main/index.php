<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koch Packaging and Packing Services Co.,Ltd</title>
    <meta name="description" content="Smart, Fast, and Sustainable Solutions สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย - บริการบรรจุภัณฑ์และคลังสินค้าครบวงจร" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/logo 2.png" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Prompt:wght@300;400;500;600;700&family=Sarabun:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Libraries: GSAP & Lenis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js" defer></script>
    <!-- Note: SplitText is a club plugin, typically requires local file or private CDN. 
         Assuming the provided scripts will handle its absence gracefully or it will be added if available. -->

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>

    <?php include '../component/menubar.php'; ?>

    <!-- SLIDER SECTION -->
    <div class="main-container section-slider">
        <div class="slider-wrapper" id="sliderWrapper">
            
            <div class="slide-track" id="slideTrack">
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-1.jpeg" alt="Slide 1"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-2.jpeg" alt="Slide 2"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-3.jpeg" alt="Slide 3"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-4.jpeg" alt="Slide 4"></div>
                <div class="slide-item"><img src="../img/other/index/cardslides/cardslides-5.jpeg" alt="Slide 5"></div>
            </div>

            <button class="nav-btn prev" id="prevBtn">‹</button>
            <button class="nav-btn next" id="nextBtn">›</button>
        </div>
    </div>
    

    <!-- CONTENT / DETAILS SECTION — เกี่ยวกับเรา -->
    <div class="content-section layout_padding">
        <!-- ใช้ Flexbox แทน Bootstrap row/col -->
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px;">
            
            <!-- คอลัมน์ซ้าย: รูปภาพ -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box">
                    <div class="details-image">
                        <img src="../img/other/index/about/box_about.png" alt="Detail Image">
                    </div>
                </div>
            </div>
            
            <!-- คอลัมน์ขวา: เนื้อหา -->
            <div style="flex: 1; min-width: 300px;">
                <h1 class="details-title">เกี่ยวกับเรา</h1>
                
                <!-- ย่อหน้าแรก: เน้นว่า KOCH คือใคร และเป้าหมายคืออะไร -->
                <p class="details-desc">
                    KOCH คือผู้เชี่ยวชาญด้านบริการ Supply Chain ครบวงจร สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย มุ่งเน้นการสร้างระบบที่ <strong>"Smart, Fast, and Sustainable"</strong>
                </p>

                <!-- ย่อหน้าที่สอง: เน้นบทบาท Partner และใช้ List เพื่อแจกแจงความเชี่ยวชาญ -->
                <p class="details-desc">
                    เราไม่ได้เป็นเพียงผู้ผลิตบรรจุภัณฑ์ แต่คือ <strong>"พันธมิตรเชิงกลยุทธ์"</strong> ที่ช่วยยกระดับการบริหารจัดการโลจิสติกส์ให้มีประสิทธิภาพสูงสุด ด้วยความเชี่ยวชาญเฉพาะด้าน:
                </p>

                <ul class="details-desc"> <!-- ใช้ class เดียวกับ p เพื่อให้ฟอนต์เท่ากัน -->
                    <li>ระบบ VMI (Vendor Managed Inventory)</li>
                    <li>การออกแบบวิศวกรรมภายในองค์กร (In-house Engineering)</li>
                    <li>การปรับวิธีกรรมระบบอัตโนมัติที่ล้ำสมัย</li>
                </ul>

                <div class="details-action-group">
                </div>
            </div>

        </div>
    </div>


    <!-- CONTENT / DETAILS SECTION — บริการของเรา -->
    <div class="content-section layout_padding">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: left;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none;">
                    บริการของเรา
                </h1>
                <div class="details-action-group"></div>
            </div>
        </div>
        
        <!-- ส่วน Card Grid -->
        <div>
            <div class="details-box details-box-services">
                <div class="card-grid">
                    <a class="card" href="../service/development.php">
                        <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)"></div>
                        <div class="card__content">
                            <p class="card__category">Packaging Development</p>
                            <h3 class="card__heading">นวัตกรรมการออกแบบบรรจุภัณฑ์ครบวงจร</h3>
                        </div>
                    </a>
                    <a class="card" href="../service/supply_management.php">
                        <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60)"></div>
                        <div class="card__content">
                            <p class="card__category">Packaging SupplyManagement System</p>
                            <h3 class="card__heading">ระบบบริหารจัดการบรรจุภัณฑ์อัจฉริยะ</h3>
                        </div>
                    </a>
                    <a class="card" href="../service/warehouse.php">
                        <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60)"></div>
                        <div class="card__content">
                            <p class="card__category">Warehouse & Operation Management</p>
                            <h3 class="card__heading">บริหารจัดการคลังสินค้าและงานปฏิบัติการมืออาชีพ</h3>
                        </div>
                    </a>
                    <a class="card" href="../service/transportation.php">
                        <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60)"></div>
                        <div class="card__content">
                            <p class="card__category">Transportation Inhouse Fleet & System</p>
                            <h3 class="card__heading">ระบบขนส่งอัจฉริยะ</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    

    <!-- CONTENT / DETAILS SECTION — พันธมิตรที่ไว้วางใจเรา -->
    <div class="content-section layout_padding section-partners">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: left;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none;">
                    พันธมิตรที่ไว้วางใจเรา
                </h1>
            </div>
        </div>

        <!-- logo ลูกค้าเลื่อน loop slides -->
        <section class="loop-images-quotation" style="--bg: white; height: auto; min-height: 300px; padding: 40px 0;">
            <div class="login-track" style="--time: 60s; --total: 12;">
                <div class="login-item" style="--i: 1;"><img src="../img/customer_logo/Mazda.png" alt="image"></div>
                <div class="login-item" style="--i: 2;"><img src="../img/customer_logo/Suzuki.png" alt="image"></div>
                <div class="login-item" style="--i: 3;"><img src="../img/customer_logo/Changan.png" alt="image"></div>
                <div class="login-item" style="--i: 4;"><img src="../img/customer_logo/Kn.webp" alt="image"></div>
                <div class="login-item" style="--i: 5;"><img src="../img/customer_logo/Honda.png" alt="image"></div>
                <div class="login-item" style="--i: 6;"><img src="../img/customer_logo/Alpla.png" alt="image"></div>
                <div class="login-item" style="--i: 7;"><img src="../img/customer_logo/BROSE_Excellence.png" alt="image"></div>
                <div class="login-item" style="--i: 8;"><img src="../img/customer_logo/nhk.webp" alt="image"></div>
                <div class="login-item" style="--i: 9;"><img src="../img/customer_logo/siamgoshi.jpg" alt="image"></div>
                <div class="login-item" style="--i: 10;"><img src="../img/customer_logo/dn.png" alt="image"></div>
                <div class="login-item" style="--i: 11;"><img src="../img/customer_logo/lat.png" alt="image"></div>
                <div class="login-item" style="--i: 12;"><img src="../img/customer_logo/mitsuboshi.png" alt="image"></div>
            </div>
        </section>
    </div>

    <!-- CONTENT / DETAILS SECTION — สินค้าแนะนำ -->
    <div class="content-section layout_padding section-products">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: left;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none;">
                    สินค้าแนะนำ
                </h1>
            </div>
        </div>

        <div class="Block_Expanding_Cards">
            <div class="card_holder_sB">
                <span class="US_City_sB _active" data-card-index="0">
                    <h1 class="card_h1 _active">RSC Box</h1>
                    <div class="card_shade _off"></div>
                    <div class="card_content _on">
                        <p class="card_dscrptn">
                            This photo taken by 
                            <a class="card_photo_cred" href="../img/products/box/rsc.png" target="_blank">Luca Bravo</a>.
                        </p>
                    </div>
                    <div class="card_BG _active">
                        <img class="Img_H100" src="../img/products/box/rsc.png" alt="RSC Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="1">
                    <h1 class="card_h1">FTD Box</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            This photo taken by 
                            <a class="card_photo_cred" href="https://unsplash.com/photos/Nyvq2juw4_o?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink" target="_blank">Pedro Lastra</a>.
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/ftd.png" alt="FTD Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="2">
                    <h1 class="card_h1">OSC Box</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            This photo taken by 
                            <a class="card_photo_cred" href="https://unsplash.com/photos/cHRDevKFDBw?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink" target="_blank">Venti Views</a>.
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/osc.png" alt="OSC Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="3">
                    <h1 class="card_h1">Die-Cut Box</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            This photo taken by 
                            <a class="card_photo_cred" href="https://unsplash.com/photos/tUoA7sCrRto?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink" target="_blank">mana5280</a>.
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/die-cut.png" alt="Die-Cut Box" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="4">
                    <h1 class="card_h1">Cardboard Pallet</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            This photo taken by 
                            <a class="card_photo_cred" href="https://unsplash.com/photos/KDS5lCrj_ew?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink" target="_blank">Antonio Cuellar</a>.
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/pallet.png" alt="Cardboard Pallet" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="5">
                    <h1 class="card_h1">Fitting Box Service</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            This photo taken by 
                            <a class="card_photo_cred" href="https://unsplash.com/photos/gZXx8lKAb7Y?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink" target="_blank">Maarten van den Heuvel</a>.
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/products/box/fit_ser.png" alt="Fitting Box Service" />
                    </div>
                </span>
            </div>
        </div>
    </div>


    <style>
    
    	a {   color: rgb( 0 , 0 , 0 ); text-decoration: none;   }

	a:visited , a:active , a:focus {   border: none;   }

	img {   border: none;   }

	span {   display: inline-block;   }

	.Img_Dflt {   width: 100%;   }

	.Img_WH100 {   width: 100%; height: 100%;   }

	.Img_H100 {   height: 100%;   }

	.noDisplay , ._Off {   display: none;   }

	.SVG_Dflt {   position: absolute; top: 0%; left: 0%; width: 100%; height: 100%;   }
	html {   font-size: 100%;   }


	.Block_Expanding_Cards {

		position: relative;
		margin: 5vh auto;
		width: 100%;
		height: 50vh;
		text-align: center;
	}
	.card_holder_sB {

		position: relative;
		margin: 0em auto;
		width: 90%;
		height: 100%;
	}
	.US_City_sB {

		display: inline-block;
		position: relative;
		margin: 0em 0.5em;
		width: 8%;
		height: 100%;
		vertical-align: middle;
		border-radius: 1.5em;
		overflow: hidden;
		transition: width 0.25s ease;
	}
	.US_City_sB._active {

		width: 40%;
	}
	.US_City_sB:hover {

		cursor: pointer;
	}
	.card_h1 {
		color: #ffffff;
		position: absolute;
		bottom: 5%;
		left: 25%;
		font-size: 2em;
		margin: 0em;
		padding: 0em;
		font-weight: normal;
		writing-mode: vertical-rl;
		transform: rotate(180deg);
	}
	.card_h1._active {

		position: relative;
		bottom: 0%;
		left: 0%;
		font-size: 4em;
		writing-mode: horizontal-tb;
		transform: rotate(0deg);
		margin: 2em auto 0em auto;
		text-shadow: 1px 1px 0.0625em black;
	}
	.card_content {

		position: relative;
		margin: 5em auto 0em auto;
		width: 80%;
		display: none;
	}
	.card_content._on { display: block; text-shadow: 1px 1px 0px black; }

	.card_dscrptn {
		color: #ffffff;
		font-size: 2em;
		margin: 0em;
		padding: 0em;
	}
	.card_photo_cred {

		color: rgb( 0 , 234 , 0 );
	}
	.card_shade {

		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100%;
		background-color: rgb( 0 , 0 , 0 );
		opacity: 0.5;
	}
	.card_shade._off {	display: none;	}

	.card_shade:hover { opacity: 0; }

	.card_BG {

		position: absolute;
		width: 100%;
		height: 100%;
		top: 0%;
		left: 0%;
		z-index: -1;
		transition: left 1.5s ease;
	}
	.card_BG._active {

		left: -35%;
	}

	@media ( max-width : 400px ) {


		body {  font-size: 60%;  }

		.card_h1._active {	margin: 0.125em auto 0em auto;	}

	}
	@media ( min-width : 401px ) and ( max-width : 600px ) {



		body {  font-size: 70%;  }

		.card_h1._active {	margin: 0.125em auto 0em auto;	}

	}
	@media ( min-width : 601px ) and ( max-width : 800px ) {


		body {  font-size: 80%;  }

		.card_h1._active {	margin: 0.25em auto 0em auto;	}

	}
	@media ( min-width : 801px ) and ( max-width : 1000px ) {


		body {  font-size: 90%;  }

		.card_h1._active {	margin: 1em auto 0em auto;	}

	}
	@media ( min-width : 1001px ) and ( max-width : 1200px ) {


		body {  font-size: 100%;  }

	}
	@media ( min-width : 1201px ) and ( max-width : 1400px ) {


		body {  font-size: 100%;  }

	}
	@media ( min-width : 1401px ) {


		body {  font-size: 125%;  }

	}

    </style>


    <script>

    (function() {

		var	doc = document ,

		elemList = Construct_SubElement_List( doc.body ) ,

		len = elemList.length ,

		win = window ,

		i ,

		_Blocks = [] ,

		Card_Expander ;

	for (  i = 0 ; i < len ; i++  ) {

		var	currElem	= elemList[i] ;

		if (  currElem.className && /^Block_Expanding_Cards$/.test( currElem.className )  ) {
      
		  Card_Expander	= new Card_Expander_Obj( currElem ) ;
		}


		if (  currElem.parentNode && /body/i.test( currElem.parentNode.tagName ) && ( /^Block/.test( currElem.className ) || /^Block/.test( currElem.id ) )  )

			_Blocks.push( currElem ) ;
	}


	function	Card_Expander_Obj   (  ElemObjRef  )  {

		var	ELEM		= ElemObjRef ,

			ElemList	= Construct_SubElement_List( ELEM ) , num = ElemList.length , j , k ;


//	##########	--	PROPERTIES

		this.ElemObj		= ELEM ;
		this._Cards		= [] ;

		this.current_index	= 0 ;

		for (  j = 0 ; j < num ; j++  ) {

			var	CE = ElemList[j] ;

			if ( /^US_City_sB/.test( CE.className ) ) {

				var	subElemList	= Construct_SubElement_List( CE ), n2 = subElemList.length ,
					h1_EO ,
					shade_EO ,
					content_EO ,
					BG_EO ;

				for ( k = 0 ; k < n2 ; k++ ) {

					if ( /^card_h1/.test( subElemList[k].className ) )			h1_EO		= subElemList[k] ;

					else if ( /^card_shade/.test( subElemList[k].className ) )	shade_EO		= subElemList[k] ;

					else if ( /^card_content/.test( subElemList[k].className ) )	content_EO	= subElemList[k] ;

					else if ( /^card_BG/.test( subElemList[k].className ) )		BG_EO		= subElemList[k] ;
				}

				this._Cards.push( {"EO": CE, "h1_EO": h1_EO, "shade_EO": shade_EO, "content_EO": content_EO, "BG_EO": BG_EO} ) ;

				CE.onclick = function() {

					if ( this.className.indexOf("_active") > -1 )	return ;

					Card_Expander._Toggle( parseInt( this.getAttribute("data-card-index") ) ) ;
				} ;
			}
		}


//	##########	--	METHODS



		this._Toggle = function ( new_card_index ) {

			this._Cards[ this.current_index ].EO.className			= "US_City_sB" ;
			this._Cards[ this.current_index ].h1_EO.className		= "card_h1" ;
			this._Cards[ this.current_index ].shade_EO.className		= "card_shade" ;
			this._Cards[ this.current_index ].content_EO.className	= "card_content" ;
			this._Cards[ this.current_index ].BG_EO.className		= "card_BG" ;

			this._Cards[ new_card_index ].EO.className			+= " _active" ;
			this._Cards[ new_card_index ].h1_EO.className		+= " _active" ;
			this._Cards[ new_card_index ].shade_EO.className	+= " _off" ;
			this._Cards[ new_card_index ].content_EO.className	+= " _on" ;
			this._Cards[ new_card_index ].BG_EO.className		+= " _active" ;

			this.current_index	= new_card_index ;
		} ;
	}
	function	Construct_Element_Object (   elem  ,  propertyArr  ,  methodArr  ,  childArr  ,  innerHTML_CharStr  )  {

		var	Elem_Obj	= elem ,

			Properties	= propertyArr ,

			Methods		= methodArr ,

			Children	= childArr ,

			inner_html	= innerHTML_CharStr ,

			len , i ;


			len = Properties.length ;

			for (  i = 0 ; i < len ; i++  )		Elem_Obj[ Properties[i][0] ] = Properties[i][1] ;


			len = Methods.length ;

			for (  i = 0 ; i < len ; i++  )		Elem_Obj[ Methods[i][0] ] = Methods[i][1] ;


			len = Children.length;

			for (  i = 0 ; i < len ; i++  )		Elem_Obj.appendChild( Children[i] ) ;


			len = inner_html.length ;

			if (  len > 0  )			Elem_Obj.innerHTML = inner_html ;


			return		Elem_Obj ;

	}
	function	Construct_SubElement_List ( ElemObjRef ) {

		var	_ELEM		= ElemObjRef ,

			tmpList		= _ELEM.getElementsByTagName("*") , tmpLen = tmpList.length , k ,

   			ELEM_LIST 	= [] ;


		for (  k = 0 ; k < tmpLen ; k++  )		ELEM_LIST.push( tmpList[k] ) ;


		return		ELEM_LIST ;
	}
	function	Construct_Filtered_SubElement_List ( refArr ) {

		var	_ELEM		= refArr[0] ,

			tagName		= ( typeof refArr[1] !== "undefined" )? refArr[1] : "*" ,

			tmpList		= _ELEM.getElementsByTagName( tagName ) , tmpLen = tmpList.length , k ,

   			ELEM_LIST 	= [] ;


		for (  k = 0 ; k < tmpLen ; k++  )		ELEM_LIST.push( tmpList[k] ) ;


		return		ELEM_LIST ;
	}
	function	xhrObj ( ) {

		var	xmlhttp	=	( window.XMLHttpRequest ) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP") ;

		return	xmlhttp ;

	}
	function	Add_CSS_Rule ( styleSheetRef , selectorStr , ruleStr ) {

		if ( typeof styleSheetRef.insertRule === "function" )	styleSheetRef.insertRule( selectorStr + '{' + ruleStr + '}' , styleSheetRef.cssRules.length ) ;

		else if ( typeof styleSheetRef.addRule === "function" )	styleSheetRef.addRule( selectorStr , ruleStr , styleSheetRef.rules.length ) ;
	}

	function	Build_CSS_JSON  ( json_input ) {

		this.CSS_JSON[ json_input.key ] = this.CSS_JSON[ this.CSS_JSON.length ] = json_input.json ;
	}
	function	Add_CSS_Rules  ( ) {

		var	len = this.CSS_JSON.length , j ;

		for ( j = 0 ; j < len ; j++ )

			Add_CSS_Rule ( doc.styleSheets[0] , this.CSS_JSON[j].selector , this.CSS_JSON[j].rule ) ;
	}
	function	Validate_Email  ( emailStr )  {

		var	re = /\S+@\S+\.\S+/ ;

		return	re.test( emailStr ) ;
	}

})() ;

    </script>


    <?php include '../component/footer.php'; ?>
</body>
</html>