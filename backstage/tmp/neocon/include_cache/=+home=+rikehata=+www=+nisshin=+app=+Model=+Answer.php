Answer|||Answer extends AppModel { <class>|||[I] Answer.php|||c
Question|||$Question = ClassRegistry::init('Question');|||[I] Answer.php|||v
QuestionCategory|||$QuestionCategory = ClassRegistry::init('QuestionCategory');|||[I] Answer.php|||v
User|||$User = ClassRegistry::init('User');|||[I] Answer.php|||v
__setRoleConditionsForFront|||private function __setRoleConditionsForFront($conditions, $Judge) {|||[I] Answer.php|||f
actsAs|||public $actsAs = array(|||[I] Answer.php|||v
belongsTo|||public $belongsTo = array(|||[I] Answer.php|||v
categories|||$categories = $QuestionCategory->find('list');|||[I] Answer.php|||v
conditions|||$conditions = $this->parseCriteria($data);|||[I] Answer.php|||v
csvItems|||public $csvItems = array(|||[I] Answer.php|||v
data|||$data = array(|||[I] Answer.php|||v
filterArgs|||public $filterArgs = array(|||[I] Answer.php|||v
findContents|||public function findContents($data, $Judge = null) {|||[I] Answer.php|||f
findForAdminCsv|||public function findForAdminCsv($conditions) {|||[I] Answer.php|||f
findForFront|||public function findForFront($id, $Judge) {|||[I] Answer.php|||f
findForRanking|||public function findForRanking($Judge, $data) {|||[I] Answer.php|||f
findNewest|||public function findNewest($Judge) {|||[I] Answer.php|||f
keyword|||keyword|||[I] Answer.php|||v
keywords|||$keywords = $data['catalog_keyword'];|||[I] Answer.php|||v
makeSearchConditions|||public function makeSearchConditions($data){|||[I] Answer.php|||f
makeSearchConditionsForAdmin|||public function makeSearchConditionsForAdmin($data) {|||[I] Answer.php|||f
makeSearchConditionsForFront|||public function makeSearchConditionsForFront($data, $Judge) {|||[I] Answer.php|||f
orConditions|||public function orConditions($data = array()) {|||[I] Answer.php|||f
presetVars|||public $presetVars = array(|||[I] Answer.php|||v
publicStatus|||$publicStatus = Question::$publicStatus;|||[I] Answer.php|||v
registers|||$registers = array();|||[I] Answer.php|||v
relatedCatalogConditions|||public function relatedCatalogConditions($data = array() ){|||[I] Answer.php|||f
relatedConditions|||public function relatedConditions($data = array() ){|||[I] Answer.php|||f
result|||$result = $this->find('all', $conditions);|||[I] Answer.php|||v
setSearchCatalogRelatedConditions|||public function setSearchCatalogRelatedConditions($data, $Judge) {|||[I] Answer.php|||f
setSearchRelatedConditions|||public function setSearchRelatedConditions($data, $Judge) {|||[I] Answer.php|||f
user|||$user = $User->find('list', array('conditions' => array('id' => $registers)));|||[I] Answer.php|||v
validate|||public $validate = array(|||[I] Answer.php|||v
validateCsv|||public $validateCsv = array(|||[I] Answer.php|||v
