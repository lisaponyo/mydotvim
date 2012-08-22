SeminarUser|||SeminarUser extends AppModel { <class>|||[I] SeminarUser.php|||c
User|||$User = ClassRegistry::init('User');|||[I] SeminarUser.php|||v
actsAs|||public $actsAs = array('Search.Searchable');|||[I] SeminarUser.php|||v
applicationRoute|||public $applicationRoute = array(|||[I] SeminarUser.php|||v
applicationStatus|||public $applicationStatus = array(|||[I] SeminarUser.php|||v
attendanceStatus|||public $attendanceStatus = array(|||[I] SeminarUser.php|||v
belongsTo|||public $belongsTo = array(|||[I] SeminarUser.php|||v
conditions|||$conditions = $this->_addDateConditions($data, 'date_from', 'date_to', $conditions, 'submission_date');|||[I] SeminarUser.php|||v
csvItems|||public $csvItems = array(|||[I] SeminarUser.php|||v
filterArgs|||public $filterArgs = array(|||[I] SeminarUser.php|||v
findForAdminCsv|||public function findForAdminCsv($conditions) {|||[I] SeminarUser.php|||f
makeSearchConditionsForAdmin|||public function makeSearchConditionsForAdmin($data) {|||[I] SeminarUser.php|||f
presetVars|||public $presetVars = array(|||[I] SeminarUser.php|||v
result|||$result = $this->find('all', $conditions);|||[I] SeminarUser.php|||v
searchUsername|||public function searchUsername($data = array()) {|||[I] SeminarUser.php|||f
setCsvFields|||public function setCsvFields($conditions) {|||[I] SeminarUser.php|||f
user|||$user = $User->findById($result[$k]['SeminarUser']['user_id']);|||[I] SeminarUser.php|||v
validate|||public $validate = array(|||[I] SeminarUser.php|||v
