CompanyUsersController|||CompanyUsersController extends AppController { <class>|||[I] CompanyUsersCon|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] CompanyUsersCon|||f
beforeFilter|||public function beforeFilter() {|||[I] CompanyUsersCon|||f
components|||public $components = array('Email');|||[I] CompanyUsersCon|||v
confirm|||public function confirm() {|||[I] CompanyUsersCon|||f
data|||$data = $this->User->findById($id);|||[I] CompanyUsersCon|||v
delete|||public function delete($id = null) {|||[I] CompanyUsersCon|||f
index|||public function index() {|||[I] CompanyUsersCon|||f
input|||public function input($id = null) {|||[I] CompanyUsersCon|||f
isAuthorized|||public function isAuthorized($user = null) {|||[I] CompanyUsersCon|||f
result|||$result = $this->Transition->mergedData();|||[I] CompanyUsersCon|||v
startInput|||public function startInput($id = null) {|||[I] CompanyUsersCon|||f
update|||public function update() {|||[I] CompanyUsersCon|||f
uses|||public $uses = array('User', 'Company');|||[I] CompanyUsersCon|||v
