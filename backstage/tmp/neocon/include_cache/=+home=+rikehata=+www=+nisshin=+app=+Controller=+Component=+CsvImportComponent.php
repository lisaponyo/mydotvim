CsvImportComponent|||CsvImportComponent extends Component { <class>|||[I] CsvImportCompon|||c
__columns|||private $__columns = array();|||[I] CsvImportCompon|||v
_config|||protected $_config;|||[I] CsvImportCompon|||v
_controller|||$this->_controller =& $controller;|||[I] CsvImportCompon|||v
associations|||$associations = $model->getAssociated();|||[I] CsvImportCompon|||v
components|||public $components = array('Session', 'Transition', 'Auth');|||[I] CsvImportCompon|||v
count|||count|||[I] CsvImportCompon|||v
errors|||errors|||[I] CsvImportCompon|||v
extension|||extension|||[I] CsvImportCompon|||v
fgetcsv|||function fgetcsv( &$fh, $test = false ) {|||[I] CsvImportCompon|||f
file|||$file = $c->data[$Model->name]['file_name']['tmp_name'];|||[I] CsvImportCompon|||v
getValidationErrors|||public function getValidationErrors($model) {|||[I] CsvImportCompon|||f
import|||public function import(&$Model, $Association = null) {|||[I] CsvImportCompon|||f
initialize|||public function initialize(&$controller, $settings = array()) {|||[I] CsvImportCompon|||f
once|||$once = false;|||[I] CsvImportCompon|||v
size|||$size = filesize($file);|||[I] CsvImportCompon|||v
temp|||temp|||[I] CsvImportCompon|||v
uses|||public $uses = array('Area');|||[I] CsvImportCompon|||v
valid|||$valid = $model->{$name}->validationErrors;|||[I] CsvImportCompon|||v
value|||$value = $Model->csvData($this->__columns, $cols);|||[I] CsvImportCompon|||v
values|||$values = array() ;|||[I] CsvImportCompon|||v
