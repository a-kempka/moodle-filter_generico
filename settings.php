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
 * @package    filter
 * @subpackage generico
 * @copyright  2014 Justin Hunt <poodllsupport@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

/*

    $settings->add(new admin_setting_configmulticheckbox('filter_generico/formats',
            get_string('settingformats', 'filter_generico'),
            get_string('settingformats_desc', 'filter_generico'),
            array(FORMAT_MOODLE => 1), format_text_menu()));

    $settings->add(new admin_setting_configcheckbox('filter_generico/embedimages',
            get_string('embedimages', 'filter_generico'),
            get_string('embedimages_desc', 'filter_generico'),
            1));
*/
	
	for($tindex=1;$tindex<11;$tindex++){
		//heading of template
		$settings->add(new admin_setting_heading('filter_generico/templateheading', 
				get_string('templateheading', 'filter_generico') . ' ' . $tindex , ''));
		//template key
		 $settings->add(new admin_setting_configtext('filter_generico/templatekey_' . $tindex , 
				get_string('templatekey', 'filter_generico') . ' ' . $tindex,
				get_string('templatekey_desc', 'filter_generico'), 
				 '', PARAM_ALPHANUMEXT));
		//template body
		 $settings->add(new admin_setting_configtextarea('filter_generico/template_' . $tindex,
					get_string('template', 'filter_generico') . ' ' . $tindex,
					get_string('template_desc', 'filter_generico'),''));
		//template defaults			
		 $settings->add(new admin_setting_configtextarea('filter_generico/templatedefaults_' . $tindex,
					get_string('templatedefaults', 'filter_generico') . ' ' . $tindex,
					get_string('templatedefaults_desc', 'filter_generico'),''));
	}
}
