!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
QuestionsController	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^class QuestionsController extends AppController {$/;"	c
_setKeyValueData	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	protected function _setKeyValueData() {$/;"	f
beforeFilter	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function beforeFilter() {$/;"	f
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$this->bodyClass = 'question';$/;"	v
bodyClass	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$this->bodyClass = 'recipe';$/;"	v
bodyId	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$this->bodyId = 'regist';$/;"	v
components	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public $components = array('Search.Prg', 'CsvImport');$/;"	v
conditions	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$conditions = $this->Answer->makeSearchConditionsForAdmin($data);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$conditions = $this->Question->setCsvFields($conditions);$/;"	v
confirm	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function confirm() {$/;"	f
data	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$data = isset($this->request->data['Question']) ? $this->request->data['Question']: null;$/;"	v
delete	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function delete($id = null) {$/;"	f
download	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function download() {$/;"	f
helpers	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public $helpers = array('Upload', 'Csv');$/;"	v
index	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function index() {$/;"	f
input	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function input($id = null) {$/;"	f
isAuthorized	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function isAuthorized($user) {$/;"	f
layout	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$this->layout = false;$/;"	v
paginate	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$this->paginate = $this->Answer->makeSearchConditionsForAdmin($this->request->query);$/;"	v
questions	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$questions = $this->Answer->findForAdminCsv($conditions);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$result = $this->Question->makeResult($result, $this->currentUser);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^		$result = $this->Transition->mergedData();$/;"	v
startInput	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function startInput($id = null) {$/;"	f
switchPublic	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function switchPublic($id, $status) {$/;"	f
update	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function update() {$/;"	f
upload	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function upload() {$/;"	f
uses	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public $uses = array('Question', 'QuestionCategory', 'Answer', 'Recipe', 'Catalog');$/;"	v
validation	/home/rikehata/www/nisshin/app/Controller/SousyokuAdmin/QuestionsController.php	/^	public function validation() {$/;"	f
