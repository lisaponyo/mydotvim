AntagonismsController|||AntagonismsController extends AppController { <class>|||[I] AntagonismsCont|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] AntagonismsCont|||f
beforeFilter|||public function beforeFilter() {|||[I] AntagonismsCont|||f
bodyClass|||$this->bodyClass = 'rival';|||[I] AntagonismsCont|||v
bodyId|||$this->bodyId = 'index';|||[I] AntagonismsCont|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] AntagonismsCont|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] AntagonismsCont|||v
helpers|||public $helpers = array('Upload');|||[I] AntagonismsCont|||v
index|||public function index() {|||[I] AntagonismsCont|||f
isAuthorized|||public function isAuthorized($user) {|||[I] AntagonismsCont|||f
paginate|||$this->paginate = $this->Antagonism->makeSearchConditions($this->request->query, $this->action);|||[I] AntagonismsCont|||v
uses|||public $uses = array('Antagonism', 'Catalog', 'AntagonismUse', 'AntagonismsCatalog', 'Competitor', 'CatalogCategory', 'CatalogDetail', 'CatalogsTag', 'Company');|||[I] AntagonismsCont|||v
