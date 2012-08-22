ContentsController|||ContentsController extends AppController { <class>|||[I] ContentsControl|||c
beforeFilter|||public function beforeFilter() {|||[I] ContentsControl|||f
bodyClass|||$this->bodyClass = 'wrapper root';|||[I] ContentsControl|||v
bodyId|||$this->bodyId = 'result';|||[I] ContentsControl|||v
breadcrumbs|||$this->breadcrumbs = array(|||[I] ContentsControl|||v
helpers|||public $helpers = array('Upload');|||[I] ContentsControl|||v
index|||public function index() {|||[I] ContentsControl|||f
isAuthorized|||public function isAuthorized($user) {|||[I] ContentsControl|||f
paginate|||$this->paginate = $this->Solr->getConditionsForPagination($this->request, $this->Judge);|||[I] ContentsControl|||v
uses|||public $uses = array('Solr', 'Recipe', 'Catalog', 'Question', 'Answer', 'Community', 'RecipeCategory', 'CommunityCategory', 'Affiliation', 'QuestionCategory');|||[I] ContentsControl|||v
