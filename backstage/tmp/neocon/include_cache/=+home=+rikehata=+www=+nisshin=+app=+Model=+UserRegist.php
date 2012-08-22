User|||$User = ClassRegistry::init('User');|||[I] UserRegist.php|||v
UserRegist|||UserRegist extends AppModel { <class>|||[I] UserRegist.php|||c
acceptPremier|||public function acceptPremier($id) {|||[I] UserRegist.php|||f
flag|||$flag = true;|||[I] UserRegist.php|||v
hasMany|||public $hasMany = array(|||[I] UserRegist.php|||v
regist|||$regist = array(|||[I] UserRegist.php|||v
result|||$result = $User->findById($result[$this->alias]['user_id']);|||[I] UserRegist.php|||v
save|||$save = $this->saveTemporary($save);|||[I] UserRegist.php|||v
saveAllFreeTemporary|||public function saveAllFreeTemporary(&$data) {|||[I] UserRegist.php|||f
saveAllPremierRequest|||public function saveAllPremierRequest($user, $data) {|||[I] UserRegist.php|||f
saveAllPremierTemporary|||public function saveAllPremierTemporary(&$data) {|||[I] UserRegist.php|||f
saveInviteChilds|||public function saveInviteChilds($data, $user_id, $Email) {|||[I] UserRegist.php|||f
savePremierChild|||public function savePremierChild($data, $temporaryId, $user) {|||[I] UserRegist.php|||f
saveTemporary|||public function saveTemporary($data) {|||[I] UserRegist.php|||f
user_regist|||$user_regist = $this->findByTemporaryId($data['UserRegist']['temporary_id']);|||[I] UserRegist.php|||v
user_regist_id|||$user_regist_id = $result['UserRegist']['id'];|||[I] UserRegist.php|||v
validAllEmpty|||public function validAllEmpty($data) {|||[I] UserRegist.php|||f
validate|||public $validate = array(|||[I] UserRegist.php|||v
validateChildInvite|||public $validateChildInvite = array(|||[I] UserRegist.php|||v
