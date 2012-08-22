CustomContainableBehavior|||CustomContainableBehavior extends ContainableBehavior { <class>|||[I] CustomContainab|||c
autoFields|||$autoFields = ($this->settings[$Model->alias]['autoFields']|||[I] CustomContainab|||v
backupBindings|||$backupBindings = array();|||[I] CustomContainab|||v
beforeFind|||public function beforeFind(Model $Model, $query) {|||[I] CustomContainab|||f
contain|||$contain = $this->runtime[$Model->alias]['contain'];|||[I] CustomContainab|||v
containments|||$containments = $this->containments($Model, $contain);|||[I] CustomContainab|||v
field|||$field = $modelName . '.' . (|||[I] CustomContainab|||v
instance|||$instance = $model['instance'];|||[I] CustomContainab|||v
mandatory|||$mandatory = array_merge($mandatory, $needed);|||[I] CustomContainab|||v
needed|||$needed = $this->fieldDependencies($instance, $map, false);|||[I] CustomContainab|||v
noContain|||$noContain = (|||[I] CustomContainab|||v
reset|||$reset = is_bool(end($contain))|||[I] CustomContainab|||v
unbind|||$unbind = array();|||[I] CustomContainab|||v
