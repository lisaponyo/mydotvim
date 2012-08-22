PremierUsersController|||PremierUsersController extends AppController { <class>|||[I] PremierUsersCon|||c
__setKeyValueDataForParent|||private function __setKeyValueDataForParent() {|||[I] PremierUsersCon|||f
__validTemporaryId|||private function __validTemporaryId($temporary_id, $action = 'inputTerm') {|||[I] PremierUsersCon|||f
__validTemporaryIdForChild|||private function __validTemporaryIdForChild($temporary_id) {|||[I] PremierUsersCon|||f
beforeFilter|||public function beforeFilter() {|||[I] PremierUsersCon|||f
bodyClass|||$this->bodyClass = 'wrapper mailaddress';|||[I] PremierUsersCon|||v
bodyId|||$this->bodyId = 'enquete';|||[I] PremierUsersCon|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] PremierUsersCon|||v
components|||var $components = array('Email');|||[I] PremierUsersCon|||v
confirmUserSecession|||public function confirmUserSecession() {|||[I] PremierUsersCon|||f
inputChild|||public function inputChild($temporary_id) {|||[I] PremierUsersCon|||f
inputChildConfirm|||public function inputChildConfirm($temporary_id) {|||[I] PremierUsersCon|||f
inputChildTerm|||public function inputChildTerm($temporary_id) {|||[I] PremierUsersCon|||f
inputChildUpdate|||public function inputChildUpdate($temporary_id) {|||[I] PremierUsersCon|||f
inputParent|||public function inputParent() {|||[I] PremierUsersCon|||f
inputParentConfirm|||public function inputParentConfirm() {|||[I] PremierUsersCon|||f
inputParentUpdate|||public function inputParentUpdate() {|||[I] PremierUsersCon|||f
inputPaymentEnquete|||public function inputPaymentEnquete($temporary_id) {|||[I] PremierUsersCon|||f
inputPaymentEnqueteConfirm|||public function inputPaymentEnqueteConfirm($temporary_id) {|||[I] PremierUsersCon|||f
inputPaymentEnqueteUpdate|||public function inputPaymentEnqueteUpdate() {|||[I] PremierUsersCon|||f
inputTerm|||public function inputTerm() {|||[I] PremierUsersCon|||f
inputUser|||public function inputUser() {|||[I] PremierUsersCon|||f
inputUserConfirm|||public function inputUserConfirm() {|||[I] PremierUsersCon|||f
inputUserPayment|||public function inputUserPayment() {|||[I] PremierUsersCon|||f
inputUserSecessionEnquete|||public function inputUserSecessionEnquete($temporary_id = null) {|||[I] PremierUsersCon|||f
isAuthorized|||public function isAuthorized($user = null) {|||[I] PremierUsersCon|||f
result|||$result = $this->Transition->mergedData();|||[I] PremierUsersCon|||v
selectPaymentMembers|||public function selectPaymentMembers($temporary_id) {|||[I] PremierUsersCon|||f
sendMailResponse|||public function sendMailResponse() {|||[I] PremierUsersCon|||f
startInputChild|||public function startInputChild($temporary_id) {|||[I] PremierUsersCon|||f
startInputParent|||public function startInputParent() {|||[I] PremierUsersCon|||f
startInputTerms|||public function startInputTerms() {|||[I] PremierUsersCon|||f
startInputUserSecessionEnquete|||public function startInputUserSecessionEnquete($temporary_id = null) {|||[I] PremierUsersCon|||f
unauthorizedAction|||$unauthorizedAction = array(|||[I] PremierUsersCon|||v
updateUserSecession|||public function updateUserSecession() {|||[I] PremierUsersCon|||f
userRegist|||$userRegist = $this->UserRegist->findByTemporaryId($temporary_id);|||[I] PremierUsersCon|||v
uses|||var $uses = array('User', 'UserRegist', 'UserEnquete', 'UserSecessionEnquete', 'Company', 'Business');|||[I] PremierUsersCon|||v
