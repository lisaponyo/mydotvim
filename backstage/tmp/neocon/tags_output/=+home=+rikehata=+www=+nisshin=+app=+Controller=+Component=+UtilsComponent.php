!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
D	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^						$D = new DateTime($this->_Controller->request->data[$model][$k][$data]);$/;"	v
D	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^				$D = new DateTime($this->_Controller->request->data[$model][$data]);$/;"	v
Model	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^			$Model = ClassRegistry::init('Postcode');$/;"	v
UtilsComponent	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^class UtilsComponent extends Component {$/;"	c
_Controller	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^		$this->_Controller =& $controller;$/;"	v
_Controller	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	protected $_Controller;$/;"	v
arrangeDateFormat	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function arrangeDateFormat($model, $target = array(), $many = false) {$/;"	f
buttonBack	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function buttonBack($action = 'input') {$/;"	f
class	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^		$class = ($boolean) ? 'alert-success' : 'alert-error';$/;"	v
company	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^				$company = $this->_Controller->Company->findById($this->_Controller->currentUser['company_id']);$/;"	v
conditions	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^			$conditions = array('conditions' => array('zip_7' => $zn, 'update_flg !=' => 2, 'reason_flg !=' => 6));$/;"	v
count	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^				$count = 0;$/;"	v
data	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^		$data =& $this->_Controller->request->data || null;$/;"	v
email	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^		$email = new CakeEmail('default');$/;"	v
getAddress	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function getAddress($zn = '') {$/;"	f
initSearch	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function initSearch(&$Model) {$/;"	f
initialize	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function initialize(&$controller) {$/;"	f
isAjax	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function isAjax() {$/;"	f
message	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^			$message = ($boolean) ? '情報更新が正常に完了しました。' : '情報更新に失敗しました。お手数ですがもう1度お試してください。';$/;"	v
modelName	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^			$modelName = $Model->alias;$/;"	v
notFound	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function notFound($bool) {$/;"	f
prefectures	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^				$prefectures = $prefectures[0][$modelName];$/;"	v
prefectures	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^			$prefectures = $Model->find('all', $conditions);$/;"	v
prefectures	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^		$prefectures = array();$/;"	v
redirectWithFlash	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function redirectWithFlash($boolean, $action, $message = null) {$/;"	f
result	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^					$result = mb_split('一円$', $prefectures['tyou_kan']);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^			$result = $this->getAddress($data[$model]['zip1'] . $data[$model]['zip2']);$/;"	v
result	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^		$result = $email->from(array(EMAIL_FROM => EMAIL_FROM_NAME))$/;"	v
sendMail	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function sendMail($to, $subject, $template, $vars = array(), $layout = 'default') {$/;"	f
setAddressByTwoZip	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function setAddressByTwoZip($model) {$/;"	f
setAuthorities	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^	public function setAuthorities() {$/;"	f
tmp	/home/rikehata/www/nisshin/app/Controller/Component/UtilsComponent.php	/^				$tmp  = array();$/;"	v
