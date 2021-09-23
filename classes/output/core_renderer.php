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

defined('MOODLE_INTERNAL') || die;

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_boost_flex
 * @copyright  2016 Gareth J Barnard
 *             2012 Bas Brands, www.basbrands.nl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class theme_boost_flex_core_renderer extends \theme_boost\output\core_renderer
{

    /**
     * Returns HTML to display a "Turn editing on/off" button in a form.
     *
     * @param moodle_url $url The URL + params to send through when clicking the button
     * @return string HTML the button
     * Written by G J Barnard
     */

    public function edit_button(moodle_url $url)
    {
        // Setting must be checked to call this function.
        if ($this->page->theme->settings->edit_button == 1) {
            $url->param('sesskey', sesskey());
            if ($this->page->user_is_editing()) {
                $url->param('edit', 'off');
                $btn = 'btn-danger';
                $title = get_string('turneditingoff');
                $icon = 'fa-power-off';
            } else {
                $url->param('edit', 'on');
                $btn = 'btn-success';
                $title = get_string('turneditingon');
                $icon = 'fa-edit';
            }
            return html_writer::tag('a', html_writer::start_tag('i', array('class' => $icon . ' icon fa fa-fw mr-0')) .
                html_writer::end_tag('i'), array('href' => $url, 'class' => 'btn btn-edit ' . $btn, 'title' => $title));
        }
        // Else the default function will be called (copied from boost theme).
        else {
            $url->param('sesskey', sesskey());
            if ($this->page->user_is_editing()) {
                $url->param('edit', 'off');
                $editstring = get_string('turneditingoff');
            } else {
                $url->param('edit', 'on');
                $editstring = get_string('turneditingon');
            }
            $button = new \single_button($url, $editstring, 'post', ['class' => 'btn btn-primary']);
            return $this->render_single_button($button);
        }
    }

    /**
     * Creats a URL to the admin settings only visible to admins
     *
     * @return string HTML to display in the navbar.
     */
    public function adminsettings_url()
    {
        if (is_siteadmin() && $this->page->theme->settings->adminsettings_url == 1) {
            $url = new moodle_url('/admin/search.php');
            return $url;
        }
    }

    /**
     * Creats a URL to the course settings only visible to teachers
     *
     * @return string HTML to display in the navbar.
     */
    public function coursesettings_url()
    {
        $course = $this->page->course;
        $context = context_course::instance($course->id);
        if (has_capability('moodle/course:viewhiddenactivities', $context) && $course->id != 1 && $this->page->theme->settings->coursesettings_url == 1) {
            $url = new \moodle_url('/course/admin.php', array('courseid' => $this->page->course->id));
            return $url;
        }
    }

    /**
     * Display if block drawer is activated.
     *
     * @return string HTML to display in the block section.
     */
    public function hasblockdrawer()
    {
        if ($this->page->theme->settings->hasblockdrawer == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Display bottom navigation.
     *
     * @return string HTML to display in the footer.
     */
    public function hasbottomnavigation()
    {
        if ($this->page->theme->settings->hasbottomnavigation == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Display floating action button in assign.
     *
     * @return string HTML to display in the footer.
     */
    public function assign_addentry_url()
    {
        if ($this->page->url->compare(new moodle_url('/mod/assign/view.php'), URL_MATCH_BASE) && $this->page->theme->settings->floatingactionbutton == 1) {
            $id = optional_param('id', 0, PARAM_INT);
            $cm = get_coursemodule_from_id('assign', $id);
            $context = context_module::instance($cm->id);
            $param = '&action=editsubmission';
            if (has_capability('mod/assign:submit', $context)) {
                $url = new \moodle_url('/mod/assign/view.php', ['id' => $cm->id]);
                return $url;
            }
        }
    }

    /**
     * Display floating action button in glossary.
     *
     * @return string HTML to display in the footer.
     */
    public function glossary_addentry_url()
    {
        if ($this->page->url->compare(new moodle_url('/mod/glossary/view.php'), URL_MATCH_BASE) && $this->page->theme->settings->floatingactionbutton == 1) {
            $id = optional_param('id', 0, PARAM_INT);
            $cm = get_coursemodule_from_id('glossary', $id);
            $context = context_module::instance($cm->id);
            if (has_capability('mod/glossary:write', $context)) {
                $url = new \moodle_url('/mod/glossary/edit.php', ['cmid' => $cm->id]);
                return $url;
            }
        }
    }
     
    /**
     * Display floating action button in database.
     *
     * @return string HTML to display in the footer.
     */
    public function data_addentry_url()
    {
        global $DB;
        $id = optional_param('id', 0, PARAM_INT);
        $d = optional_param('d', 0, PARAM_INT);
        $cm = get_coursemodule_from_id('data', $id);
        if ($this->page->url->compare(new moodle_url('/mod/data/view.php'), URL_MATCH_BASE) && $this->page->theme->settings->floatingactionbutton == 1) {
            $context = context_module::instance($this->page->cm->id);
            if (has_capability('mod/data:writeentry', $context)) {
                if ($id) {
                    $data = $DB->get_record('data', array('id' => $cm->instance));
                } else {
                    $data = $DB->get_record('data', array('id' => $d));
                }
                $url = new \moodle_url('/mod/data/edit.php', ['d' => $data->id]);
                return $url;
            }
        }
    }
}
