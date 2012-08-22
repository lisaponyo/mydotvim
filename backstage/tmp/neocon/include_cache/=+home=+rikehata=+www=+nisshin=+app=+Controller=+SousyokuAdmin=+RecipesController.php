RecipesController|||RecipesController extends AppController { <class>|||[I] RecipesControll|||c
_mailData|||protected function _mailData($id = null) {|||[I] RecipesControll|||f
_setKeyValueData|||protected function _setKeyValueData() {|||[I] RecipesControll|||f
accept|||public function accept($id){|||[I] RecipesControll|||f
acceptDelete|||public function acceptDelete($id){|||[I] RecipesControll|||f
beforeFilter|||public function beforeFilter() {|||[I] RecipesControll|||f
bodyClass|||$this->bodyClass = 'recipe';|||[I] RecipesControll|||v
bodyId|||$this->bodyId = 'regist';|||[I] RecipesControll|||v
companyData|||$companyData = $this->Company->findById($result['Recipe']['company_id']);|||[I] RecipesControll|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] RecipesControll|||v
confirm|||public function confirm() {|||[I] RecipesControll|||f
delete|||public function delete($id = null) {|||[I] RecipesControll|||f
helpers|||public $helpers = array('Upload');|||[I] RecipesControll|||v
index|||public function index() {|||[I] RecipesControll|||f
input|||public function input($id = null) {|||[I] RecipesControll|||f
isAuthorized|||public function isAuthorized($user) {|||[I] RecipesControll|||f
paginate|||$this->paginate = $this->Recipe->makeSearchConditionsForAdmin($this->request->query, $this->Judge);|||[I] RecipesControll|||v
requestDelete|||public function requestDelete($id){|||[I] RecipesControll|||f
result|||$result = $this->Recipe->findById($id);|||[I] RecipesControll|||v
startInput|||public function startInput($id = null) {|||[I] RecipesControll|||f
unauthorizedAction|||$unauthorizedAction = array('accept', 'delete');|||[I] RecipesControll|||v
update|||public function update() {|||[I] RecipesControll|||f
uses|||public $uses = array('Recipe', 'RecipeCategory', 'RecipeDetail', 'RecipesTag', 'RecipeBakery', 'Tag', 'Company', 'Event', 'EventsRecipe', 'Business', 'CatalogsRecipe');|||[I] RecipesControll|||v
validation|||public function validation() {|||[I] RecipesControll|||f
