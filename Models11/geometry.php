<?php
    class Geometry
	{
		public static $radius; // радіус
		//обчилення об'єму кола
		//calculating the volume of a circle
		public static function volume() //обчилення об'єму кола
		{
			//V = 4/3*Pi*radius^3
			return 4/3*M_PI*pow(self::$radius,3);
		}
		
	}