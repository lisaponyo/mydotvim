!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
Answer	/home/rikehata/www/nisshin/app/Model/Answer.php	/^class Answer extends AppModel {$/;"	c
D	/home/rikehata/www/nisshin/app/Model/Answer.php	/^			$D = new DateTime($v['Answer']['display_created']);$/;"	v
Question	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$Question = ClassRegistry::init('Question');$/;"	v
QuestionCategory	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$QuestionCategory = ClassRegistry::init('QuestionCategory');$/;"	v
User	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$User = ClassRegistry::init('User');$/;"	v
__setRoleConditionsForFront	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	private function __setRoleConditionsForFront($conditions, $Judge) {$/;"	f
actsAs	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public $actsAs = array($/;"	v
belongsTo	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public $belongsTo = array($/;"	v
categories	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$categories = $QuestionCategory->find('list');$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^				$conditions = $this->parseCriteria($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^			$conditions = $this->_addDateConditions($data, 'display_created_from', 'display_created_to', $conditions, 'Answer.display_created');$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$conditions = $this->getKeywordConditions($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$conditions = $this->makeSearchConditions($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$conditions = $this->makeSearchConditions($keywords);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$conditions = $this->makeSearchConditionsForFront($data, $Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$conditions = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$conditions = array('OR' => $or);$/;"	v
csvItems	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public $csvItems = array($/;"	v
data	/home/rikehata/www/nisshin/app/Model/Answer.php	/^			$data = array($/;"	v
data	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$data = $data['Catalog']['name'];$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$data = $data['RecipeDetail']['0']['composition']."\\n".$data['Recipe']['name'];$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$data = explode("\\n", $data);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$data = preg_replace('\/(\\r\\n|\\r|\\n)\/', "\\n", $data);$/;"	v
filterArgs	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public $filterArgs = array($/;"	v
findContents	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function findContents($data, $Judge = null) {$/;"	f
findForAdminCsv	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function findForAdminCsv($conditions) {$/;"	f
findForFront	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function findForFront($id, $Judge) {$/;"	f
findForRanking	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function findForRanking($Judge, $data) {$/;"	f
findNewest	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function findNewest($Judge) {$/;"	f
key	/home/rikehata/www/nisshin/app/Model/Answer.php	/^				$key = (isset($result[$k]['Question'][$column])) ? 'Question' : 'Answer';$/;"	v
keyword	/home/rikehata/www/nisshin/app/Model/Answer.php	/^				$keyword =  substr($keyword, 0, $pos);$/;"	v
keyword	/home/rikehata/www/nisshin/app/Model/Answer.php	/^			$keyword = $keyword['word'];$/;"	v
keyword	/home/rikehata/www/nisshin/app/Model/Answer.php	/^			$keyword = mb_ereg_replace('^[\\s　]*(.*?)[\\s　]*$', '\\1', $keyword);$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$keywords = $data['catalog_keyword'];$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$keywords = $data['recipe_keyword'];$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$keywords = $this->getFizzyWords($data['keyword']);$/;"	v
makeSearchConditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function makeSearchConditions($data){$/;"	f
makeSearchConditionsForAdmin	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function makeSearchConditionsForAdmin($data) {$/;"	f
makeSearchConditionsForFront	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function makeSearchConditionsForFront($data, $Judge) {$/;"	f
orConditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function orConditions($data = array()) {$/;"	f
presetVars	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public $presetVars = array($/;"	v
publicStatus	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$publicStatus = Question::$publicStatus;$/;"	v
registers	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$registers = array();$/;"	v
registers	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$registers = array_unique($registers);$/;"	v
relatedCatalogConditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function relatedCatalogConditions($data = array() ){$/;"	f
relatedConditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function relatedConditions($data = array() ){$/;"	f
result	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$result = $this->find('all', $conditions);$/;"	v
ret	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$ret = array();$/;"	v
setSearchCatalogRelatedConditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function setSearchCatalogRelatedConditions($data, $Judge) {$/;"	f
setSearchRelatedConditions	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public function setSearchRelatedConditions($data, $Judge) {$/;"	f
user	/home/rikehata/www/nisshin/app/Model/Answer.php	/^		$user = $User->find('list', array('conditions' => array('id' => $registers)));$/;"	v
validate	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public $validate = array($/;"	v
validateCsv	/home/rikehata/www/nisshin/app/Model/Answer.php	/^	public $validateCsv = array($/;"	v
