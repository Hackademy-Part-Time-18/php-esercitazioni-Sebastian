<?php

abstract class Attack {
	public int $atkValue;
	public string $name;
}

class IronPunch extends Attack {
	public int $atkValue=50;
	public string $name="ironPunch";
}

class SpidermanGloves extends Attack {
	public int $atkValue=60;
	public string $name="spidermanGloves";
}