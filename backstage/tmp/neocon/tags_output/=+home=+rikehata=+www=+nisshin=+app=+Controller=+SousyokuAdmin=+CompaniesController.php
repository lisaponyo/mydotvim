!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
CompaniesController	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^class CompaniesController extends AppController {$/;"	c
_setKeyValueData	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	protected function _setKeyValueData() {$/;"	f
beforeFilter	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function beforeFilter() {$/;"	f
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$this->bodyClass = 'companies';$/;"	v
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$this->bodyClass = 'company';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$this->bodyId = 'regist';$/;"	v
company	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$company = $this->Company->findById($id);$/;"	v
company	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$company = $this->Company->findById($result['User']['company_id']);$/;"	v
company	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$company = $this->Company->findById($this->request->data['User']['company_id']);$/;"	v
components	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public $components = array('Search.Prg', 'Email');$/;"	v
conditions	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$conditions = $this->User->makeSearchConditionsCompanyUserForAdmin($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$conditions = $this->User->setCsvFields($conditions);$/;"	v
confirm	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function confirm() {$/;"	f
data	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$data = $this->User->findById($id);$/;"	v
data	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$data = isset($this->request->data['User']) ? $this->request->data['User']: null;$/;"	v
delete	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function delete($id = null) {$/;"	f
helpers	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public $helpers = array('Csv');$/;"	v
index	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function index() {$/;"	f
input	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function input($id = null) {$/;"	f
isAuthorized	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function isAuthorized($user) {$/;"	f
layout	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$this->layout = false;$/;"	v
paginate	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$this->paginate = $this->Company->makeSearchConditionsForAdmin($this->request->query);$/;"	v
paginate	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$this->paginate = $this->User->makeSearchConditionsCompanyUserForAdmin($this->request->query);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^		$result = $this->Transition->mergedData();$/;"	v
startInput	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function startInput($id = null) {$/;"	f
update	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function update() {$/;"	f
userConfirm	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function userConfirm() {$/;"	f
userDownload	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function userDownload() {$/;"	f
userIndex	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function userIndex($id) {$/;"	f
userInput	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function userInput($id = null, $user_id = null) {$/;"	f
userStartInput	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function userStartInput($id, $user_id = null) {$/;"	f
userUpdate	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public function userUpdate() {$/;"	f
uses	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/CompaniesController.php	/^	public $uses = array('Company', 'Business', 'Department', 'User');$/;"	v
