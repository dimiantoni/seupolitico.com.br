<?php

namespace App\Repositories;

use App\Politico;

class PoliticoRepository
{
	private $politico;

	public function __construct(Post $politico)
	{
		$this->politico = $politico;
	}

	public function all()
	{
		return $this->politico->all();
	}
}