!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
CatalogsController	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^class CatalogsController extends AppController {$/;"	c
__detail	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	private function __detail($id) {$/;"	f
_setKeyValueData	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	protected function _setKeyValueData() {$/;"	f
beforeFilter	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function beforeFilter() {$/;"	f
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$this->bodyClass = 'catalog';$/;"	v
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$this->bodyClass = 'wrapper member simple';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$this->bodyId = 'detail';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$this->bodyId = 'email';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$this->bodyId = 'results';$/;"	v
breadcrumbs	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$this->breadcrumbs = array($/;"	v
catalog	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$catalog = $this->Catalog->findById($id);$/;"	v
catalog	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$catalog = $this->__detail($id);$/;"	v
catalogData	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$catalogData = $this->Catalog->findById($result['Catalog']['id']);$/;"	v
components	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public $components = array('Search.Prg', 'Email');$/;"	v
data	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$data = $this->Catalog->findById($id);$/;"	v
detail	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function detail($id) {$/;"	f
download	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function download($id, $file) {$/;"	f
favorite	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function favorite($catalog_id) {$/;"	f
helpers	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public $helpers = array('Upload', 'Utils');$/;"	v
index	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function index() {$/;"	f
isAuthorized	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function isAuthorized($user) {$/;"	f
mailInput	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function mailInput($id = null) {$/;"	f
mailSend	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function mailSend() {$/;"	f
name	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$name = preg_replace("\/\\.pdf$\/", "", $data['Catalog'][$file]);$/;"	v
paginate	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^			$this->paginate = $tmp;$/;"	v
params	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$params = array($/;"	v
preview	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function preview() {$/;"	f
printView	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public function printView($id) {$/;"	f
result	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$result = $this->CatalogCategory->findById($this->request->data['Catalog']['catalog_category_id']);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$result = $this->Company->findById($this->request->data['Catalog']['company_id']);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$result = $this->Transition->mergedData();$/;"	v
unauthorizedAction	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^			$unauthorizedAction = array('printView');$/;"	v
uses	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^	public $uses = array('Catalog', 'CatalogCategory', 'CatalogDetail', 'CatalogsTag', 'CatalogsUser', 'Tag', 'Company', 'Business', 'RecipesCatalog', 'Recipe', 'Answer');$/;"	v
viewClass	/home/rikehata/www/nisshin/app/Controller/SousyokuFront/CatalogsController.php	/^		$this->viewClass = 'Media';$/;"	v
