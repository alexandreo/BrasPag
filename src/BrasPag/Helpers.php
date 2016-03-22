<?php
namespace Alexandreo;

class Helpers 
{
	
	static public function uuid()
	{
		return \Ramsey\Uuid\Uuid::uuid1();
	}

	static public function genereteResquestId()
	{
		return SELF::uuid();
	}

}