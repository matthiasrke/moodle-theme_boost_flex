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
  
    // Boost Flex theme info.
    $name = 'theme_boost_flex/themeinfo';
    $heading = get_string('themeinfo', 'theme_boost_flex');
    $information = get_string('themeinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Content info.
    $name = 'theme_boost_flex/contentinfo';
    $heading = get_string('contentinfo', 'theme_boost_flex');
    $information = get_string('contentinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Fonts.
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

    // Icons.
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

    // Images.
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

    // Layout info.
    $name = 'theme_boost_flex/layoutinfo';
    $heading = get_string('layoutinfo', 'theme_boost_flex');
    $information = get_string('layoutinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Page.
    $name = 'theme_boost_flex/page';
    $title = get_string('page', 'theme_boost_flex');
    $description = get_string('page_desc', 'theme_boost_flex');
    $page1 = get_string('default', 'theme_boost_flex');
    $page2 = get_string('page2', 'theme_boost_flex');
    $page3 = get_string('page3', 'theme_boost_flex');
    $page4 = get_string('page4', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $page1, '2' => $page2, '3' => $page3, '4' => $page4);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Dashboard.
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

    // Front page.
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

    // Message app.
    $name = 'theme_boost_flex/message_app';
    $title = get_string('message_app', 'theme_boost_flex');
    $description = get_string('message_app_desc', 'theme_boost_flex');
    $message_app1 = get_string('no', 'theme_boost_flex');
    $message_app2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $message_app1, '2' => $message_app2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footer.
    $name = 'theme_boost_flex/footer';
    $title = get_string('footer', 'theme_boost_flex');
    $description = get_string('footer_desc', 'theme_boost_flex');
    $footer1 = get_string('no', 'theme_boost_flex');
    $footer2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $footer1, '2' => $footer2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Components info.
    $name = 'theme_boost_flex/componentsinfo';
    $heading = get_string('componentsinfo', 'theme_boost_flex');
    $information = get_string('componentsinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Navigation.
    $name = 'theme_boost_flex/nav';
    $title = get_string('nav', 'theme_boost_flex');
    $description = get_string('nav_desc', 'theme_boost_flex');
    $nav1 = get_string('no', 'theme_boost_flex');
    $nav2 = get_string('yes', 'theme_boost_flex');
    $default = '1';
    $choices = array('1' => $nav1, '2' => $nav2);
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

    // Various info.
    $name = 'theme_boost_flex/variousinfo';
    $heading = get_string('variousinfo', 'theme_boost_flex');
    $information = get_string('variousinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Borders.
    $name = 'theme_boost_flex/borders';
    $title = get_string('borders', 'theme_boost_flex');
    $description = get_string('borders_desc', 'theme_boost_flex');
    $borders1 = get_string('no', 'theme_boost_flex');
    $borders2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $borders1, '2' => $borders2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Shadows.
    $name = 'theme_boost_flex/shadows';
    $title = get_string('shadows', 'theme_boost_flex');
    $description = get_string('shadows_desc', 'theme_boost_flex');
    $shadows1 = get_string('no', 'theme_boost_flex');
    $shadows2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $shadows1, '2' => $shadows2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Additional styles.
    $name = 'theme_boost_flex/additional';
    $title = get_string('additional', 'theme_boost_flex');
    $description = get_string('additional_desc', 'theme_boost_flex');
    $additional1 = get_string('no', 'theme_boost_flex');
    $additional2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $additional1, '2' => $additional2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Background info.
    $name = 'theme_boost_flex/backgroundinfo';
    $heading = get_string('backgroundinfo', 'theme_boost_flex');
    $information = get_string('backgroundinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
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

    // Transparency.
    $name = 'theme_boost_flex/transparency';
    $title = get_string('transparency', 'theme_boost_flex');
    $description = get_string('transparency_desc', 'theme_boost_flex');
    $transparency1 = get_string('no', 'theme_boost_flex');
    $transparency2 = get_string('yes', 'theme_boost_flex');
    $default = '1';
    $choices = array('1' => $transparency1, '2' => $transparency2);
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

    // Course.

    // Course info.
    $name = 'theme_boost_flex/courseinfo';
    $heading = get_string('courseinfo', 'theme_boost_flex');
    $information = get_string('courseinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Modchooser.
    $name = 'theme_boost_flex/modchooser';
    $title = get_string('modchooser', 'theme_boost_flex');
    $description = get_string('modchooser_desc', 'theme_boost_flex');
    $modchooser1 = get_string('no', 'theme_boost_flex');
    $modchooser2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $modchooser1, '2' => $modchooser2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Format topics.
    $name = 'theme_boost_flex/format_topics';
    $title = get_string('format_topics', 'theme_boost_flex');
    $description = get_string('format_topics_desc', 'theme_boost_flex');
    $format_topics1 = get_string('default', 'theme_boost_flex');
    $format_topics2 = get_string('format_topics2', 'theme_boost_flex');
    $format_topics3 = get_string('format_topics3', 'theme_boost_flex');
    $format_topics4 = get_string('format_topics4', 'theme_boost_flex');
    $format_topics5 = get_string('format_topics5', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $format_topics1, '2' => $format_topics2, '3' => $format_topics3, '4' => $format_topics4, '5' => $format_topics5);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Format weeks.
    $name = 'theme_boost_flex/format_weeks';
    $title = get_string('format_weeks', 'theme_boost_flex');
    $description = get_string('format_weeks_desc', 'theme_boost_flex');
    $format_weeks1 = get_string('default', 'theme_boost_flex');
    $format_weeks2 = get_string('format_weeks2', 'theme_boost_flex');
    $format_weeks3 = get_string('format_weeks3', 'theme_boost_flex');
    $format_weeks4 = get_string('format_weeks4', 'theme_boost_flex');
    $format_weeks5 = get_string('format_weeks5', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $format_weeks1, '2' => $format_weeks2, '3' => $format_weeks3, '4' => $format_weeks4, '5' => $format_weeks5);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Mod activies.

    // Mod activies info.
    $name = 'theme_boost_flex/modinfo';
    $heading = get_string('modinfo', 'theme_boost_flex');
    $information = get_string('modinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Folder.
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

    // Quiz.
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

    // Workshop.
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

    // Print info.
    $name = 'theme_boost_flex/printinfo';
    $heading = get_string('printinfo', 'theme_boost_flex');
    $information = get_string('printinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Print version.
    $name = 'theme_boost_flex/print';
    $title = get_string('print', 'theme_boost_flex');
    $description = get_string('print_desc', 'theme_boost_flex');
    $print1 = get_string('no', 'theme_boost_flex');
    $print2 = get_string('yes', 'theme_boost_flex');
    $default = '2';
    $choices = array('1' => $print1, '2' => $print2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Experimental.

    // Experimental info.
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
