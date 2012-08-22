AntagonismsController|||AntagonismsController extends AppController { <class>|||[I] AntagonismsCont|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] AntagonismsCont|||f
beforeFilter|||public function beforeFilter() {|||[I] AntagonismsCont|||f
bodyClass|||$this->bodyClass = "rival";|||[I] AntagonismsCont|||v
bodyId|||$this->bodyId = "index";|||[I] AntagonismsCont|||v
components|||public $components = array('Search.Prg', 'CsvImport');|||[I] AntagonismsCont|||v
conditions|||$conditions = $this->Antagonism->makeSearchConditions($data);|||[I] AntagonismsCont|||v
confirm|||public function confirm() {|||[I] AntagonismsCont|||f
data|||$data = isset($this->request->query) ? $this->request->query : null;|||[I] AntagonismsCont|||v
delete|||public function delete($id = null) {|||[I] AntagonismsCont|||f
download|||public function download() {|||[I] AntagonismsCont|||f
helpers|||public $helpers = array('Upload', 'Csv');|||[I] AntagonismsCont|||v
index|||public function index() {|||[I] AntagonismsCont|||f
input|||public function input($id = null) {|||[I] AntagonismsCont|||f
isAuthorized|||public function isAuthorized($user) {|||[I] AntagonismsCont|||f
layout|||$this->layout = false;|||[I] AntagonismsCont|||v
paginate|||$this->paginate = $this->Antagonism->makeSearchConditions($this->request->query, $this->action);|||[I] AntagonismsCont|||v
result|||$result = $this->Antagonism->findDownloadCsv($conditions);|||[I] AntagonismsCont|||v
startInput|||public function startInput($id = null) {|||[I] AntagonismsCont|||f
update|||public function update() {|||[I] AntagonismsCont|||f
upload|||public function upload() {|||[I] AntagonismsCont|||f
uses|||public $uses = array('Antagonism', 'AntagonismUse', 'AntagonismUsesAntagonism', 'AntagonismCatalog', 'Competitor', 'CatalogCategory', 'CatalogDetail', 'CatalogsTag', 'Company');|||[I] AntagonismsCont|||v
