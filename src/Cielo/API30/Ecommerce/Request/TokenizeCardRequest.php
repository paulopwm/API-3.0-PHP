<?php

namespace Cielo\API30\Ecommerce\Request;

use Cielo\API30\Ecommerce\CreditCard;
use Cielo\API30\Ecommerce\Environment;
use Cielo\API30\Merchant;
use Psr\Log\LoggerInterface;
use RuntimeException;

/**
 * Class CreateCardTokenRequestHandler
 *
 * @package AppBundle\Handler\Cielo
 */
class TokenizeCardRequest extends AbstractRequest
{

    private $environment;

    /**
     * CreateCardTokenRequestHandler constructor.
     *
     * @param Merchant $merchant
     * @param Environment $environment
     * @param LoggerInterface|null $logger
     */
    public function __construct(Merchant $merchant, Environment $environment, LoggerInterface $logger = null)
    {
        parent::__construct($merchant, $logger);
        $this->environment = $environment;
    }

    /**
     * @param $param
     *
     * @return null
     * @throws CieloRequestException
     * @throws RuntimeException
     */
    public function execute($param)
    {
        $url = $this->environment->getApiUrl() . '1/card/';

        return $this->sendRequest('POST', $url, $param);
    }

    /**
     * @param $json
     *
     * @return CreditCard
     */
    protected function unserialize($json)
    {
        return CreditCard::fromJson($json);
    }
}
