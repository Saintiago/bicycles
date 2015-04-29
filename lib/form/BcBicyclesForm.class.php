<?php

    /**
     * BcBicycles form.
     *
     * @package    jobeet
     * @subpackage form
     * @author     Your name here
     */
    class BcBicyclesForm extends BaseBcBicyclesForm
    {
        public function configure()
          {
            $this->useFields(array('name', 'year', 'frame', 'speeds', 'brakes', 'application'));
          }

    }
    
    class SearchForm extends BaseForm
    {
        public function configure()
        {
            $this->setWidgets(array(
                'query' => new sfWidgetFormInputText()
            ));
        }
    }
    
    
