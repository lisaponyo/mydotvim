AppModel|||AppModel extends Model { <class>|||[I] AppModel.php|||c
Keyword|||$this->Keyword = ClassRegistry::init('Keyword');|||[I] AppModel.php|||v
Model|||$Model = ClassRegistry::init($this->alias);|||[I] AppModel.php|||v
__construct|||public function __construct($id = false, $table = null, $ds = null) {|||[I] AppModel.php|||f
__paginate|||$this->__paginate = $bool;|||[I] AppModel.php|||v
__schema|||private function __schema() {|||[I] AppModel.php|||f
_addDateConditions|||protected function _addDateConditions($data, $from, $to, $conditions = array(), $column = null) {|||[I] AppModel.php|||f
_findCount|||protected function _findCount($state, $query, $results = array()) {|||[I] AppModel.php|||f
actsAs|||public $actsAs = array('CustomContainable', 'CustomValidation');|||[I] AppModel.php|||v
beforeFind|||public function beforeFind($queryData) {|||[I] AppModel.php|||f
changeColumnStatus|||public function changeColumnStatus($id, $status, $column) {|||[I] AppModel.php|||f
changeStatus|||public function changeStatus($id, $status) {|||[I] AppModel.php|||f
char|||char|||[I] AppModel.php|||v
column|||$column = $this->alias . '.created';|||[I] AppModel.php|||v
conditions|||$conditions = $keywordConditions;|||[I] AppModel.php|||v
data|||$data = array(|||[I] AppModel.php|||v
date|||$date = date('Y-m-d H:i:s');|||[I] AppModel.php|||v
deleteTargetFile|||public function deleteTargetFile($id, $fields) {|||[I] AppModel.php|||f
emailIdentification|||public function emailIdentification($data) {|||[I] AppModel.php|||f
fields|||$fields = array($fields);|||[I] AppModel.php|||v
findAllNoModelName|||public function findAllNoModelName($query = array()) {|||[I] AppModel.php|||f
getFizzyWords|||public function getFizzyWords($keyword) {|||[I] AppModel.php|||f
getKeywordConditions|||public function getKeywordConditions(&$data, $column = 'keyword', $conditions = array()) {|||[I] AppModel.php|||f
getRandomString|||getRandomString|||[I] AppModel.php|||f
getSearchConditions|||public function getSearchConditions($data){|||[I] AppModel.php|||f
getStrCount|||public function getStrCount($field = array(), $name, $data) {|||[I] AppModel.php|||f
hasManyMakeTmpImage|||public function hasManyMakeTmpImage(&$data) {|||[I] AppModel.php|||f
isAllow|||public function isAllow($id, $Judge, $conditions = array()) {|||[I] AppModel.php|||f
keyword|||keyword|||[I] AppModel.php|||v
keywords|||$keywords = $this->spliteBySpaces($data[$column]);|||[I] AppModel.php|||v
makeSearchConditionsForAdmin|||public function makeSearchConditionsForAdmin($data, $Judge) {|||[I] AppModel.php|||f
makeTmpImage|||public function makeTmpImage(&$data) {|||[I] AppModel.php|||f
model|||$model = $this->alias;|||[I] AppModel.php|||v
return|||$return = array();|||[I] AppModel.php|||v
saveAllAuthenticity|||public function saveAllAuthenticity($data = null, $options = array(), $user) {|||[I] AppModel.php|||f
sendMailForSc|||public function sendMailForSc($Judge, $Email, $data = null, $user) {|||[I] AppModel.php|||f
setPaginate|||public function setPaginate($bool = true) {|||[I] AppModel.php|||f
setRoleConditionsForAdmin|||public function setRoleConditionsForAdmin($conditions, $Judge) {|||[I] AppModel.php|||f
setRoleConditionsForFront|||public function setRoleConditionsForFront($conditions, $Judge, $model = null) {|||[I] AppModel.php|||f
setSearchRelatedConditions|||public function setSearchRelatedConditions($data = null, $Judge) {|||[I] AppModel.php|||f
setUniqueUsername|||public function setUniqueUsername() {|||[I] AppModel.php|||f
setValidate|||public function setValidate($kind = null){|||[I] AppModel.php|||f
showCountAdding|||public function showCountAdding($id) {|||[I] AppModel.php|||f
spliteBySpaces|||public function spliteBySpaces($keyword) {|||[I] AppModel.php|||f
unique|||unique|||[I] AppModel.php|||v
unmodifiedForAccept|||public function unmodifiedForAccept($data, $Judge) {|||[I] AppModel.php|||f
update|||$update = array();|||[I] AppModel.php|||v
user|||$user = $this->findById($data[$this->alias]['id']);|||[I] AppModel.php|||v
validate|||$this->validate = $this->{$kind};|||[I] AppModel.php|||v
