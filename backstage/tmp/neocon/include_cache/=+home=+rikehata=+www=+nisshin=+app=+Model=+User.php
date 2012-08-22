User|||User extends AppModel { <class>|||[I] User.php|||c
UserRegist|||$UserRegist = ClassRegistry::init('UserRegist');|||[I] User.php|||v
acceptStatusEsousyoku|||public function acceptStatusEsousyoku($temporary_id){|||[I] User.php|||f
actsAs|||public $actsAs = array('Search.Searchable');|||[I] User.php|||v
attributeBusinesses|||public static $attributeBusinesses = array(|||[I] User.php|||v
beforeSave|||public function beforeSave() {|||[I] User.php|||f
belongsTo|||public $belongsTo = array(|||[I] User.php|||v
catalogTitle|||$catalogTitle = 'カタログについて【カタログID:' . $id . '】';|||[I] User.php|||v
child|||$child = $this->find('all', array('conditions' => array('User.user_id' => $data['User']['id'])));|||[I] User.php|||v
childAllDelete|||public function childAllDelete($id, $Email) {|||[I] User.php|||f
childSaveData|||public function childSaveData($email, $data, $updateMatching = null) {|||[I] User.php|||f
childs|||$childs = $this->find('all', array('conditions' => array('User.user_id' => $id)));|||[I] User.php|||v
conditions|||$conditions = $this->_addDateConditions($data, 'date_from', 'date_to', $conditions);|||[I] User.php|||v
csvItems|||public $csvItems = array(|||[I] User.php|||v
currentUser|||$this->currentUser = $user;|||[I] User.php|||v
data|||$data = $UserRegist->findByUserId($id);|||[I] User.php|||v
default|||$default = '';|||[I] User.php|||v
displayBusinesses|||public static $displayBusinesses = array(|||[I] User.php|||v
displayField|||public $displayField = 'name';|||[I] User.php|||v
fields|||$fields = array(|||[I] User.php|||v
filterArgs|||public $filterArgs = array(|||[I] User.php|||v
findCsvList|||function findCsvList($user) {|||[I] User.php|||f
findNisshinScList|||public function findNisshinScList() {|||[I] User.php|||f
findParentUsersByData|||public function findParentUsersByData($data) {|||[I] User.php|||f
flag|||flag|||[I] User.php|||v
getDefaultInquiryType|||public function getDefaultInquiryType($type) {|||[I] User.php|||f
hasAndBelongsToMany|||public $hasAndBelongsToMany = array(|||[I] User.php|||v
hasMany|||public $hasMany = array(|||[I] User.php|||v
hasOne|||public $hasOne = array(|||[I] User.php|||v
idNotice|||public function idNotice($data) {|||[I] User.php|||f
invalidData|||public function invalidData($email, $id){|||[I] User.php|||f
isEdit|||$isEdit = (!empty($data[$this->alias]['id'])) ? true : false;|||[I] User.php|||v
isParent|||public function isParent($id, $parent_id) {|||[I] User.php|||f
isParentUser|||public function isParentUser($id) {|||[I] User.php|||f
isSending|||public function isSending($pre, $isEdit){|||[I] User.php|||f
isSuccess|||$isSuccess = true;|||[I] User.php|||v
kayserFlags|||public static $kayserFlags = array(|||[I] User.php|||v
loginId|||loginId|||[I] User.php|||v
mail|||$mail = 'User/pay_information';|||[I] User.php|||v
mailMagazineFlag|||public static $mailMagazineFlag = array(|||[I] User.php|||v
mailMagazineFlags|||public static $mailMagazineFlags = array(|||[I] User.php|||v
makeConditions|||public function makeConditions($data){|||[I] User.php|||f
makeConditionsForAdmin|||public function makeConditionsForAdmin($data, $id = null, $child = false) {|||[I] User.php|||f
makeInquiry|||public function makeInquiry($result, $User, $Email) {|||[I] User.php|||f
makeInquiryTitles|||public function makeInquiryTitles($id = null, $type = null, $title_id = null) {|||[I] User.php|||f
makeResult|||public function makeResult($result) {|||[I] User.php|||f
makeSearchConditionsCompanyUserForAdmin|||public function makeSearchConditionsCompanyUserForAdmin($data) {|||[I] User.php|||f
makeSearchConditionsNissinUserForAdmin|||public function makeSearchConditionsNissinUserForAdmin($data) {|||[I] User.php|||f
monthlyQuantityPurchaseBreadMix|||public static $monthlyQuantityPurchaseBreadMix = array(|||[I] User.php|||v
monthlyQuantityPurchaseFlour|||public static $monthlyQuantityPurchaseFlour = array(|||[I] User.php|||v
name|||$name = $v;|||[I] User.php|||v
parent|||$parent = $this->findById($parent_id);|||[I] User.php|||v
parent_id|||parent_id|||[I] User.php|||v
passwordIdentification|||public function passwordIdentification($data) {|||[I] User.php|||f
passwordReissue|||public function passwordReissue($data) {|||[I] User.php|||f
paymentMethods|||public static $paymentMethods = array(|||[I] User.php|||v
prerogativeStatuses|||public static $prerogativeStatuses = array(|||[I] User.php|||v
presetVars|||public $presetVars = array(|||[I] User.php|||v
publicStatuses|||public static $publicStatuses = array(|||[I] User.php|||v
qaTitle|||$qaTitle = 'Q&Aについて【Q&AID:' . $id . '】';|||[I] User.php|||v
ranks|||public static $ranks = array(|||[I] User.php|||v
recipeTitle|||$recipeTitle = 'レシピについて【レシピID:' . $id . '】';|||[I] User.php|||v
result|||$result = $this->find('all', array('conditions' => array('user_id' => $id)));|||[I] User.php|||v
roles|||public static $roles = array(|||[I] User.php|||v
saveAndSendMail|||public function saveAndSendMail($data, $Email, $mail, $user = null){|||[I] User.php|||f
saveData|||$saveData = $this->findById($this->data['User']['id']);|||[I] User.php|||v
sendMail|||public function sendMail($email, $data, $parent, $pre) {|||[I] User.php|||f
sendPaymentMail|||public function sendPaymentMail($id, $email){|||[I] User.php|||f
send_statuses|||public static $send_statuses = array(|||[I] User.php|||v
setCsvFields|||public function setCsvFields($conditions) {|||[I] User.php|||f
setCurrentUser|||public function setCurrentUser($user) {|||[I] User.php|||f
setNisshinUserRegistData|||public function setNisshinUserRegistData($data) {|||[I] User.php|||f
statusAdminEsousyoku|||public static $statusAdminEsousyoku = array(|||[I] User.php|||v
statusEsousyoku|||public static $statusEsousyoku = array(|||[I] User.php|||v
statusRetail|||public static $statusRetail = array(|||[I] User.php|||v
temp|||$temp = $UserRegist->findByTemporaryId($temporary_id);|||[I] User.php|||v
template|||$template = 'User/release_child';|||[I] User.php|||v
testFlags|||public static $testFlags = array(|||[I] User.php|||v
titles|||titles|||[I] User.php|||v
uniqueEmail|||public function uniqueEmail($data) {|||[I] User.php|||f
unsetValidate|||public function unsetValidate() {|||[I] User.php|||f
updateAccept|||public function updateAccept($id) {|||[I] User.php|||f
updateMatching|||public function updateMatching($id, $user_id, $flag, $email) {|||[I] User.php|||f
updateNotAccept|||public function updateNotAccept($id) {|||[I] User.php|||f
user|||$user = $this->findById($id);|||[I] User.php|||v
validPasswordOld|||public function validPasswordOld($value) {|||[I] User.php|||f
validate|||public $validate = array(|||[I] User.php|||v
validateEditUser|||public $validateEditUser = array(|||[I] User.php|||v
validateIdNotice|||public $validateIdNotice = array(|||[I] User.php|||v
validateInquiry|||public $validateInquiry = array(|||[I] User.php|||v
validatePasswordReissue|||public $validatePasswordReissue = array(|||[I] User.php|||v
value|||$value = array_shift($value);|||[I] User.php|||v
working|||$working = true;|||[I] User.php|||v
