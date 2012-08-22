TagsController|||TagsController extends AppController { <class>|||[I] TagsController.|||c
beforeFilter|||public function beforeFilter() {|||[I] TagsController.|||f
bodyClass|||$this->bodyClass = 'member';|||[I] TagsController.|||v
bodyId|||$this->bodyId = 'index';|||[I] TagsController.|||v
components|||public $components = array('Search.Prg');|||[I] TagsController.|||v
confirm|||public function confirm() {|||[I] TagsController.|||f
delete|||public function delete($id = null) {|||[I] TagsController.|||f
index|||public function index() {|||[I] TagsController.|||f
input|||public function input($id = null) {|||[I] TagsController.|||f
isAuthorized|||public function isAuthorized($user) {|||[I] TagsController.|||f
layout|||$this->layout = false;|||[I] TagsController.|||v
paginate|||$this->paginate = $this->Tag->makeSearchConditions($this->request->query);|||[I] TagsController.|||v
presetVars|||$this->presetVars = $this->Tag->presetVars;|||[I] TagsController.|||v
result|||$result = $this->Transition->mergedData();|||[I] TagsController.|||v
select|||public function select($selected = null) {|||[I] TagsController.|||f
startInput|||public function startInput($id = null) {|||[I] TagsController.|||f
update|||public function update() {|||[I] TagsController.|||f
uses|||public $uses = array('Tag');|||[I] TagsController.|||v
