CustomValidationBehavior|||CustomValidationBehavior extends ModelBehavior { <class>|||[I] CustomValidatio|||c
_settingZip|||private function _settingZip(&$model){|||[I] CustomValidatio|||f
calendarDate|||public function calendarDate(&$model, $value, $other = null) {|||[I] CustomValidatio|||f
checkLengthZip|||public function checkLengthZip(&$model, $wordvalue){|||[I] CustomValidatio|||f
conditions|||$conditions = array(|||[I] CustomValidatio|||v
contentType|||public function contentType(&$model, $data, $type) {|||[I] CustomValidatio|||f
contentTypeJpg|||public function contentTypeJpg(&$model, $data) {|||[I] CustomValidatio|||f
contentTypePdf|||public function contentTypePdf(&$model, $data) {|||[I] CustomValidatio|||f
content_types|||$content_types = array($type);|||[I] CustomValidatio|||v
data|||$data = array_shift($data);|||[I] CustomValidatio|||v
isNumericZip|||public function isNumericZip(&$model, $wordvalue){|||[I] CustomValidatio|||f
matchCode|||public function matchCode(&$model, $data) {|||[I] CustomValidatio|||f
matchUser|||public function matchUser(&$model, $data) {|||[I] CustomValidatio|||f
matchUserId|||public function matchUserId(&$model, $data) {|||[I] CustomValidatio|||f
maxFileSize|||public function maxFileSize(&$model, $data, $max) {|||[I] CustomValidatio|||f
maxSelected|||public function maxSelected(&$model, $value, $max) {|||[I] CustomValidatio|||f
mixAlnum|||public static function mixAlnum(&$model, $wordvalue){|||[I] CustomValidatio|||f
noSelected|||public function noSelected(&$model, $value, $name) {|||[I] CustomValidatio|||f
notEmptyZip|||public function notEmptyZip(&$model, $wordvalue){|||[I] CustomValidatio|||f
onlyAlnum|||public static function onlyAlnum(&$model, $wordvalue){|||[I] CustomValidatio|||f
onlyKana|||public function onlyKana( &$model, $wordvalue){|||[I] CustomValidatio|||f
other|||$other = $model->data[$model->alias][$other];|||[I] CustomValidatio|||v
pattern|||pattern|||[I] CustomValidatio|||v
result|||$result = (int)$data['size'] <= (int)$max;|||[I] CustomValidatio|||v
uniqueEmail|||public function uniqueEmail(&$model, $data, $uniqueModel = '') {|||[I] CustomValidatio|||f
uniqueModel|||$uniqueModel = ClassRegistry::init($uniqueModel);|||[I] CustomValidatio|||v
value|||$value = array_shift($value);|||[I] CustomValidatio|||v
