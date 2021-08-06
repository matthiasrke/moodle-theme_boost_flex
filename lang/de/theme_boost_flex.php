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
$string['brandcolor'] = 'Markenfarbe';
// The brand colour setting description.
$string['brandcolor_desc'] = 'The accent colour.';
// Name of the settings pages.
$string['configtitle'] = 'Boost Flex settings';
// Name of the first settings tab.
$string['generalsettings'] = 'General settings';
// Preset files setting.
$string['presetfiles'] = 'Additional theme preset files';
// Preset files help text.
$string['presetfiles_desc'] = 'Voreinstellungsdateien können verwendet werden, um das Erscheinungsbild des Themes drastisch zu verändern. Unter <a href=https://docs.moodle.org/dev/Boost_Presets>Voreinstellungen verstärken</a> finden Sie Informationen zum Erstellen und Freigeben Ihrer eigenen Voreinstellungsdateien und im <a href=http://moodle.net/boost>Voreinstellungs-Repository</a> finden Sie Voreinstellungen, die andere freigegeben haben.';
// Preset setting.
$string['preset'] = 'Theme preset';
// Preset help text.
$string['preset_desc'] = 'Wählen Sie eine Voreinstellung, um das Aussehen des Themes weitgehend zu ändern.';
// Raw SCSS setting.
$string['rawscss'] = 'Raw SCSS';
// Raw SCSS setting help text.
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
// Raw initial SCSS setting.
$string['rawscsspre'] = 'Raw initial SCSS';
// Raw initial SCSS setting help text.
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
