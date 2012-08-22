EmailComponent|||EmailComponent extends Component { <class>|||[I] EmailComponent.|||c
__construct|||public function __construct(ComponentCollection $collection, $settings = array()) {|||[I] EmailComponent.|||f
_controller|||$this->_controller = $collection->getController();|||[I] EmailComponent.|||v
_encode|||protected function _encode($subject) {|||[I] EmailComponent.|||f
_findFiles|||protected function _findFiles($attachment) {|||[I] EmailComponent.|||f
_formatAddresses|||protected function _formatAddresses($addresses) {|||[I] EmailComponent.|||f
_formatAttachFiles|||protected function _formatAttachFiles() {|||[I] EmailComponent.|||f
_header|||$this->_header = array();|||[I] EmailComponent.|||v
_message|||$this->_message = array();|||[I] EmailComponent.|||v
_strip|||protected function _strip($value, $message = false) {|||[I] EmailComponent.|||f
additionalParams|||$this->additionalParams = null;|||[I] EmailComponent.|||v
address|||$address = $this->_strip($address);|||[I] EmailComponent.|||v
attachments|||$this->attachments = array();|||[I] EmailComponent.|||v
charset|||$this->charset = Configure::read('App.encoding');|||[I] EmailComponent.|||v
date|||$this->date = null;|||[I] EmailComponent.|||v
delivery|||$this->delivery = 'mail';|||[I] EmailComponent.|||v
file|||$file = $path . DS . $attachment;|||[I] EmailComponent.|||v
filePaths|||public $filePaths = array();|||[I] EmailComponent.|||v
filename|||$filename = basename($file);|||[I] EmailComponent.|||v
files|||$files = array();|||[I] EmailComponent.|||v
formatted|||$formatted = array();|||[I] EmailComponent.|||v
from|||$this->from = null;|||[I] EmailComponent.|||v
headers|||$headers = array('X-Mailer' => $this->xMailer);|||[I] EmailComponent.|||v
htmlMessage|||$this->htmlMessage = null;|||[I] EmailComponent.|||v
initialize|||public function initialize(Controller $controller) {|||[I] EmailComponent.|||f
internalEncoding|||$internalEncoding = function_exists('mb_internal_encoding');|||[I] EmailComponent.|||v
layout|||$this->layout = $layout;|||[I] EmailComponent.|||v
lineFeed|||public $lineFeed = PHP_EOL;|||[I] EmailComponent.|||v
messageId|||$this->messageId = true;|||[I] EmailComponent.|||v
readReceipt|||public $readReceipt = null;|||[I] EmailComponent.|||v
replyTo|||$this->replyTo = null;|||[I] EmailComponent.|||v
reset|||public function reset() {|||[I] EmailComponent.|||f
restore|||$restore = mb_internal_encoding();|||[I] EmailComponent.|||v
return|||$return = mb_encode_mimeheader($subject, $this->charset, 'B', $nl);|||[I] EmailComponent.|||v
search|||search|||[I] EmailComponent.|||v
send|||public function send($content = null, $template = null, $layout = null) {|||[I] EmailComponent.|||f
sendAs|||public $sendAs = 'text';|||[I] EmailComponent.|||v
sent|||$sent = $lib->send($content);|||[I] EmailComponent.|||v
smtpOptions|||public $smtpOptions = array();|||[I] EmailComponent.|||v
subject|||$subject = $this->_strip($subject);|||[I] EmailComponent.|||v
template|||$this->template = $template;|||[I] EmailComponent.|||v
textMessage|||$this->textMessage = null;|||[I] EmailComponent.|||v
value|||$value = preg_replace($search, '', $value);|||[I] EmailComponent.|||v
xMailer|||public $xMailer = 'CakePHP Email Component';|||[I] EmailComponent.|||v
