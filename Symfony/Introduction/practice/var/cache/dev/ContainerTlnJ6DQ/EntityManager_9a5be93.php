<?php

namespace ContainerTlnJ6DQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1f29f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer28890 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88c29 = [
        
    ];

    public function getConnection()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getConnection', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getMetadataFactory', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getExpressionBuilder', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'beginTransaction', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getCache', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'transactional', array('func' => $func), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'commit', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->commit();
    }

    public function rollback()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'rollback', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getClassMetadata', array('className' => $className), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'createQuery', array('dql' => $dql), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'createNamedQuery', array('name' => $name), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'createQueryBuilder', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'flush', array('entity' => $entity), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'clear', array('entityName' => $entityName), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->clear($entityName);
    }

    public function close()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'close', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->close();
    }

    public function persist($entity)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'persist', array('entity' => $entity), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'remove', array('entity' => $entity), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'refresh', array('entity' => $entity), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'detach', array('entity' => $entity), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'merge', array('entity' => $entity), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'contains', array('entity' => $entity), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getEventManager', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getConfiguration', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'isOpen', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getUnitOfWork', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getProxyFactory', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'initializeObject', array('obj' => $obj), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'getFilters', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'isFiltersStateClean', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'hasFilters', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return $this->valueHolder1f29f->hasFilters();
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

        $instance->initializer28890 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1f29f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1f29f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1f29f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, '__get', ['name' => $name], $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        if (isset(self::$publicProperties88c29[$name])) {
            return $this->valueHolder1f29f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f29f;

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

        $targetObject = $this->valueHolder1f29f;
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
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f29f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1f29f;
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
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, '__isset', array('name' => $name), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f29f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1f29f;
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
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, '__unset', array('name' => $name), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f29f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1f29f;
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
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, '__clone', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        $this->valueHolder1f29f = clone $this->valueHolder1f29f;
    }

    public function __sleep()
    {
        $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, '__sleep', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;

        return array('valueHolder1f29f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer28890 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer28890;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer28890 && ($this->initializer28890->__invoke($valueHolder1f29f, $this, 'initializeProxy', array(), $this->initializer28890) || 1) && $this->valueHolder1f29f = $valueHolder1f29f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1f29f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1f29f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
