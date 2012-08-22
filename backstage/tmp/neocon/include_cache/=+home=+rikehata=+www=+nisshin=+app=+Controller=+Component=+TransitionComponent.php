TransitionComponent|||TransitionComponent extends Component { <class>|||[I] TransitionCompo|||c
_autoLoadModels|||protected function _autoLoadModels($models) {|||[I] TransitionCompo|||f
_controller|||$this->_controller =& $controller;|||[I] TransitionCompo|||v
action|||$this->action = $this->_controller->action;|||[I] TransitionCompo|||v
allData|||$allData = $this->allData();|||[I] TransitionCompo|||v
autoComplete|||public $autoComplete = true;|||[I] TransitionCompo|||v
autoRedirect|||public $autoRedirect = true;|||[I] TransitionCompo|||v
automate|||public function automate($nextStep, $models = null, $prev = null, $validationMethod = null, $messages = array()) {|||[I] TransitionCompo|||f
automation|||$automation = $this->automation[$this->action];|||[I] TransitionCompo|||v
buttonBack|||public function buttonBack($action) {|||[I] TransitionCompo|||f
callback|||$callback = !empty($func) ? array($class, $func) : $class;|||[I] TransitionCompo|||v
checkData|||public function checkData($id = null, $nextStep = null, $models = null, $validationMethod = null, $message = null, $sessionKey = null) {|||[I] TransitionCompo|||f
checkDataObject|||public function checkDataObject($id = null, $nextStep = null, $models = null, $validationMethod = null, $message = null, $sessionKey = null) {|||[I] TransitionCompo|||f
checkPrev|||public function checkPrev($prev, $message = null, $prevAction = null) {|||[I] TransitionCompo|||f
clearData|||public function clearData() {|||[I] TransitionCompo|||f
cname|||$cname = $cname === null ? "." . $this->_controller->name : ".$cname";|||[I] TransitionCompo|||v
components|||public $components = array('Session', 'Utils');|||[I] TransitionCompo|||v
controllerHasModel|||$controllerHasModel =|||[I] TransitionCompo|||v
controllerModel|||$controllerModel = $c->modelClass;|||[I] TransitionCompo|||v
data|||$data = $data[$key];|||[I] TransitionCompo|||v
defaults|||$defaults = array(|||[I] TransitionCompo|||v
delData|||public function delData($key) {|||[I] TransitionCompo|||f
deleteData|||public function deleteData($key) {|||[I] TransitionCompo|||f
doAutomate|||$doAutomate =|||[I] TransitionCompo|||v
flashParams|||public $flashParams = array(|||[I] TransitionCompo|||v
getToken|||$getToken = $this->_controller->request->query['transition_token'];|||[I] TransitionCompo|||v
initialize|||public function initialize(&$controller, $settings = array()) {|||[I] TransitionCompo|||f
isModelMethod|||$isModelMethod =|||[I] TransitionCompo|||v
isValidToken|||public function isValidToken() {|||[I] TransitionCompo|||f
makeToken|||public function makeToken($bool = true) {|||[I] TransitionCompo|||f
merged|||$merged = call_user_func($callback, $merged, $data);|||[I] TransitionCompo|||v
mergedData|||public function mergedData($callback = 'Set::merge') {|||[I] TransitionCompo|||f
message|||$message = $this->messages['invalid'];|||[I] TransitionCompo|||v
messages|||$messages = array_merge($this->messages, $messages);|||[I] TransitionCompo|||v
model|||$model = $this->returnModelObject($model);|||[I] TransitionCompo|||v
modelName|||$modelName = Inflector::classify($model);|||[I] TransitionCompo|||v
models|||$models = $c->modelClass;|||[I] TransitionCompo|||v
nextStep|||$nextStep = array('action' => $nextStep, '?transition_token=' . $token);|||[I] TransitionCompo|||v
prevAction|||$prevAction = array('action' => $prev);|||[I] TransitionCompo|||v
result|||$result = false;|||[I] TransitionCompo|||v
returnModelObject|||public function returnModelObject($model = null) {|||[I] TransitionCompo|||f
sessionBaseKey|||public $sessionBaseKey = 'Transition';|||[I] TransitionCompo|||v
sessionKey|||$sessionKey = $this->action;|||[I] TransitionCompo|||v
setData|||public function setData($key, $data) {|||[I] TransitionCompo|||f
startup|||public function startup(&$controller) {|||[I] TransitionCompo|||f
token|||$token = $this->makeToken();|||[I] TransitionCompo|||v
validateModel|||public function validateModel($model, $validationMethod = null) {|||[I] TransitionCompo|||f
validationMethod|||$validationMethod = $this->validationMethod;|||[I] TransitionCompo|||v
