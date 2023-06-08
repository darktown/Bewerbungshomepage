<?php

namespace Container3xxJTnA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf9bdb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9876c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5dbc3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getConnection', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getMetadataFactory', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getExpressionBuilder', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'beginTransaction', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getCache', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'transactional', array('func' => $func), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'commit', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->commit();
    }

    public function rollback()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'rollback', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getClassMetadata', array('className' => $className), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'createQuery', array('dql' => $dql), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'createNamedQuery', array('name' => $name), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'createQueryBuilder', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'flush', array('entity' => $entity), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'clear', array('entityName' => $entityName), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->clear($entityName);
    }

    public function close()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'close', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->close();
    }

    public function persist($entity)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'persist', array('entity' => $entity), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'remove', array('entity' => $entity), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'refresh', array('entity' => $entity), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'detach', array('entity' => $entity), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'merge', array('entity' => $entity), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'contains', array('entity' => $entity), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getEventManager', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getConfiguration', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'isOpen', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getUnitOfWork', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getProxyFactory', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'initializeObject', array('obj' => $obj), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'getFilters', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'isFiltersStateClean', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'hasFilters', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return $this->valueHolderf9bdb->hasFilters();
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

        $instance->initializer9876c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf9bdb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf9bdb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf9bdb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, '__get', ['name' => $name], $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        if (isset(self::$publicProperties5dbc3[$name])) {
            return $this->valueHolderf9bdb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9bdb;

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

        $targetObject = $this->valueHolderf9bdb;
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
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9bdb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9bdb;
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
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, '__isset', array('name' => $name), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9bdb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf9bdb;
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
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, '__unset', array('name' => $name), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9bdb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf9bdb;
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
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, '__clone', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        $this->valueHolderf9bdb = clone $this->valueHolderf9bdb;
    }

    public function __sleep()
    {
        $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, '__sleep', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;

        return array('valueHolderf9bdb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9876c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9876c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9876c && ($this->initializer9876c->__invoke($valueHolderf9bdb, $this, 'initializeProxy', array(), $this->initializer9876c) || 1) && $this->valueHolderf9bdb = $valueHolderf9bdb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9bdb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9bdb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
