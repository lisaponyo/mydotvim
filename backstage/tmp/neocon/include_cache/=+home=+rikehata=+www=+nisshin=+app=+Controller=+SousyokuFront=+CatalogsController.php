CatalogsController|||CatalogsController extends AppController { <class>|||[I] CatalogsControl|||c
__detail|||private function __detail($id) {|||[I] CatalogsControl|||f
_setKeyValueData|||protected function _setKeyValueData() {|||[I] CatalogsControl|||f
beforeFilter|||public function beforeFilter() {|||[I] CatalogsControl|||f
bodyClass|||$this->bodyClass = 'catalog';|||[I] CatalogsControl|||v
bodyId|||$this->bodyId = 'detail';|||[I] CatalogsControl|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] CatalogsControl|||v
catalog|||$catalog = $this->Catalog->findById($id);|||[I] CatalogsControl|||v
catalogData|||$catalogData = $this->Catalog->findById($result['Catalog']['id']);|||[I] CatalogsControl|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] CatalogsControl|||v
data|||$data = $this->Catalog->findById($id);|||[I] CatalogsControl|||v
detail|||public function detail($id) {|||[I] CatalogsControl|||f
download|||public function download($id, $file) {|||[I] CatalogsControl|||f
favorite|||public function favorite($catalog_id) {|||[I] CatalogsControl|||f
helpers|||public $helpers = array('Upload', 'Utils');|||[I] CatalogsControl|||v
index|||public function index() {|||[I] CatalogsControl|||f
isAuthorized|||public function isAuthorized($user) {|||[I] CatalogsControl|||f
mailInput|||public function mailInput($id = null) {|||[I] CatalogsControl|||f
mailSend|||public function mailSend() {|||[I] CatalogsControl|||f
name|||$name = preg_replace("/\.pdf$/", "", $data['Catalog'][$file]);|||[I] CatalogsControl|||v
paginate|||$this->paginate = $tmp;|||[I] CatalogsControl|||v
params|||$params = array(|||[I] CatalogsControl|||v
preview|||public function preview() {|||[I] CatalogsControl|||f
printView|||public function printView($id) {|||[I] CatalogsControl|||f
result|||$result = $this->CatalogCategory->findById($this->request->data['Catalog']['catalog_category_id']);|||[I] CatalogsControl|||v
unauthorizedAction|||$unauthorizedAction = array('printView');|||[I] CatalogsControl|||v
uses|||public $uses = array('Catalog', 'CatalogCategory', 'CatalogDetail', 'CatalogsTag', 'CatalogsUser', 'Tag', 'Company', 'Business', 'RecipesCatalog', 'Recipe', 'Answer');|||[I] CatalogsControl|||v
viewClass|||$this->viewClass = 'Media';|||[I] CatalogsControl|||v
