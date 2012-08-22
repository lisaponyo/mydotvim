Model|||$Model = ClassRegistry::init('Postcode');|||[I] UtilsComponent.|||v
UtilsComponent|||UtilsComponent extends Component { <class>|||[I] UtilsComponent.|||c
_Controller|||$this->_Controller =& $controller;|||[I] UtilsComponent.|||v
arrangeDateFormat|||public function arrangeDateFormat($model, $target = array(), $many = false) {|||[I] UtilsComponent.|||f
buttonBack|||public function buttonBack($action = 'input') {|||[I] UtilsComponent.|||f
class|||$class = ($boolean) ? 'alert-success' : 'alert-error';|||[I] UtilsComponent.|||v
company|||$company = $this->_Controller->Company->findById($this->_Controller->currentUser['company_id']);|||[I] UtilsComponent.|||v
conditions|||conditions|||[I] UtilsComponent.|||v
count|||count|||[I] UtilsComponent.|||v
data|||$data =& $this->_Controller->request->data || null;|||[I] UtilsComponent.|||v
email|||$email = new CakeEmail('default');|||[I] UtilsComponent.|||v
getAddress|||public function getAddress($zn = '') {|||[I] UtilsComponent.|||f
initSearch|||public function initSearch(&$Model) {|||[I] UtilsComponent.|||f
initialize|||public function initialize(&$controller) {|||[I] UtilsComponent.|||f
isAjax|||public function isAjax() {|||[I] UtilsComponent.|||f
message|||message|||[I] UtilsComponent.|||v
modelName|||$modelName = $Model->alias;|||[I] UtilsComponent.|||v
notFound|||public function notFound($bool) {|||[I] UtilsComponent.|||f
prefectures|||prefectures|||[I] UtilsComponent.|||v
redirectWithFlash|||public function redirectWithFlash($boolean, $action, $message = null) {|||[I] UtilsComponent.|||f
result|||$result = mb_split('一円$', $prefectures['tyou_kan']);|||[I] UtilsComponent.|||v
sendMail|||public function sendMail($to, $subject, $template, $vars = array(), $layout = 'default') {|||[I] UtilsComponent.|||f
setAddressByTwoZip|||public function setAddressByTwoZip($model) {|||[I] UtilsComponent.|||f
setAuthorities|||public function setAuthorities() {|||[I] UtilsComponent.|||f
