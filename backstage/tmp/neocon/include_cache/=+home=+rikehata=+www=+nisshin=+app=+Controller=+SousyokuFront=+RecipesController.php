RecipesController|||RecipesController extends AppController { <class>|||[I] RecipesControll|||c
__detail|||private function __detail($id) {|||[I] RecipesControll|||f
_setKeyValueData|||protected function _setKeyValueData() {|||[I] RecipesControll|||f
beforeFilter|||public function beforeFilter() {|||[I] RecipesControll|||f
bodyClass|||$this->bodyClass = 'recipe';|||[I] RecipesControll|||v
bodyId|||$this->bodyId = 'detail';|||[I] RecipesControll|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] RecipesControll|||v
components|||public $components = array('Search.Prg', 'Email');|||[I] RecipesControll|||v
data|||$data = $this->Recipe->findById($id);|||[I] RecipesControll|||v
detail|||public function detail($id) {|||[I] RecipesControll|||f
download|||public function download($id, $file) {|||[I] RecipesControll|||f
favorite|||public function favorite($recipe_id) {|||[I] RecipesControll|||f
helpers|||public $helpers = array('Upload', 'Utils');|||[I] RecipesControll|||v
index|||public function index() {|||[I] RecipesControll|||f
isAuthorized|||public function isAuthorized($user) {|||[I] RecipesControll|||f
mailInput|||public function mailInput($id = null) {|||[I] RecipesControll|||f
mailSend|||public function mailSend() {|||[I] RecipesControll|||f
name|||$name = preg_replace("/\.pdf$/", "", $data['Recipe'][$file]);|||[I] RecipesControll|||v
paginate|||$this->paginate = $tmp;|||[I] RecipesControll|||v
params|||$params = array(|||[I] RecipesControll|||v
preview|||public function preview() {|||[I] RecipesControll|||f
printView|||public function printView($id) {|||[I] RecipesControll|||f
recipe|||$recipe = $this->Recipe->findById($id);|||[I] RecipesControll|||v
recipeData|||$recipeData = $this->Recipe->findById($result['Recipe']['id']);|||[I] RecipesControll|||v
result|||$result = $this->Company->findById($this->request->data['Recipe']['company_id']);|||[I] RecipesControll|||v
uses|||public $uses = array('Recipe', 'RecipeCategory', 'RecipeDetail', 'RecipesTag', 'RecipesUser', 'Tag', 'Company', 'Event', 'EventsRecipe', 'Business', 'CatalogsRecipe', 'Catalog', 'RecipeBakery', 'Answer');|||[I] RecipesControll|||v
viewClass|||$this->viewClass = 'Media';|||[I] RecipesControll|||v
