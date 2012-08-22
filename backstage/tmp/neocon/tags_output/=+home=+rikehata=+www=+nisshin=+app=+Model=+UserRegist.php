!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
User	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^		$User = ClassRegistry::init('User');$/;"	v
UserRegist	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^class UserRegist extends AppModel {$/;"	c
acceptPremier	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function acceptPremier($id) {$/;"	f
flag	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^				$flag = true;$/;"	v
flag	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^		$flag = false;$/;"	v
hasMany	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public $hasMany = array($/;"	v
regist	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^		$regist = array($/;"	v
result	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^		$result = $User->findById($result[$this->alias]['user_id']);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^		$result = $this->find('first', array('conditions' => array('temporary_id' => $temporaryId)));$/;"	v
save	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^			$save = $this->saveTemporary($save);$/;"	v
save	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^			$save = array($this->alias => array($/;"	v
saveAllFreeTemporary	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function saveAllFreeTemporary(&$data) {$/;"	f
saveAllPremierRequest	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function saveAllPremierRequest($user, $data) {$/;"	f
saveAllPremierTemporary	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function saveAllPremierTemporary(&$data) {$/;"	f
saveInviteChilds	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function saveInviteChilds($data, $user_id, $Email) {$/;"	f
savePremierChild	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function savePremierChild($data, $temporaryId, $user) {$/;"	f
saveTemporary	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function saveTemporary($data) {$/;"	f
user_regist	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^		$user_regist = $this->findByTemporaryId($data['UserRegist']['temporary_id']);$/;"	v
user_regist_id	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^		$user_regist_id = $result['UserRegist']['id'];$/;"	v
validAllEmpty	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public function validAllEmpty($data) {$/;"	f
validate	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public $validate = array($/;"	v
validateChildInvite	/home/rikehata/www/nisshin/app/Model/UserRegist.php	/^	public $validateChildInvite = array($/;"	v
