Answer|||$this->Answer = ClassRegistry::init('Answer');|||[I] AppController.p|||v
AppController|||AppController extends Controller { <class>|||[I] AppController.p|||c
Catalog|||$this->Catalog = ClassRegistry::init('Catalog');|||[I] AppController.p|||v
Recipe|||$this->Recipe = ClassRegistry::init('Recipe');|||[I] AppController.p|||v
__setCommunityUsers|||private function __setCommunityUsers() {|||[I] AppController.p|||f
activeMenu|||public $activeMenu = array();|||[I] AppController.p|||v
beforeFilter|||public function beforeFilter() {|||[I] AppController.p|||f
beforeRender|||public function beforeRender() {|||[I] AppController.p|||f
bodyClass|||$this->bodyClass = $this->action;|||[I] AppController.p|||v
bodyId|||$this->bodyId = $this->action;|||[I] AppController.p|||v
breadcrumbs|||public $breadcrumbs = array();|||[I] AppController.p|||v
community|||$community = $this->CommunityUser->findByUserId($this->currentUser['id']);|||[I] AppController.p|||v
components|||public $components = array(|||[I] AppController.p|||v
helpers|||public $helpers = array(|||[I] AppController.p|||v
paginate|||public function paginate($object = null, $scope = array(), $whitelist = array()) {|||[I] AppController.p|||f
setSidebarRanking|||public function setSidebarRanking() {|||[I] AppController.p|||f
uses|||public $uses = array('User', 'Company', 'Judge', 'CommunityUser');|||[I] AppController.p|||v
