<?php /**
 * bicycles actions.
 *
 * @package    jobeet
 * @subpackage bicycles
 * @author     Your name here
 */
class bicyclesActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->searchForm = new searchForm();
        $this->pager = new sfPropelPager('BcBicycles', sfConfig::get('app_max_bicycles_on_page'));
        $this->curSort = $request->getParameter("sort");
        $this->pageLinkParam = BcBicyclesPeer::GetLinkParam(array("sort" => $this->curSort));
        $this->sortLinkParam = BcBicyclesPeer::GetLinkParam(array("page" => $request->getParameter('page')));
        
        $criteria = new Criteria;
        BcBicyclesPeer::AddSortCriteria($this->curSort, $criteria);
        
        $this->pager->setCriteria($criteria);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }

    public function executeSearch(sfWebRequest $request)
    {
        $this->curSort = $request->getParameter("sort");
        $this->searchQuery = $request->getParameter("query");
        $this->searchForm = new searchForm();
        $this->searchForm->setDefault("query", $this->searchQuery);
        $this->pager = new sfPropelPager('BcBicycles', sfConfig::get('app_max_bicycles_on_page'));
        $this->pageLinkParam = UrlUtil::GetLinkParam(array("sort" => $this->curSort, "query" => $this->searchQuery));
        $this->sortLinkParam = UrlUtil::GetLinkParam(array("page" => $request->getParameter('page'), "query" => $this->searchQuery));
        
        $criteria = new Criteria;
        BcBicyclesPeer::AddSortCriteria($this->curSort, $criteria);
        BcBicyclesPeer::AddSearchCriteria($this->searchQuery, $criteria);
        
        $this->pager->setCriteria($criteria);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->setTemplate('index');
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->BcBicycles = BcBicyclesPeer::retrieveByPk($request->getParameter('id'));
        $this->forward404Unless($this->BcBicycles);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new BcBicyclesForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new BcBicyclesForm();
        
        $this->message = array("class" => "danger", "text" => BcBicyclesPeer::MESS_NEW_ERROR);
        if ($this->processForm($request, $this->form))
        {
            $this->message = array("class" => "success", "text" => BcBicyclesPeer::MESS_NEW_SUCCESS);
        }
        
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($BcBicycles = BcBicyclesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object BcBicycles does not exist (%s).', $request->getParameter('id')));
        $this->form = new BcBicyclesForm($BcBicycles);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($BcBicycles = BcBicyclesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object BcBicycles does not exist (%s).', $request->getParameter('id')));
        $this->form = new BcBicyclesForm($BcBicycles);

        $this->message = array("class" => "danger", "text" => BcBicyclesPeer::MESS_EDIT_ERROR);
        if ($this->processForm($request, $this->form))
        {
            $this->message = array("class" => "success", "text" => BcBicyclesPeer::MESS_EDIT_SUCCESS);
        }
        
        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($BcBicycles = BcBicyclesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object BcBicycles does not exist (%s).', $request->getParameter('id')));
        $BcBicycles->delete();

        $this->redirect('bicycles/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
            $BcBicycles = $form->save();

            //$this->redirect('bicycles/edit?id=' . $BcBicycles->getId());
            
            return true;
        }
        return false;
    }

}
