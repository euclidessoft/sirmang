<?php
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder00ddb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbaeda = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties76a4e = [
        
    ];

    public function getConnection()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getConnection', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getMetadataFactory', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getExpressionBuilder', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'beginTransaction', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getCache', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'transactional', array('func' => $func), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->transactional($func);
    }

    public function commit()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'commit', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->commit();
    }

    public function rollback()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'rollback', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getClassMetadata', array('className' => $className), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'createQuery', array('dql' => $dql), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'createNamedQuery', array('name' => $name), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'createQueryBuilder', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'flush', array('entity' => $entity), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'clear', array('entityName' => $entityName), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->clear($entityName);
    }

    public function close()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'close', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->close();
    }

    public function persist($entity)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'persist', array('entity' => $entity), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'remove', array('entity' => $entity), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'refresh', array('entity' => $entity), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'detach', array('entity' => $entity), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'merge', array('entity' => $entity), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'contains', array('entity' => $entity), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getEventManager', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getConfiguration', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'isOpen', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getUnitOfWork', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getProxyFactory', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'initializeObject', array('obj' => $obj), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'getFilters', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'isFiltersStateClean', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'hasFilters', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return $this->valueHolder00ddb->hasFilters();
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

        $instance->initializerbaeda = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder00ddb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder00ddb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder00ddb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, '__get', ['name' => $name], $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        if (isset(self::$publicProperties76a4e[$name])) {
            return $this->valueHolder00ddb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00ddb;

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

        $targetObject = $this->valueHolder00ddb;
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
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00ddb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder00ddb;
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
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, '__isset', array('name' => $name), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00ddb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder00ddb;
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
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, '__unset', array('name' => $name), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00ddb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder00ddb;
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
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, '__clone', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        $this->valueHolder00ddb = clone $this->valueHolder00ddb;
    }

    public function __sleep()
    {
        $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, '__sleep', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;

        return array('valueHolder00ddb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbaeda = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbaeda;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbaeda && ($this->initializerbaeda->__invoke($valueHolder00ddb, $this, 'initializeProxy', array(), $this->initializerbaeda) || 1) && $this->valueHolder00ddb = $valueHolder00ddb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder00ddb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder00ddb;
    }


}
