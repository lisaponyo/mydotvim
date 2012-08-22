!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
RecipesController	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^class RecipesController extends AppController {$/;"	c
__detail	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	private function __detail($id) {$/;"	f
_setKeyValueData	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	protected function _setKeyValueData() {$/;"	f
beforeFilter	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function beforeFilter() {$/;"	f
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$this->bodyClass = 'recipe';$/;"	v
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$this->bodyClass = 'wrapper member simple';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$this->bodyId = 'detail';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$this->bodyId = 'email';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$this->bodyId = 'results';$/;"	v
breadcrumbs	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$this->breadcrumbs = array($/;"	v
components	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public $components = array('Search.Prg', 'Email');$/;"	v
data	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$data = $this->Recipe->findById($id);$/;"	v
detail	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function detail($id) {$/;"	f
download	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function download($id, $file) {$/;"	f
favorite	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function favorite($recipe_id) {$/;"	f
helpers	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public $helpers = array('Upload', 'Utils');$/;"	v
index	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function index() {$/;"	f
isAuthorized	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function isAuthorized($user) {$/;"	f
mailInput	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function mailInput($id = null) {$/;"	f
mailSend	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function mailSend() {$/;"	f
name	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$name = preg_replace("\/\\.pdf$\/", "", $data['Recipe'][$file]);$/;"	v
paginate	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^			$this->paginate = $tmp;$/;"	v
params	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$params = array($/;"	v
preview	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function preview() {$/;"	f
printView	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public function printView($id) {$/;"	f
recipe	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$recipe = $this->Recipe->findById($id);$/;"	v
recipe	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$recipe = $this->__detail($id);$/;"	v
recipeData	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$recipeData = $this->Recipe->findById($result['Recipe']['id']);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$result = $this->Company->findById($this->request->data['Recipe']['company_id']);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$result = $this->RecipeCategory->findById($this->request->data['Recipe']['recipe_category_id']);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$result = $this->Transition->mergedData();$/;"	v
uses	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^	public $uses = array('Recipe', 'RecipeCategory', 'RecipeDetail', 'RecipesTag', 'RecipesUser', 'Tag', 'Company', 'Event', 'EventsRecipe', 'Business', 'CatalogsRecipe', 'Catalog', 'RecipeBakery', 'Answer');$/;"	v
viewClass	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/RecipesController.php	/^		$this->viewClass = 'Media';$/;"	v
