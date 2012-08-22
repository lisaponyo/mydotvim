!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
CustomEmailComponent	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^class CustomEmailComponent extends EmailComponent {$/;"	c
_encode	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^	protected function _encode($subject) {$/;"	f
_header	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$this->_header = array();$/;"	v
_message	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$this->_message = array();$/;"	v
_message	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$this->_message = mb_convert_encoding($this->_message, $this->charset, 'UTF-8');$/;"	v
headers	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$headers = array('X-Mailer' => $this->xMailer);$/;"	v
htmlMessage	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^			$this->htmlMessage = null;$/;"	v
htmlMessage	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$this->htmlMessage = $lib->message(CakeEmail::MESSAGE_HTML);$/;"	v
internalEncoding	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$internalEncoding = function_exists('mb_internal_encoding');$/;"	v
layout	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^			$this->layout = $layout;$/;"	v
lib	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$lib = new CakeEmail();$/;"	v
nl	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^			$nl = '';$/;"	v
nl	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$nl = "\\r\\n";$/;"	v
restore	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^			$restore = mb_internal_encoding();$/;"	v
return	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$return = mb_encode_mimeheader($subject, $this->charset, 'B', $nl);$/;"	v
send	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^	public function send($content = null, $template = null, $layout = null) {$/;"	f
sent	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$sent = $lib->send($content);$/;"	v
subject	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$subject = $this->_strip($subject);$/;"	v
subject	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$subject = mb_convert_encoding($subject, 'ISO-2022-JP', 'UTF-8');$/;"	v
template	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^			$this->template = $template;$/;"	v
textMessage	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^			$this->textMessage = null;$/;"	v
textMessage	/home/rikehata/www/nisshin/app/Controller/Component/CustomEmailComponent.php	/^		$this->textMessage = $lib->message(CakeEmail::MESSAGE_TEXT);$/;"	v
