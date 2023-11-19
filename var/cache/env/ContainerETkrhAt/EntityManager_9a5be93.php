<?php

namespace ContainerETkrhAt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbbf6d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerce400 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfaab3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getConnection', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getMetadataFactory', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getExpressionBuilder', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'beginTransaction', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getCache', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'transactional', array('func' => $func), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'commit', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->commit();
    }

    public function rollback()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'rollback', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getClassMetadata', array('className' => $className), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'createQuery', array('dql' => $dql), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'createNamedQuery', array('name' => $name), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'createQueryBuilder', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'flush', array('entity' => $entity), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'clear', array('entityName' => $entityName), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->clear($entityName);
    }

    public function close()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'close', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->close();
    }

    public function persist($entity)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'persist', array('entity' => $entity), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'remove', array('entity' => $entity), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'detach', array('entity' => $entity), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'merge', array('entity' => $entity), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'contains', array('entity' => $entity), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getEventManager', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getConfiguration', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'isOpen', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getUnitOfWork', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getProxyFactory', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'initializeObject', array('obj' => $obj), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'getFilters', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'isFiltersStateClean', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'hasFilters', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return $this->valueHolderbbf6d->hasFilters();
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

        $instance->initializerce400 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderbbf6d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbbf6d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbbf6d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, '__get', ['name' => $name], $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        if (isset(self::$publicPropertiesfaab3[$name])) {
            return $this->valueHolderbbf6d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbf6d;

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

        $targetObject = $this->valueHolderbbf6d;
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
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbf6d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbbf6d;
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
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, '__isset', array('name' => $name), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbf6d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbbf6d;
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
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, '__unset', array('name' => $name), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbf6d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbbf6d;
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
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, '__clone', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        $this->valueHolderbbf6d = clone $this->valueHolderbbf6d;
    }

    public function __sleep()
    {
        $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, '__sleep', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;

        return array('valueHolderbbf6d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerce400 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerce400;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerce400 && ($this->initializerce400->__invoke($valueHolderbbf6d, $this, 'initializeProxy', array(), $this->initializerce400) || 1) && $this->valueHolderbbf6d = $valueHolderbbf6d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbbf6d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbbf6d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
