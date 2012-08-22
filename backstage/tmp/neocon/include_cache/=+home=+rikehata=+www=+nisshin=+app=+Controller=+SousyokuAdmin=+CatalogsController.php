CatalogsController|||CatalogsController extends AppController { <class>|||[I] CatalogsControl|||c
_mailData|||protected function _mailData($id = null) {|||[I] CatalogsControl|||f
_setKeyValueData|||protected function _setKeyValueData() {|||[I] CatalogsControl|||f
accept|||public function accept($id){|||[I] CatalogsControl|||f
acceptDelete|||public function acceptDelete($id){|||[I] CatalogsControl|||f
beforeFilter|||public function beforeFilter() {|||[I] CatalogsControl|||f
bodyClass|||$this->bodyClass = 'catalog';|||[I] CatalogsControl|||v
bodyId|||$this->bodyId = 'regist';|||[I] CatalogsControl|||v
companyDate|||$companyDate = $this->Company->findById($result['Catalog']['company_id']);|||[I] CatalogsControl|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] CatalogsControl|||v
confirm|||public function confirm() {|||[I] CatalogsControl|||f
delete|||public function delete($id = null) {|||[I] CatalogsControl|||f
helpers|||public $helpers = array('Upload');|||[I] CatalogsControl|||v
index|||public function index() {|||[I] CatalogsControl|||f
input|||public function input($id = null) {|||[I] CatalogsControl|||f
isAuthorized|||public function isAuthorized($user) {|||[I] CatalogsControl|||f
paginate|||$this->paginate = $this->Catalog->makeSearchConditionsForAdmin($this->request->query, $this->Judge);|||[I] CatalogsControl|||v
requestDelete|||public function requestDelete($id){|||[I] CatalogsControl|||f
result|||$result = $this->Catalog->makeResult($result, $this->Judge, $this->currentUser);|||[I] CatalogsControl|||v
startInput|||public function startInput($id = null) {|||[I] CatalogsControl|||f
unauthorizedAction|||$unauthorizedAction = array('accept', 'delete');|||[I] CatalogsControl|||v
update|||public function update() {|||[I] CatalogsControl|||f
uses|||public $uses = array('Catalog', 'Recipe', 'CatalogDetail', 'CatalogsTag', 'Tag', 'Company', 'Business', 'CatalogCategory', 'Department', 'CatalogsDepartment');|||[I] CatalogsControl|||v
validation|||public function validation() {|||[I] CatalogsControl|||f
