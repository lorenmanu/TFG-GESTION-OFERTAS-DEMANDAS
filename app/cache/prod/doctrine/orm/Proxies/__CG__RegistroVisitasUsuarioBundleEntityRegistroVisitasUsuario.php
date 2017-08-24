<?php

namespace Proxies\__CG__\RegistroVisitasUsuarioBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RegistroVisitasUsuario extends \RegistroVisitasUsuarioBundle\Entity\RegistroVisitasUsuario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'id', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'visitasDia', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'vistasMes', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'usuario', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'visitasAnio'];
        }

        return ['__isInitialized__', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'id', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'visitasDia', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'vistasMes', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'usuario', '' . "\0" . 'RegistroVisitasUsuarioBundle\\Entity\\RegistroVisitasUsuario' . "\0" . 'visitasAnio'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RegistroVisitasUsuario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addVisitasDium(\VisitasDiaBundle\Entity\VisitasDia $visitasDium)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVisitasDium', [$visitasDium]);

        return parent::addVisitasDium($visitasDium);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVisitasDium(\VisitasDiaBundle\Entity\VisitasDia $visitasDium)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVisitasDium', [$visitasDium]);

        return parent::removeVisitasDium($visitasDium);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisitasDia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisitasDia', []);

        return parent::getVisitasDia();
    }

    /**
     * {@inheritDoc}
     */
    public function addVisitasMe(\VisitasMesBundle\Entity\VisitasMes $vistasMe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVisitasMe', [$vistasMe]);

        return parent::addVisitasMe($vistasMe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVisitasMe(\VisitasMesBundle\Entity\VisitasMes $vistasMe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVisitasMe', [$vistasMe]);

        return parent::removeVisitasMe($vistasMe);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisitasMes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisitasMes', []);

        return parent::getVisitasMes();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\UserBundle\Entity\User $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function addVisitasAnio(\VisitasAnioBundle\Entity\VisitasAnio $visitasAnio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVisitasAnio', [$visitasAnio]);

        return parent::addVisitasAnio($visitasAnio);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVisitasAnio(\VisitasAnioBundle\Entity\VisitasAnio $visitasAnio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVisitasAnio', [$visitasAnio]);

        return parent::removeVisitasAnio($visitasAnio);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisitasAnio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisitasAnio', []);

        return parent::getVisitasAnio();
    }

}
