!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
Question	/home/rikehata/www/nisshin/app/Model/Question.php	/^class Question extends AppModel {$/;"	c
belongsTo	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $belongsTo = array($/;"	v
categories	/home/rikehata/www/nisshin/app/Model/Question.php	/^				$categories = $this->QuestionCategory->find('all', array($/;"	v
category	/home/rikehata/www/nisshin/app/Model/Question.php	/^				$category = end($categories);$/;"	v
category	/home/rikehata/www/nisshin/app/Model/Question.php	/^		$category = $this->QuestionCategory->find('first', array($/;"	v
csv	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $csv = array($/;"	v
csvData	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public function csvData($columns, $cols) {$/;"	f
data	/home/rikehata/www/nisshin/app/Model/Question.php	/^		$data = explode('　', $data);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Question.php	/^		$data = mb_ereg_replace('^[\\s　]*(.*?)[\\s　]*$', '\\1', $data);$/;"	v
date	/home/rikehata/www/nisshin/app/Model/Question.php	/^		$date = date('Y-m-d H:i:s');$/;"	v
displayField	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $displayField = 'name';$/;"	v
getIntBetween	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public function getIntBetween($data, $field_name, $min, $max) {$/;"	f
hasAndBelongsToMany	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $hasAndBelongsToMany = array($/;"	v
hasMany	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $hasMany = array($/;"	v
inquiryCategoryKind	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $inquiryCategoryKind = array($/;"	v
makeCategoryId	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public function makeCategoryId($data, $kinds) {$/;"	f
makeResult	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public function makeResult($result, $user = null) {$/;"	f
newFlag	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public static $newFlag = array($/;"	v
productCategoryKind	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $productCategoryKind = array($/;"	v
publicRole	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public static $publicRole = array($/;"	v
publicStatus	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public static $publicStatus = array($/;"	v
result	/home/rikehata/www/nisshin/app/Model/Question.php	/^		$result = array();$/;"	v
setCsvFields	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public function setCsvFields($conditions) {$/;"	f
topFlag	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public static $topFlag = array($/;"	v
validate	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $validate = array($/;"	v
validateCsv	/home/rikehata/www/nisshin/app/Model/Question.php	/^	public $validateCsv = array($/;"	v
