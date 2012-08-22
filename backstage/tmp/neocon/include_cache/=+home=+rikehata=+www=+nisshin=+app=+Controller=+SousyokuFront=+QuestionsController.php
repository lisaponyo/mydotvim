QuestionsController|||QuestionsController extends AppController { <class>|||[I] QuestionsContro|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] QuestionsContro|||f
beforeFilter|||public function beforeFilter() {|||[I] QuestionsContro|||f
bodyClass|||$this->bodyClass = 'qa';|||[I] QuestionsContro|||v
bodyId|||$this->bodyId = 'detail';|||[I] QuestionsContro|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] QuestionsContro|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] QuestionsContro|||v
data|||$data = $this->Answer->findById($id);|||[I] QuestionsContro|||v
detail|||public function detail($id) {|||[I] QuestionsContro|||f
download|||public function download($id, $file) {|||[I] QuestionsContro|||f
favorite|||public function favorite($question_id) {|||[I] QuestionsContro|||f
helpers|||public $helpers = array('Upload', 'Utils');|||[I] QuestionsContro|||v
index|||public function index() {|||[I] QuestionsContro|||f
isAuthorized|||public function isAuthorized($user) {|||[I] QuestionsContro|||f
name|||$name = preg_replace("/\.pdf$/", "", $data['Answer'][$file]);|||[I] QuestionsContro|||v
paginate|||$this->paginate = $tmp;|||[I] QuestionsContro|||v
params|||$params = array(|||[I] QuestionsContro|||v
presetVars|||$this->presetVars = $this->Question->presetVars;|||[I] QuestionsContro|||v
preview|||public function preview() {|||[I] QuestionsContro|||f
uses|||public $uses = array('Question', 'QuestionCategory', 'Answer', 'Recipe', 'Catalog', 'QuestionsUser');|||[I] QuestionsContro|||v
viewClass|||$this->viewClass = 'Media';|||[I] QuestionsContro|||v
