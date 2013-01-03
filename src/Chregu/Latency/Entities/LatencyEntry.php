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



}
