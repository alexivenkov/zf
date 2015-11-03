<?php

namespace Common\Services;

use Common\Services\Test\TestService;
use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * @author  Alexander Ivenkov <wish@mail.ru>
 *
 * Class ServiceFactory
 * @package Common\Services
 *
 * @property TestService
 */
class ServiceFactory implements ServiceLocatorAwareInterface {

	/** @var ServiceLocatorInterface $services */
	protected $sm;

	/**
	 * @param ServiceLocatorInterface $sm
	 */
	public function setServiceLocator(ServiceLocatorInterface $sm) {
		$this->sm = $sm;
	}

	/**
	 * @return ServiceLocatorInterface
	 */
	public function getServiceLocator() {
		return $this->sm;
	}

	/**
	 * @author Alexander Ivenkov <wish@mail.ru>
	 *
	 * @return EntityManager
	 */
	public function getEm() {
		return $this->sm->get('Doctrine\ORM\EntityManager');
	}

	public function __get($serviceName) {
		return $this->sm->get($serviceName);
	}
}