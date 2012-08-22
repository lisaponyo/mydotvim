Antagonism|||Antagonism extends AppModel { <class>|||[I] Antagonism.php|||c
AntagonismCatalog|||$AntagonismCatalog = ClassRegistry::init('AntagonismCatalog');|||[I] Antagonism.php|||v
Competitor|||$Competitor = ClassRegistry::init('Competitor');|||[I] Antagonism.php|||v
_searchOrder|||private function _searchOrder($action = null){|||[I] Antagonism.php|||f
actsAs|||public $actsAs = array(|||[I] Antagonism.php|||v
antagonism|||$antagonism = $v['Antagonism'];|||[I] Antagonism.php|||v
antagonismCatalog|||$antagonismCatalog = $v['AntagonismCatalog'];|||[I] Antagonism.php|||v
antagonism_use_ids|||$antagonism_use_ids = array();|||[I] Antagonism.php|||v
beforeValidate|||public function beforeValidate(){|||[I] Antagonism.php|||f
belongsTo|||public $belongsTo = array(|||[I] Antagonism.php|||v
companies|||$companies = $this->find('all', array(|||[I] Antagonism.php|||v
competitor|||$competitor = $v['Competitor'];|||[I] Antagonism.php|||v
conditions|||$conditions = array(|||[I] Antagonism.php|||v
csvData|||public function csvData($columns, $cols) {|||[I] Antagonism.php|||f
filterArgs|||public $filterArgs = array(|||[I] Antagonism.php|||v
findDownloadCsv|||public function findDownloadCsv($conditions) {|||[I] Antagonism.php|||f
hasAndBelongsToMany|||public $hasAndBelongsToMany = array(|||[I] Antagonism.php|||v
hasMany|||public $hasMany = array(|||[I] Antagonism.php|||v
isAllow|||public function isAllow($id, $Judge, $conditions = array()) {|||[I] Antagonism.php|||f
makeCompanyData|||public function makeCompanyData(){|||[I] Antagonism.php|||f
makeSearchConditions|||public function makeSearchConditions($data, $action = null){|||[I] Antagonism.php|||f
makeSearchConditionsForFront|||public function makeSearchConditionsForFront($data, $action = null){|||[I] Antagonism.php|||f
mark|||$mark = function($num, $antagonism_use_ids) {|||[I] Antagonism.php|||v
name|||$name = function($num, $antagonismCatalog) {|||[I] Antagonism.php|||v
presetVars|||public $presetVars = array(|||[I] Antagonism.php|||v
result|||$result = $this->find('all', $conditions);|||[I] Antagonism.php|||v
saveData|||public function saveData($data, $currentUser) {|||[I] Antagonism.php|||f
setCompetitorId|||public function setCompetitorId($data, $result) {|||[I] Antagonism.php|||f
setCsvFields|||public function setCsvFields($conditions) {|||[I] Antagonism.php|||f
validate|||public $validate = array(|||[I] Antagonism.php|||v
validateCsv|||public $validateCsv = array(|||[I] Antagonism.php|||v
