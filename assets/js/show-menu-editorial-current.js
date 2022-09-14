(function() {
    if( document.querySelector( '.js-menu-editorial-item' ) ) {
        const items = document.getElementsByClassName( 'js-menu-editorial-item' )

        for( const i of items ) {
            i.pathname = i.pathname + '/'
            
            if( i.pathname == window.location.pathname )
                i.classList.add( 'is-active' )
        }
    }
})()