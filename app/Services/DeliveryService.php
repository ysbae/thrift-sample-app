<?php

use Mesh\Delivery\Delivery;
use Mesh\Delivery\DeliveryServiceIf;
use Mesh\Delivery\ServiceException;

class DeliveryService implements DeliveryServiceIf
{

    /**
     * @param string $accessToken
     * @param Delivery $delivery
     * @return Delivery
     *
     * @throws ServiceException
     */
    public function submitDelivery($accessToken, Delivery $delivery)
    {
        // TODO: Implement submitDelivery() method.
    }

    /**
     * @param string $accessToken
     * @param int $deliveryId
     * @return Delivery
     *
     * @throws ServiceException
     */
    public function getDelivery($accessToken, $deliveryId)
    {
        // TODO: Implement getDelivery() method.
    }

    /**
     * @param string $accessToken
     * @param int $offset
     * @param int $limit
     * @return Delivery[]
     * @throws ServiceException
     */
    public function listDeliveries($accessToken, $offset, $limit)
    {
        // TODO: Implement listDeliveries() method.
    }

    /**
     * @param string $accessToken
     * @param int $deliveryId
     * @param int $courierId
     * @return Delivery
     *
     * @throws ServiceException
     */
    public function assignCourier($accessToken, $deliveryId, $courierId)
    {
        // TODO: Implement assignCourier() method.
    }

    /**
     * @param string $accessToken
     * @param int $deliveryId
     * @return Delivery
     *
     * @throws ServiceException
     */
    public function cancelDelivery($accessToken, $deliveryId)
    {
        // TODO: Implement cancelDelivery() method.
    }

    /**
     * @param string $accessToken
     * @param int $deliveryId
     * @return Delivery
     *
     * @throws ServiceException
     */
    public function completeDelivery($accessToken, $deliveryId)
    {
        // TODO: Implement completeDelivery() method.
    }
}