Catalog|||Catalog extends AppModel { <class>|||[I] Catalog.php|||c
CatalogCategory|||$CatalogCategory = ClassRegistry::init('CatalogCategory');|||[I] Catalog.php|||v
Company|||$Company = ClassRegistry::init('Company');|||[I] Catalog.php|||v
__construct|||public function __construct($id = false, $table = null, $ds = null) {|||[I] Catalog.php|||f
__setDeparment|||public function __setDeparment($conditions, $Judge) {|||[I] Catalog.php|||f
__setRoleCondition|||public function __setRoleCondition($Judge) {|||[I] Catalog.php|||f
__setRoleConditionsForFront|||private function __setRoleConditionsForFront($conditions, $Judge) {|||[I] Catalog.php|||f
actsAs|||public $actsAs = array(|||[I] Catalog.php|||v
after|||after|||[I] Catalog.php|||v
arrangeCompanyParameters|||public function arrangeCompanyParameters($data, $Judge) {|||[I] Catalog.php|||f
arrangeScParameters|||public function arrangeScParameters($data, $Judge) {|||[I] Catalog.php|||f
before|||before|||[I] Catalog.php|||v
beforeSave|||public function beforeSave() {|||[I] Catalog.php|||f
beforeValidate|||public function beforeValidate(){|||[I] Catalog.php|||f
belongsTo|||public $belongsTo = array(|||[I] Catalog.php|||v
checkComposition|||public function checkComposition($recipe, $Judge) {|||[I] Catalog.php|||f
code|||$code = $Company->findById($data['company_id'], array('feild'=>'code'));|||[I] Catalog.php|||v
condition|||$condition = $this->__setRoleCondition($Judge);|||[I] Catalog.php|||v
conditions|||$conditions = array(|||[I] Catalog.php|||v
data|||$data = explode("\n", $data);|||[I] Catalog.php|||v
filterArgs|||public $filterArgs = array(|||[I] Catalog.php|||v
findContents|||public function findContents($data, $Judge = null) {|||[I] Catalog.php|||f
findForFront|||public function findForFront($id, $Judge) {|||[I] Catalog.php|||f
findForFrontByCode|||public function findForFrontByCode($code, $Judge) {|||[I] Catalog.php|||f
findForRanking|||public function findForRanking($Judge, $data) {|||[I] Catalog.php|||f
findNewest|||findNewest|||[I] Catalog.php|||f
findSeasonally|||findSeasonally|||[I] Catalog.php|||f
getRecipeIds|||public function getRecipeIds($data){|||[I] Catalog.php|||f
hasAndBelongsToMany|||public $hasAndBelongsToMany = array(|||[I] Catalog.php|||v
hasMany|||public $hasMany = array(|||[I] Catalog.php|||v
htmlFlag|||public static $htmlFlag = array(|||[I] Catalog.php|||v
isAllow|||public function isAllow($id, $Judge, $conditions = array()) {|||[I] Catalog.php|||f
keyword|||$keyword = $keyword['word'];|||[I] Catalog.php|||v
keywords|||$keywords = $data['question_keyword'];|||[I] Catalog.php|||v
kindCategories|||$this->kindCategories = array();|||[I] Catalog.php|||v
lastData|||$lastData = array_pop($data);|||[I] Catalog.php|||v
makeCatalogCode|||public function makeCatalogCode($data){|||[I] Catalog.php|||f
makeResult|||public function makeResult($result, $Judge, $user = null) {|||[I] Catalog.php|||f
makeSearchConditions|||public function makeSearchConditions($data, $Judge = null){|||[I] Catalog.php|||f
makeSearchConditionsForFront|||public function makeSearchConditionsForFront($data, $Judge) {|||[I] Catalog.php|||f
newFlag|||public static $newFlag = array(|||[I] Catalog.php|||v
opportuneValidate|||public function opportuneValidate($Judge) {|||[I] Catalog.php|||f
orConditions|||public function orConditions($data = array() ){|||[I] Catalog.php|||f
presetVars|||public $presetVars = array(|||[I] Catalog.php|||v
publicRole|||public static $publicRole = array(|||[I] Catalog.php|||v
publicStatus|||public static $publicStatus = array(|||[I] Catalog.php|||v
query|||$query = $Tag->getQuery('all', array(|||[I] Catalog.php|||v
recommendMonth|||public static $recommendMonth = array(|||[I] Catalog.php|||v
relatedConditions|||public function relatedConditions($data = array() ){|||[I] Catalog.php|||f
result|||$result = $this->arrangeCompanyParameters($result, $Judge);|||[I] Catalog.php|||v
searchByEvents|||public function searchByEvents($data = array()){|||[I] Catalog.php|||f
searchTags|||public function searchTags($data = array() ){|||[I] Catalog.php|||f
sendMailForSc|||public function sendMailForSc($Judge, $Email, $data = null, $user) {|||[I] Catalog.php|||f
setKindCategories|||public function setKindCategories() {|||[I] Catalog.php|||f
setSearchRelatedConditions|||public function setSearchRelatedConditions($data = null, $Judge) {|||[I] Catalog.php|||f
thisMonth|||$thisMonth = date('n');|||[I] Catalog.php|||v
topFlag|||public static $topFlag = array(|||[I] Catalog.php|||v
unmodifiedForAccept|||public function unmodifiedForAccept($data, $Judge) {|||[I] Catalog.php|||f
user|||$user = $this->findById($data[$this->alias]['id']);|||[I] Catalog.php|||v
validate|||public $validate = array(|||[I] Catalog.php|||v
validateEmail|||public $validateEmail = array(|||[I] Catalog.php|||v
virtualFields|||public $virtualFields = array(|||[I] Catalog.php|||v
