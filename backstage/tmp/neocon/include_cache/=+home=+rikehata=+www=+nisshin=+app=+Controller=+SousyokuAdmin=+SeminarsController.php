SeminarsController|||SeminarsController extends AppController { <class>|||[I] SeminarsControl|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] SeminarsControl|||f
_setKeyValueDataForApplicant|||protected function _setKeyValueDataForApplicant() {|||[I] SeminarsControl|||f
applicantConfirm|||public function applicantConfirm() {|||[I] SeminarsControl|||f
applicantDelete|||public function applicantDelete($id = null) {|||[I] SeminarsControl|||f
applicantIndex|||public function applicantIndex($id) {|||[I] SeminarsControl|||f
applicantInput|||public function applicantInput($id = null, $applicant_id = null) {|||[I] SeminarsControl|||f
applicantStartInput|||public function applicantStartInput($id, $applicant_id = null) {|||[I] SeminarsControl|||f
applicantUpdate|||public function applicantUpdate() {|||[I] SeminarsControl|||f
beforeFilter|||public function beforeFilter() {|||[I] SeminarsControl|||f
bodyClass|||$this->bodyClass = 'seminar';|||[I] SeminarsControl|||v
bodyId|||$this->bodyId = 'applicant';|||[I] SeminarsControl|||v
components|||public $components = array('Search.Prg');|||[I] SeminarsControl|||v
conditions|||$conditions = $this->SeminarUser->makeSearchConditionsForAdmin($data);|||[I] SeminarsControl|||v
confirm|||public function confirm(){|||[I] SeminarsControl|||f
data|||$data = $this->SeminarUser->findById($id);|||[I] SeminarsControl|||v
delete|||public function delete($id = null){|||[I] SeminarsControl|||f
helpers|||public $helpers = array('Upload', 'Csv');|||[I] SeminarsControl|||v
index|||public function index() {|||[I] SeminarsControl|||f
input|||public function input($id = null){|||[I] SeminarsControl|||f
isAuthorized|||public function isAuthorized() {|||[I] SeminarsControl|||f
layout|||$this->layout = 'popup';|||[I] SeminarsControl|||v
paginate|||$this->paginate = $this->Seminar->makeSearchConditionsForAdmin($this->request->query, $this->Judge);|||[I] SeminarsControl|||v
result|||$result = $this->Transition->allData('input');|||[I] SeminarsControl|||v
seminar|||$seminar = $this->Seminar->findById($id);|||[I] SeminarsControl|||v
seminarUser|||$seminarUser = $this->SeminarUser->findById($applicant_id);|||[I] SeminarsControl|||v
seminarUsers|||$seminarUsers = $this->SeminarUser->findForAdminCsv($conditions);|||[I] SeminarsControl|||v
seminars|||$seminars = $this->paginate('Seminar');|||[I] SeminarsControl|||v
startInput|||public function startInput($id = null){|||[I] SeminarsControl|||f
switchAttendance|||public function switchAttendance($id, $status) {|||[I] SeminarsControl|||f
update|||public function update(){|||[I] SeminarsControl|||f
user|||$user = $this->User->find('first', array('conditions' => array( 'User.username' => $result['SeminarUser']['user_id'])));|||[I] SeminarsControl|||v
userDownload|||public function userDownload() {|||[I] SeminarsControl|||f
uses|||public $uses = array('Seminar', 'Company', 'SeminarUser', 'User');|||[I] SeminarsControl|||v
