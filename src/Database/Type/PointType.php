<?php
namespace App\Database\Type;

use App\Database\Point;
use Cake\Database\Expression\FunctionExpression;
use Cake\Database\Type as BaseType;
use Cake\Database\Type\ExpressionTypeInterface;
use Cake\Database\Driver;

class PointType extends BaseType implements ExpressionTypeInterface
{
    public function toPHP($value, Driver $d)
    {
        return Point::parse($value);
    }

    public function marshal($value)
    {
        if (is_string($value)) {
            $value = explode(',', $value);
        }
        if (is_array($value)) {
            return new Point($value[0], $value[1]);
        }
        return null;
    }

    public function toExpression($value)
    {
        if ($value instanceof Point) {
            return new FunctionExpression(
                'POINT',
                $value->lat(),
                $value->long()
            );
        }
        if (is_array($value)) {
            return new FunctionExpression('POINT', $value[0], $value[1]);
        }
        // Handle other cases.
    }
}
?>