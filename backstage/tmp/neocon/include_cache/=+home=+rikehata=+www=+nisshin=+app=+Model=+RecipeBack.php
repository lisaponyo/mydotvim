Recipe|||Recipe extends AppModel { <class>|||[I] RecipeBack.php|||c
actsAs|||public $actsAs = array(|||[I] RecipeBack.php|||v
beforeSave|||public function beforeSave() {|||[I] RecipeBack.php|||f
belongsTo|||public $belongsTo = array(|||[I] RecipeBack.php|||v
conditions|||$conditions = $this->_addDateConditions($data, 'date_from', 'date_to', $conditions, 'Recipe.created');|||[I] RecipeBack.php|||v
filterArgs|||public $filterArgs = array(|||[I] RecipeBack.php|||v
hasAndBelongsToMany|||public $hasAndBelongsToMany = array(|||[I] RecipeBack.php|||v
hasMany|||public $hasMany = array(|||[I] RecipeBack.php|||v
htmlFlag|||public static $htmlFlag = array(|||[I] RecipeBack.php|||v
keyword|||$keyword = $data['keyword'];|||[I] RecipeBack.php|||v
makeConditions|||public function makeConditions($data){|||[I] RecipeBack.php|||f
makeSearchConditions|||public function makeSearchConditions($data){|||[I] RecipeBack.php|||f
newFlag|||public static $newFlag = array(|||[I] RecipeBack.php|||v
orConditions|||public function orConditions($data = array() ){|||[I] RecipeBack.php|||f
presetVars|||public $presetVars = array(|||[I] RecipeBack.php|||v
publicRole|||public static $publicRole = array(|||[I] RecipeBack.php|||v
publicStatus|||public static $publicStatus = array(|||[I] RecipeBack.php|||v
query|||$query = $this->EventsRecipe->getQuery('all', array(|||[I] RecipeBack.php|||v
recommendMonth|||public static $recommendMonth = array(|||[I] RecipeBack.php|||v
searchByEvents|||public function searchByEvents($data = array()){|||[I] RecipeBack.php|||f
topFlag|||public static $topFlag = array(|||[I] RecipeBack.php|||v
validate|||public $validate = array(|||[I] RecipeBack.php|||v
validateEmail|||public $validateEmail = array(|||[I] RecipeBack.php|||v
