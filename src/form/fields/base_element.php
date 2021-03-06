<?php
/**
 * @package   Tabs and Sliders
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @author    JoomlaWorks - http://www.joomlaworks.net
 * @copyright 2006-2015 JoomlaWorks Ltd. All rights reserved.
 * @copyright 2016-2019 Joomlashack.com. All rights reserved
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 *
 * This file is part of Tabs and Sliders.
 *
 * Tabs and Sliders is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tabs and Sliders is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tabs and Sliders.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('_JEXEC') or die();

jimport('joomla.form.formfield');

class JWElement extends JFormField
{
    public function getInput()
    {
        return $this->fetchElement($this->name, $this->value, $this->element, $this->options['control']);
    }

    public function getLabel()
    {
        if (method_exists($this, 'fetchTooltip')) {
            return $this->fetchTooltip($this->element['label'], $this->description, $this->element, $this->options['control'], $this->element['name'] = '');
        } else {
            return parent::getLabel();
        }
    }

    public function render($layoutId, $data = array())
    {
        return $this->getInput();
    }
}
