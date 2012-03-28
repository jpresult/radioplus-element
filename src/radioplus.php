<?php
/**
* @package   com_zoo
* @author    G. Arends http://www.jpresult.nl
* @copyright Copyright (C) JP Result
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// register ElementOption class
App::getInstance('zoo')->loader->register('ElementOption', 'elements:option/option.php');

/*
    Class: ElementRadioplus
        The radio element plus text input class
*/
class ElementRadioplus extends ElementOption {

    /*
       Function: edit
           Renders the edit form field.

       Returns:
           String - html
    */
    public function edit(){

        // init vars
        $options_from_config = $this->config->get('option', array());
        $default             = $this->config->get('default');

        if (count($options_from_config)) {

            // set default, if item is new
            if ($default != '' && $this->_item != null && $this->_item->id == 0) {
                $this->set('option', array($default));
            }

            $options = array();
            foreach ($options_from_config as $option) {
                $options[] = $this->app->html->_('select.option', $option['value'], $option['name']);
            }

            $option = $this->get('option', array());

            if ($layout = $this->getLayout('edit.php')) {
                return $this->renderLayout($layout, compact('option', 'options'));
            }
        }

        return JText::_("There are no options to choose from.");
    }

    /*
        Function: render
            Renders the element.

       Parameters:
            $params - render parameter

        Returns:
            String - html
    */
    public function render($params = array()) {
        $option  = parent::render();
        $details = $this->get('details');
        return $option.' ('.$details.')';
    }

}