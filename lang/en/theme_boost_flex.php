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
 * Theme Boost Flex language file.
 *
 * @package   theme_boost_flex
 * @copyright 2021 Matthias Reike
 *            2020 Kristian Ringer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// General.
// A description shown in the admin theme selector.
$string['choosereadme'] = 'Theme Boost Flex is a child theme of Boost. It adds the ability to easy change CSS.';
// The name of our plugin.
$string['pluginname'] = 'Boost Flex';
// We need to include a lang string for each block region.
$string['region-side-pre'] = 'Right';
// The name of the second tab in the theme settings.
$string['advancedsettings'] = 'Advanced settings';
// The brand color setting.
$string['brandcolor'] = 'Brand color';
// The brand color setting description.
$string['brandcolor_desc'] = 'The accent color.';
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
$string['yes'] = 'Yes';
$string['no'] = 'No';
$string['default'] = 'Moodle default';

// Flex infos.
$string['styleinfo'] = 'Style settings';
$string['styleinfo_desc'] = 'Control style settings.';
$string['courseinfo'] = 'Course settings';
$string['courseinfo_desc'] = 'Control course layout.';
$string['modinfo'] = 'Activity settings';
$string['modinfo_desc'] = 'Control activity layout.';
$string['printinfo'] = 'Print settings';
$string['printinfo_desc'] = 'Control print version.';
$string['experimentalinfo'] = 'Experimental settings';
$string['experimentalinfo_desc'] = 'Control experimental settings.';

// Styles.
// Rounded corners.
$string['rounded'] = 'Rounded corners';
$string['rounded_desc'] = 'Adds rounded corners to additional elements. Rounded is enabled in the preset file.';
$string['rounded2'] = 'Additional';
$string['rounded3'] = 'Additional + Rounder buttons';

// Font size.
$string['fonts'] = 'Font-size';
$string['fonts_desc'] = 'Increase font size of some texts.';

// Icon size.
$string['icons'] = 'Icon size';
$string['icons_desc'] = 'Increase icon size.';

// Image layout.
$string['images'] = 'Image layout';
$string['images_desc'] = 'Makes most images responsive, but does not reduce file size.';

// Page layout.
$string['page'] = 'Page layout';
$string['page_desc'] = 'Sets a maximum width of the page for large screens.';

// Dashboard layout.
$string['dashboard'] = 'Dashboard layout';
$string['dashboard_desc'] = 'Adjust the layout of the dashboard.';

// Front page layout.
$string['frontpage'] = 'Front page layout';
$string['frontpage_desc'] = 'Adjust the layout of the front page.';

// Various styles.
$string['various'] = 'Various styles';
$string['various_desc'] = 'Adjust various styles.';

// Background layout.
$string['background'] = 'Background color';
$string['background_desc'] = 'Adds a color to the background.';
$string['flexbackground'] = 'Background color';
$string['flexbackground_desc'] = 'Sets a background color, if background layout is activated.';

// Course format.
// Format topics layout.
$string['format_topics'] = 'Course format topics';
$string['format_topics_desc'] = 'Style the course format Topics.';

// Mod activities.
// Quiz layout.
$string['quiz'] = 'Quiz layout';
$string['quiz_desc'] = 'Choose from the following quiz layouts.';
$string['quiz2'] = 'Advanced';
$string['quiz3'] = 'Advanced + Grayscale';
$string['quiz4'] = 'Advanced + Colored';

// Wiki layout.
$string['wiki'] = 'Wiki layout';
$string['wiki_desc'] = 'Adjust the layout of the wiki.';

// Workshop layout.
$string['workshop'] = 'Workshop layout';
$string['workshop_desc'] = 'Style the userplan in the workshop activity.';

// Print layout.
$string['print'] = 'Print version';
$string['print_desc'] = 'Print version must be added last.';

// Experimental.
// Atto fix.
$string['atto'] = 'Atto fix';
$string['atto_desc'] = 'This fixes an error in the Atto editor that adds unwanted font-sizes.';