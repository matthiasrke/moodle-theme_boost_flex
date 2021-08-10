<?php
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
 * Theme Boost Flex functions.
 *
 * @package    theme_boost_flex
 * @copyright  2021 Matthias Reike - @matthiasrke
 *             2020 Kristian Ringer
 *             2016 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// We will add callbacks here as we add features to our theme.
function theme_boost_flex_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
    $fs = get_file_storage();

    $context = context_system::instance();
    if ($filename == 'boost_flex.scss') {
        // Theme boost_flex preset file.
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/preset/boost_flex.scss');
    }
    
    if ($filename == 'default.scss') {
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    } else if ($filename == 'plain.scss') {
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/plain.scss');

    } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_boost_flex', 'preset', 0, '/', $filename))) {
        // This preset file was fetched from the file area for theme_boost_flex and not theme_boost (see the line above).
        $scss .= $presetfile->get_content();
    } else {
        // Safety fallback - maybe new installs etc.
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    }

    // Atto fix.
    if ($theme->settings->atto == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/atto/atto1.scss');
    }
    if ($theme->settings->atto == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/atto/atto2.scss');
    }

	// Rounded corners.
    if ($theme->settings->rounded == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/rounded/rounded1.scss');
    }
    if ($theme->settings->rounded == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/rounded/rounded2.scss');
    }
    if ($theme->settings->rounded == 3) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/rounded/rounded2.scss');
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/rounded/rounded3.scss');
    }

	// Fonts.
    if ($theme->settings->fonts == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/fonts/fonts1.scss');
    }
    if ($theme->settings->fonts == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/fonts/fonts2.scss');
    }

	// Icons.
    if ($theme->settings->icons == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/icons/icons1.scss');
    }
    if ($theme->settings->icons == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/icons/icons2.scss');
    }

	// Image layout.
    if ($theme->settings->images == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/images/images1.scss');
    }
    if ($theme->settings->images == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/images/images2.scss');
    }

	// Page layout.
    if ($theme->settings->page == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/page/page1.scss');
    }
    if ($theme->settings->page == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/page/page2.scss');
    }

	// Dashboard layout.
    if ($theme->settings->dashboard == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/dashboard/dashboard1.scss');
    }
    if ($theme->settings->dashboard == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/dashboard/dashboard2.scss');
    }

	// Front page layout.
    if ($theme->settings->frontpage == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/frontpage/frontpage1.scss');
    }
    if ($theme->settings->frontpage == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/frontpage/frontpage2.scss');
    }

	// Quiz layout.
    if ($theme->settings->quiz == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quiz/quiz1.scss');
    }
    if ($theme->settings->quiz == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quiz/quiz2.scss');
    }
    if ($theme->settings->quiz == 3) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quiz/quiz2.scss');
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quiz/quiz3.scss');
    }
    if ($theme->settings->quiz == 4) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quiz/quiz2.scss');
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quiz/quiz4.scss');
    }

	// Background layout.
    if ($theme->settings->background == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/background/background1.scss');
    }
    if ($theme->settings->background == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/background/background2.scss');
    }

	// Various styles.
    if ($theme->settings->various == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/various/various1.scss');
    }
    if ($theme->settings->various == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/various/various2.scss');
    }

 	// Course format Topics.
    if ($theme->settings->format_topics == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/course/format_topics.scss');
    }

    // Edit button.
    if ($theme->settings->edit_button == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/buttons/edit_button.scss');
    }
	
    // Pre CSS - this is loaded AFTER any prescss from the setting but before the main scss.
    $pre = file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/pre.scss');
    // Post CSS - this is loaded AFTER the main scss but before the extra scss from the setting.
    $post = file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/post.scss');
    // Combine them together.
    return $pre . "\n" . $scss . "\n" . $post;

}

// Configurable settings.
function theme_boost_flex_get_pre_scss($theme) {
    global $CFG;

    $scss = '';
    $configurable = [
        // Config key => [variableName, ...].
        'brandcolor' => ['primary'],
        'flexbackground' => ['flexbackground']
    ];

    // Prepend variables first.
    foreach ($configurable as $configkey => $targets) {
        $value = isset($theme->settings->{$configkey}) ? $theme->settings->{$configkey} : null;
        if (empty($value)) {
            continue;
        }
        array_map(function($target) use (&$scss, $value) {
            $scss .= '$' . $target . ': ' . $value . ";\n";
        }, (array) $targets);
    }

    // Prepend pre-scss.
    if (!empty($theme->settings->scsspre)) {
        $scss .= $theme->settings->scsspre;
    }

    return $scss;
}