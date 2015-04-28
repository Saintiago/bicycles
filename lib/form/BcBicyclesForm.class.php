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
    
    
