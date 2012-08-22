BootstrapFormHelper|||BootstrapFormHelper extends FormHelper { <class>|||[I] BootstrapFormHe|||c
_after|||protected function _after($after) {|||[I] BootstrapFormHe|||f
_autoDetectType|||$this->_autoDetectType = true;|||[I] BootstrapFormHe|||v
_checkbox|||protected function _checkbox($name, $options) {|||[I] BootstrapFormHe|||f
_clearfix|||protected function _clearfix($name, $input, $options) {|||[I] BootstrapFormHe|||f
_input|||protected function _input($name, $options, &$hidden = '') {|||[I] BootstrapFormHe|||f
_multipleCheckbox|||protected function _multipleCheckbox($out, $options, &$hidden) {|||[I] BootstrapFormHe|||f
_prepend|||protected function _prepend($options) {|||[I] BootstrapFormHe|||f
_radio|||protected function _radio($out, $options, &$hidden) {|||[I] BootstrapFormHe|||f
_tmp|||$_tmp = $this->_input($name, $options, $hidden);|||[I] BootstrapFormHe|||v
after|||$after = array('text' => $after);|||[I] BootstrapFormHe|||v
afterDefault|||$afterDefault = array(|||[I] BootstrapFormHe|||v
before|||$before = $options['before'];|||[I] BootstrapFormHe|||v
clearfix|||$clearfix = 'control-group';|||[I] BootstrapFormHe|||v
create|||public function create($model = null, $options = array()) {|||[I] BootstrapFormHe|||f
dateFormat|||$dateFormat = 'YMD';|||[I] BootstrapFormHe|||v
dateTime|||dateTime|||[I] BootstrapFormHe|||f
default|||$default = Set::merge($default, $this->_inputDefaults);|||[I] BootstrapFormHe|||v
divOptions|||$divOptions = $options['div'];|||[I] BootstrapFormHe|||v
error|||error|||[I] BootstrapFormHe|||v
helpers|||public $helpers = array('Html');|||[I] BootstrapFormHe|||v
hidden|||hidden|||[I] BootstrapFormHe|||v
inlineInputs|||public function inlineInputs($name, $inputs, $options = array()) {|||[I] BootstrapFormHe|||f
input|||$input = $options['after'] . $this->_multipleCheckbox($input, $options, $hidden);|||[I] BootstrapFormHe|||v
line|||line|||[I] BootstrapFormHe|||v
lines|||$lines = array();|||[I] BootstrapFormHe|||v
options|||$options = $this->_prepend($options);|||[I] BootstrapFormHe|||v
submit|||public function submit($caption = null, $options = array()) {|||[I] BootstrapFormHe|||f
text|||$text = $options['label']['text'];|||[I] BootstrapFormHe|||v
timeFormat|||$timeFormat = null;|||[I] BootstrapFormHe|||v
