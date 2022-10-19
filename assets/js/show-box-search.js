(function() {
    if( document.querySelector( '.js-icon-search' ) && document.querySelector( '.js-box-search' ) ) {
        const iconSearch = document.querySelector( '.js-icon-search' )
        const boxSearch = document.querySelector( '.js-box-search' )
        const close = document.querySelector( '.js-close-search' )

        iconSearch.addEventListener( 'click', function() {
            boxSearch.classList.add( 'is-active' )
        })

        close.addEventListener( 'click', function() {
            boxSearch.classList.remove( 'is-active' )
        })
    }
})()    