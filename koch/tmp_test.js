const fs = require('fs');
const jsdom = require('jsdom');
const { JSDOM } = jsdom;
const html = fs.readFileSync('c:/xampp/htdocs/all-web/koch/main/index.php', 'utf8');
const dom = new JSDOM(html);
const document = dom.window.document;
const window = dom.window;

// simulate script.js
document.addEventListener = function(event, callback) {
    if (event === 'DOMContentLoaded') callback();
};

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.Block_Expanding_Cards') === null) {
        console.log('No .Block_Expanding_Cards found');
        return;
    }
    
    var doc = document,
    elemList = Construct_SubElement_List( doc.body ),
    len = elemList.length,
    win = window,
    i,
    _Blocks = [],
    Card_Expander ;

    for ( i = 0 ; i < len ; i++ ) {
        var currElem = elemList[i] ;
        if ( currElem.className && /^Block_Expanding_Cards$/.test( currElem.className ) ) {
            Card_Expander = new Card_Expander_Obj( currElem ) ;
        }
        if ( currElem.parentNode && /body/i.test( currElem.parentNode.tagName ) && ( /^Block/.test( currElem.className ) || /^Block/.test( currElem.id ) ) )
            _Blocks.push( currElem ) ;
    }
    
    console.log('Card_Expander assigned:', !!Card_Expander);
    if (Card_Expander) {
        console.log('Cards found:', Card_Expander._Cards.length);
        const ce = Card_Expander._Cards[1].EO;
        console.log('Clicking card 1...');
        ce.onclick();
        console.log('Card 1 className:', ce.className);
    }

    function Card_Expander_Obj ( ElemObjRef ) {
        var ELEM = ElemObjRef,
            ElemList = Construct_SubElement_List( ELEM ), num = ElemList.length, j, k ;
        this.ElemObj = ELEM ;
        this._Cards = [] ;
        this.current_index = 0 ;

        for ( j = 0 ; j < num ; j++ ) {
            var CE = ElemList[j] ;
            if ( /^US_City_sB/.test( CE.className ) ) {
                var subElemList = Construct_SubElement_List( CE ), n2 = subElemList.length,
                    h1_EO , shade_EO , content_EO , BG_EO ;

                for ( k = 0 ; k < n2 ; k++ ) {
                    // Try catch to catch the actual error
                    try {
                        if ( /^card_h1/.test( subElemList[k].className ) ) h1_EO = subElemList[k] ;
                        else if ( /^card_shade/.test( subElemList[k].className ) ) shade_EO = subElemList[k] ;
                        else if ( /^card_content/.test( subElemList[k].className ) ) content_EO = subElemList[k] ;
                        else if ( /^card_BG/.test( subElemList[k].className ) ) BG_EO = subElemList[k] ;
                    } catch(e) {
                         console.error("Error at k=", k, "element=", subElemList[k].tagName, "className=", subElemList[k].className);
                         throw e;
                    }
                }

                this._Cards.push( {"EO": CE, "h1_EO": h1_EO, "shade_EO": shade_EO, "content_EO": content_EO, "BG_EO": BG_EO} ) ;
                
                CE.onclick = function() {
                    if ( this.className.indexOf("_active") > -1 ) return ;
                    Card_Expander._Toggle( parseInt( this.getAttribute("data-card-index") ) ) ;
                } ;
            }
        }

        this._Toggle = function ( new_card_index ) {
            this._Cards[ this.current_index ].EO.className = "US_City_sB" ;
            this._Cards[ this.current_index ].h1_EO.className = "card_h1" ;
            this._Cards[ this.current_index ].shade_EO.className = "card_shade" ;
            this._Cards[ this.current_index ].content_EO.className = "card_content" ;
            this._Cards[ this.current_index ].BG_EO.className = "card_BG" ;

            this._Cards[ new_card_index ].EO.className += " _active" ;
            this._Cards[ new_card_index ].h1_EO.className += " _active" ;
            this._Cards[ new_card_index ].shade_EO.className += " _off" ;
            this._Cards[ new_card_index ].content_EO.className += " _on" ;
            this._Cards[ new_card_index ].BG_EO.className += " _active" ;

            this.current_index = new_card_index ;
        } ;
    }

    function Construct_SubElement_List ( ElemObjRef ) {
        var _ELEM = ElemObjRef ,
            tmpList = _ELEM.getElementsByTagName("*") , tmpLen = tmpList.length , k ,
            ELEM_LIST = [] ;
        for ( k = 0 ; k < tmpLen ; k++ ) ELEM_LIST.push( tmpList[k] ) ;
        return ELEM_LIST ;
    }
});
