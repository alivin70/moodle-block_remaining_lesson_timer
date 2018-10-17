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
 * Block for displaying the elapsed and remaining time in a timed lesson.
 *
 * @package    block_remaining_lesson_timer
 * @copyright  2007 onwards Greg Smith,   {@link http://TomWilsonCounseling.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Greg Smith, Florida
 */
namespace block_remaining_lesson_timer\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * Block for displaying the elapsed and remaining time in a timed lesson.
 * There is no data entry nor storing of data.
 * @copyright  2007 onwards Greg Smith,   {@link http://TomWilsonCounseling.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements
    \core_privacy\local\metadata\null_provider {

    /**
     * This plugin does not store any personal user data.
     */
    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}

