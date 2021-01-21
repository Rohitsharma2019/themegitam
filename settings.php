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
 * Settings configuration for admin setting section
 * @package    theme_gitam
 * @copyright  2015 onwards LMSACE Dev Team (http://www.lmsace.com)
 * @author    LMSACE Dev Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if (is_siteadmin()) {
    $settings = new theme_boost_admin_settingspage_tabs('themesettinggitam', get_string('configtitle', 'theme_gitam'));
    $ADMIN->add('themes', new admin_category('theme_gitam', 'gitam'));

    /* Header Settings */
    $temp = new admin_settingpage('theme_gitam_header', get_string('headerheading', 'theme_gitam'));

    // Logo file setting.
    $name = 'theme_gitam/logo';
    $title = get_string('logo', 'theme_gitam');
    $description = get_string('logodesc', 'theme_gitam');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_gitam/customcss';
    $title = get_string('customcss', 'theme_gitam');
    $description = get_string('customcssdesc', 'theme_gitam');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    $settings->add($temp);

  
    /* Footer Settings start */
    $temp = new admin_settingpage('theme_gitam_footer', get_string('footerheading', 'theme_gitam'));

    // Copyright.
    $name = 'theme_gitam/copyright_footer';
    $title = get_string('copyright_footer', 'theme_gitam');
    $description = '';
    $default = get_string('copyright_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    /* Email , Phone No */

    $name = 'theme_gitam/emailid';
    $title = get_string('emailid', 'theme_gitam');
    $description = '';
    $default = get_string('defaultemailid', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_gitam/phoneno';
    $title = get_string('phoneno', 'theme_gitam');
    $description = '';
    $default = get_string('defaultphoneno', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    /* iOS App and Android app Settings */
    $name = 'theme_gitam/iosappurl';
    $title = get_string('iosappurl', 'theme_gitam');
    $description = get_string('iosappurldesc', 'theme_gitam');
    $default = get_string('iosappurl_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_gitam/androidappurl';
    $title = get_string('androidappurl', 'theme_gitam');
    $description = get_string('androidappurldesc', 'theme_gitam');
    $default = get_string('androidappurl_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_gitam/supporturl';
    $title = get_string('supporturl', 'theme_gitam');
    $description = get_string('supporturldesc', 'theme_gitam');
    $default = get_string('supporturl_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    /* Facebook, Pinterest, Twitter, Google+ Settings */
    $name = 'theme_gitam/fburl';
    $title = get_string('fburl', 'theme_gitam');
    $description = get_string('fburldesc', 'theme_gitam');
    $default = get_string('fburl_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_gitam/pinurl';
    $title = get_string('pinurl', 'theme_gitam');
    $description = get_string('pinurldesc', 'theme_gitam');
    $default = get_string('pinurl_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_gitam/twurl';
    $title = get_string('twurl', 'theme_gitam');
    $description = get_string('twurldesc', 'theme_gitam');
    $default = get_string('twurl_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_gitam/gpurl';
    $title = get_string('gpurl', 'theme_gitam');
    $description = get_string('gpurldesc', 'theme_gitam');
    $default = get_string('gpurl_default', 'theme_gitam');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $settings->add($temp);
     /*  Footer Settings end */
}
