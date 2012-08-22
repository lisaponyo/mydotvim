CustomEmailComponent|||CustomEmailComponent extends EmailComponent { <class>|||[I] CustomEmailComp|||c
_encode|||protected function _encode($subject) {|||[I] CustomEmailComp|||f
_header|||$this->_header = array();|||[I] CustomEmailComp|||v
_message|||$this->_message = array();|||[I] CustomEmailComp|||v
headers|||$headers = array('X-Mailer' => $this->xMailer);|||[I] CustomEmailComp|||v
htmlMessage|||$this->htmlMessage = null;|||[I] CustomEmailComp|||v
internalEncoding|||$internalEncoding = function_exists('mb_internal_encoding');|||[I] CustomEmailComp|||v
layout|||$this->layout = $layout;|||[I] CustomEmailComp|||v
restore|||$restore = mb_internal_encoding();|||[I] CustomEmailComp|||v
return|||$return = mb_encode_mimeheader($subject, $this->charset, 'B', $nl);|||[I] CustomEmailComp|||v
send|||public function send($content = null, $template = null, $layout = null) {|||[I] CustomEmailComp|||f
sent|||$sent = $lib->send($content);|||[I] CustomEmailComp|||v
subject|||$subject = $this->_strip($subject);|||[I] CustomEmailComp|||v
template|||$this->template = $template;|||[I] CustomEmailComp|||v
textMessage|||$this->textMessage = null;|||[I] CustomEmailComp|||v
