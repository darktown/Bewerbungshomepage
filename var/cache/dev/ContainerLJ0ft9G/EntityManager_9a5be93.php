<?php

namespace ContainerLJ0ft9G;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc4dba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer733ef = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf79ab = [
        
    ];

    public function getConnection()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getConnection', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getMetadataFactory', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getExpressionBuilder', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'beginTransaction', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getCache', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getCache();
    }

    public function transactional($func)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'transactional', array('func' => $func), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'wrapInTransaction', array('func' => $func), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'commit', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->commit();
    }

    public function rollback()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'rollback', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getClassMetadata', array('className' => $className), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'createQuery', array('dql' => $dql), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'createNamedQuery', array('name' => $name), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'createQueryBuilder', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'flush', array('entity' => $entity), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'clear', array('entityName' => $entityName), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->clear($entityName);
    }

    public function close()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'close', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->close();
    }

    public function persist($entity)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'persist', array('entity' => $entity), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'remove', array('entity' => $entity), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'refresh', array('entity' => $entity), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'detach', array('entity' => $entity), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'merge', array('entity' => $entity), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getRepository', array('entityName' => $entityName), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'contains', array('entity' => $entity), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getEventManager', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getConfiguration', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'isOpen', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getUnitOfWork', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getProxyFactory', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'initializeObject', array('obj' => $obj), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'getFilters', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'isFiltersStateClean', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'hasFilters', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return $this->valueHolderc4dba->hasFilters();
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

        $instance->initializer733ef = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc4dba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc4dba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc4dba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, '__get', ['name' => $name], $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        if (isset(self::$publicPropertiesf79ab[$name])) {
            return $this->valueHolderc4dba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4dba;

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

        $targetObject = $this->valueHolderc4dba;
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
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4dba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc4dba;
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
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, '__isset', array('name' => $name), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4dba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc4dba;
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
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, '__unset', array('name' => $name), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc4dba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc4dba;
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
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, '__clone', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        $this->valueHolderc4dba = clone $this->valueHolderc4dba;
    }

    public function __sleep()
    {
        $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, '__sleep', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;

        return array('valueHolderc4dba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer733ef = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer733ef;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer733ef && ($this->initializer733ef->__invoke($valueHolderc4dba, $this, 'initializeProxy', array(), $this->initializer733ef) || 1) && $this->valueHolderc4dba = $valueHolderc4dba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc4dba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc4dba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
