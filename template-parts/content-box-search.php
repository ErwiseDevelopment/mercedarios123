<div class="l-box-search js-box-search p-3">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <form method="GET" action="<?php echo get_home_url( null, '/' ) ?>">

                    <div class="row justify-content-end">

                        <div class="col-lg-8 mb-3 mb-lg-0">
                            <input 
                            class="w-100 border shadow-sm rounded-lg d-block u-font-weight-regular px-3"
                            type="search"
                            name="s"
                            placeholder="...">
                        </div>

                        <div class="col-lg-3 mb-3 mb-lg-0 pl-lg-0">
                            <input
                            class="w-100 h-100 border-0 shadow-sm rounded-lg d-block u-font-size-12 u-font-weight-bold text-center text-uppercase u-color-folk-white u-bg-folk-golden" 
                            type="submit"
                            value="Pesquisar">
                        </div>

                        <div class="col-lg-1 d-flex justify-content-center align-items-center pl-lg-0">
                            <span class="w-100 rounded-lg u-font-weight-bold text-center u-color-folk-white u-bg-folk-dark-marron u-cursor-pointer js-close-search">
                                x
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>