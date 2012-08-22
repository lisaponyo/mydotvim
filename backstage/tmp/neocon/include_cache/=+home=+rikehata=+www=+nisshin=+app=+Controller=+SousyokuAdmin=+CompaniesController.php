CompaniesController|||CompaniesController extends AppController { <class>|||[I] CompaniesContro|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] CompaniesContro|||f
beforeFilter|||public function beforeFilter() {|||[I] CompaniesContro|||f
bodyClass|||$this->bodyClass = 'companies';|||[I] CompaniesContro|||v
bodyId|||$this->bodyId = 'regist';|||[I] CompaniesContro|||v
company|||$company = $this->Company->findById($id);|||[I] CompaniesContro|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] CompaniesContro|||v
conditions|||$conditions = $this->User->makeSearchConditionsCompanyUserForAdmin($data);|||[I] CompaniesContro|||v
confirm|||public function confirm() {|||[I] CompaniesContro|||f
data|||$data = $this->User->findById($id);|||[I] CompaniesContro|||v
delete|||public function delete($id = null) {|||[I] CompaniesContro|||f
helpers|||public $helpers = array('Csv');|||[I] CompaniesContro|||v
index|||public function index() {|||[I] CompaniesContro|||f
input|||public function input($id = null) {|||[I] CompaniesContro|||f
isAuthorized|||public function isAuthorized($user) {|||[I] CompaniesContro|||f
layout|||$this->layout = false;|||[I] CompaniesContro|||v
paginate|||$this->paginate = $this->Company->makeSearchConditionsForAdmin($this->request->query);|||[I] CompaniesContro|||v
result|||$result = $this->Transition->mergedData();|||[I] CompaniesContro|||v
startInput|||public function startInput($id = null) {|||[I] CompaniesContro|||f
update|||public function update() {|||[I] CompaniesContro|||f
userConfirm|||public function userConfirm() {|||[I] CompaniesContro|||f
userDownload|||public function userDownload() {|||[I] CompaniesContro|||f
userIndex|||public function userIndex($id) {|||[I] CompaniesContro|||f
userInput|||public function userInput($id = null, $user_id = null) {|||[I] CompaniesContro|||f
userStartInput|||public function userStartInput($id, $user_id = null) {|||[I] CompaniesContro|||f
userUpdate|||public function userUpdate() {|||[I] CompaniesContro|||f
uses|||public $uses = array('Company', 'Business', 'Department', 'User');|||[I] CompaniesContro|||v
