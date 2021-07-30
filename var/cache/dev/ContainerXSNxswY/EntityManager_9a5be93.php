<?php

namespace ContainerXSNxswY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc5713 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera93bf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82415 = [
        
    ];

    public function getConnection()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getConnection', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getMetadataFactory', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getExpressionBuilder', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'beginTransaction', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getCache', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getCache();
    }

    public function transactional($func)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'transactional', array('func' => $func), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->transactional($func);
    }

    public function commit()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'commit', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->commit();
    }

    public function rollback()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'rollback', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getClassMetadata', array('className' => $className), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'createQuery', array('dql' => $dql), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'createNamedQuery', array('name' => $name), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'createQueryBuilder', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'flush', array('entity' => $entity), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'clear', array('entityName' => $entityName), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->clear($entityName);
    }

    public function close()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'close', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->close();
    }

    public function persist($entity)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'persist', array('entity' => $entity), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'remove', array('entity' => $entity), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'refresh', array('entity' => $entity), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'detach', array('entity' => $entity), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'merge', array('entity' => $entity), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getRepository', array('entityName' => $entityName), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'contains', array('entity' => $entity), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getEventManager', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getConfiguration', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'isOpen', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getUnitOfWork', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getProxyFactory', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'initializeObject', array('obj' => $obj), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'getFilters', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'isFiltersStateClean', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'hasFilters', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return $this->valueHolderc5713->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera93bf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc5713) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc5713 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc5713->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, '__get', ['name' => $name], $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        if (isset(self::$publicProperties82415[$name])) {
            return $this->valueHolderc5713->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5713;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc5713;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5713;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc5713;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, '__isset', array('name' => $name), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5713;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc5713;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, '__unset', array('name' => $name), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5713;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc5713;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, '__clone', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        $this->valueHolderc5713 = clone $this->valueHolderc5713;
    }

    public function __sleep()
    {
        $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, '__sleep', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;

        return array('valueHolderc5713');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera93bf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera93bf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera93bf && ($this->initializera93bf->__invoke($valueHolderc5713, $this, 'initializeProxy', array(), $this->initializera93bf) || 1) && $this->valueHolderc5713 = $valueHolderc5713;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc5713;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc5713;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
