<?php

namespace Common\Services\Test;

use Common\Services\ServiceFactory;

class TestService extends ServiceFactory {

	public function test() {
		var_dump($this->getEm());
	}
}