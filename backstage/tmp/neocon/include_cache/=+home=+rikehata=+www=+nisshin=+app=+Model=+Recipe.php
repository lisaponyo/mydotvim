Catalog|||$Catalog = ClassRegistry::init('Catalog');|||[I] Recipe.php|||v
Company|||$Company = ClassRegistry::init('Company');|||[I] Recipe.php|||v
Recipe|||Recipe extends AppModel { <class>|||[I] Recipe.php|||c
RecipeCategory|||$RecipeCategory = ClassRegistry::init('RecipeCategory');|||[I] Recipe.php|||v
__construct|||public function __construct($id = false, $table = null, $ds = null) {|||[I] Recipe.php|||f
__setRoleConditionCatalogForFront|||public function __setRoleConditionCatalogForFront($Judge) {|||[I] Recipe.php|||f
__setRoleConditionsForFront|||private function __setRoleConditionsForFront($conditions, $Judge) {|||[I] Recipe.php|||f
_makeDistanceCondition|||private function _makeDistanceCondition($conditions) {|||[I] Recipe.php|||f
actsAs|||public $actsAs = array(|||[I] Recipe.php|||v
arrangeCompanyParameters|||public function arrangeCompanyParameters($data, $Judge) {|||[I] Recipe.php|||f
arrangeScParameters|||public function arrangeScParameters($data, $Judge) {|||[I] Recipe.php|||f
beforeSave|||public function beforeSave() {|||[I] Recipe.php|||f
beforeValidate|||public function beforeValidate(){|||[I] Recipe.php|||f
belongsTo|||public $belongsTo = array(|||[I] Recipe.php|||v
code|||$code = $Company->findById($data['company_id'], array('feild'=>'code'));|||[I] Recipe.php|||v
cond|||$cond = array(|||[I] Recipe.php|||v
condition|||$condition = $this->__setRoleConditionCatalogForFront($Judge);|||[I] Recipe.php|||v
conditions|||$conditions = array(|||[I] Recipe.php|||v
data|||$data = explode("\n", $data);|||[I] Recipe.php|||v
filterArgs|||public $filterArgs = array(|||[I] Recipe.php|||v
findContents|||public function findContents($data, $Judge = null) {|||[I] Recipe.php|||f
findForFront|||public function findForFront($id, $Judge) {|||[I] Recipe.php|||f
findForRanking|||public function findForRanking($Judge, $data) {|||[I] Recipe.php|||f
findNewest|||findNewest|||[I] Recipe.php|||f
findSeasonally|||findSeasonally|||[I] Recipe.php|||f
getCatalogIds|||public function getCatalogIds($data){|||[I] Recipe.php|||f
hasAndBelongsToMany|||public $hasAndBelongsToMany = array(|||[I] Recipe.php|||v
hasMany|||public $hasMany = array(|||[I] Recipe.php|||v
htmlFlag|||public static $htmlFlag = array(|||[I] Recipe.php|||v
isAllow|||public function isAllow($id, $Judge, $conditions = array()) {|||[I] Recipe.php|||f
keyword|||$keyword = $keyword['word'];|||[I] Recipe.php|||v
keywords|||$keywords = $data['question_keyword'];|||[I] Recipe.php|||v
kindCategories|||$this->kindCategories = array();|||[I] Recipe.php|||v
makeRecipeCode|||public function makeRecipeCode($data){|||[I] Recipe.php|||f
makeResult|||public function makeResult($result, $Judge, $user = null) {|||[I] Recipe.php|||f
makeSearchConditions|||public function makeSearchConditions($data, $Judge = null){|||[I] Recipe.php|||f
makeSearchConditionsForFront|||public function makeSearchConditionsForFront($data, $Judge) {|||[I] Recipe.php|||f
newFlag|||public static $newFlag = array(|||[I] Recipe.php|||v
opportuneValidate|||public function opportuneValidate($Judge) {|||[I] Recipe.php|||f
orConditions|||public function orConditions($data = array()) {|||[I] Recipe.php|||f
presetVars|||public $presetVars = array(|||[I] Recipe.php|||v
publicRole|||public static $publicRole = array(|||[I] Recipe.php|||v
publicStatus|||public static $publicStatus = array(|||[I] Recipe.php|||v
query|||$query = $Tag->getQuery('all', array(|||[I] Recipe.php|||v
recommendMonth|||public static $recommendMonth = array(|||[I] Recipe.php|||v
relatedConditions|||public function relatedConditions($data = array() ){|||[I] Recipe.php|||f
result|||$result = $this->Catalog->find('all', $conditions);|||[I] Recipe.php|||v
searchByEvents|||public function searchByEvents($data = array()){|||[I] Recipe.php|||f
searchTags|||public function searchTags($data = array() ){|||[I] Recipe.php|||f
sendMailForSc|||public function sendMailForSc($Judge, $Email, $data = null, $user) {|||[I] Recipe.php|||f
setKindCategories|||public function setKindCategories() {|||[I] Recipe.php|||f
setSearchRelatedConditions|||public function setSearchRelatedConditions($data = null, $Judge) {|||[I] Recipe.php|||f
start|||$start => null,|||[I] Recipe.php|||v
thisMonth|||$thisMonth = date('n');|||[I] Recipe.php|||v
topFlag|||public static $topFlag = array(|||[I] Recipe.php|||v
unmodifiedForAccept|||public function unmodifiedForAccept($data, $Judge) {|||[I] Recipe.php|||f
user|||$user = $this->findById($data[$this->alias]['id']);|||[I] Recipe.php|||v
validate|||public $validate = array(|||[I] Recipe.php|||v
validateEmail|||public $validateEmail = array(|||[I] Recipe.php|||v
virtualFields|||public $virtualFields = array(|||[I] Recipe.php|||v
