<?php
// This file is part of Moodle - http://vidyamantra.com/
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
 * Authentication key
 *
 * @package    theme_gitam
 * @copyright  2020 vidyamantra.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/gitam/mobileapp.php'));

$PAGE->set_pagelayout('standard');
$PAGE->set_heading(get_string('downloadapp', 'gitam'));

//$url='https://play.google.com/store/apps/details?id=com.vidyamantra.cmoodleapp223';
//echo $url;
/*'<div class="container">
<div class="row">
    <div class="col-md-7 col-lg-7">
        <div class="app_grid">
            <h1 data-ccn="title" class="mt0">Download &amp; Enjoy</h1>
            <p data-ccn="subtitle">Access your courses anywhere, anytime &amp; prepare with practice tests.</p>
            <a data-ccn="app_store_btn_link" class="ccn-app-grid-btn" target="_self" href="https://play.google.com/store/apps/details?id=com.vidyamantra.cmoodleapp223"><button class="apple_btn btn-transparent">
                <span class="icon">
                    <span class="flaticon-apple"></span>
                </span>
                <span data-ccn="app_store_btn_title" class="title">App Store</span>
                <span data-ccn="app_store_btn_subtitle" class="subtitle">Available on the</span>
            </a>
            <a class="ccn-app-grid-btn" target="_self" href="https://play.google.com/store/apps/details?id=com.vidyamantra.cmoodleapp223">
            <button class="play_store_btn btn-transparent">
                <span class="icon">
                    <span class="flaticon-google-play"></span>
                </span>
                <span data-ccn="play_store_btn_title" class="title">Google Play</span>
                <span data-ccn="play_store_btn_subtitle" class="subtitle">Get it on</span>
            </button>
            </a>
        </div>
    </div>
</div>
</div>'*/
echo '<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/ijhofagnokdeoghaohcekchijfeffbjl">';
    echo $OUTPUT->header();
    echo $OUTPUT->box(get_string('message', 'gitam'), "generalbox center clearfix");
    


echo $OUTPUT->footer();