Question|||Question extends AppModel { <class>|||[I] Question.php|||c
belongsTo|||public $belongsTo = array(|||[I] Question.php|||v
categories|||$categories = $this->QuestionCategory->find('all', array(|||[I] Question.php|||v
category|||$category = end($categories);|||[I] Question.php|||v
csvData|||public function csvData($columns, $cols) {|||[I] Question.php|||f
data|||$data = explode('　', $data);|||[I] Question.php|||v
date|||$date = date('Y-m-d H:i:s');|||[I] Question.php|||v
displayField|||public $displayField = 'name';|||[I] Question.php|||v
getIntBetween|||public function getIntBetween($data, $field_name, $min, $max) {|||[I] Question.php|||f
hasAndBelongsToMany|||public $hasAndBelongsToMany = array(|||[I] Question.php|||v
hasMany|||public $hasMany = array(|||[I] Question.php|||v
inquiryCategoryKind|||public $inquiryCategoryKind = array(|||[I] Question.php|||v
makeCategoryId|||public function makeCategoryId($data, $kinds) {|||[I] Question.php|||f
makeResult|||public function makeResult($result, $user = null) {|||[I] Question.php|||f
newFlag|||public static $newFlag = array(|||[I] Question.php|||v
productCategoryKind|||public $productCategoryKind = array(|||[I] Question.php|||v
publicRole|||public static $publicRole = array(|||[I] Question.php|||v
publicStatus|||public static $publicStatus = array(|||[I] Question.php|||v
result|||$result = array();|||[I] Question.php|||v
setCsvFields|||public function setCsvFields($conditions) {|||[I] Question.php|||f
topFlag|||public static $topFlag = array(|||[I] Question.php|||v
validate|||public $validate = array(|||[I] Question.php|||v
validateCsv|||public $validateCsv = array(|||[I] Question.php|||v
