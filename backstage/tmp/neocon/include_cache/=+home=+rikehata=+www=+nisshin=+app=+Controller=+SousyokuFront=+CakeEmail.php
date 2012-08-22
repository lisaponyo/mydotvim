CakeEmail|||CakeEmail { <class>|||[I] CakeEmail.php|||c
View|||$View = new $viewClass(null);|||[I] CakeEmail.php|||v
__construct|||public function __construct($config = null) {|||[I] CakeEmail.php|||f
_addEmail|||protected function _addEmail($varName, $email, $name) {|||[I] CakeEmail.php|||f
_appCharset|||$this->_appCharset = Configure::read('App.encoding');|||[I] CakeEmail.php|||v
_applyConfig|||protected function _applyConfig($config) {|||[I] CakeEmail.php|||f
_attachFiles|||protected function _attachFiles($boundary = null) {|||[I] CakeEmail.php|||f
_attachInlineFiles|||protected function _attachInlineFiles($boundary = null) {|||[I] CakeEmail.php|||f
_attachments|||$this->_attachments = $attach;|||[I] CakeEmail.php|||v
_bcc|||$this->_bcc = array();|||[I] CakeEmail.php|||v
_boundary|||_boundary|||[I] CakeEmail.php|||v
_charset8bit|||_charset8bit|||[I] CakeEmail.php|||v
_config|||$this->_config = array();|||[I] CakeEmail.php|||v
_createBoundary|||protected function _createBoundary() {|||[I] CakeEmail.php|||f
_emailFormat|||$this->_emailFormat = $format;|||[I] CakeEmail.php|||v
_emailFormatAvailable|||protected $_emailFormatAvailable = array('text', 'html', 'both');|||[I] CakeEmail.php|||v
_encode|||protected function _encode($text) {|||[I] CakeEmail.php|||f
_encodeString|||protected function _encodeString($text, $charset) {|||[I] CakeEmail.php|||f
_formatAddress|||protected function _formatAddress($address) {|||[I] CakeEmail.php|||f
_from|||$this->_from = array();|||[I] CakeEmail.php|||v
_getContentTransferEncoding|||protected function _getContentTransferEncoding() {|||[I] CakeEmail.php|||f
_getTypes|||protected function _getTypes() {|||[I] CakeEmail.php|||f
_headers|||$this->_headers = $headers;|||[I] CakeEmail.php|||v
_helpers|||$this->_helpers = (array)$helpers;|||[I] CakeEmail.php|||v
_htmlMessage|||$this->_htmlMessage = $rendered['html'];|||[I] CakeEmail.php|||v
_layout|||$this->_layout = $layout;|||[I] CakeEmail.php|||v
_message|||$this->_message = $this->_render($this->_wrap($content));|||[I] CakeEmail.php|||v
_messageId|||$this->_messageId = $message;|||[I] CakeEmail.php|||v
_readFile|||protected function _readFile($file) {|||[I] CakeEmail.php|||f
_readReceipt|||$this->_readReceipt = array();|||[I] CakeEmail.php|||v
_render|||protected function _render($content) {|||[I] CakeEmail.php|||f
_renderTemplates|||protected function _renderTemplates($content) {|||[I] CakeEmail.php|||f
_replyTo|||$this->_replyTo = array();|||[I] CakeEmail.php|||v
_returnPath|||$this->_returnPath = array();|||[I] CakeEmail.php|||v
_sender|||$this->_sender = array();|||[I] CakeEmail.php|||v
_setEmail|||protected function _setEmail($varName, $email, $name) {|||[I] CakeEmail.php|||f
_setEmailSingle|||protected function _setEmailSingle($varName, $email, $name, $throwMessage) {|||[I] CakeEmail.php|||f
_subject|||$this->_subject = $this->_encode((string)$subject);|||[I] CakeEmail.php|||v
_template|||$this->_template = $template;|||[I] CakeEmail.php|||v
_textMessage|||$this->_textMessage = $rendered['text'];|||[I] CakeEmail.php|||v
_transportClass|||$this->_transportClass = null;|||[I] CakeEmail.php|||v
_transportName|||$this->_transportName = 'Mail';|||[I] CakeEmail.php|||v
_viewRender|||$this->_viewRender = $viewClass;|||[I] CakeEmail.php|||v
_viewVars|||$this->_viewVars = array();|||[I] CakeEmail.php|||v
_wrap|||protected function _wrap($message) {|||[I] CakeEmail.php|||f
addAttachments|||public function addAttachments($attachments) {|||[I] CakeEmail.php|||f
addBcc|||public function addBcc($email, $name = null) {|||[I] CakeEmail.php|||f
addCc|||public function addCc($email, $name = null) {|||[I] CakeEmail.php|||f
addHeaders|||public function addHeaders($headers) {|||[I] CakeEmail.php|||f
addTo|||public function addTo($email, $name = null) {|||[I] CakeEmail.php|||f
alias|||$alias = '"' . $alias . '"';|||[I] CakeEmail.php|||v
attach|||$attach = array();|||[I] CakeEmail.php|||v
attachments|||$attachments = $this->_attachFiles($boundary);|||[I] CakeEmail.php|||v
boundary|||$boundary = $this->_boundary;|||[I] CakeEmail.php|||v
char|||$char = $line[$i];|||[I] CakeEmail.php|||v
charset|||$this->charset = $config['charset'];|||[I] CakeEmail.php|||v
class|||$class = __CLASS__;|||[I] CakeEmail.php|||v
classVar|||$classVar = '_' . $var;|||[I] CakeEmail.php|||v
config|||$config = $configs->{$config};|||[I] CakeEmail.php|||v
configs|||$configs = new EmailConfig();|||[I] CakeEmail.php|||v
content|||$content = explode("\n", $this->_htmlMessage);|||[I] CakeEmail.php|||v
contentIds|||$contentIds = array_filter((array)Set::classicExtract($this->_attachments, '{s}.contentId'));|||[I] CakeEmail.php|||v
contents|||$contents = $this->transportClass()->send($this);|||[I] CakeEmail.php|||v
current|||$current = $this->_attachments;|||[I] CakeEmail.php|||v
data|||$data = $this->_readFile($fileInfo['file']);|||[I] CakeEmail.php|||v
defaults|||$defaults = array_fill_keys(array('from', 'sender', 'replyTo', 'readReceipt', 'returnPath', 'to', 'cc', 'bcc', 'subject'), false);|||[I] CakeEmail.php|||v
deliver|||public static function deliver($to = null, $subject = null, $message = null, $transportConfig = 'fast', $send = true) {|||[I] CakeEmail.php|||f
emailFormat|||public function emailFormat($format = null) {|||[I] CakeEmail.php|||f
fileInfo|||$fileInfo = array('file' => $fileInfo);|||[I] CakeEmail.php|||v
formatted|||$formatted = array_merge($formatted, explode("\n", wordwrap($line, self::LINE_LENGTH_SHOULD, "\n")));|||[I] CakeEmail.php|||v
from|||public function from($email = null, $name = null) {|||[I] CakeEmail.php|||f
getHeaders|||public function getHeaders($include = array()) {|||[I] CakeEmail.php|||f
handle|||$handle = fopen($file, 'rb');|||[I] CakeEmail.php|||v
hasAttachments|||$hasAttachments = !empty($this->_attachments);|||[I] CakeEmail.php|||v
hasInlineAttachments|||hasInlineAttachments|||[I] CakeEmail.php|||v
hasMultipleTypes|||hasMultipleTypes|||[I] CakeEmail.php|||v
headerCharset|||$this->headerCharset = $config['headerCharset'];|||[I] CakeEmail.php|||v
headers|||$headers = array();|||[I] CakeEmail.php|||v
helpers|||public function helpers($helpers = null) {|||[I] CakeEmail.php|||f
include|||$include = array_fill_keys($include, true);|||[I] CakeEmail.php|||v
instance|||$instance = new $class($transportConfig);|||[I] CakeEmail.php|||v
internalEncoding|||$internalEncoding = function_exists('mb_internal_encoding');|||[I] CakeEmail.php|||v
lastSpace|||$lastSpace = strrpos($tmpLine, ' ');|||[I] CakeEmail.php|||v
layout|||$layout = $config['layout'];|||[I] CakeEmail.php|||v
level|||$level = $this->_config['log'];|||[I] CakeEmail.php|||v
line|||$line = '.' . $line;|||[I] CakeEmail.php|||v
lines|||$lines = explode("\n", $message);|||[I] CakeEmail.php|||v
list|||$list = array();|||[I] CakeEmail.php|||v
message|||$message = $config['message'];|||[I] CakeEmail.php|||v
messageId|||public function messageId($message = null) {|||[I] CakeEmail.php|||f
name|||$name = $email;|||[I] CakeEmail.php|||v
nextChar|||nextChar|||[I] CakeEmail.php|||v
readReceipt|||public function readReceipt($email = null, $name = null) {|||[I] CakeEmail.php|||f
relBoundary|||$relBoundary = $textBoundary = 'rel-' . $boundary;|||[I] CakeEmail.php|||v
relation|||$relation = array(|||[I] CakeEmail.php|||v
render|||$render = $View->render($template, $layout);|||[I] CakeEmail.php|||v
rendered|||$rendered = $this->_renderTemplates($content);|||[I] CakeEmail.php|||v
replyTo|||public function replyTo($email = null, $name = null) {|||[I] CakeEmail.php|||f
reset|||public function reset() {|||[I] CakeEmail.php|||f
restore|||$restore = mb_internal_encoding();|||[I] CakeEmail.php|||v
return|||$return = array();|||[I] CakeEmail.php|||v
returnPath|||public function returnPath($email = null, $name = null) {|||[I] CakeEmail.php|||f
send|||public function send($content = null) {|||[I] CakeEmail.php|||f
sender|||public function sender($email = null, $name = null) {|||[I] CakeEmail.php|||f
setHeaders|||public function setHeaders($headers) {|||[I] CakeEmail.php|||f
simpleMethods|||$simpleMethods = array(|||[I] CakeEmail.php|||v
subject|||public function subject($subject = null) {|||[I] CakeEmail.php|||f
tagLength|||$tagLength = strlen($tag);|||[I] CakeEmail.php|||v
tagOpen|||$tagOpen = false;|||[I] CakeEmail.php|||v
template|||public function template($template = false, $layout = false) {|||[I] CakeEmail.php|||f
textBoundary|||$textBoundary = 'alt-' . $boundary;|||[I] CakeEmail.php|||v
tmpLine|||$tmpLine = $tag;|||[I] CakeEmail.php|||v
tmpLineLength|||$tmpLineLength = $tagLength;|||[I] CakeEmail.php|||v
transport|||public function transport($name = null) {|||[I] CakeEmail.php|||f
transportClass|||public function transportClass() {|||[I] CakeEmail.php|||f
types|||$types = array('html', 'text');|||[I] CakeEmail.php|||v
viewClass|||$viewClass = $this->_viewRender;|||[I] CakeEmail.php|||v
viewRender|||public function viewRender($viewClass = null) {|||[I] CakeEmail.php|||f
viewVars|||public function viewVars($viewVars = null) {|||[I] CakeEmail.php|||f
