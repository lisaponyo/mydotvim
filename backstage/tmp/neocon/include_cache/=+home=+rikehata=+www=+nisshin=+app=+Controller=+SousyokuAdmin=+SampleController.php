RecipesController|||RecipesController extends AppController { <class>|||[I] SampleControlle|||c
_setKeyValueData|||protected function _setKeyValueData() {|||[I] SampleControlle|||f
beforeFilter|||public function beforeFilter() {|||[I] SampleControlle|||f
components|||public $components = array('Search.Prg');|||[I] SampleControlle|||v
conditions|||$conditions = $this->Recipe->parseCriteria($this->passedArgs);|||[I] SampleControlle|||v
confirm|||public function confirm() {|||[I] SampleControlle|||f
delete|||public function delete($id = null) {|||[I] SampleControlle|||f
helpers|||public $helpers = array('Upload', 'Recipe');|||[I] SampleControlle|||v
index|||public function index() {|||[I] SampleControlle|||f
input|||public function input($id = null) {|||[I] SampleControlle|||f
paginate|||$this->paginate = array(|||[I] SampleControlle|||v
presetVars|||$this->presetVars = $this->Recipe->presetVars;|||[I] SampleControlle|||v
result|||$result = $this->Transition->mergedData();|||[I] SampleControlle|||v
startInput|||public function startInput($id = null) {|||[I] SampleControlle|||f
update|||public function update() {|||[I] SampleControlle|||f
uses|||public $uses = array('Recipe', 'RecipeCategory', 'RecipesTag', 'Tag', 'Company', 'Event', 'EventsRecipe', 'Business');|||[I] SampleControlle|||v
