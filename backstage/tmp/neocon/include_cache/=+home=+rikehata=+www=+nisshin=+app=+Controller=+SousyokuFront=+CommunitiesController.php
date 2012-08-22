CommunitiesController|||CommunitiesController extends AppController { <class>|||[I] CommunitiesCont|||c
_setCommunityDetailData|||protected function _setCommunityDetailData($communityId) {|||[I] CommunitiesCont|||f
_setKeyValueData|||protected function _setKeyValueData() {|||[I] CommunitiesCont|||f
beforeFilter|||public function beforeFilter() {|||[I] CommunitiesCont|||f
boardCommentDelete|||public function boardCommentDelete($communityId, $boardId, $boardCommentId) {|||[I] CommunitiesCont|||f
boardCommentUpdate|||public function boardCommentUpdate() {|||[I] CommunitiesCont|||f
boardConfirm|||public function boardConfirm($communityId) {|||[I] CommunitiesCont|||f
boardDetail|||public function boardDetail($communityId, $boardId) {|||[I] CommunitiesCont|||f
boardInput|||public function boardInput($communityId, $boardId = null) {|||[I] CommunitiesCont|||f
boardReport|||public function boardReport($communityId, $boardId, $boardCommentId) {|||[I] CommunitiesCont|||f
boardUpdate|||public function boardUpdate() {|||[I] CommunitiesCont|||f
bodyClass|||$this->bodyClass = 'community';|||[I] CommunitiesCont|||v
bodyId|||$this->bodyId = 'board';|||[I] CommunitiesCont|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] CommunitiesCont|||v
communityData|||$communityData = $this->Community->getCommunityDetail($communityId, $this->currentUser);|||[I] CommunitiesCont|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] CommunitiesCont|||v
conditions|||$conditions = array(|||[I] CommunitiesCont|||v
data|||$data = $this->Community->findById($id);|||[I] CommunitiesCont|||v
detail|||public function detail($communityId) {|||[I] CommunitiesCont|||f
download|||public function download($id, $file) {|||[I] CommunitiesCont|||f
helpers|||public $helpers = array('Upload');|||[I] CommunitiesCont|||v
index|||public function index() {|||[I] CommunitiesCont|||f
isAuthorized|||public function isAuthorized($user = null) {|||[I] CommunitiesCont|||f
memberAdd|||public function memberAdd($communityId) {|||[I] CommunitiesCont|||f
memberDelete|||public function memberDelete($communityId) {|||[I] CommunitiesCont|||f
memberDenial|||public function memberDenial($communityId) {|||[I] CommunitiesCont|||f
memberDetail|||public function memberDetail($communityId, $userId) {|||[I] CommunitiesCont|||f
memberList|||public function memberList($communityId) {|||[I] CommunitiesCont|||f
name|||$name = preg_replace("/\.pdf$/", "", $data['Community'][$file]);|||[I] CommunitiesCont|||v
paginate|||$this->paginate = $tmp;|||[I] CommunitiesCont|||v
params|||$params = array(|||[I] CommunitiesCont|||v
path|||$path = APP.'Console'.DS;|||[I] CommunitiesCont|||v
result|||$result = $this->Transition->allData('boardDetail');|||[I] CommunitiesCont|||v
startBoardInput|||public function startBoardInput($communityId) {|||[I] CommunitiesCont|||f
uses|||public $uses = array('Community', 'BoardComment', 'BoardReport', 'CommunityUser', 'CommunityCategory', 'Board', 'Affiliation', 'NgWord', 'User', 'Business');|||[I] CommunitiesCont|||v
viewClass|||$this->viewClass = 'Media';|||[I] CommunitiesCont|||v
