!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
Affiliation	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^class Affiliation extends AppModel {$/;"	c
Community	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$Community = ClassRegistry::init('Community');$/;"	v
CommunityUser	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$CommunityUser = ClassRegistry::init('CommunityUser');$/;"	v
User	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$User = ClassRegistry::init('User');$/;"	v
addAllMemberCount	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function addAllMemberCount($data) {$/;"	f
alias	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^					$this->alias => array($/;"	v
belongsTo	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public $belongsTo = array($/;"	v
changeCondition	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function changeCondition($communityId, $usernames, $condition) {$/;"	f
changeMailReceiveFlag	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function changeMailReceiveFlag($communityUserId, $communityId) {$/;"	f
communityId	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$communityId = $val['Community']['id'];$/;"	v
communityUserData	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$communityUserData = $CommunityUser->findByUserId($userData['User']['id']);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$conditions = array($/;"	v
conditions	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$conditions = array($/;"	v
csv	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public $csv = array($/;"	v
csvDataCheck	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function csvDataCheck($communityId, $cols) {$/;"	f
data	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^				$data = array($/;"	v
data	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$data = $this->find('first', array('conditions' => array('community_id' => $communityId, 'community_user_id' => $userData['CommunityUser']['id'])));$/;"	v
data	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$data = $this->find('first', array('conditions' => array('community_user_id' => $communityUserId, 'community_id' => $communityId)));$/;"	v
filepath	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$filepath = COMMUNITY_INVITE_MAILQ_FILE_UPLOAD_DIR . date('YmdHis') . uniqid();$/;"	v
findForAdmin	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function findForAdmin($communityId) {$/;"	f
fp	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$fp = fopen($filepath, 'a');$/;"	v
getCommunityIdForSide	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function getCommunityIdForSide($communityUserId) {$/;"	f
getInvitationDataForSide	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function getInvitationDataForSide($user) {$/;"	f
getMemberCount	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function getMemberCount($communityId = null) {$/;"	f
getMemberData	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function getMemberData($communityId) {$/;"	f
getPreviousMemberCount	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function getPreviousMemberCount() {$/;"	f
isInvitation	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function isInvitation($communityId, $user, $participated = false) {$/;"	f
isMember	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function isMember($communityId, $user) {$/;"	f
mailAddresses	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$mailAddresses = array();$/;"	v
makeConditionForCommunityList	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function makeConditionForCommunityList($user) {$/;"	f
makeConditionForMemberData	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function makeConditionForMemberData($communityId) {$/;"	f
makeConditionForMemberList	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function makeConditionForMemberList($communityId) {$/;"	f
memberAdd	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function memberAdd($communityId, $user) {$/;"	f
memberDelete	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function memberDelete($communityId, $user) {$/;"	f
memberDenial	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function memberDenial($communityId, $user) {$/;"	f
participateCommunity	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function participateCommunity($user) {$/;"	f
result	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^				$result = false;$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^				$result = true;$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$result = $Community->findById($result['Affiliation']['community_id']);$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$result = '';$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$result = false;$/;"	v
result	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^		$result = '';$/;"	v
userData	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^			$userData = $User->find('first', array('contain' => 'CommunityUser', 'conditions' => array('username' => $username)));$/;"	v
validateCsv	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public $validateCsv = array($/;"	v
writeEmailqFile	/home/rikehata/www/nisshin/app/Model/Affiliation.php	/^	public function writeEmailqFile($mailAddresses) {$/;"	f
