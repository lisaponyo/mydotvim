UploadHelper|||UploadHelper extends Helper { <class>|||[I] UploadHelper.ph|||c
columnName|||$columnName = $column . '_file_name';|||[I] UploadHelper.ph|||v
columnNameTmp|||$columnNameTmp = 'tmp_' . $columnName;|||[I] UploadHelper.ph|||v
data|||$data = array($modelName => $data[$modelName][$num]);|||[I] UploadHelper.ph|||v
extension|||public function extension($mimeType = null) {|||[I] UploadHelper.ph|||f
filename|||$filename = $data[$model][$field . '_file_name'];|||[I] UploadHelper.ph|||v
helpers|||public $helpers = array('Html', 'Form');|||[I] UploadHelper.ph|||v
image|||public function image($data, $path, $options = array(), $htmlOptions = array()) {|||[I] UploadHelper.ph|||f
imageConfirm|||public function imageConfirm($data, $modelName, $column, $options = array('style' => 'thumb'), $htmlOptions = array()) {|||[I] UploadHelper.ph|||f
imageConfirmWithNoImage|||public function imageConfirmWithNoImage($data, $modelName, $column, $options = array('style' => 'thumb'), $htmlOptions = array()) {|||[I] UploadHelper.ph|||f
imageInput|||public function imageInput($data, $modelName, $column, $num = '', $htmlOptions = array()) {|||[I] UploadHelper.ph|||f
knownMimeTypes|||$knownMimeTypes = array(|||[I] UploadHelper.ph|||v
link|||public function link($title, $data, $field, $urlOptions = array(), $htmlOptions = array()) {|||[I] UploadHelper.ph|||f
settings|||$settings = UploadBehavior::interpolate($model, $id, $field, $filename, $options['style'], array('webroot' => ''));|||[I] UploadHelper.ph|||v
