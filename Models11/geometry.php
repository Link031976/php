<?php
    class Geometry
	{
		public static $radius;
		
		public static function volume()
		{
			return 4/3*M_PI*pow(self::$radius,3);
		}
		
	}