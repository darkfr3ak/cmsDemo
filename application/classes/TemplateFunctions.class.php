<?php

/*
 * Copyright (C) 2014 darkfr3ak <info at darkfr3ak.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * Description of TemplateFunctions
 *
 * @author darkfr3ak <info at darkfr3ak.de>
 */
class TemplateFunctions extends Base {

    private $templateName = 'default'; //by default template would be "default" template
    private $widgetPositions = array(); //array which holds widget positions and widget names 

    function show() {
        require_once($this->getCurrentTemplatePath() . 'index.php');
    }

    public function getCurrentTemplatePath() {
        return 'extensions/themes/' . $this->templateName . '/';
    }

    //this will set template which we want to use    
    public function setTemplate($templateName) {
        $this->templateName = $templateName;
    }

    public function appOutput() {
        $appname = (isset($_REQUEST['app'])) ? $_REQUEST['app'] : 'Core';
        require_once('extensions/modules/' . strtolower($appname) . '/' . $appname . '.application.php');
        $application = $appname . 'Application';
        $app = new $application();
        $app->run();
    }

    public function widgetOutput($position = "default") {
        if (!empty($this->widgetPositions[$position])) {
            //if there is any widget present at given position
            $widgets = $this->widgetPositions[$position]; //gets all widgets in given position
            foreach ($widgets as $widgetObject) {
                //display each widget
                $widgetName = $widgetObject->name;
                $widgetParameters = $widgetObject->parameters;
                require_once('extensions/widgets/' . strtolower($widgetName) . '/' . $widgetName . '.widget.php');
                $widgetclass = $widgetName . 'Widget';
                $widget = new $widgetclass();
                $widget->run($widgetName, $widgetParameters);
            }
        }
    }

    function setWidget($position, $widgetName, $params = array()) {
        $widget = new StdClass;
        $widget->name = $widgetName;
        $widget->parameters = $params;
        //if there is no widget in position then create a new array
        if (empty($this->widgetPositions[$position])) {
            $this->widgetPositions[$position] = array($widget);
        } else {
            //if there is already a widget present in that position then just push new widget in array
            array_push($this->widgetPositions[$position], $widget);
        }
    }

}
