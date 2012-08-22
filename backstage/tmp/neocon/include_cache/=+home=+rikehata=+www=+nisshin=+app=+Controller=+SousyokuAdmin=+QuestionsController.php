QuestionsController|||QuestionsController extends AppController { <class>|||[I] QuestionsContro|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] QuestionsContro|||f
beforeFilter|||public function beforeFilter() {|||[I] QuestionsContro|||f
bodyClass|||$this->bodyClass = 'question';|||[I] QuestionsContro|||v
bodyId|||$this->bodyId = 'regist';|||[I] QuestionsContro|||v
components|||public $components = array('Search.Prg', 'CsvImport');|||[I] QuestionsContro|||v
conditions|||$conditions = $this->Answer->makeSearchConditionsForAdmin($data);|||[I] QuestionsContro|||v
confirm|||public function confirm() {|||[I] QuestionsContro|||f
data|||$data = isset($this->request->data['Question']) ? $this->request->data['Question']: null;|||[I] QuestionsContro|||v
delete|||public function delete($id = null) {|||[I] QuestionsContro|||f
download|||public function download() {|||[I] QuestionsContro|||f
helpers|||public $helpers = array('Upload', 'Csv');|||[I] QuestionsContro|||v
index|||public function index() {|||[I] QuestionsContro|||f
input|||public function input($id = null) {|||[I] QuestionsContro|||f
isAuthorized|||public function isAuthorized($user) {|||[I] QuestionsContro|||f
layout|||$this->layout = false;|||[I] QuestionsContro|||v
paginate|||$this->paginate = $this->Answer->makeSearchConditionsForAdmin($this->request->query);|||[I] QuestionsContro|||v
questions|||$questions = $this->Answer->findForAdminCsv($conditions);|||[I] QuestionsContro|||v
result|||$result = $this->Question->makeResult($result, $this->currentUser);|||[I] QuestionsContro|||v
startInput|||public function startInput($id = null) {|||[I] QuestionsContro|||f
switchPublic|||public function switchPublic($id, $status) {|||[I] QuestionsContro|||f
update|||public function update() {|||[I] QuestionsContro|||f
upload|||public function upload() {|||[I] QuestionsContro|||f
uses|||public $uses = array('Question', 'QuestionCategory', 'Answer', 'Recipe', 'Catalog');|||[I] QuestionsContro|||v
validation|||public function validation() {|||[I] QuestionsContro|||f
