SeminarsController|||SeminarsController extends AppController { <class>|||[I] SeminarsControl|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] SeminarsControl|||f
_setKeyValueDataForApplicant|||protected function _setKeyValueDataForApplicant() {|||[I] SeminarsControl|||f
beforeFilter|||public function beforeFilter() {|||[I] SeminarsControl|||f
bodyClass|||$this->bodyClass = 'recipe';|||[I] SeminarsControl|||v
bodyId|||$this->bodyId = 'detail';|||[I] SeminarsControl|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] SeminarsControl|||v
components|||public $components = array('Search.Prg');|||[I] SeminarsControl|||v
detail|||public function detail($id = null) {|||[I] SeminarsControl|||f
index|||public function index() {|||[I] SeminarsControl|||f
isAuthorized|||public function isAuthorized() {|||[I] SeminarsControl|||f
seminarData|||$seminarData = $this->Seminar->findById($id);|||[I] SeminarsControl|||v
seminars|||$seminars = $this->Seminar->find('all', array('order' => array('Seminar.update' => 'desc'), 'conditions' => array('Seminar.holding_date' => '<= date("Y-m-d")' )));|||[I] SeminarsControl|||v
uses|||public $uses = array('Seminar', 'Company', 'SeminarUser', 'User');|||[I] SeminarsControl|||v
