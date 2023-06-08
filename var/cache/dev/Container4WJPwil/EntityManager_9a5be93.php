<?php

namespace Container4WJPwil;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0bf03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf4ca7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf8e96 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getConnection', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getMetadataFactory', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getExpressionBuilder', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'beginTransaction', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getCache', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'transactional', array('func' => $func), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'commit', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->commit();
    }

    public function rollback()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'rollback', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getClassMetadata', array('className' => $className), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'createQuery', array('dql' => $dql), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'createNamedQuery', array('name' => $name), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'createQueryBuilder', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'flush', array('entity' => $entity), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'clear', array('entityName' => $entityName), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->clear($entityName);
    }

    public function close()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'close', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->close();
    }

    public function persist($entity)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'persist', array('entity' => $entity), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'remove', array('entity' => $entity), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'refresh', array('entity' => $entity), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'detach', array('entity' => $entity), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'merge', array('entity' => $entity), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'contains', array('entity' => $entity), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getEventManager', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getConfiguration', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'isOpen', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getUnitOfWork', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getProxyFactory', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'initializeObject', array('obj' => $obj), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'getFilters', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'isFiltersStateClean', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'hasFilters', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return $this->valueHolder0bf03->hasFilters();
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

        $instance->initializerf4ca7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0bf03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0bf03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0bf03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, '__get', ['name' => $name], $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        if (isset(self::$publicPropertiesf8e96[$name])) {
            return $this->valueHolder0bf03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bf03;

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

        $targetObject = $this->valueHolder0bf03;
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
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bf03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0bf03;
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
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, '__isset', array('name' => $name), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bf03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0bf03;
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
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, '__unset', array('name' => $name), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bf03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0bf03;
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
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, '__clone', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        $this->valueHolder0bf03 = clone $this->valueHolder0bf03;
    }

    public function __sleep()
    {
        $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, '__sleep', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;

        return array('valueHolder0bf03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf4ca7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf4ca7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf4ca7 && ($this->initializerf4ca7->__invoke($valueHolder0bf03, $this, 'initializeProxy', array(), $this->initializerf4ca7) || 1) && $this->valueHolder0bf03 = $valueHolder0bf03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0bf03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0bf03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
