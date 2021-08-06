<?php

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingboost_flex', get_string('configtitle', 'theme_boost_flex'));

    // Each page is a tab - the first is the "General" tab.
    $page = new admin_settingpage('theme_boost_flex_general', get_string('generalsettings', 'theme_boost_flex'));

    // Replicate the preset setting from boost.
    $name = 'theme_boost_flex/preset';
    $title = get_string('preset', 'theme_boost_flex');
    $description = get_string('preset_desc', 'theme_boost_flex');
    $default = 'default.scss';

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
    $choices['default.scss'] = 'default.scss';
    $choices['plain.scss'] = 'plain.scss';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Preset files setting.
    $name = 'theme_boost_flex/presetfiles';
    $title = get_string('presetfiles','theme_boost_flex');
    $description = get_string('presetfiles_desc', 'theme_boost_flex');

    $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
        array('maxfiles' => 20, 'accepted_types' => array('.scss')));
    $page->add($setting);

    // Variable $brand-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_boost_flex/brandcolor';
    $title = get_string('brandcolor', 'theme_boost_flex');
    $description = get_string('brandcolor_desc', 'theme_boost_flex');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Must add the page after definiting all the settings!
    $settings->add($page);

    // Advanced settings.
    $page = new admin_settingpage('theme_boost_flex_advanced', get_string('advancedsettings', 'theme_boost_flex'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_configtextarea('theme_boost_flex/scsspre',
                                                get_string('rawscsspre', 'theme_boost_flex'), get_string('rawscsspre_desc', 'theme_boost_flex'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_configtextarea('theme_boost_flex/scss', get_string('rawscss', 'theme_boost_flex'),
                                                get_string('rawscss_desc', 'theme_boost_flex'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    // Flex settings.
    $page = new admin_settingpage('theme_boost_flex_flex', get_string('flexsettings', 'theme_boost_flex'));

    // Flex style info.
    $name = 'theme_boost_flex/styleinfo';
    $heading = get_string('styleinfo', 'theme_boost_flex');
    $information = get_string('styleinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Toggle Atto editor fix.
    $name = 'theme_boost_flex/attofix';
    $title = get_string('attofix' , 'theme_boost_flex');
    $description = get_string('attofix_desc', 'theme_boost_flex');
    $attofix1 = get_string('attofix1', 'theme_boost_flex');
    $attofix2 = get_string('attofix2', 'theme_boost_flex');
    $default = '1';
    $choices = array('1'=>$attofix1, '2'=>$attofix2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Toggle Image layout.
    $name = 'theme_boost_flex/imagelayout';
    $title = get_string('imagelayout' , 'theme_boost_flex');
    $description = get_string('imagelayout_desc', 'theme_boost_flex');
    $imagelayout1 = get_string('imagelayout1', 'theme_boost_flex');
    $imagelayout2 = get_string('imagelayout2', 'theme_boost_flex');
    $default = '1';
    $choices = array('1'=>$imagelayout1, '2'=>$imagelayout2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Toggle Page layout.
    $name = 'theme_boost_flex/pagelayout';
    $title = get_string('pagelayout' , 'theme_boost_flex');
    $description = get_string('pagelayout_desc', 'theme_boost_flex');
    $pagelayout1 = get_string('pagelayout1', 'theme_boost_flex');
    $pagelayout2 = get_string('pagelayout2', 'theme_boost_flex');
    $default = '1';
    $choices = array('1'=>$pagelayout1, '2'=>$pagelayout2);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Toggle Quiz layout design.
    $name = 'theme_boost_flex/quizlayout';
    $title = get_string('quizlayout' , 'theme_boost_flex');
    $description = get_string('quizlayout_desc', 'theme_boost_flex');
    $quizlayout1 = get_string('quizlayout1', 'theme_boost_flex');
    $quizlayout2 = get_string('quizlayout2', 'theme_boost_flex');
    $quizlayout3 = get_string('quizlayout3', 'theme_boost_flex');
    $quizlayout4 = get_string('quizlayout4', 'theme_boost_flex');
    $default = '1';
    $choices = array('1'=>$quizlayout1, '2'=>$quizlayout2, '3'=>$quizlayout3, '4'=>$quizlayout4);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Flex advanced info.
    $name = 'theme_boost_flex/advancedinfo';
    $heading = get_string('advancedinfo', 'theme_boost_flex');
    $information = get_string('advancedinfo_desc', 'theme_boost_flex');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Toggle for Turn editing on button changing colors.
    $name = 'theme_boost_flex/enhancededitbutton';
    $title = get_string('enhancededitbutton', 'theme_boost_flex');
    $description = get_string('enhancededitbutton_desc', 'theme_boost_flex');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Toggle for enhanced course format Topics.
    $name = 'theme_boost_flex/enhancedformattopics';
    $title = get_string('enhancedformattopics', 'theme_boost_flex');
    $description = get_string('enhancedformattopics_desc', 'theme_boost_flex');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $flexbackground.
    $name = 'theme_boost_flex/flexbackground';
    $title = get_string('flexbackground', 'theme_boost_flex');
    $description = get_string('flexbackground_desc', 'theme_boost_flex');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

}
