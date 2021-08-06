<?php

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// We will add callbacks here as we add features to our theme.
function theme_boost_flex_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
    $fs = get_file_storage();

    $context = context_system::instance();
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
    if ($theme->settings->attofix == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/attofix/attostyle1.scss');
    }
    if ($theme->settings->attofix == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/attofix/attostyle2.scss');
    }

	// Image layout.
    if ($theme->settings->imagelayout == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/imagelayout/imagestyle1.scss');
    }
    if ($theme->settings->imagelayout == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/imagelayout/imagestyle2.scss');
    }

	// Page layout.
    if ($theme->settings->pagelayout == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/pagelayout/pagestyle1.scss');
    }
    if ($theme->settings->pagelayout == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/pagelayout/pagestyle2.scss');
    }

	// Quiz layout.
    if ($theme->settings->quizlayout == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quizlayout/quizstyle1.scss');
    }
    if ($theme->settings->quizlayout == 2) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quizlayout/quizstyle2.scss');
    }
    if ($theme->settings->quizlayout == 3) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quizlayout/quizstyle3.scss');
    }
    if ($theme->settings->quizlayout == 4) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/quizlayout/quizstyle4.scss');
    }

 	// Course format Topics.
    if ($theme->settings->enhancedformattopics == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/coursestyle/formattopicsstyle1.scss');
    }

    // Edit button.
    if ($theme->settings->enhancededitbutton == 1) {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost_flex/scss/editbuttonstyle/editbuttonstyle1.scss');
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