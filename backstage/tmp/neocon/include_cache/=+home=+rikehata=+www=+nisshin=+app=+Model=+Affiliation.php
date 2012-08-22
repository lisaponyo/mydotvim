Affiliation|||Affiliation extends AppModel { <class>|||[I] Affiliation.php|||c
Community|||$Community = ClassRegistry::init('Community');|||[I] Affiliation.php|||v
CommunityUser|||$CommunityUser = ClassRegistry::init('CommunityUser');|||[I] Affiliation.php|||v
User|||$User = ClassRegistry::init('User');|||[I] Affiliation.php|||v
addAllMemberCount|||public function addAllMemberCount($data) {|||[I] Affiliation.php|||f
alias|||$this->alias => array(|||[I] Affiliation.php|||v
belongsTo|||public $belongsTo = array(|||[I] Affiliation.php|||v
changeCondition|||public function changeCondition($communityId, $usernames, $condition) {|||[I] Affiliation.php|||f
changeMailReceiveFlag|||public function changeMailReceiveFlag($communityUserId, $communityId) {|||[I] Affiliation.php|||f
communityId|||$communityId = $val['Community']['id'];|||[I] Affiliation.php|||v
communityUserData|||$communityUserData = $CommunityUser->findByUserId($userData['User']['id']);|||[I] Affiliation.php|||v
conditions|||$conditions = array(|||[I] Affiliation.php|||v
csvDataCheck|||public function csvDataCheck($communityId, $cols) {|||[I] Affiliation.php|||f
data|||$data = array(|||[I] Affiliation.php|||v
filepath|||$filepath = COMMUNITY_INVITE_MAILQ_FILE_UPLOAD_DIR . date('YmdHis') . uniqid();|||[I] Affiliation.php|||v
findForAdmin|||public function findForAdmin($communityId) {|||[I] Affiliation.php|||f
getCommunityIdForSide|||public function getCommunityIdForSide($communityUserId) {|||[I] Affiliation.php|||f
getInvitationDataForSide|||public function getInvitationDataForSide($user) {|||[I] Affiliation.php|||f
getMemberCount|||public function getMemberCount($communityId = null) {|||[I] Affiliation.php|||f
getMemberData|||public function getMemberData($communityId) {|||[I] Affiliation.php|||f
getPreviousMemberCount|||public function getPreviousMemberCount() {|||[I] Affiliation.php|||f
isInvitation|||public function isInvitation($communityId, $user, $participated = false) {|||[I] Affiliation.php|||f
isMember|||public function isMember($communityId, $user) {|||[I] Affiliation.php|||f
mailAddresses|||$mailAddresses = array();|||[I] Affiliation.php|||v
makeConditionForCommunityList|||public function makeConditionForCommunityList($user) {|||[I] Affiliation.php|||f
makeConditionForMemberData|||public function makeConditionForMemberData($communityId) {|||[I] Affiliation.php|||f
makeConditionForMemberList|||public function makeConditionForMemberList($communityId) {|||[I] Affiliation.php|||f
memberAdd|||public function memberAdd($communityId, $user) {|||[I] Affiliation.php|||f
memberDelete|||public function memberDelete($communityId, $user) {|||[I] Affiliation.php|||f
memberDenial|||public function memberDenial($communityId, $user) {|||[I] Affiliation.php|||f
participateCommunity|||public function participateCommunity($user) {|||[I] Affiliation.php|||f
result|||$result = false;|||[I] Affiliation.php|||v
userData|||$userData = $User->find('first', array('contain' => 'CommunityUser', 'conditions' => array('username' => $username)));|||[I] Affiliation.php|||v
validateCsv|||public $validateCsv = array(|||[I] Affiliation.php|||v
writeEmailqFile|||public function writeEmailqFile($mailAddresses) {|||[I] Affiliation.php|||f
