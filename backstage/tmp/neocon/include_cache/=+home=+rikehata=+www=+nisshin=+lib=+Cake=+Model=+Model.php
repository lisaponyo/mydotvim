Behaviors|||$this->Behaviors = new BehaviorCollection();|||[I] Model.php|||v
Model|||Model extends Object implements CakeEventListener { <class>|||[I] Model.php|||c
__backAssociation|||$this->__backAssociation = $savedAssociatons;|||[I] Model.php|||v
__backContainableAssociation|||public $__backContainableAssociation = array();|||[I] Model.php|||v
__backInnerAssociation|||public $__backInnerAssociation = array();|||[I] Model.php|||v
__backOriginalAssociation|||public $__backOriginalAssociation = array();|||[I] Model.php|||v
__call|||public function __call($method, $params) {|||[I] Model.php|||f
__construct|||public function __construct($id = false, $table = null, $ds = null) {|||[I] Model.php|||f
__get|||public function __get($name) {|||[I] Model.php|||f
__isset|||public function __isset($name) {|||[I] Model.php|||f
_associationKeys|||protected $_associationKeys = array(|||[I] Model.php|||v
_associations|||protected $_associations = array('belongsTo', 'hasOne', 'hasMany', 'hasAndBelongsToMany');|||[I] Model.php|||v
_clearCache|||protected function _clearCache($type = null) {|||[I] Model.php|||f
_collectForeignKeys|||protected function _collectForeignKeys($type = 'belongsTo') {|||[I] Model.php|||f
_constructLinkedModel|||protected function _constructLinkedModel($assoc, $className = null, $plugin = null) {|||[I] Model.php|||f
_createLinks|||protected function _createLinks() {|||[I] Model.php|||f
_deleteDependent|||protected function _deleteDependent($id, $cascade) {|||[I] Model.php|||f
_deleteLinks|||protected function _deleteLinks($id) {|||[I] Model.php|||f
_eventManager|||$this->_eventManager = new CakeEventManager();|||[I] Model.php|||v
_filterResults|||protected function _filterResults($results, $primary = true) {|||[I] Model.php|||f
_findCount|||protected function _findCount($state, $query, $results = array()) {|||[I] Model.php|||f
_findFirst|||protected function _findFirst($state, $query, $results = array()) {|||[I] Model.php|||f
_findList|||protected function _findList($state, $query, $results = array()) {|||[I] Model.php|||f
_findNeighbors|||protected function _findNeighbors($state, $query, $results = array()) {|||[I] Model.php|||f
_findThreaded|||protected function _findThreaded($state, $query, $results = array()) {|||[I] Model.php|||f
_generateAssociation|||protected function _generateAssociation($type, $assocKey) {|||[I] Model.php|||f
_insertID|||$this->_insertID = $id;|||[I] Model.php|||v
_normalizeXmlData|||protected function _normalizeXmlData(array $xml) {|||[I] Model.php|||f
_prepareUpdateFields|||protected function _prepareUpdateFields($data) {|||[I] Model.php|||f
_return|||$_return = $this->{$association}->saveMany($values, array_merge($options, array('atomic' => false)));|||[I] Model.php|||v
_saveMulti|||protected function _saveMulti($joined, $id, $db) {|||[I] Model.php|||f
_schema|||$this->_schema = $db->describe($this);|||[I] Model.php|||v
_sourceConfigured|||$this->_sourceConfigured = true;|||[I] Model.php|||v
_validate|||$_validate = $this->validate;|||[I] Model.php|||v
_validateWithModels|||protected function _validateWithModels($options) {|||[I] Model.php|||f
_whitelist|||$_whitelist = $this->whitelist;|||[I] Model.php|||v
actsAs|||public $actsAs = null;|||[I] Model.php|||v
afterDelete|||public function afterDelete() {|||[I] Model.php|||f
afterFind|||public function afterFind($results, $primary = false) {|||[I] Model.php|||f
afterSave|||public function afterSave($created) {|||[I] Model.php|||f
alias|||$alias = $this->alias;|||[I] Model.php|||v
args|||args|||[I] Model.php|||v
assoc|||$assoc = $value;|||[I] Model.php|||v
assocKey|||$assocKey = $k;|||[I] Model.php|||v
assocName|||$assocName = $value;|||[I] Model.php|||v
associated|||$associated = array();|||[I] Model.php|||v
associationForeignKey|||$associationForeignKey = $this->{$join}->alias . '.' . $this->hasAndBelongsToMany[$assoc]['associationForeignKey'];|||[I] Model.php|||v
associations|||$associations = $this->getAssociated();|||[I] Model.php|||v
beforeDelete|||public function beforeDelete($cascade = true) {|||[I] Model.php|||f
beforeFind|||public function beforeFind($queryData) {|||[I] Model.php|||f
beforeSave|||public function beforeSave($options = array()) {|||[I] Model.php|||f
beforeValidate|||public function beforeValidate($options = array()) {|||[I] Model.php|||f
behaviorMethods|||$behaviorMethods = array_keys($this->Behaviors->methods());|||[I] Model.php|||v
belongsTo|||public $belongsTo = array();|||[I] Model.php|||v
bindModel|||public function bindModel($params, $reset = true) {|||[I] Model.php|||f
buildQuery|||public function buildQuery($type = 'first', $query = array()) {|||[I] Model.php|||f
cache|||$cache = $this->_prepareUpdateFields(array_combine($fields, $values));|||[I] Model.php|||v
cacheQueries|||public $cacheQueries = false;|||[I] Model.php|||v
cacheSources|||public $cacheSources = true;|||[I] Model.php|||v
check|||$check = strtolower(Inflector::pluralize($className['className']));|||[I] Model.php|||v
class|||$class = $assocKey;|||[I] Model.php|||v
className|||$className = $name;|||[I] Model.php|||v
colType|||$colType = array_merge($default, $db->columns[$this->getColumnType($updateCol)]);|||[I] Model.php|||v
cols|||$cols = $this->schema();|||[I] Model.php|||v
column|||$column = str_replace(array($db->startQuote, $db->endQuote), '', $column);|||[I] Model.php|||v
columns|||$columns = $this->schema();|||[I] Model.php|||v
conditions|||$conditions = array_merge((array)$data['conditions'], $conditions);|||[I] Model.php|||v
count|||$count = intval($this->find('count', compact('conditions', 'recursive')));|||[I] Model.php|||v
create|||public function create($data = array(), $filterKey = false) {|||[I] Model.php|||f
created|||$created = true;|||[I] Model.php|||v
data|||$data = $class;|||[I] Model.php|||v
date|||$date = array();|||[I] Model.php|||v
dateFields|||$dateFields = array('Y' => 'year', 'm' => 'month', 'd' => 'day', 'H' => 'hour', 'i' => 'min', 's' => 'sec');|||[I] Model.php|||v
dbMulti|||$dbMulti = $db;|||[I] Model.php|||v
deconstruct|||public function deconstruct($field, $data) {|||[I] Model.php|||f
default|||$default = array('formatter' => 'date');|||[I] Model.php|||v
defaults|||$defaults = array('validate' => true, 'fieldList' => array(), 'callbacks' => true);|||[I] Model.php|||v
delete|||public function delete($id = null, $cascade = true) {|||[I] Model.php|||f
deleteAll|||public function deleteAll($conditions, $cascade = true, $callbacks = false) {|||[I] Model.php|||f
displayField|||public $displayField = null;|||[I] Model.php|||v
dynamic|||$dynamic = !empty($relation['dynamicWith']);|||[I] Model.php|||v
dynamicWith|||$dynamicWith = true;|||[I] Model.php|||v
errors|||$errors = $this->_validateWithModels($options);|||[I] Model.php|||v
escapeField|||public function escapeField($field = null, $alias = null) {|||[I] Model.php|||f
event|||$event = new CakeEvent('Model.afterSave', $this, array($created, $options));|||[I] Model.php|||v
exists|||$exists = $this->exists();|||[I] Model.php|||v
fInfo|||$fInfo = $this->schema($this->primaryKey);|||[I] Model.php|||v
field|||$field = Inflector::underscore($this->alias) . '_count';|||[I] Model.php|||v
fieldValue|||$fieldValue = $this->deconstruct($fieldName, $fieldValue);|||[I] Model.php|||v
fields|||$fields = array(|||[I] Model.php|||v
find|||public function find($type = 'first', $query = array()) {|||[I] Model.php|||f
findMethods|||public $findMethods = array(|||[I] Model.php|||v
findQueryType|||$this->findQueryType = $type;|||[I] Model.php|||v
fkQuoted|||$fkQuoted = $this->escapeField($assoc['foreignKey']);|||[I] Model.php|||v
foreignKey|||$foreignKey = $assoc['foreignKey'];|||[I] Model.php|||v
foreignKeys|||$foreignKeys = array();|||[I] Model.php|||v
format|||$format = $this->getDataSource()->columns[$type]['format'];|||[I] Model.php|||v
getAffectedRows|||public function getAffectedRows() {|||[I] Model.php|||f
getAssociated|||public function getAssociated($type = null) {|||[I] Model.php|||f
getColumnType|||public function getColumnType($column) {|||[I] Model.php|||f
getColumnTypes|||public function getColumnTypes() {|||[I] Model.php|||f
getDataSource|||public function getDataSource() {|||[I] Model.php|||f
getEventManager|||public function getEventManager() {|||[I] Model.php|||f
getID|||getID|||[I] Model.php|||f
getInsertID|||public function getInsertID() {|||[I] Model.php|||f
getLastInsertID|||public function getLastInsertID() {|||[I] Model.php|||f
getNumRows|||public function getNumRows() {|||[I] Model.php|||f
getVirtualField|||public function getVirtualField($field = null) {|||[I] Model.php|||f
hasAndBelongsToMany|||public $hasAndBelongsToMany = array();|||[I] Model.php|||v
hasAny|||public function hasAny($conditions = null) {|||[I] Model.php|||f
hasField|||public function hasField($name, $checkVirtual = false) {|||[I] Model.php|||f
hasMany|||public $hasMany = array();|||[I] Model.php|||v
hasMethod|||public function hasMethod($method) {|||[I] Model.php|||f
hasOne|||public $hasOne = array();|||[I] Model.php|||v
idField|||$idField = $db->name($this->{$join}->primaryKey);|||[I] Model.php|||v
implementedEvents|||public function implementedEvents() {|||[I] Model.php|||f
included|||$included = array_intersect($foreignKeys, array_keys($data));|||[I] Model.php|||v
invalidFields|||public function invalidFields($options = array()) {|||[I] Model.php|||f
invalidate|||public function invalidate($field, $value = true) {|||[I] Model.php|||f
isForeignKey|||public function isForeignKey($field) {|||[I] Model.php|||f
isUUID|||$isUUID = !empty($this->{$join}->primaryKey) && (|||[I] Model.php|||v
isUnique|||public function isUnique($fields, $or = true) {|||[I] Model.php|||f
isVirtualField|||public function isVirtualField($field) {|||[I] Model.php|||f
joinModel|||public function joinModel($assoc, $keys = array()) {|||[I] Model.php|||f
keepExisting|||$keepExisting = $this->hasAndBelongsToMany[$assoc]['unique'] === 'keepExisting';|||[I] Model.php|||v
keyInfo|||$keyInfo = $this->{$join}->schema($this->{$join}->primaryKey);|||[I] Model.php|||v
keyPresentAndEmpty|||$keyPresentAndEmpty = (|||[I] Model.php|||v
keys|||$keys = $this->find('first', array(|||[I] Model.php|||v
links|||$links = $this->{$join}->find('all', array(|||[I] Model.php|||v
list|||list|||[I] Model.php|||v
merge|||$merge = array('actsAs', 'findMethods');|||[I] Model.php|||v
message|||$message = $validator['message'];|||[I] Model.php|||v
methods|||$methods = array_map('strtolower', get_class_methods($this));|||[I] Model.php|||v
model|||$model = $this->{$assoc};|||[I] Model.php|||v
models|||$models = array_keys($this->{$assoc});|||[I] Model.php|||v
name|||$name = explode('.', $name);|||[I] Model.php|||v
newData|||$newData = $newValues = $newJoins = array();|||[I] Model.php|||v
newValues|||$newValues = array_values($newValues);|||[I] Model.php|||v
oldConfig|||$oldConfig = $this->useDbConfig;|||[I] Model.php|||v
oldDb|||$oldDb = ConnectionManager::getDataSource($oldConfig);|||[I] Model.php|||v
oldJoin|||$oldJoin = $link[$join][$this->hasAndBelongsToMany[$assoc]['associationForeignKey']];|||[I] Model.php|||v
oldLinks|||$oldLinks = Set::extract($links, "{n}.{$associationForeignKey}");|||[I] Model.php|||v
onError|||public function onError() {|||[I] Model.php|||f
options|||$options = array('validate' => $validate, 'fieldList' => array($name));|||[I] Model.php|||v
order|||public $order = null;|||[I] Model.php|||v
params|||$params = func_get_args();|||[I] Model.php|||v
parent|||$parent = $query['parent'];|||[I] Model.php|||v
parentClass|||$parentClass = get_parent_class($this);|||[I] Model.php|||v
plugin|||$plugin = null;|||[I] Model.php|||v
prevVal|||prevVal|||[I] Model.php|||v
primaryAdded|||$primaryAdded = true;|||[I] Model.php|||v
primaryKey|||$this->primaryKey = 'id';|||[I] Model.php|||v
query|||$query = $this->{'_find' . ucfirst($type)}('before', $query);|||[I] Model.php|||v
read|||public function read($fields = null, $id = null) {|||[I] Model.php|||f
records|||$records = $model->find('all', array(|||[I] Model.php|||v
recursive|||recursive|||[I] Model.php|||v
requiredFail|||$requiredFail = (|||[I] Model.php|||v
resetAssociations|||public function resetAssociations() {|||[I] Model.php|||f
result|||$result = ($result && $this->delete($id, $cascade));|||[I] Model.php|||v
results|||$results = $this->_filterResults($results);|||[I] Model.php|||v
return|||$return = array();|||[I] Model.php|||v
return2|||return2|||[I] Model.php|||v
rule|||$rule = $validator['rule'];|||[I] Model.php|||v
ruleParams|||$ruleParams = array($data[$fieldName]);|||[I] Model.php|||v
ruleSet|||$ruleSet = array($ruleSet);|||[I] Model.php|||v
save|||public function save($data = null, $validate = true, $fieldList = array()) {|||[I] Model.php|||f
saveAll|||public function saveAll($data = null, $options = array()) {|||[I] Model.php|||f
saveAssociated|||public function saveAssociated($data = null, $options = array()) {|||[I] Model.php|||f
saveField|||public function saveField($name, $value, $validate = false) {|||[I] Model.php|||f
saveMany|||public function saveMany($data = null, $options = array()) {|||[I] Model.php|||f
saved|||$saved = $this->{$association}->save($values, $options);|||[I] Model.php|||v
savedAssociatons|||$savedAssociatons = $this->__backAssociation;|||[I] Model.php|||v
schema|||public function schema($field = false) {|||[I] Model.php|||f
schemaName|||$this->schemaName = $db->getSchemaName();|||[I] Model.php|||v
setDataSource|||public function setDataSource($dataSource = null) {|||[I] Model.php|||f
setInsertID|||public function setInsertID($id) {|||[I] Model.php|||f
setSource|||public function setSource($tableName) {|||[I] Model.php|||f
sources|||$sources = $db->listSources();|||[I] Model.php|||v
success|||$success = $created = false;|||[I] Model.php|||v
table|||$this->table = $this->useTable;|||[I] Model.php|||v
tablePrefix|||$this->tablePrefix = $db->config['prefix'];|||[I] Model.php|||v
tableToModel|||public $tableToModel = array();|||[I] Model.php|||v
tables|||$tables = array($this->table, $this->{$class}->table);|||[I] Model.php|||v
time|||$time = $colType['formatter']($colType['format']);|||[I] Model.php|||v
timeFields|||$timeFields = array('H' => 'hour', 'i' => 'min', 's' => 'sec');|||[I] Model.php|||v
transactionBegun|||$transactionBegun = $db->begin();|||[I] Model.php|||v
type|||$type = $associations[$association];|||[I] Model.php|||v
unbindModel|||public function unbindModel($params, $reset = true) {|||[I] Model.php|||f
updateAll|||public function updateAll($fields, $conditions = true) {|||[I] Model.php|||f
updateCounterCache|||$updateCounterCache = true;|||[I] Model.php|||v
useDbConfig|||$this->useDbConfig = $dataSource;|||[I] Model.php|||v
useNewDate|||$useNewDate = (isset($data['year']) || isset($data['month']) |||||[I] Model.php|||v
useTable|||$this->useTable = Inflector::tableize($this->name);|||[I] Model.php|||v
valid|||$valid = $this->Behaviors->dispatchMethod($this, $rule, $ruleParams);|||[I] Model.php|||v
validate|||$this->validate = $validate;|||[I] Model.php|||v
validateAssociated|||public function validateAssociated($data, $options = array()) {|||[I] Model.php|||f
validateMany|||public function validateMany($data, $options = array()) {|||[I] Model.php|||f
validates|||$validates = false;|||[I] Model.php|||v
validationDomain|||$validationDomain = 'default';|||[I] Model.php|||v
validationErrors|||$this->validationErrors = $validationErrors[$this->alias];|||[I] Model.php|||v
validator|||$validator = array('rule' => $validator);|||[I] Model.php|||v
value|||$value = array();|||[I] Model.php|||v
values|||$values = array_merge(array($key => $this->id), $values, array($key => $this->id));|||[I] Model.php|||v
virtualFields|||public $virtualFields = array();|||[I] Model.php|||v
whitelist|||$this->whitelist = $_whitelist;|||[I] Model.php|||v
with|||$with = key($assoc);|||[I] Model.php|||v
withModel|||$withModel = is_array($with) ? key($with) : $with;|||[I] Model.php|||v
