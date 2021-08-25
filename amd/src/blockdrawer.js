// Javascript to always show the block drawer on click.
define(['jquery', 'theme_boost_flex/blockdrawer'], function ($) {

    if (window.matchMedia('(min-width: 768px)').matches) {

        $('.block-toggler').click(function () {
            var blockdraweropen = localStorage.getItem('blockdraweropen');

            if (blockdraweropen == 1) {
                localStorage.setItem('blockdraweropen', 0);
            } else {
                localStorage.setItem('blockdraweropen', 1);
            }

        });

        if (localStorage.getItem('blockdraweropen') == 1) {
            $('#block-drawer').addClass('show');
        }

    }

});