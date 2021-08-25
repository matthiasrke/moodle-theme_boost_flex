// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Toggling the visibility of the block section.
 *
 * @module     theme_boost_flex/blockdrawer
 * @copyright  2021 Matthias Reike
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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