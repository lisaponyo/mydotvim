!_TAG_FILE_FORMAT	2	/extended format; --format=1 will not append ;" to lines/
!_TAG_FILE_SORTED	1	/0=unsorted, 1=sorted, 2=foldcase/
!_TAG_PROGRAM_AUTHOR	Darren Hiebert	/dhiebert@users.sourceforge.net/
!_TAG_PROGRAM_NAME	Exuberant Ctags	//
!_TAG_PROGRAM_URL	http://ctags.sourceforge.net	/official site/
!_TAG_PROGRAM_VERSION	5.9~svn20110310	//
CustomContainableBehavior	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^class CustomContainableBehavior extends ContainableBehavior {$/;"	c
autoFields	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^		$autoFields = ($this->settings[$Model->alias]['autoFields']$/;"	v
backupBindings	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^				$backupBindings = array();$/;"	v
beforeFind	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^	public function beforeFind(Model $Model, $query) {$/;"	f
contain	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^			$contain = $this->runtime[$Model->alias]['contain'];$/;"	v
contain	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^			$contain = array_merge($contain, (array)$query['contain']);$/;"	v
contain	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^		$contain = array();$/;"	v
containments	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^		$containments = $this->containments($Model, $contain);$/;"	v
field	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^						$field = $modelName . '.' . ($/;"	v
field	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^						$field = null;$/;"	v
field	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^					$field = $Model->primaryKey;$/;"	v
instance	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^			$instance = $model['instance'];$/;"	v
mandatory	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^				$mandatory = array_merge($mandatory, $needed);$/;"	v
mandatory	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^		$mandatory = array();$/;"	v
map	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^		$map = $this->containmentsMap($containments);$/;"	v
needed	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^			$needed = $this->fieldDependencies($instance, $map, false);$/;"	v
noContain	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^		$noContain = ($/;"	v
reset	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^			$reset = is_bool(end($contain))$/;"	v
reset	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^		$reset = (isset($query['reset']) ? $query['reset'] : true);$/;"	v
unbind	/home/rikehata/www/nisshin/app/Model/Behavior/CustomContainableBehavior.php	/^					$unbind = array();$/;"	v
