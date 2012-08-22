NisshinUsersController|||NisshinUsersController extends AppController { <class>|||[I] NisshinUsersCon|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] NisshinUsersCon|||f
beforeFilter|||public function beforeFilter() {|||[I] NisshinUsersCon|||f
bodyClass|||$this->bodyClass = 'nisshinuser';|||[I] NisshinUsersCon|||v
bodyId|||$this->bodyId = 'regist';|||[I] NisshinUsersCon|||v
components|||public $components = array('Email');|||[I] NisshinUsersCon|||v
confirm|||public function confirm() {|||[I] NisshinUsersCon|||f
data|||$data = $this->User->findById($id);|||[I] NisshinUsersCon|||v
delete|||public function delete($id = null) {|||[I] NisshinUsersCon|||f
index|||public function index() {|||[I] NisshinUsersCon|||f
input|||public function input($id = null) {|||[I] NisshinUsersCon|||f
isAuthorized|||public function isAuthorized($user = null) {|||[I] NisshinUsersCon|||f
paginate|||$this->paginate = $this->User->makeSearchConditionsNissinUserForAdmin($this->request->query);|||[I] NisshinUsersCon|||v
result|||$result = $this->Transition->mergedData();|||[I] NisshinUsersCon|||v
startInput|||public function startInput($id = null) {|||[I] NisshinUsersCon|||f
update|||public function update() {|||[I] NisshinUsersCon|||f
uses|||public $uses = array('User', 'Company', 'Department');|||[I] NisshinUsersCon|||v
