!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
CsvImportComponent	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^class CsvImportComponent extends Component {$/;"	c
__columns	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	private $__columns = array();$/;"	v
_config	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	protected $_config;$/;"	v
_controller	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$this->_controller =& $controller;$/;"	v
_controller	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	protected $_controller;$/;"	v
associations	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$associations = $model->getAssociated();$/;"	v
buf	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$buf = file_get_contents($file);$/;"	v
c	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$c =& $this->_controller;$/;"	v
components	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	public $components = array('Session', 'Transition', 'Auth');$/;"	v
count	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$count = 0;$/;"	v
csv	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$csv = '' ;$/;"	v
errors	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^					$errors = array_merge($errors, $valid[0]);$/;"	v
errors	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^				$errors = array();$/;"	v
errors	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^			$this->errors = array('ファイルの容量が50メガバイトをオーバーしています。');$/;"	v
errors	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^			$this->errors = array('ファイルの形式がcsv形式ではありません。');$/;"	v
errors	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$errors = $model->validationErrors;$/;"	v
errors	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	public $errors = array();$/;"	v
extension	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$extension = substr(strrchr($c->data[$Model->name]['file_name']['name'], '.'), 1);$/;"	v
fgetcsv	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	function fgetcsv( &$fh, $test = false ) {$/;"	f
file	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$file = $c->data[$Model->name]['file_name']['tmp_name'];$/;"	v
fp	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$fp = tmpfile();$/;"	v
getValidationErrors	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	public function getValidationErrors($model) {$/;"	f
import	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	public function import(&$Model, $Association = null) {$/;"	f
initialize	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	public function initialize(&$controller, $settings = array()) {$/;"	f
once	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^				$once = false;$/;"	v
once	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$once = true;$/;"	v
size	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$size = filesize($file);$/;"	v
temp	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$temp = preg_replace( '\/(?:x0Dx0A|[x0Dx0A])?$\/', ',', $csv, 1 ) ;$/;"	v
uses	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^	public $uses = array('Area');$/;"	v
valid	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^				$valid = $model->{$name}->validationErrors;$/;"	v
value	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^			$value = $Model->csvData($this->__columns, $cols);$/;"	v
values	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$values = array() ;$/;"	v
values	/home/rikehata/www/nisshin/app/Controller/Component/CsvImportComponent.php	/^		$values = array();$/;"	v
