DebugKitLogListener|||DebugKitLogListener implements CakeLogInterface { <class>|||[I] ToolbarComponen|||c
DebugPanel|||DebugPanel extends Object { <class>|||[I] ToolbarComponen|||c
HistoryPanel|||HistoryPanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
IncludePanel|||IncludePanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
LogPanel|||LogPanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
RequestPanel|||RequestPanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
SessionPanel|||SessionPanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
SqlLogPanel|||SqlLogPanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
TimerPanel|||TimerPanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
ToolbarComponent|||ToolbarComponent extends Component { <class>|||[I] ToolbarComponen|||c
VariablesPanel|||VariablesPanel extends DebugPanel { <class>|||[I] ToolbarComponen|||c
__construct|||public function __construct() {|||[I] ToolbarComponen|||f
_createCacheConfig|||protected function _createCacheConfig() {|||[I] ToolbarComponen|||f
_defaultPanels|||protected $_defaultPanels = array('history', 'session', 'request', 'sqlLog', 'timer', 'log', 'variables', 'include');|||[I] ToolbarComponen|||v
_eval|||protected function _eval($code) {|||[I] ToolbarComponen|||f
_fileTypes|||protected $_fileTypes = array(|||[I] ToolbarComponen|||v
_gatherVars|||protected function _gatherVars($controller) {|||[I] ToolbarComponen|||f
_getFileType|||protected function _getFileType($file) {|||[I] ToolbarComponen|||f
_includePaths|||protected function _includePaths() {|||[I] ToolbarComponen|||f
_isAppFile|||protected function _isAppFile($file) {|||[I] ToolbarComponen|||f
_isCoreFile|||protected function _isCoreFile($file) {|||[I] ToolbarComponen|||f
_isPluginFile|||protected function _isPluginFile($file) {|||[I] ToolbarComponen|||f
_loadPanels|||protected function _loadPanels($panels, $settings) {|||[I] ToolbarComponen|||f
_makePanelList|||protected function _makePanelList($userPanels) {|||[I] ToolbarComponen|||f
_makeViewClass|||protected function _makeViewClass($baseClassName) {|||[I] ToolbarComponen|||f
_niceFileName|||protected function _niceFileName($file, $type) {|||[I] ToolbarComponen|||f
_pluginPaths|||protected $_pluginPaths = array();|||[I] ToolbarComponen|||v
_saveState|||protected function _saveState($controller, $vars) {|||[I] ToolbarComponen|||f
beforeRedirect|||public function beforeRedirect($controller, $url, $status = null, $exit = true) {|||[I] ToolbarComponen|||f
beforeRender|||public function beforeRender($controller) { }|||[I] ToolbarComponen|||f
cacheDuration|||cacheDuration|||[I] ToolbarComponen|||v
cacheKey|||$cacheKey = $controller->Toolbar->cacheKey;|||[I] ToolbarComponen|||v
class|||$class = "class DoppelGangerView extends $baseClassName {}";|||[I] ToolbarComponen|||v
className|||$className = $panel . 'Panel';|||[I] ToolbarComponen|||v
components|||public $components = array('RequestHandler', 'Session');|||[I] ToolbarComponen|||v
config|||$config = Cache::config('debug_kit');|||[I] ToolbarComponen|||v
connections|||$connections = array();|||[I] ToolbarComponen|||v
controller|||$this->controller = $collection->getController();|||[I] ToolbarComponen|||v
currentViewClass|||$currentViewClass = $controller->viewClass;|||[I] ToolbarComponen|||v
dbConfigs|||$dbConfigs = ConnectionManager::sourceList();|||[I] ToolbarComponen|||v
driver|||$driver = $db->config['datasource'];|||[I] ToolbarComponen|||v
elementName|||$elementName = $panel->elementName;|||[I] ToolbarComponen|||v
enabled|||$this->enabled = false;|||[I] ToolbarComponen|||v
existing|||$existing = CakeLog::configured();|||[I] ToolbarComponen|||v
explain|||$explain = true;|||[I] ToolbarComponen|||v
format|||$format = 'FirePhp';|||[I] ToolbarComponen|||v
history|||$history = array();|||[I] ToolbarComponen|||v
historyStates|||$historyStates = array();|||[I] ToolbarComponen|||v
index|||$index = array_search($key, $panels);|||[I] ToolbarComponen|||v
initialize|||public function initialize($controller) {|||[I] ToolbarComponen|||f
isExplainable|||$isExplainable = (preg_match('/(Mysql|Postgres)$/', $driver));|||[I] ToolbarComponen|||v
isHtml|||$isHtml = (!isset($controller->request->params['ext']) || $controller->request->params['ext'] === 'html');|||[I] ToolbarComponen|||v
javascript|||public $javascript = array(|||[I] ToolbarComponen|||v
loadState|||public function loadState($key) {|||[I] ToolbarComponen|||f
logger|||$logger = $this->logger;|||[I] ToolbarComponen|||v
logs|||public $logs = array();|||[I] ToolbarComponen|||v
panel|||$panel = $this->panels[$panelName];|||[I] ToolbarComponen|||v
panelName|||$panelName = Inflector::underscore($panelName);|||[I] ToolbarComponen|||v
panelObj|||$panelObj = new $className($settings);|||[I] ToolbarComponen|||v
panels|||$panels = $this->_makePanelList($settings['panels']);|||[I] ToolbarComponen|||v
paths|||$paths = array_flip(array_merge(explode($split, get_include_path()), array(CAKE)));|||[I] ToolbarComponen|||v
plugin|||$plugin = false;|||[I] ToolbarComponen|||v
pluginName|||$pluginName = $this->_isPluginFile($file);|||[I] ToolbarComponen|||v
prefix|||$prefix = array();|||[I] ToolbarComponen|||v
query|||$query = $state['request']['content']['query'];|||[I] ToolbarComponen|||v
return|||$return = array('core' => array(), 'app' => array(), 'plugins' => array());|||[I] ToolbarComponen|||v
sessions|||$sessions = $controller->Toolbar->Session->read();|||[I] ToolbarComponen|||v
settings|||public $settings = array(|||[I] ToolbarComponen|||v
slowRate|||slowRate|||[I] ToolbarComponen|||v
split|||$split = (strstr(PHP_OS, 'win')) ? ';' : ':';|||[I] ToolbarComponen|||v
startup|||public function startup($controller) { }|||[I] ToolbarComponen|||f
title|||$title = $state['request']['content']['url'];|||[I] ToolbarComponen|||v
toolbarHistory|||$toolbarHistory = Cache::read($cacheKey, 'debug_kit');|||[I] ToolbarComponen|||v
vars|||$vars = $this->_gatherVars($controller);|||[I] ToolbarComponen|||v
write|||public function write($type, $message) {|||[I] ToolbarComponen|||f
