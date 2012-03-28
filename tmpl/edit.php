<?php
/**
* @package   com_zoo
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div>

    <div class="row">
        <?php echo $this->app->html->_('select.radiolist', $options, $this->getControlName('option', true), null, 'value', 'text', (isset($option[0]) ? $option[0] : null)); ?>
    </div>
    <div class="row">
        <?php echo $this->app->html->_('control.text', $this->getControlName('details'), $this->get('details'), 'maxlength="255" title="'.JText::_('Details').'" placeholder="'.JText::_('Details').'"'); ?>
    </div>
</div>