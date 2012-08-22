!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
RecipesController	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^class RecipesController extends AppController {$/;"	c
_mailData	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^		protected function _mailData($id = null) {$/;"	f
_setKeyValueData	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	protected function _setKeyValueData() {$/;"	f
accept	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function accept($id){$/;"	f
acceptDelete	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function acceptDelete($id){$/;"	f
beforeFilter	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function beforeFilter() {$/;"	f
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^		$this->bodyClass = 'recipe';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^		$this->bodyId = 'regist';$/;"	v
companyData	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^				$companyData = $this->Company->findById($result['Recipe']['company_id']);$/;"	v
components	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public $components = array('Search.Prg', 'Email');$/;"	v
confirm	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function confirm() {$/;"	f
delete	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function delete($id = null) {$/;"	f
helpers	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public $helpers = array('Upload');$/;"	v
index	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function index() {$/;"	f
input	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function input($id = null) {$/;"	f
isAuthorized	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function isAuthorized($user) {$/;"	f
paginate	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^		$this->paginate = $this->Recipe->makeSearchConditionsForAdmin($this->request->query, $this->Judge);$/;"	v
requestDelete	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function requestDelete($id){$/;"	f
result	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^				$result = $this->Recipe->findById($id);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^		$result = $this->Recipe->makeResult($result, $this->Judge, $this->currentUser);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^		$result = $this->Transition->allData('input');$/;"	v
startInput	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function startInput($id = null) {$/;"	f
unauthorizedAction	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^			$unauthorizedAction = array('accept', 'delete');$/;"	v
update	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function update() {$/;"	f
uses	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public $uses = array('Recipe', 'RecipeCategory', 'RecipeDetail', 'RecipesTag', 'RecipeBakery', 'Tag', 'Company', 'Event', 'EventsRecipe', 'Business', 'CatalogsRecipe');$/;"	v
validation	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/RecipesController.php	/^	public function validation() {$/;"	f
