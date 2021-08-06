<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// A description shown in the admin theme selector.
$string['choosereadme'] = 'Theme Boost Flex is a child theme of Boost. It adds the ability to easy change CSS.';
// The name of our plugin.
$string['pluginname'] = 'Boost Flex';
// We need to include a lang string for each block region.
$string['region-side-pre'] = 'Right';
// The name of the second tab in the theme settings.
$string['advancedsettings'] = 'Advanced settings';
// The brand colour setting.
$string['brandcolor'] = 'Brand colour';
// The brand colour setting description.
$string['brandcolor_desc'] = 'The accent colour.';
// Name of the settings pages.
$string['configtitle'] = 'Boost Flex settings';
// Name of the first settings tab.
$string['generalsettings'] = 'General settings';
// Preset files setting.
$string['presetfiles'] = 'Additional theme preset files';
// Preset files help text.
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> for information on creating and sharing your own preset files, and see the <a href=http://moodle.net/boost>Presets repository</a> for presets that others have shared.';
// Preset setting.
$string['preset'] = 'Theme preset';
// Preset help text.
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
// Raw SCSS setting.
$string['rawscss'] = 'Raw SCSS';
// Raw SCSS setting help text.
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
// Raw initial SCSS setting.
$string['rawscsspre'] = 'Raw initial SCSS';
// Raw initial SCSS setting help text.
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';

// Flex settings.
$string['flexsettings'] = 'Flex settings';

$string['styleinfo'] = 'Style settings';
$string['styleinfo_desc'] = 'Control style settings.';
$string['advancedinfo'] = 'Advanced settings';
$string['advancedinfo_desc'] = 'Control advanced layout.';

$string['imagelayout'] = 'Image layout';
$string['imagelayout_desc'] = 'Makes most images responsive, but does not reduce file size.';
$string['imagelayout1'] = 'Deactivate responsive images';
$string['imagelayout2'] = 'Activate responsive images';

$string['attofix'] = 'Atto fix';
$string['attofix_desc'] = 'This fixes an error in the Atto editor that adds unwanted font-sizes.';
$string['attofix1'] = 'Deactivate Atto fix';
$string['attofix2'] = 'Activate Atto fix';

$string['pagelayout'] = 'Page layout';
$string['pagelayout_desc'] = 'Sets a maximum width of the page for large screens.';
$string['pagelayout1'] = 'Deactivate Page layout';
$string['pagelayout2'] = 'Activate Page layout';

$string['quizlayout'] = 'Quiz layout';
$string['quizlayout_desc'] = 'Choose from the following quiz layouts.';
$string['quizlayout1'] = 'Default Quiz layout';
$string['quizlayout2'] = 'Advanced Quiz layout';
$string['quizlayout3'] = 'Advanced/Grayscale Quiz layout';
$string['quizlayout4'] = 'Colored Quiz layout';

$string['enhancededitbutton'] = 'Turn editing on';
$string['enhancededitbutton_desc'] = 'Style the Turn editing on button.';

$string['enhancedformattopics'] = 'Course format Topics';
$string['enhancedformattopics_desc'] = 'Style the course format Topics.';