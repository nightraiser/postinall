<?php

/**
 * Autor: Nightraiser
 * Version : 0.1
 * Date : 27 Feb 2017
 * Constructor takes in parameter of an array with the appids
 * fbAppId = Facebook AppId
 * twitterAppId = Twitter AppId
 * gPlusAppId = Gplus AppId
 */
class PostInAll 
{
	private $_fbAppId;
	private $_twitterAppId;
	private $_gPlusAppId;
    
    public function __construct(array $appIds)
    {
        try {
        	$response = $this;
        	$methods = get_class_methods($this);
        	foreach ($appIds as $key => $id) {
        		$method = 'set'.ucfirst($key);
        		if(array_search($method,$methods))	
        		{
        			$response = $this->$method($id);
        		}
        	}
        	return  $this;
        } catch (Exception $e) {
        	
        }
    }

    /**
     * Gets the value of _fbAppId.
     *
     * @return mixed
     */
    public function getFbAppId()
    {
        return $this->_fbAppId;
    }

    /**
     * Sets the value of _fbAppId.
     *
     * @param mixed $_fbAppId the fb app id
     *
     * @return self
     */
    private function _setFbAppId($fbAppId)
    {
        $this->_fbAppId = $fbAppId;

        return $this;
    }

    /**
     * Gets the value of _twitterAppId.
     *
     * @return mixed
     */
    public function getTwitterAppId()
    {
        return $this->_twitterAppId;
    }

    /**
     * Sets the value of _twitterAppId.
     *
     * @param mixed $_twitterAppId the twitter app id
     *
     * @return self
     */
    private function _setTwitterAppId($twitterAppId)
    {
        $this->_twitterAppId = $twitterAppId;

        return $this;
    }

    /**
     * Gets the value of _gPlusAppId.
     *
     * @return mixed
     */
    public function getPlusAppId()
    {
        return $this->_gPlusAppId;
    }

    /**
     * Sets the value of _gPlusAppId.
     *
     * @param mixed $_gPlusAppId the g plus app id
     *
     * @return self
     */
    private function _setPlusAppId($gPlusAppId)
    {
        $this->_gPlusAppId = $gPlusAppId;

        return $this;
    }
}