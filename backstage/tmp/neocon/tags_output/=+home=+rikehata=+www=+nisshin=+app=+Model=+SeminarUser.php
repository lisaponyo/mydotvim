!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
D	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^			$D = new DateTime($v['SeminarUser']['submission_date']);$/;"	v
SeminarUser	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^class SeminarUser extends AppModel {$/;"	c
User	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^		$User = ClassRegistry::init('User');$/;"	v
actsAs	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $actsAs = array('Search.Searchable');$/;"	v
applicationRoute	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $applicationRoute = array($/;"	v
applicationStatus	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $applicationStatus = array($/;"	v
attendanceStatus	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $attendanceStatus = array($/;"	v
belongsTo	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $belongsTo = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^		$conditions = $this->_addDateConditions($data, 'date_from', 'date_to', $conditions, 'submission_date');$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^		$conditions = $this->parseCriteria($data);$/;"	v
csvItems	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $csvItems = array($/;"	v
filterArgs	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $filterArgs = array($/;"	v
findForAdminCsv	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public function findForAdminCsv($conditions) {$/;"	f
makeSearchConditionsForAdmin	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public function makeSearchConditionsForAdmin($data) {$/;"	f
presetVars	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $presetVars = array($/;"	v
result	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^		$result = $this->find('all', $conditions);$/;"	v
searchUsername	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public function searchUsername($data = array()) {$/;"	f
setCsvFields	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public function setCsvFields($conditions) {$/;"	f
user	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^			$user = $User->findById($result[$k]['SeminarUser']['user_id']);$/;"	v
user	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^		$user = $User->find('first', array('conditions' => array('username' => $data['user_id'])));$/;"	v
validate	/home/rikehata/www/nisshin/app/Model/SeminarUser.php	/^	public $validate = array($/;"	v
