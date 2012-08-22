Affiliation|||$Affiliation = ClassRegistry::init('Affiliation');|||[I] Community.php|||v
Community|||Community extends AppModel { <class>|||[I] Community.php|||c
actsAs|||public $actsAs = array(|||[I] Community.php|||v
belongsTo|||public $belongsTo = array(|||[I] Community.php|||v
communityAdminConditions|||public function communityAdminConditions($data = array()){|||[I] Community.php|||f
conditions|||$conditions = $keywordConditions;|||[I] Community.php|||v
filterArgs|||public $filterArgs = array(|||[I] Community.php|||v
findContents|||public function findContents($data, $Judge = null) {|||[I] Community.php|||f
getCommunityCount|||public function getCommunityCount() {|||[I] Community.php|||f
getCommunityDetail|||public function getCommunityDetail($communityId, $user) {|||[I] Community.php|||f
getSearchConditions|||public function getSearchConditions($data){|||[I] Community.php|||f
hasMany|||public $hasMany = array(|||[I] Community.php|||v
keyword|||$keyword = $keyword['word'];|||[I] Community.php|||v
keywords|||$keywords = $this->getFizzyWords($data['keyword']);|||[I] Community.php|||v
makeResult|||public function makeResult($result, $Judge, $user = null) {|||[I] Community.php|||f
makeSearchConditions|||public function makeSearchConditions($data, $Judge = null){|||[I] Community.php|||f
makeSearchConditionsForAdmin|||public function makeSearchConditionsForAdmin($data, $Judge) {|||[I] Community.php|||f
makeSearchConditionsForFront|||public function makeSearchConditionsForFront($data, $Judge) {|||[I] Community.php|||f
orConditions|||public function orConditions($data = array()) {|||[I] Community.php|||f
presetVars|||public $presetVars = array(|||[I] Community.php|||v
publicStatus|||public static $publicStatus = array(|||[I] Community.php|||v
validate|||public $validate = array(|||[I] Community.php|||v
