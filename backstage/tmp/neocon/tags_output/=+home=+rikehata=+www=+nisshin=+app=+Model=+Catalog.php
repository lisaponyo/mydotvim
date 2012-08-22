!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
Catalog	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^class Catalog extends AppModel {$/;"	c
CatalogCategory	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^			$CatalogCategory = ClassRegistry::init('CatalogCategory');$/;"	v
Company	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$Company = ClassRegistry::init('Company');$/;"	v
Tag	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$Tag = ClassRegistry::init('Tag');$/;"	v
__construct	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function __construct($id = false, $table = null, $ds = null) {$/;"	f
__setDeparment	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function __setDeparment($conditions, $Judge) {$/;"	f
__setRoleCondition	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function __setRoleCondition($Judge) {$/;"	f
__setRoleConditionsForFront	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	private function __setRoleConditionsForFront($conditions, $Judge) {$/;"	f
actsAs	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $actsAs = array($/;"	v
after	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^						$after  = $arr[0].'\\$\\$'.$arr[1].'\\$\\$'.$tmp['Catalog']['id'];$/;"	v
after	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^						$after  = $arr[0].'\\$\\$'.$arr[1];$/;"	v
after	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^					$after  = $arr[0].'\\$\\$'.$arr[1];$/;"	v
arr	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^			$arr = explode('$$', trim($value));$/;"	v
arrangeCompanyParameters	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function arrangeCompanyParameters($data, $Judge) {$/;"	f
arrangeScParameters	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function arrangeScParameters($data, $Judge) {$/;"	f
before	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^					$before = $arr[0].'\\$\\$'.$arr[1].'\\$\\$'.$arr[2];$/;"	v
beforeSave	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function beforeSave() {$/;"	f
beforeValidate	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function beforeValidate(){$/;"	f
belongsTo	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $belongsTo = array($/;"	v
checkComposition	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function checkComposition($recipe, $Judge) {$/;"	f
code	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$code = $Company->findById($data['company_id'], array('feild'=>'code'));$/;"	v
condition	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$condition = $this->__setRoleCondition($Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^			$conditions = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$conditions = $this->makeSearchConditions($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$conditions = $this->makeSearchConditions($keywords);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$conditions = $this->makeSearchConditionsForFront($data, $Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$conditions = $this->setRoleConditionsForAdmin($conditions, $Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$conditions = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$conditions = array('OR' => $or);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$data = explode("\\n", $data);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$data = preg_replace('\/(\\r\\n|\\r|\\n)\/', "\\n", $data);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$data = preg_replace('\/(\\r\\n|\\r|\\n)\/', "\\n", $recipe['RecipeDetail'][0]['composition']);$/;"	v
filterArgs	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $filterArgs = array($/;"	v
findContents	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function findContents($data, $Judge = null) {$/;"	f
findForFront	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function findForFront($id, $Judge) {$/;"	f
findForFrontByCode	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function findForFrontByCode($code, $Judge) {$/;"	f
findForRanking	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function findForRanking($Judge, $data) {$/;"	f
findNewest	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function findNewest($Judge, $kind = '0') {$/;"	f
findSeasonally	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function findSeasonally($Judge, $kind = '0') {$/;"	f
getRecipeIds	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function getRecipeIds($data){$/;"	f
hasAndBelongsToMany	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $hasAndBelongsToMany = array($/;"	v
hasMany	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $hasMany = array($/;"	v
htmlFlag	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public static $htmlFlag = array($/;"	v
isAllow	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function isAllow($id, $Judge, $conditions = array()) {$/;"	f
keyword	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^			$keyword = $keyword['word'];$/;"	v
keyword	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^			$keyword = mb_ereg_replace('^[\\s　]*(.*?)[\\s　]*$', '\\1', $keyword);$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$keywords = $data['question_keyword'];$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$keywords = $this->getFizzyWords($data['keyword']);$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$keywords = $this->getFizzyWords($data['tag_keyword']);$/;"	v
kindCategories	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^					$this->kindCategories = array();$/;"	v
lastData	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$lastData = array_pop($data);$/;"	v
makeCatalogCode	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function makeCatalogCode($data){$/;"	f
makeResult	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function makeResult($result, $Judge, $user = null) {$/;"	f
makeSearchConditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function makeSearchConditions($data, $Judge = null){$/;"	f
makeSearchConditionsForFront	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function makeSearchConditionsForFront($data, $Judge) {$/;"	f
newFlag	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public static $newFlag = array($/;"	v
opportuneValidate	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function opportuneValidate($Judge) {$/;"	f
orConditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function orConditions($data = array() ){$/;"	f
presetVars	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $presetVars = array($/;"	v
publicRole	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public static $publicRole = array($/;"	v
publicStatus	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public static $publicStatus = array($/;"	v
query	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$query = $Tag->getQuery('all', array($/;"	v
query	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$query = $this->EventsCatalog->getQuery('all', array($/;"	v
recommendMonth	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public static $recommendMonth = array($/;"	v
relatedConditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function relatedConditions($data = array() ){$/;"	f
result	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$result = $this->arrangeCompanyParameters($result, $Judge);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$result = $this->arrangeScParameters($result, $Judge);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$result = $this->find('first' ,array($/;"	v
ret	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$ret = array();$/;"	v
searchByEvents	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function searchByEvents($data = array()){$/;"	f
searchTags	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function searchTags($data = array() ){$/;"	f
sendMailForSc	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function sendMailForSc($Judge, $Email, $data = null, $user) {$/;"	f
setKindCategories	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function setKindCategories() {$/;"	f
setSearchRelatedConditions	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function setSearchRelatedConditions($data = null, $Judge) {$/;"	f
thisMonth	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^		$thisMonth = date('n');$/;"	v
tmp	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^			$tmp = $CatalogCategory->find('list', array('fields' => array('id', 'kind')));$/;"	v
topFlag	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public static $topFlag = array($/;"	v
unmodifiedForAccept	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public function unmodifiedForAccept($data, $Judge) {$/;"	f
user	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^			$user = $this->findById($data[$this->alias]['id']);$/;"	v
validate	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $validate = array($/;"	v
validateEmail	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $validateEmail = array($/;"	v
virtualFields	/home/rikehata/www/nisshin/app/Model/Catalog.php	/^	public $virtualFields = array($/;"	v
