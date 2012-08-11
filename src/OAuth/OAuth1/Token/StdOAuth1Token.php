<?php
/**
 * @author Lusitanian <alusitanian@gmail.com>
 * Released under the MIT license.
 */

namespace OAuth\OAuth1\Token;
use OAuth\Common\Token\AbstractToken;

/**
 * Standard OAuth1 token implementation.
 * Implements OAuth\OAuth1\Token\TokenInterface in case of any OAuth1 specific features.
 */
class StdOAuth1Token extends AbstractToken implements TokenInterface
{
    /**
     * @var string
     */
    protected $requestToken;

    /**
     * @var string
     */
    protected $requestTokenSecret;

    /**
     * @param string $requestToken
     */
    public function setRequestToken($requestToken)
    {
        $this->requestToken = $requestToken;
    }

    /**
     * @return string
     */
    public function getRequestToken()
    {
        return $this->requestToken;
    }

    /**
     * @param string $requestTokenSecret
     */
    public function setRequestTokenSecret($requestTokenSecret)
    {
        $this->requestTokenSecret = $requestTokenSecret;
    }

    /**
     * @return string
     */
    public function getRequestTokenSecret()
    {
        return $this->requestTokenSecret;
    }
}
