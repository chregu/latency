<?php

namespace Chregu\Latency\Entities;

/**
* @Entity @Table(name="latencies")
**/

class LatencyEntry {



    /**
    * @Id
    * @GeneratedValue
    * @Column(type="integer")
    **/
    protected $id;

    /**
    * @Column(type="string")
    */
    protected $source;


    /**
    * @Column(type="integer")
    */
    protected $x_iframeLoad;


    /**
    * @Column(type="integer", nullable=true)
    */
    protected $responseEnd = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $loadEventEnd = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $loadEventStart = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $domComplete = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $domContentLoadedEventEnd = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $domContentLoadedEventStart = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $domInteractive = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $domLoading = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $responseStart = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $requestStart = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $connectEnd = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $connectStart = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $domainLookupEnd = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $domainLookupStart   = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $fetchStart = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $navigationStart = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $x_startScript = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $x_domContentLoadedEvent = null;

    /**
    * @Column(type="integer", nullable=true)
    */
    protected $x_onLoad = null;



    /**
    * @ManyToOne(targetEntity="SessionEntry")
    * @JoinColumn(name="session_id", referencedColumnName="id")
    */

    protected $session;



    function __construct() {
    }

    function setSource($string) {
        $this->source = $string;
    }

    function setResponseEnd($int) {
        $this->responseEnd = $int;
    }

    function setSession($int) {
        $this->session = $int;
    }

    function setX_iframeLoad($int) {
        $this->x_iframeLoad = $int;
    }

    function setloadEventStart($int) {
        $this->loadEventStart = $int;
    }

    function setloadEventEnd($int) {
        $this->loadEventEnd = $int;
    }


    function setdomComplete($int) {
        $this->domComplete = $int;
    }

    function setdomContentLoadedEventEnd($int) {
        $this->domContentLoadedEventEnd = $int;
    }

    function setdomContentLoadedEventStart($int) {
        $this->domContentLoadedEventStart = $int;
    }

    function setdomInteractive($int) {
        $this->domInteractive = $int;
    }

    function setdomLoading($int) {
        $this->domLoading = $int;
    }

    function setresponseStart($int) {
        $this->responseStart = $int;
    }

    function setrequestStart($int) {
        $this->requestStart = $int;
    }

    function setconnectEnd($int) {
        $this->connectEnd = $int;
    }

    function setconnectStart($int) {
        $this->connectStart = $int;
    }

    function setdomainLookupEnd($int) {
        $this->domainLookupEnd = $int;
    }

    function setdomainLookupStart($int) {
        $this->domainLookupStart     = $int;
    }

    function setfetchStart($int) {
        $this->fetchStart = $int;
    }

    function setnavigationStart($int) {
        $this->navigationStart = $int;
    }

    function setx_startScript($int) {
        $this->x_startScript = $int;
    }

    function setx_domContentLoadedEvent($int) {
        $this->x_domContentLoadedEvent = $int;
    }

    function setx_onLoad($int) {
        $this->x_onLoad = $int;
    }

}
