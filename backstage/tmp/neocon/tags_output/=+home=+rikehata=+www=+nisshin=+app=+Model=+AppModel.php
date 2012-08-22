!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
AppModel	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^class AppModel extends Model {$/;"	c
Keyword	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$this->Keyword = ClassRegistry::init('Keyword');$/;"	v
Model	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$Model = ClassRegistry::init($this->alias);$/;"	v
__construct	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function __construct($id = false, $table = null, $ds = null) {$/;"	f
__paginate	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$this->__paginate = $bool;$/;"	v
__paginate	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	private $__paginate = false;$/;"	v
__schema	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	private function __schema() {$/;"	f
_addDateConditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	protected function _addDateConditions($data, $from, $to, $conditions = array(), $column = null) {$/;"	f
_findCount	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	protected function _findCount($state, $query, $results = array()) {$/;"	f
actsAs	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public $actsAs = array('CustomContainable', 'CustomValidation');$/;"	v
beforeFind	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function beforeFind($queryData) {$/;"	f
changeColumnStatus	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function changeColumnStatus($id, $status, $column) {$/;"	f
changeStatus	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function changeStatus($id, $status) {$/;"	f
char	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";$/;"	v
column	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$column = $this->alias . '.created';$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^				$conditions = $keywordConditions;$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^				$conditions = $this->parseCriteria($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$conditions = $this->_addDateConditions($data, 'date_from', 'date_to', $conditions, $this->alias . '.created');$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$conditions = $Model->makeSearchConditions($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$conditions = $this->makeSearchConditions($keywords);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$conditions = $this->setRoleConditionsForAdmin($conditions, $Judge);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$conditions = array($this->alias . '.id' => $id);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$conditions = array();$/;"	v
data	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$data = array($/;"	v
data	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$data = $this->read($fields);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$data = explode("\\n", $data);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$data = preg_replace('\/(\\r\\n|\\r|\\n)\/', "\\n", $data);$/;"	v
date	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$date = date('Y-m-d H:i:s');$/;"	v
deleteTargetFile	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function deleteTargetFile($id, $fields) {$/;"	f
emailIdentification	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function emailIdentification($data) {$/;"	f
fields	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$fields = array($fields);$/;"	v
fields	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$fields = array($this->alias . '.' . $column  => $status);$/;"	v
fields	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$fields = array($this->alias . '.status' => $status);$/;"	v
fields	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$fields = array('ranking_count', 'show_count');$/;"	v
findAllNoModelName	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function findAllNoModelName($query = array()) {$/;"	f
getFizzyWords	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function getFizzyWords($keyword) {$/;"	f
getKeywordConditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function getKeywordConditions(&$data, $column = 'keyword', $conditions = array()) {$/;"	f
getRandomString	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function getRandomString($length = 7) {$/;"	f
getSearchConditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function getSearchConditions($data){$/;"	f
getStrCount	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function getStrCount($field = array(), $name, $data) {$/;"	f
hasManyMakeTmpImage	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function hasManyMakeTmpImage(&$data) {$/;"	f
id	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$this->id = $id;$/;"	v
isAllow	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function isAllow($id, $Judge, $conditions = array()) {$/;"	f
keyword	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$keyword = mb_ereg_replace('^[\\s　]*(.*?)[\\s　]*$', '\\1', $keyword);$/;"	v
keyword	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$keyword = mb_convert_kana($keyword, 's');$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$keywords = $this->spliteBySpaces($data[$column]);$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$keywords = array('KeywordAmbiguous' => array(array('word' => $keyword)));$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$keywords = $keywords['KeywordAmbiguous'];$/;"	v
keywords	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$keywords = $this->Keyword->find('first', array($/;"	v
makeSearchConditionsForAdmin	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function makeSearchConditionsForAdmin($data, $Judge) {$/;"	f
makeTmpImage	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function makeTmpImage(&$data) {$/;"	f
model	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$model = $this->alias;$/;"	v
now	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$this->now = date('Y-m-d H:i:s');$/;"	v
now	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public $now;$/;"	v
ret	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$ret = $this->makeTmpImage($tmp);$/;"	v
ret	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$ret = "";$/;"	v
return	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$return = array();$/;"	v
saveAllAuthenticity	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function saveAllAuthenticity($data = null, $options = array(), $user) {$/;"	f
sendMailForSc	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function sendMailForSc($Judge, $Email, $data = null, $user) {$/;"	f
setPaginate	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function setPaginate($bool = true) {$/;"	f
setRoleConditionsForAdmin	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function setRoleConditionsForAdmin($conditions, $Judge) {$/;"	f
setRoleConditionsForFront	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function setRoleConditionsForFront($conditions, $Judge, $model = null) {$/;"	f
setSearchRelatedConditions	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function setSearchRelatedConditions($data = null, $Judge) {$/;"	f
setUniqueUsername	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function setUniqueUsername() {$/;"	f
setValidate	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function setValidate($kind = null){$/;"	f
showCountAdding	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function showCountAdding($id) {$/;"	f
spliteBySpaces	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function spliteBySpaces($keyword) {$/;"	f
tmp	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$tmp = array($this->alias => $v);$/;"	v
unique	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$unique = function (&$Model, $str, $number = 0) use (&$unique) {$/;"	v
unmodifiedForAccept	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^	public function unmodifiedForAccept($data, $Judge) {$/;"	f
update	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^		$update = array();$/;"	v
user	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$user = $this->findById($data[$this->alias]['id']);$/;"	v
validate	/home/rikehata/www/nisshin/app/Model/AppModel.php	/^			$this->validate = $this->{$kind};$/;"	v
