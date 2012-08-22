!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
User	/home/rikehata/www/nisshin/app/Model/User.php	/^class User extends AppModel {$/;"	c
UserRegist	/home/rikehata/www/nisshin/app/Model/User.php	/^		$UserRegist = ClassRegistry::init('UserRegist');$/;"	v
acceptStatusEsousyoku	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function acceptStatusEsousyoku($temporary_id){$/;"	f
actsAs	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $actsAs = array('Search.Searchable');$/;"	v
attributeBusinesses	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $attributeBusinesses = array($/;"	v
beforeSave	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function beforeSave() {$/;"	f
belongsTo	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $belongsTo = array($/;"	v
catalogTitle	/home/rikehata/www/nisshin/app/Model/User.php	/^			$catalogTitle = 'カタログについて【カタログID:' . $id . '】';$/;"	v
catalogTitle	/home/rikehata/www/nisshin/app/Model/User.php	/^		$catalogTitle = 'カタログについて';$/;"	v
child	/home/rikehata/www/nisshin/app/Model/User.php	/^		$child = $this->find('all', array('conditions' => array('User.user_id' => $data['User']['id'])));$/;"	v
child	/home/rikehata/www/nisshin/app/Model/User.php	/^		$child = $this->findById($user_id);$/;"	v
childAllDelete	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function childAllDelete($id, $Email) {$/;"	f
childSaveData	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function childSaveData($email, $data, $updateMatching = null) {$/;"	f
childs	/home/rikehata/www/nisshin/app/Model/User.php	/^		$childs = $this->find('all', array('conditions' => array('User.user_id' => $id)));$/;"	v
cmd	/home/rikehata/www/nisshin/app/Model/User.php	/^		$cmd = "\/bin\/ls -t " . USER_CSV_FILE_SAVE_DIR;$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/User.php	/^		$conditions = $this->_addDateConditions($data, 'date_from', 'date_to', $conditions);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/User.php	/^		$conditions = $this->_addDateConditions($data, 'update_from', 'update_to', $conditions, $this->alias . '.update');$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/User.php	/^		$conditions = $this->makeConditions($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/User.php	/^		$conditions = $this->parseCriteria($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/User.php	/^		$conditions = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/User.php	/^		$conditions = array($this->alias . '.id IN (' . implode(',', $ids) . ')');$/;"	v
csv	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $csv = array($/;"	v
csvItems	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $csvItems = array($/;"	v
currentUser	/home/rikehata/www/nisshin/app/Model/User.php	/^		$this->currentUser = $user;$/;"	v
data	/home/rikehata/www/nisshin/app/Model/User.php	/^			$data = $UserRegist->findByUserId($id);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/User.php	/^			$data = $UserRegist->saveTemporary($data);$/;"	v
data	/home/rikehata/www/nisshin/app/Model/User.php	/^			$data = $this->findById($pre['User']['id']);$/;"	v
default	/home/rikehata/www/nisshin/app/Model/User.php	/^			$default = '';$/;"	v
default	/home/rikehata/www/nisshin/app/Model/User.php	/^			$default = '1';$/;"	v
default	/home/rikehata/www/nisshin/app/Model/User.php	/^			$default = '5';$/;"	v
default	/home/rikehata/www/nisshin/app/Model/User.php	/^			$default = '6';$/;"	v
default	/home/rikehata/www/nisshin/app/Model/User.php	/^			$default = '7';$/;"	v
displayBusinesses	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $displayBusinesses = array($/;"	v
displayField	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $displayField = 'name';$/;"	v
fields	/home/rikehata/www/nisshin/app/Model/User.php	/^		$fields = array($/;"	v
filterArgs	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $filterArgs = array($/;"	v
findCsvList	/home/rikehata/www/nisshin/app/Model/User.php	/^	function findCsvList($user) {$/;"	f
findNisshinScList	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function findNisshinScList() {$/;"	f
findParentUsersByData	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function findParentUsersByData($data) {$/;"	f
flag	/home/rikehata/www/nisshin/app/Model/User.php	/^		$flag = ($flag == 1) ? true : false;$/;"	v
getDefaultInquiryType	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function getDefaultInquiryType($type) {$/;"	f
hasAndBelongsToMany	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $hasAndBelongsToMany = array($/;"	v
hasMany	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $hasMany = array($/;"	v
hasOne	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $hasOne = array($/;"	v
id	/home/rikehata/www/nisshin/app/Model/User.php	/^			$id = COMPANY_ID_NISSHIN;$/;"	v
id	/home/rikehata/www/nisshin/app/Model/User.php	/^			$this->id = $user_id;$/;"	v
id	/home/rikehata/www/nisshin/app/Model/User.php	/^		$id = COMPANY_ID_NISSHIN_STAFF;$/;"	v
id	/home/rikehata/www/nisshin/app/Model/User.php	/^		$this->id = $id;$/;"	v
id	/home/rikehata/www/nisshin/app/Model/User.php	/^		$this->id = $user_id;$/;"	v
idNotice	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function idNotice($data) {$/;"	f
ids	/home/rikehata/www/nisshin/app/Model/User.php	/^		$ids = array();$/;"	v
invalidData	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function invalidData($email, $id){$/;"	f
isEdit	/home/rikehata/www/nisshin/app/Model/User.php	/^		$isEdit = (!empty($data[$this->alias]['id'])) ? true : false;$/;"	v
isParent	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function isParent($id, $parent_id) {$/;"	f
isParentUser	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function isParentUser($id) {$/;"	f
isSending	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function isSending($pre, $isEdit){$/;"	f
isSuccess	/home/rikehata/www/nisshin/app/Model/User.php	/^		$isSuccess = true;$/;"	v
kayserFlags	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $kayserFlags = array($/;"	v
loginId	/home/rikehata/www/nisshin/app/Model/User.php	/^				$loginId = $loginId[0];$/;"	v
loginId	/home/rikehata/www/nisshin/app/Model/User.php	/^				$loginId = explode('.', $v[1]);$/;"	v
mail	/home/rikehata/www/nisshin/app/Model/User.php	/^			$mail = 'User\/pay_information';$/;"	v
mail	/home/rikehata/www/nisshin/app/Model/User.php	/^			$mail = 'User\/pay_information_members';$/;"	v
mailMagazineFlag	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $mailMagazineFlag = array($/;"	v
mailMagazineFlags	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $mailMagazineFlags = array($/;"	v
makeConditions	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function makeConditions($data){$/;"	f
makeConditionsForAdmin	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function makeConditionsForAdmin($data, $id = null, $child = false) {$/;"	f
makeInquiry	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function makeInquiry($result, $User, $Email) {$/;"	f
makeInquiryTitles	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function makeInquiryTitles($id = null, $type = null, $title_id = null) {$/;"	f
makeResult	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function makeResult($result) {$/;"	f
makeSearchConditionsCompanyUserForAdmin	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function makeSearchConditionsCompanyUserForAdmin($data) {$/;"	f
makeSearchConditionsNissinUserForAdmin	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function makeSearchConditionsNissinUserForAdmin($data) {$/;"	f
monthlyQuantityPurchaseBreadMix	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $monthlyQuantityPurchaseBreadMix = array($/;"	v
monthlyQuantityPurchaseFlour	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $monthlyQuantityPurchaseFlour = array($/;"	v
name	/home/rikehata/www/nisshin/app/Model/User.php	/^			$name = $v;$/;"	v
parent	/home/rikehata/www/nisshin/app/Model/User.php	/^		$parent = $this->findById($parent_id);$/;"	v
parent_id	/home/rikehata/www/nisshin/app/Model/User.php	/^		$parent_id = ($flag) ? $id : 0;$/;"	v
passwordIdentification	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function passwordIdentification($data) {$/;"	f
passwordReissue	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function passwordReissue($data) {$/;"	f
paymentMethods	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $paymentMethods = array($/;"	v
pre	/home/rikehata/www/nisshin/app/Model/User.php	/^		$pre = $this->findById($data['User']['id']);$/;"	v
prerogativeStatuses	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $prerogativeStatuses = array($/;"	v
presetVars	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $presetVars = array($/;"	v
publicStatuses	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $publicStatuses = array($/;"	v
qaTitle	/home/rikehata/www/nisshin/app/Model/User.php	/^			$qaTitle = 'Q&Aについて【Q&AID:' . $id . '】';$/;"	v
qaTitle	/home/rikehata/www/nisshin/app/Model/User.php	/^		$qaTitle = 'Q&Aについて';$/;"	v
ranks	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $ranks = array($/;"	v
recipeTitle	/home/rikehata/www/nisshin/app/Model/User.php	/^			$recipeTitle = 'レシピについて【レシピID:' . $id . '】';$/;"	v
recipeTitle	/home/rikehata/www/nisshin/app/Model/User.php	/^		$recipeTitle = 'レシピについて';$/;"	v
result	/home/rikehata/www/nisshin/app/Model/User.php	/^		$result = $this->find('all', array('conditions' => array('user_id' => $id)));$/;"	v
result	/home/rikehata/www/nisshin/app/Model/User.php	/^		$result = $this->find('first', $conditions);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/User.php	/^		$result = $this->setUniqueUsername();$/;"	v
ret	/home/rikehata/www/nisshin/app/Model/User.php	/^		$ret = array();$/;"	v
roles	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $roles = array($/;"	v
saveAndSendMail	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function saveAndSendMail($data, $Email, $mail, $user = null){$/;"	f
saveData	/home/rikehata/www/nisshin/app/Model/User.php	/^			$saveData = $this->findById($this->data['User']['id']);$/;"	v
saveData	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function saveData($Email, $data, $user) {$/;"	f
sendMail	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function sendMail($email, $data, $parent, $pre) {$/;"	f
sendPaymentMail	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function sendPaymentMail($id, $email){$/;"	f
send_statuses	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $send_statuses = array($/;"	v
setCsvFields	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function setCsvFields($conditions) {$/;"	f
setCurrentUser	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function setCurrentUser($user) {$/;"	f
setNisshinUserRegistData	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function setNisshinUserRegistData($data) {$/;"	f
statusAdminEsousyoku	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $statusAdminEsousyoku = array($/;"	v
statusEsousyoku	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $statusEsousyoku = array($/;"	v
statusRetail	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $statusRetail = array($/;"	v
temp	/home/rikehata/www/nisshin/app/Model/User.php	/^		$temp = $UserRegist->findByTemporaryId($temporary_id);$/;"	v
template	/home/rikehata/www/nisshin/app/Model/User.php	/^			$template = 'User\/release_child';$/;"	v
template	/home/rikehata/www/nisshin/app/Model/User.php	/^			$template = 'User\/status_child';$/;"	v
testFlags	/home/rikehata/www/nisshin/app/Model/User.php	/^	public static $testFlags = array($/;"	v
titles	/home/rikehata/www/nisshin/app/Model/User.php	/^		$titles = array('1' => '会員の登録・変更・退会について', '2' => '日清製粉製品', '3' => '参加カンパニー製品', '4' => '小麦粉等取引先', '5' => $recipeTitle, '6' => $catalogTitle, '7' => $qaTitle, '8' => 'その他');$/;"	v
uniqueEmail	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function uniqueEmail($data) {$/;"	f
unsetValidate	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function unsetValidate() {$/;"	f
updateAccept	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function updateAccept($id) {$/;"	f
updateMatching	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function updateMatching($id, $user_id, $flag, $email) {$/;"	f
updateNotAccept	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function updateNotAccept($id) {$/;"	f
user	/home/rikehata/www/nisshin/app/Model/User.php	/^		$user = $this->findById($id);$/;"	v
user	/home/rikehata/www/nisshin/app/Model/User.php	/^		$user = $this->findById($temp['UserRegist']['user_id']);$/;"	v
user	/home/rikehata/www/nisshin/app/Model/User.php	/^		$user = $this->findByUserId($id);$/;"	v
v	/home/rikehata/www/nisshin/app/Model/User.php	/^			$v = explode('_', $v);$/;"	v
validPasswordOld	/home/rikehata/www/nisshin/app/Model/User.php	/^	public function validPasswordOld($value) {$/;"	f
validate	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $validate = array($/;"	v
validateEditUser	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $validateEditUser = array($/;"	v
validateIdNotice	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $validateIdNotice = array($/;"	v
validateInquiry	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $validateInquiry = array($/;"	v
validatePasswordReissue	/home/rikehata/www/nisshin/app/Model/User.php	/^	public $validatePasswordReissue = array($/;"	v
value	/home/rikehata/www/nisshin/app/Model/User.php	/^		$value = array_shift($value);$/;"	v
working	/home/rikehata/www/nisshin/app/Model/User.php	/^				$working = true;$/;"	v
working	/home/rikehata/www/nisshin/app/Model/User.php	/^		$working = false;$/;"	v
