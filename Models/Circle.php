<?php
class Circle
{
    public static $radius; // радіус
		//обчилення об'єму кола
		//calculating the volume of a circle
	public static function volume() //обчилення об'єму кола
	{
		//V = 4/3*Pi*radius^3
		return 4/3*M_PI*pow(self::$radius,3);
	}
    // Circle area
    // Площа кола
    public function area ()
    {
        //S = Pi*R^2
        return M_PI*pow(self::$radius,2);
    }

    // calculating the length of a circle
    // обчислення довжена кола
    public function circuit ()
    {
        //S = 2*Pi*R
        return 2*M_PI*self::$radius;
    }
}
