<?php
    /**
     * @author     William Betts   <william@starsurgemedia.com>
     * @copyright  Starsurge Media (c) 2014
     * @version    1.0 Alpha
     * @package    StarsurgeMedia\spamdac.com
     * @subpackage
     */

    namespace TheArtOfMedia\TriangleCRM\Billing;

    class Capture
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function __set($key, $value)
        {
            $this->_params[$key] = $value;
        }

        public function capture()
        {

        }
    }