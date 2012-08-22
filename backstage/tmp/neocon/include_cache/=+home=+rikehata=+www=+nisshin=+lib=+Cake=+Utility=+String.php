String|||String { <class>|||[I] String.php|||c
append|||$append = '';|||[I] String.php|||v
bits|||$bits = mb_substr($truncate, $spacepos);|||[I] String.php|||v
buffer|||$buffer = '';|||[I] String.php|||v
chunks|||$chunks = explode("\n", $wrapped);|||[I] String.php|||v
clean|||$clean = array_merge(array(|||[I] String.php|||v
cleanInsert|||public static function cleanInsert($str, $options) {|||[I] String.php|||f
contentLength|||contentLength|||[I] String.php|||v
data|||$data = array();|||[I] String.php|||v
dataReplacements|||$dataReplacements = array_combine($hashKeys, array_values($data));|||[I] String.php|||v
default|||$default = array(|||[I] String.php|||v
defaults|||$defaults = array(|||[I] String.php|||v
depth|||depth|||[I] String.php|||v
endPos|||$endPos = $textLen;|||[I] String.php|||v
entitiesLength|||entitiesLength|||[I] String.php|||v
excerpt|||$excerpt = $prepend . $excerpt . $append;|||[I] String.php|||v
format|||$format = sprintf(|||[I] String.php|||v
hashKeys|||$hashKeys = array();|||[I] String.php|||v
highlight|||public static function highlight($text, $phrase, $options = array()) {|||[I] String.php|||f
host|||$host = env('HOST');|||[I] String.php|||v
insert|||public static function insert($str, $data, $options = array()) {|||[I] String.php|||f
ipSix|||$ipSix = '';|||[I] String.php|||v
kleenex|||$kleenex = sprintf(|||[I] String.php|||v
lastCloseTag|||$lastCloseTag = mb_strrpos($truncateCheck, '>');|||[I] String.php|||v
lastOpenTag|||$lastOpenTag = mb_strrpos($truncateCheck, '<');|||[I] String.php|||v
lastTag|||lastTag|||[I] String.php|||v
left|||$left = $length - $totalLength;|||[I] String.php|||v
length|||$length = strlen($data);|||[I] String.php|||v
node|||node|||[I] String.php|||v
offset|||offset|||[I] String.php|||v
offsets|||$offsets = array(|||[I] String.php|||v
open|||$open = false;|||[I] String.php|||v
openTags|||$openTags = array();|||[I] String.php|||v
options|||$options = array('width' => $options);|||[I] String.php|||v
phrase|||$phrase = "(?![^<]+>)$phrase(?![^<]+>)";|||[I] String.php|||v
phraseLen|||$phraseLen = mb_strlen($phrase);|||[I] String.php|||v
prepend|||$prepend = '';|||[I] String.php|||v
replace|||$replace = array();|||[I] String.php|||v
results|||$results = array();|||[I] String.php|||v
segment|||$segment = "(?![^<]+>)$segment(?![^<]+>)";|||[I] String.php|||v
spacepos|||$spacepos = mb_strrpos($truncate, $lastTag) + mb_strlen($lastTag);|||[I] String.php|||v
startPos|||startPos|||[I] String.php|||v
stripLinks|||public static function stripLinks($text) {|||[I] String.php|||f
tempData|||$tempData = array_combine(array_keys($data), array_values($hashKeys));|||[I] String.php|||v
textLen|||$textLen = mb_strlen($text);|||[I] String.php|||v
tmpOffset|||$tmpOffset = $offsets[$i];|||[I] String.php|||v
tmpValue|||$tmpValue = (is_array($tmpValue)) ? '' : $tmpValue;|||[I] String.php|||v
toList|||public static function toList($list, $and = 'and', $separator = ', ') {|||[I] String.php|||f
tokenize|||public static function tokenize($data, $separator = ',', $leftBound = '(', $rightBound = ')') {|||[I] String.php|||f
totalLength|||$totalLength = mb_strlen(strip_tags($ending));|||[I] String.php|||v
truncate|||truncate|||[I] String.php|||v
truncateCheck|||truncateCheck|||[I] String.php|||v
uuid|||$uuid = sprintf(|||[I] String.php|||v
with|||$with = array();|||[I] String.php|||v
wrap|||public static function wrap($text, $options = array()) {|||[I] String.php|||f
wrapped|||$wrapped = implode("\n", $chunks);|||[I] String.php|||v
