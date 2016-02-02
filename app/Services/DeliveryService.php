<?php namespace App\Services;

use Mesh\Delivery\Courier;
use Mesh\Delivery\Delivery;
use Mesh\Delivery\DeliveryServiceIf;
use Mesh\Delivery\DeliveryStatus;
use Mesh\Delivery\Gender;
use Mesh\Delivery\LatLng;
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
        return $this->getDeliveryStub();
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
        return $this->getDeliveryStub();
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
        return [$this->getDeliveryStub(), $this->getDeliveryStub(), $this->getDeliveryStub()];
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
        return $this->getDeliveryStub();
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
        return $this->getDeliveryStub();
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
        return $this->getDeliveryStub();
    }

    private function getDeliveryStub()
    {
        return new Delivery([
            'id' => str_random(10),
            'origin' => $this->getLatLngStub(),
            'destination' => $this->getLatLngStub(),
            'status' => DeliveryStatus::SUBMITTED,
            'courier' => $this->getCourierStub(),
            'createdAt' => 1454380000 + rand(0, 10000)
        ]);
    }

    private function getCourierStub()
    {
        return new Courier([
            'id' => rand(0, 10000),
            'name' => '김수현',
            'phone' => '01012341234',
            'gender' => Gender::MALE
        ]);
    }

    /**
     * @return LatLng
     */
    private function getLatLngStub()
    {
        return new LatLng([
            'lat' => 32.0 + $this->random(),
            'lng' => 128.0 + $this->random()
        ]);
    }

    /**
     * @return float
     */
    private function random()
    {
        return mt_rand() / mt_getrandmax();
    }
}