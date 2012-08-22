Model|||$Model =& $this->CatalogsUser;|||[I] MyPagesControll|||v
MyPagesController|||MyPagesController extends AppController { <class>|||[I] MyPagesControll|||c
__setKeyValueData|||private function __setKeyValueData() {|||[I] MyPagesControll|||f
beforeFilter|||public function beforeFilter() {|||[I] MyPagesControll|||f
bodyClass|||$this->bodyClass = 'wrapper member';|||[I] MyPagesControll|||v
bodyId|||$this->bodyId = 'favorite';|||[I] MyPagesControll|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] MyPagesControll|||v
changeMailReceive|||public function changeMailReceive($communityId) {|||[I] MyPagesControll|||f
communityList|||public function communityList() {|||[I] MyPagesControll|||f
components|||public $components = array('Email', 'Captcha');|||[I] MyPagesControll|||v
defaultImages|||$defaultImages = $this->CommunityUser->defaultUserImages;|||[I] MyPagesControll|||v
editUser|||public function editUser() {|||[I] MyPagesControll|||f
editUserConfirm|||public function editUserConfirm() {|||[I] MyPagesControll|||f
editUserUpdate|||public function editUserUpdate() {|||[I] MyPagesControll|||f
favoriteList|||public function favoriteList($showType = 'recipe') {|||[I] MyPagesControll|||f
helpers|||public $helpers = array('Upload', 'Utils');|||[I] MyPagesControll|||v
isAuthorized|||public function isAuthorized($user = null) {|||[I] MyPagesControll|||f
paginate|||$this->paginate = $this->CatalogsUser->createConditions($this->currentUser['id']);|||[I] MyPagesControll|||v
removeFavorite|||public function removeFavorite($showType, $id) {|||[I] MyPagesControll|||f
result|||$result = $this->Transition->mergedData();|||[I] MyPagesControll|||v
startEdit|||public function startEdit() {|||[I] MyPagesControll|||f
user|||$user = $this->User->findById($this->currentUser['id']);|||[I] MyPagesControll|||v
uses|||public $uses = array('User', 'UserRegist', 'UserEnquete', 'UserSecessionEnquete', 'Business', 'Community', 'Affiliation', 'RecipesUser', 'CatalogsUser', 'QuestionsUser',);|||[I] MyPagesControll|||v
