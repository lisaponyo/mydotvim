!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
Catalog	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$Catalog = ClassRegistry::init('Catalog');$/;"	v
Company	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$Company = ClassRegistry::init('Company');$/;"	v
Recipe	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^class Recipe extends AppModel {$/;"	c
RecipeCategory	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^			$RecipeCategory = ClassRegistry::init('RecipeCategory');$/;"	v
Tag	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$Tag = ClassRegistry::init('Tag');$/;"	v
__construct	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function __construct($id = false, $table = null, $ds = null) {$/;"	f
__setRoleConditionCatalogForFront	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function __setRoleConditionCatalogForFront($Judge) {$/;"	f
__setRoleConditionsForFront	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	private function __setRoleConditionsForFront($conditions, $Judge) {$/;"	f
_makeDistanceCondition	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	private function _makeDistanceCondition($conditions) {$/;"	f
actsAs	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $actsAs = array($/;"	v
arr	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^				$arr = explode('$$', $v);$/;"	v
arr	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$arr = array();$/;"	v
arrangeCompanyParameters	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function arrangeCompanyParameters($data, $Judge) {$/;"	f
arrangeScParameters	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function arrangeScParameters($data, $Judge) {$/;"	f
beforeSave	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function beforeSave() {$/;"	f
beforeValidate	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function beforeValidate(){$/;"	f
belongsTo	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $belongsTo = array($/;"	v
code	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$code = $Company->findById($data['company_id'], array('feild'=>'code'));$/;"	v
cond	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$cond = array($/;"	v
condition	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$condition = $this->__setRoleConditionCatalogForFront($Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^			$conditions = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$conditions = $this->makeSearchConditions($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$conditions = $this->makeSearchConditions($keywords);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$conditions = $this->makeSearchConditionsForFront($data, $Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$conditions = $this->setRoleConditionsForAdmin($conditions, $Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$conditions = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$conditions = array('OR' => $or);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$data = explode("\\n", $data);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$data = preg_replace('\/(\\r\\n|\\r|\\n)\/', "\\n", $data);$/;"	v
end	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^				$end => null,$/;"	v
end	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$end = $this->alias . '.distance_end';$/;"	v
filterArgs	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $filterArgs = array($/;"	v
findContents	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function findContents($data, $Judge = null) {$/;"	f
findForFront	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function findForFront($id, $Judge) {$/;"	f
findForRanking	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function findForRanking($Judge, $data) {$/;"	f
findNewest	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function findNewest($Judge, $kind = '0') {$/;"	f
findSeasonally	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function findSeasonally($Judge, $kind = '0') {$/;"	f
getCatalogIds	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function getCatalogIds($data){$/;"	f
hasAndBelongsToMany	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $hasAndBelongsToMany = array($/;"	v
hasMany	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $hasMany = array($/;"	v
htmlFlag	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public static $htmlFlag = array($/;"	v
isAllow	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function isAllow($id, $Judge, $conditions = array()) {$/;"	f
keyword	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^			$keyword = $keyword['word'];$/;"	v
keyword	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^			$keyword = mb_ereg_replace('^[\\s　]*(.*?)[\\s　]*$', '\\1', $keyword);$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$keywords = $data['question_keyword'];$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$keywords = $this->getFizzyWords($data['keyword']);$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$keywords = $this->getFizzyWords($data['tag_keyword']);$/;"	v
kindCategories	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^					$this->kindCategories = array();$/;"	v
makeRecipeCode	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function makeRecipeCode($data){$/;"	f
makeResult	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function makeResult($result, $Judge, $user = null) {$/;"	f
makeSearchConditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function makeSearchConditions($data, $Judge = null){$/;"	f
makeSearchConditionsForFront	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function makeSearchConditionsForFront($data, $Judge) {$/;"	f
newFlag	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public static $newFlag = array($/;"	v
opportuneValidate	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function opportuneValidate($Judge) {$/;"	f
orConditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function orConditions($data = array()) {$/;"	f
presetVars	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $presetVars = array($/;"	v
publicRole	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public static $publicRole = array($/;"	v
publicStatus	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public static $publicStatus = array($/;"	v
query	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$query = $Tag->getQuery('all', array($/;"	v
query	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$query = $this->EventsRecipe->getQuery('all', array($/;"	v
recommendMonth	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public static $recommendMonth = array($/;"	v
relatedConditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function relatedConditions($data = array() ){$/;"	f
result	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$result = $this->Catalog->find('all', $conditions);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$result = $this->arrangeCompanyParameters($result, $Judge);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$result = $this->arrangeScParameters($result, $Judge);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$result = $this->find('first' ,array($/;"	v
ret	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$ret = array();$/;"	v
ret	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$ret = array_unique($ret);$/;"	v
searchByEvents	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function searchByEvents($data = array()){$/;"	f
searchTags	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function searchTags($data = array() ){$/;"	f
sendMailForSc	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function sendMailForSc($Judge, $Email, $data = null, $user) {$/;"	f
setKindCategories	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function setKindCategories() {$/;"	f
setSearchRelatedConditions	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function setSearchRelatedConditions($data = null, $Judge) {$/;"	f
start	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^				$start => null,$/;"	v
start	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$start = $this->alias . '.distance_start';$/;"	v
thisMonth	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^		$thisMonth = date('n');$/;"	v
tmp	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^			$tmp = $RecipeCategory->find('list', array('fields' => array('id', 'kind')));$/;"	v
topFlag	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public static $topFlag = array($/;"	v
unmodifiedForAccept	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public function unmodifiedForAccept($data, $Judge) {$/;"	f
user	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^			$user = $this->findById($data[$this->alias]['id']);$/;"	v
v	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^			$v = trim($v);$/;"	v
validate	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $validate = array($/;"	v
validateEmail	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $validateEmail = array($/;"	v
virtualFields	/home/rikehata/www/nisshin/app/Model/Recipe.php	/^	public $virtualFields = array($/;"	v
