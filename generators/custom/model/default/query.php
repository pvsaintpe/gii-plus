<?php

use pvsaintpe\gii\plus\helpers\Helper;
use yii\helpers\Inflector;

/* @var $this yii\web\View */
/* @var $generator pvsaintpe\gii\plus\generators\custom\model\Generator */
/* @var $ns string */
/* @var $modelName string */
/* @var $modelClass string|pvsaintpe\boost\db\ActiveRecord */
/* @var $baseModelName string */
/* @var $baseModelClass string|pvsaintpe\boost\db\ActiveRecord */
/* @var $queryNs string */
/* @var $queryName string */
/* @var $queryClass string|pvsaintpe\boost\db\ActiveQuery */
/* @var $baseQueryName string */
/* @var $baseQueryClass string|pvsaintpe\boost\db\ActiveQuery */
/* @var $tableSchema pvsaintpe\db\components\TableSchema */

$uses = [
    $baseQueryClass
];
Helper::sortUses($uses);

echo '<?php

namespace ', $queryNs, ';

use ', implode(';' . "\n" . 'use ', $uses), ';

/**
 * ', Inflector::titleize($queryName), '
 * @see \\', $modelClass, '
 */
class ', $queryName, ' extends ', $baseQueryName, '
{
}
';
