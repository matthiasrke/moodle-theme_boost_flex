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
 * Theme Boost Flex settings.
 *
 * @package    theme_boost_flex
 * @copyright  2021 Matthias Reike
 *             2020 Kristian Ringer
 *             2016 Chris Kenniburg
 *             2016 Ryan Wyllie
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingboost_flex', get_string('configtitle', 'theme_boost_flex'));


    // Flex settings.
    $page = new admin_settingpage('theme_boost_flex_flex', get_string('flexsettings', 'theme_boost_flex'));

    // Styles.
    // Flex style info.
    $name = 'theme_boost_flex/styleinfo';
    $heading = get_string('styleinfo', 'theme_boost_flex');
    $information = get_string('styleinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Font size.
    $name = 'theme_boost_flex/fonts';
    $title = get_string('fonts', 'theme_boost_flex');
    $description = get_string('fonts_desc', 'theme_boost_flex');
    $fonts1 = get_string('no', 'theme_boost_flex');
    $fonts2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $fonts1, '2' => $fonts2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Icon size.
    $name = 'theme_boost_flex/icons';
    $title = get_string('icons', 'theme_boost_flex');
    $description = get_string('icons_desc', 'theme_boost_flex');
    $icons1 = get_string('no', 'theme_boost_flex');
    $icons2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $icons1, '2' => $icons2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Buttons.
    $name = 'theme_boost_flex/buttons';
    $title = get_string('buttons', 'theme_boost_flex');
    $description = get_string('buttons_desc', 'theme_boost_flex');
    $buttons1 = get_string('default', 'theme_boost_flex');
    $buttons2 = get_string('buttons2', 'theme_boost_flex');
    $buttons3 = get_string('buttons3', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $buttons1, '2' => $buttons2, '3' => $buttons3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Image layout.
    $name = 'theme_boost_flex/images';
    $title = get_string('images', 'theme_boost_flex');
    $description = get_string('images_desc', 'theme_boost_flex');
    $images1 = get_string('no', 'theme_boost_flex');
    $images2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $images1, '2' => $images2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Page layout.
    $name = 'theme_boost_flex/page';
    $title = get_string('page', 'theme_boost_flex');
    $description = get_string('page_desc', 'theme_boost_flex');
    $page1 = get_string('no', 'theme_boost_flex');
    $page2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $page1, '2' => $page2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Dashboard layout.
    $name = 'theme_boost_flex/dashboard';
    $title = get_string('dashboard', 'theme_boost_flex');
    $description = get_string('dashboard_desc', 'theme_boost_flex');
    $dashboard1 = get_string('no', 'theme_boost_flex');
    $dashboard2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $dashboard1, '2' => $dashboard2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Front page layout.
    $name = 'theme_boost_flex/frontpage';
    $title = get_string('frontpage', 'theme_boost_flex');
    $description = get_string('frontpage_desc', 'theme_boost_flex');
    $frontpage1 = get_string('no', 'theme_boost_flex');
    $frontpage2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $frontpage1, '2' => $frontpage2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Various styles.
    $name = 'theme_boost_flex/various';
    $title = get_string('various', 'theme_boost_flex');
    $description = get_string('various_desc', 'theme_boost_flex');
    $various1 = get_string('no', 'theme_boost_flex');
    $various2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $various1, '2' => $various2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Background color.
    $name = 'theme_boost_flex/background';
    $title = get_string('background', 'theme_boost_flex');
    $description = get_string('background_desc', 'theme_boost_flex');
    $background1 = get_string('default', 'theme_boost_flex');
    $background2 = get_string('background2', 'theme_boost_flex');
    $background3 = get_string('background3', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $background1, '2' => $background2, '3' => $background3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable flexbackground.
    $name = 'theme_boost_flex/flexbackground';
    $title = get_string('flexbackground', 'theme_boost_flex');
    $description = get_string('flexbackground_desc', 'theme_boost_flex');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Course format.
    // Flex course info.
    $name = 'theme_boost_flex/courseinfo';
    $heading = get_string('courseinfo', 'theme_boost_flex');
    $information = get_string('courseinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Format topics layout.
    $name = 'theme_boost_flex/format_topics';
    $title = get_string('format_topics', 'theme_boost_flex');
    $description = get_string('format_topics_desc', 'theme_boost_flex');
    $format_topics1 = get_string('no', 'theme_boost_flex');
    $format_topics2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $format_topics1, '2' => $format_topics2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Mod activies.
    // Flex mod info.
    $name = 'theme_boost_flex/modinfo';
    $heading = get_string('modinfo', 'theme_boost_flex');
    $information = get_string('modinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Folder layout.
    $name = 'theme_boost_flex/folder';
    $title = get_string('folder', 'theme_boost_flex');
    $description = get_string('folder_desc', 'theme_boost_flex');
    $folder1 = get_string('no', 'theme_boost_flex');
    $folder2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $folder1, '2' => $folder2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Quiz layout.
    $name = 'theme_boost_flex/quiz';
    $title = get_string('quiz', 'theme_boost_flex');
    $description = get_string('quiz_desc', 'theme_boost_flex');
    $quiz1 = get_string('default', 'theme_boost_flex');
    $quiz2 = get_string('quiz2', 'theme_boost_flex');
    $quiz3 = get_string('quiz3', 'theme_boost_flex');
    $quiz4 = get_string('quiz4', 'theme_boost_flex');
    $default = '3';
    $choices = array('1' => $quiz1, '2' => $quiz2, '3' => $quiz3, '4' => $quiz4);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Workshop layout.
    $name = 'theme_boost_flex/workshop';
    $title = get_string('workshop', 'theme_boost_flex');
    $description = get_string('workshop_desc', 'theme_boost_flex');
    $workshop1 = get_string('no', 'theme_boost_flex');
    $workshop2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $workshop1, '2' => $workshop2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Print.
    // Flex print info.
    $name = 'theme_boost_flex/printinfo';
    $heading = get_string('printinfo', 'theme_boost_flex');
    $information = get_string('printinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Print layout.
    $name = 'theme_boost_flex/print';
    $title = get_string('print', 'theme_boost_flex');
    $description = get_string('print_desc', 'theme_boost_flex');
    $print1 = get_string('no', 'theme_boost_flex');
    $print2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $background1, '2' => $background2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Experimental.
    // Flex experimental info.
    $name = 'theme_boost_flex/experimentalinfo';
    $heading = get_string('experimentalinfo', 'theme_boost_flex');
    $information = get_string('experimentalinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Atto editor fix.
    $name = 'theme_boost_flex/atto';
    $title = get_string('atto', 'theme_boost_flex');
    $description = get_string('atto_desc', 'theme_boost_flex');
    $atto1 = get_string('no', 'theme_boost_flex');
    $atto2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $atto1, '2' => $atto2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Dark mode.
    $name = 'theme_boost_flex/dark';
    $title = get_string('dark', 'theme_boost_flex');
    $description = get_string('dark_desc', 'theme_boost_flex');
    $dark1 = get_string('default', 'theme_boost_flex');
    $dark2 = get_string('dark2', 'theme_boost_flex');
    $default = '1';
    $choices = array('1' => $dark1, '2' => $dark2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    // Boost general.
    // Each page is a tab - the first is the "General" tab.
    $page = new admin_settingpage('theme_boost_flex_general', get_string('generalsettings', 'theme_boost'));

    // Replicate the preset setting from boost.
    $name = 'theme_boost_flex/preset';
    $title = get_string('preset', 'theme_boost');
    $description = get_string('preset_desc', 'theme_boost');
    $default = 'boost_flex.scss';

    // We list files in our own file area to add to the drop down. We will provide our own function to
    // load all the presets from the correct paths.
    $context = context_system::instance();
    $fs = get_file_storage();
    $files = $fs->get_area_files($context->id, 'theme_boost_flex', 'preset', 0, 'itemid, filepath, filename', false);

    $choices = [];
    foreach ($files as $file) {
        $choices[$file->get_filename()] = $file->get_filename();
    }
    // These are the built in presets from Boost.
    $choices['boost_flex.scss'] = 'boost_flex.scss';
    $choices['default.scss'] = 'default.scss';
    $choices['plain.scss'] = 'plain.scss';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Preset files setting.
    $name = 'theme_boost_flex/presetfiles';
    $title = get_string('presetfiles', 'theme_boost');
    $description = get_string('presetfiles_desc', 'theme_boost');

    $setting = new admin_setting_configstoredfile(
        $name,
        $title,
        $description,
        'preset',
        0,
        array('maxfiles' => 20, 'accepted_types' => array('.scss'))
    );
    $page->add($setting);

    // Background image setting.
    $name = 'theme_boost_flex/backgroundimage';
    $title = get_string('backgroundimage', 'theme_boost');
    $description = get_string('backgroundimage_desc', 'theme_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Login Background image setting.
    $name = 'theme_boost_flex/loginbackgroundimage';
    $title = get_string('loginbackgroundimage', 'theme_boost');
    $description = get_string('loginbackgroundimage_desc', 'theme_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brand-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_boost_flex/brandcolor';
    $title = get_string('brandcolor', 'theme_boost');
    $description = get_string('brandcolor_desc', 'theme_boost');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Must add the page after definiting all the settings!
    $settings->add($page);

    // Boost advanced.
    // Advanced settings.
    $page = new admin_settingpage('theme_boost_flex_advanced', get_string('advancedsettings', 'theme_boost'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_configtextarea(
        'theme_boost_flex/scsspre',
        get_string('rawscsspre', 'theme_boost'),
        get_string('rawscsspre_desc', 'theme_boost'),
        '',
        PARAM_RAW
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_configtextarea(
        'theme_boost_flex/scss',
        get_string('rawscss', 'theme_boost'),
        get_string('rawscss_desc', 'theme_boost'),
        '',
        PARAM_RAW
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);
}
