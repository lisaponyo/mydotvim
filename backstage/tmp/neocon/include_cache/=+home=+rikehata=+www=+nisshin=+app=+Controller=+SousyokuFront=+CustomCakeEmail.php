CustomCakeEmail|||CustomCakeEmail extends CakeEmail{ <class>|||[I] CustomCakeEmail|||c
View|||$View = new $viewClass(null);|||[I] CustomCakeEmail|||v
__construct|||public function __construct($config = null) {|||[I] CustomCakeEmail|||f
_addEmail|||protected function _addEmail($varName, $email, $name) {|||[I] CustomCakeEmail|||f
_appCharset|||$this->_appCharset = Configure::read('App.encoding');|||[I] CustomCakeEmail|||v
_applyConfig|||protected function _applyConfig($config) {|||[I] CustomCakeEmail|||f
_attachFiles|||protected function _attachFiles($boundary = null) {|||[I] CustomCakeEmail|||f
_attachInlineFiles|||protected function _attachInlineFiles($boundary = null) {|||[I] CustomCakeEmail|||f
_attachments|||$this->_attachments = $attach;|||[I] CustomCakeEmail|||v
_bcc|||$this->_bcc = array();|||[I] CustomCakeEmail|||v
_boundary|||_boundary|||[I] CustomCakeEmail|||v
_charset8bit|||_charset8bit|||[I] CustomCakeEmail|||v
_config|||$this->_config = array();|||[I] CustomCakeEmail|||v
_createBoundary|||protected function _createBoundary() {|||[I] CustomCakeEmail|||f
_emailFormat|||$this->_emailFormat = $format;|||[I] CustomCakeEmail|||v
_emailFormatAvailable|||protected $_emailFormatAvailable = array('text', 'html', 'both');|||[I] CustomCakeEmail|||v
_encode|||protected function _encode($text) {|||[I] CustomCakeEmail|||f
_encodeString|||protected function _encodeString($text, $charset) {|||[I] CustomCakeEmail|||f
_formatAddress|||protected function _formatAddress($address) {|||[I] CustomCakeEmail|||f
_from|||$this->_from = array();|||[I] CustomCakeEmail|||v
_getContentTransferEncoding|||protected function _getContentTransferEncoding() {|||[I] CustomCakeEmail|||f
_getTypes|||protected function _getTypes() {|||[I] CustomCakeEmail|||f
_headers|||$this->_headers = $headers;|||[I] CustomCakeEmail|||v
_helpers|||$this->_helpers = (array)$helpers;|||[I] CustomCakeEmail|||v
_htmlMessage|||$this->_htmlMessage = $rendered['html'];|||[I] CustomCakeEmail|||v
_layout|||$this->_layout = $layout;|||[I] CustomCakeEmail|||v
_message|||$this->_message = $this->_render($this->_wrap($content));|||[I] CustomCakeEmail|||v
_messageId|||$this->_messageId = $message;|||[I] CustomCakeEmail|||v
_readFile|||protected function _readFile($file) {|||[I] CustomCakeEmail|||f
_readReceipt|||$this->_readReceipt = array();|||[I] CustomCakeEmail|||v
_render|||protected function _render($content) {|||[I] CustomCakeEmail|||f
_renderTemplates|||protected function _renderTemplates($content) {|||[I] CustomCakeEmail|||f
_replyTo|||$this->_replyTo = array();|||[I] CustomCakeEmail|||v
_returnPath|||$this->_returnPath = array();|||[I] CustomCakeEmail|||v
_sender|||$this->_sender = array();|||[I] CustomCakeEmail|||v
_setEmail|||protected function _setEmail($varName, $email, $name) {|||[I] CustomCakeEmail|||f
_setEmailSingle|||protected function _setEmailSingle($varName, $email, $name, $throwMessage) {|||[I] CustomCakeEmail|||f
_subject|||$this->_subject = $this->_encode((string)$subject);|||[I] CustomCakeEmail|||v
_template|||$this->_template = $template;|||[I] CustomCakeEmail|||v
_textMessage|||$this->_textMessage = $rendered['text'];|||[I] CustomCakeEmail|||v
_transportClass|||$this->_transportClass = null;|||[I] CustomCakeEmail|||v
_transportName|||$this->_transportName = 'Mail';|||[I] CustomCakeEmail|||v
_viewRender|||$this->_viewRender = $viewClass;|||[I] CustomCakeEmail|||v
_viewVars|||$this->_viewVars = array();|||[I] CustomCakeEmail|||v
_wrap|||protected function _wrap($message) {|||[I] CustomCakeEmail|||f
addAttachments|||public function addAttachments($attachments) {|||[I] CustomCakeEmail|||f
addBcc|||public function addBcc($email, $name = null) {|||[I] CustomCakeEmail|||f
addCc|||public function addCc($email, $name = null) {|||[I] CustomCakeEmail|||f
addHeaders|||public function addHeaders($headers) {|||[I] CustomCakeEmail|||f
addTo|||public function addTo($email, $name = null) {|||[I] CustomCakeEmail|||f
alias|||$alias = '"' . $alias . '"';|||[I] CustomCakeEmail|||v
attach|||$attach = array();|||[I] CustomCakeEmail|||v
attachments|||$attachments = $this->_attachFiles($boundary);|||[I] CustomCakeEmail|||v
boundary|||$boundary = $this->_boundary;|||[I] CustomCakeEmail|||v
char|||$char = $line[$i];|||[I] CustomCakeEmail|||v
charset|||$this->charset = $config['charset'];|||[I] CustomCakeEmail|||v
class|||$class = __CLASS__;|||[I] CustomCakeEmail|||v
classVar|||$classVar = '_' . $var;|||[I] CustomCakeEmail|||v
config|||$config = $configs->{$config};|||[I] CustomCakeEmail|||v
configs|||$configs = new EmailConfig();|||[I] CustomCakeEmail|||v
content|||$content = explode("\n", $this->_htmlMessage);|||[I] CustomCakeEmail|||v
contentIds|||$contentIds = array_filter((array)Set::classicExtract($this->_attachments, '{s}.contentId'));|||[I] CustomCakeEmail|||v
contents|||$contents = $this->transportClass()->send($this);|||[I] CustomCakeEmail|||v
current|||$current = $this->_attachments;|||[I] CustomCakeEmail|||v
data|||$data = $this->_readFile($fileInfo['file']);|||[I] CustomCakeEmail|||v
defaults|||$defaults = array_fill_keys(array('from', 'sender', 'replyTo', 'readReceipt', 'returnPath', 'to', 'cc', 'bcc', 'subject'), false);|||[I] CustomCakeEmail|||v
deliver|||public static function deliver($to = null, $subject = null, $message = null, $transportConfig = 'fast', $send = true) {|||[I] CustomCakeEmail|||f
emailFormat|||public function emailFormat($format = null) {|||[I] CustomCakeEmail|||f
fileInfo|||$fileInfo = array('file' => $fileInfo);|||[I] CustomCakeEmail|||v
formatted|||$formatted = array_merge($formatted, explode("\n", wordwrap($line, self::LINE_LENGTH_SHOULD, "\n")));|||[I] CustomCakeEmail|||v
from|||public function from($email = null, $name = null) {|||[I] CustomCakeEmail|||f
getHeaders|||public function getHeaders($include = array()) {|||[I] CustomCakeEmail|||f
handle|||$handle = fopen($file, 'rb');|||[I] CustomCakeEmail|||v
hasAttachments|||$hasAttachments = !empty($this->_attachments);|||[I] CustomCakeEmail|||v
hasInlineAttachments|||hasInlineAttachments|||[I] CustomCakeEmail|||v
hasMultipleTypes|||hasMultipleTypes|||[I] CustomCakeEmail|||v
headerCharset|||$this->headerCharset = $config['headerCharset'];|||[I] CustomCakeEmail|||v
headers|||$headers = array();|||[I] CustomCakeEmail|||v
helpers|||public function helpers($helpers = null) {|||[I] CustomCakeEmail|||f
include|||$include = array_fill_keys($include, true);|||[I] CustomCakeEmail|||v
instance|||$instance = new $class($transportConfig);|||[I] CustomCakeEmail|||v
internalEncoding|||$internalEncoding = function_exists('mb_internal_encoding');|||[I] CustomCakeEmail|||v
lastSpace|||$lastSpace = strrpos($tmpLine, ' ');|||[I] CustomCakeEmail|||v
layout|||$layout = $config['layout'];|||[I] CustomCakeEmail|||v
level|||$level = $this->_config['log'];|||[I] CustomCakeEmail|||v
line|||$line = '.' . $line;|||[I] CustomCakeEmail|||v
lines|||$lines = explode("\n", $message);|||[I] CustomCakeEmail|||v
list|||$list = array();|||[I] CustomCakeEmail|||v
message|||$message = $config['message'];|||[I] CustomCakeEmail|||v
messageId|||public function messageId($message = null) {|||[I] CustomCakeEmail|||f
name|||$name = $email;|||[I] CustomCakeEmail|||v
nextChar|||nextChar|||[I] CustomCakeEmail|||v
readReceipt|||public function readReceipt($email = null, $name = null) {|||[I] CustomCakeEmail|||f
relBoundary|||$relBoundary = $textBoundary = 'rel-' . $boundary;|||[I] CustomCakeEmail|||v
relation|||$relation = array(|||[I] CustomCakeEmail|||v
render|||$render = $View->render($template, $layout);|||[I] CustomCakeEmail|||v
rendered|||$rendered = $this->_renderTemplates($content);|||[I] CustomCakeEmail|||v
replyTo|||public function replyTo($email = null, $name = null) {|||[I] CustomCakeEmail|||f
reset|||public function reset() {|||[I] CustomCakeEmail|||f
restore|||$restore = mb_internal_encoding();|||[I] CustomCakeEmail|||v
return|||$return = array();|||[I] CustomCakeEmail|||v
returnPath|||public function returnPath($email = null, $name = null) {|||[I] CustomCakeEmail|||f
send|||public function send($content = null) {|||[I] CustomCakeEmail|||f
sender|||public function sender($email = null, $name = null) {|||[I] CustomCakeEmail|||f
setHeaders|||public function setHeaders($headers) {|||[I] CustomCakeEmail|||f
simpleMethods|||$simpleMethods = array(|||[I] CustomCakeEmail|||v
subject|||public function subject($subject = null) {|||[I] CustomCakeEmail|||f
tagLength|||$tagLength = strlen($tag);|||[I] CustomCakeEmail|||v
tagOpen|||$tagOpen = false;|||[I] CustomCakeEmail|||v
template|||public function template($template = false, $layout = false) {|||[I] CustomCakeEmail|||f
text|||$text = mb_convert_encoding($text, $this->charset, $this->_appCharset);|||[I] CustomCakeEmail|||v
textBoundary|||$textBoundary = 'alt-' . $boundary;|||[I] CustomCakeEmail|||v
tmpLine|||$tmpLine = $tag;|||[I] CustomCakeEmail|||v
tmpLineLength|||$tmpLineLength = $tagLength;|||[I] CustomCakeEmail|||v
transport|||public function transport($name = null) {|||[I] CustomCakeEmail|||f
transportClass|||public function transportClass() {|||[I] CustomCakeEmail|||f
types|||$types = array('html', 'text');|||[I] CustomCakeEmail|||v
viewClass|||$viewClass = $this->_viewRender;|||[I] CustomCakeEmail|||v
viewRender|||public function viewRender($viewClass = null) {|||[I] CustomCakeEmail|||f
viewVars|||public function viewVars($viewVars = null) {|||[I] CustomCakeEmail|||f
