<?php

class TNWebService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfString' => '\\ArrayOfString',
      'ArrayOfUri' => '\\ArrayOfUri',
      'serviceAuth' => '\\serviceAuth',
      'getProductsList' => '\\getProductsList',
      'getProductsListResponse' => '\\getProductsListResponse',
      'ArrayOfProductEntity' => '\\ArrayOfProductEntity',
      'ProductEntity' => '\\ProductEntity',
      'ArrayOfProductShippingPlaceUnitAdjustment' => '\\ArrayOfProductShippingPlaceUnitAdjustment',
      'ProductShippingPlaceUnitAdjustment' => '\\ProductShippingPlaceUnitAdjustment',
      'ArrayOfProductMeasureUnit' => '\\ArrayOfProductMeasureUnit',
      'ProductMeasureUnit' => '\\ProductMeasureUnit',
      'ArrayOfProductWeightAdjustment' => '\\ArrayOfProductWeightAdjustment',
      'ProductWeightAdjustment' => '\\ProductWeightAdjustment',
      'ArrayOfProductAttributeValue' => '\\ArrayOfProductAttributeValue',
      'ProductAttributeValue' => '\\ProductAttributeValue',
      'getProductsGroups' => '\\getProductsGroups',
      'getProductsGroupsResponse' => '\\getProductsGroupsResponse',
      'ArrayOfProductGroup' => '\\ArrayOfProductGroup',
      'ProductGroup' => '\\ProductGroup',
      'getProductsAttributes' => '\\getProductsAttributes',
      'getProductsAttributesResponse' => '\\getProductsAttributesResponse',
      'ArrayOfProductAttribute' => '\\ArrayOfProductAttribute',
      'ProductAttribute' => '\\ProductAttribute',
      'ArrayOfProductAttributeOption' => '\\ArrayOfProductAttributeOption',
      'ProductAttributeOption' => '\\ProductAttributeOption',
      'getProductsPrices' => '\\getProductsPrices',
      'getChangedProductsPrices' => '\\getChangedProductsPrices',
      'getProductsPricesResponse' => '\\getProductsPricesResponse',
      'ArrayOfProductPrice' => '\\ArrayOfProductPrice',
      'ProductPrice' => '\\ProductPrice',
      'getProductsStock' => '\\getProductsStock',
      'getChangedProductsStock' => '\\getChangedProductsStock',
      'getProductsStockResponse' => '\\getProductsStockResponse',
      'ArrayOfProductStock' => '\\ArrayOfProductStock',
      'ProductStock' => '\\ProductStock',
      'getLoadingRates' => '\\getLoadingRates',
      'getLoadingRatesResponse' => '\\getLoadingRatesResponse',
      'ArrayOfLoadingRate' => '\\ArrayOfLoadingRate',
      'LoadingRate' => '\\LoadingRate',
      'getQtyRestrictions' => '\\getQtyRestrictions',
      'getQtyRestrictionsResponse' => '\\getQtyRestrictionsResponse',
      'ArrayOfQtyRestriction' => '\\ArrayOfQtyRestriction',
      'QtyRestriction' => '\\QtyRestriction',
      'getTransports' => '\\getTransports',
      'getTransportsResponse' => '\\getTransportsResponse',
      'ArrayOfTransport' => '\\ArrayOfTransport',
      'Transport' => '\\Transport',
      'getTransportLoadingMethods' => '\\getTransportLoadingMethods',
      'getTransportLoadingMethodsResponse' => '\\getTransportLoadingMethodsResponse',
      'ArrayOfTransportLoadingMethod' => '\\ArrayOfTransportLoadingMethod',
      'TransportLoadingMethod' => '\\TransportLoadingMethod',
      'getCities' => '\\getCities',
      'getCitiesResponse' => '\\getCitiesResponse',
      'ArrayOfCity' => '\\ArrayOfCity',
      'City' => '\\City',
      'getProductSchedulingTechniques' => '\\getProductSchedulingTechniques',
      'getProductSchedulingTechniquesResponse' => '\\getProductSchedulingTechniquesResponse',
      'ArrayOfProductSchedulingTechnique' => '\\ArrayOfProductSchedulingTechnique',
      'ProductSchedulingTechnique' => '\\ProductSchedulingTechnique',
      'getSchedulingTechniques' => '\\getSchedulingTechniques',
      'getSchedulingTechniquesResponse' => '\\getSchedulingTechniquesResponse',
      'ArrayOfSchedulingTechnique' => '\\ArrayOfSchedulingTechnique',
      'SchedulingTechnique' => '\\SchedulingTechnique',
      'getMeasureUnits' => '\\getMeasureUnits',
      'getMeasureUnitsResponse' => '\\getMeasureUnitsResponse',
      'ArrayOfMeasureUnit' => '\\ArrayOfMeasureUnit',
      'MeasureUnit' => '\\MeasureUnit',
      'getPretensionStatuses' => '\\getPretensionStatuses',
      'getPretensionStatusesResponse' => '\\getPretensionStatusesResponse',
      'ArrayOfPretensionStatus' => '\\ArrayOfPretensionStatus',
      'PretensionStatus' => '\\PretensionStatus',
      'getWarehouses' => '\\getWarehouses',
      'getWarehousesResponse' => '\\getWarehousesResponse',
      'ArrayOfWarehouse' => '\\ArrayOfWarehouse',
      'Warehouse' => '\\Warehouse',
      'submitContrapartyObject' => '\\submitContrapartyObject',
      'Contraparty' => '\\Contraparty',
      'submitOrderObject' => '\\submitOrderObject',
      'ArrayOfOrderAddress' => '\\ArrayOfOrderAddress',
      'OrderAddress' => '\\OrderAddress',
      'ArrayOfOrderItem' => '\\ArrayOfOrderItem',
      'OrderItem' => '\\OrderItem',
      'ArrayOfOrderService' => '\\ArrayOfOrderService',
      'OrderService' => '\\OrderService',
      'OrderPlanStatus' => '\\OrderPlanStatus',
      'ArrayOfOrderPlanStatusItem' => '\\ArrayOfOrderPlanStatusItem',
      'OrderPlanStatusItem' => '\\OrderPlanStatusItem',
      'ArrayOfOrderPlanStatusService' => '\\ArrayOfOrderPlanStatusService',
      'OrderPlanStatusService' => '\\OrderPlanStatusService',
      'submitPlanningDepartmentRequest' => '\\submitPlanningDepartmentRequest',
      'PlanningDepartmentAnswer' => '\\PlanningDepartmentAnswer',
      'ArrayOfPlanningDepartmentAnswerItem' => '\\ArrayOfPlanningDepartmentAnswerItem',
      'PlanningDepartmentAnswerItem' => '\\PlanningDepartmentAnswerItem',
      'getOrderPurchaseGuaranteeStatusObject' => '\\getOrderPurchaseGuaranteeStatusObject',
      'getOrderPurchaseGuaranteeStatusResponseObject' => '\\getOrderPurchaseGuaranteeStatusResponseObject',
      'submitOrderDeliveryInfoObject' => '\\submitOrderDeliveryInfoObject',
      'ArrayOfOrderDeliveryAddress' => '\\ArrayOfOrderDeliveryAddress',
      'OrderDeliveryAddress' => '\\OrderDeliveryAddress',
      'allowOrderDeliveryObject' => '\\allowOrderDeliveryObject',
      'OrderDeliveryAllowance' => '\\OrderDeliveryAllowance',
      'submitBankTransferOrderObject' => '\\submitBankTransferOrderObject',
      'BankTransferOrder' => '\\BankTransferOrder',
      'getOrderDeliveryProgressObject' => '\\getOrderDeliveryProgressObject',
      'getOrderDeliveryProgressResponseObject' => '\\getOrderDeliveryProgressResponseObject',
      'getOrderDeliveryCompletionObject' => '\\getOrderDeliveryCompletionObject',
      'getOrderDeliveryCompletionResponseObject' => '\\getOrderDeliveryCompletionResponseObject',
      'cancelOrderObject' => '\\cancelOrderObject',
      'OrderCancellation' => '\\OrderCancellation',
      'disallowOrderDeliveryObject' => '\\disallowOrderDeliveryObject',
      'OrderDeliveryDisallowance' => '\\OrderDeliveryDisallowance',
      'submitOutflowRequestObject' => '\\submitOutflowRequestObject',
      'OutflowStatus' => '\\OutflowStatus',
      'submitPretensionObject' => '\\submitPretensionObject',
      'Pretension' => '\\Pretension',
      'getPretensionStatusObject' => '\\getPretensionStatusObject',
      'getPretensionStatusResponseObject' => '\\getPretensionStatusResponseObject',
      'getRequestStatusObject' => '\\getRequestStatusObject',
      'getRequestStatusResponseObject' => '\\getRequestStatusResponseObject',
      'RequestStatusResponse' => '\\RequestStatusResponse',
      'submittedRequest' => '\\submittedRequest',
      'OperationFault' => '\\OperationFault',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '/home/user/ws/php/wsdl-service/storage/wsdl/1/web-service-1-5.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param getProductsList $parameters
     * @return getProductsListResponse
     */
    public function getProductsList(getProductsList $parameters)
    {
      return $this->__soapCall('getProductsList', array($parameters));
    }

    /**
     * @param getProductsGroups $parameters
     * @return getProductsGroupsResponse
     */
    public function getProductsGroups(getProductsGroups $parameters)
    {
      return $this->__soapCall('getProductsGroups', array($parameters));
    }

    /**
     * @param getProductsAttributes $parameters
     * @return getProductsAttributesResponse
     */
    public function getProductsAttributes(getProductsAttributes $parameters)
    {
      return $this->__soapCall('getProductsAttributes', array($parameters));
    }

    /**
     * @param getProductsPrices $parameters
     * @return getProductsPricesResponse
     */
    public function getProductsPrices(getProductsPrices $parameters)
    {
      return $this->__soapCall('getProductsPrices', array($parameters));
    }

    /**
     * @param getChangedProductsPrices $parameters
     * @return getProductsPricesResponse
     */
    public function getChangedProductsPrices(getChangedProductsPrices $parameters)
    {
      return $this->__soapCall('getChangedProductsPrices', array($parameters));
    }

    /**
     * @param getProductsStock $parameters
     * @return getProductsStockResponse
     */
    public function getProductsStock(getProductsStock $parameters)
    {
      return $this->__soapCall('getProductsStock', array($parameters));
    }

    /**
     * @param getChangedProductsStock $parameters
     * @return getProductsStockResponse
     */
    public function getChangedProductsStock(getChangedProductsStock $parameters)
    {
      return $this->__soapCall('getChangedProductsStock', array($parameters));
    }

    /**
     * @param getLoadingRates $parameters
     * @return getLoadingRatesResponse
     */
    public function getLoadingRates(getLoadingRates $parameters)
    {
      return $this->__soapCall('getLoadingRates', array($parameters));
    }

    /**
     * @param getQtyRestrictions $parameters
     * @return getQtyRestrictionsResponse
     */
    public function getQtyRestrictions(getQtyRestrictions $parameters)
    {
      return $this->__soapCall('getQtyRestrictions', array($parameters));
    }

    /**
     * @param getTransports $parameters
     * @return getTransportsResponse
     */
    public function getTransports(getTransports $parameters)
    {
      return $this->__soapCall('getTransports', array($parameters));
    }

    /**
     * @param getTransportLoadingMethods $parameters
     * @return getTransportLoadingMethodsResponse
     */
    public function getTransportLoadingMethods(getTransportLoadingMethods $parameters)
    {
      return $this->__soapCall('getTransportLoadingMethods', array($parameters));
    }

    /**
     * @param getCities $parameters
     * @return getCitiesResponse
     */
    public function getCities(getCities $parameters)
    {
      return $this->__soapCall('getCities', array($parameters));
    }

    /**
     * @param getProductSchedulingTechniques $parameters
     * @return getProductSchedulingTechniquesResponse
     */
    public function getProductSchedulingTechniques(getProductSchedulingTechniques $parameters)
    {
      return $this->__soapCall('getProductSchedulingTechniques', array($parameters));
    }

    /**
     * @param getSchedulingTechniques $parameters
     * @return getSchedulingTechniquesResponse
     */
    public function getSchedulingTechniques(getSchedulingTechniques $parameters)
    {
      return $this->__soapCall('getSchedulingTechniques', array($parameters));
    }

    /**
     * @param getMeasureUnits $parameters
     * @return getMeasureUnitsResponse
     */
    public function getMeasureUnits(getMeasureUnits $parameters)
    {
      return $this->__soapCall('getMeasureUnits', array($parameters));
    }

    /**
     * @param getPretensionStatuses $parameters
     * @return getPretensionStatusesResponse
     */
    public function getPretensionStatuses(getPretensionStatuses $parameters)
    {
      return $this->__soapCall('getPretensionStatuses', array($parameters));
    }

    /**
     * @param getWarehouses $parameters
     * @return getWarehousesResponse
     */
    public function getWarehouses(getWarehouses $parameters)
    {
      return $this->__soapCall('getWarehouses', array($parameters));
    }

    /**
     * @param submitContrapartyObject $parameters
     * @return submittedRequest
     */
    public function submitContraparty(submitContrapartyObject $parameters)
    {
      return $this->__soapCall('submitContraparty', array($parameters));
    }

    /**
     * @param submitOrderObject $parameters
     * @return submittedRequest
     */
    public function submitOrder(submitOrderObject $parameters)
    {
      return $this->__soapCall('submitOrder', array($parameters));
    }

    /**
     * @param submitPlanningDepartmentRequest $parameters
     * @return submittedRequest
     */
    public function submitPlanningDepartmentRequest(submitPlanningDepartmentRequest $parameters)
    {
      return $this->__soapCall('submitPlanningDepartmentRequest', array($parameters));
    }

    /**
     * @param getOrderPurchaseGuaranteeStatusObject $parameters
     * @return getOrderPurchaseGuaranteeStatusResponseObject
     */
    public function getOrderPurchaseGuaranteeStatus(getOrderPurchaseGuaranteeStatusObject $parameters)
    {
      return $this->__soapCall('getOrderPurchaseGuaranteeStatus', array($parameters));
    }

    /**
     * @param submitOrderDeliveryInfoObject $parameters
     * @return submittedRequest
     */
    public function submitOrderDeliveryInfo(submitOrderDeliveryInfoObject $parameters)
    {
      return $this->__soapCall('submitOrderDeliveryInfo', array($parameters));
    }

    /**
     * @param allowOrderDeliveryObject $parameters
     * @return submittedRequest
     */
    public function allowOrderDelivery(allowOrderDeliveryObject $parameters)
    {
      return $this->__soapCall('allowOrderDelivery', array($parameters));
    }

    /**
     * @param submitBankTransferOrderObject $parameters
     * @return submittedRequest
     */
    public function submitBankTransferOrder(submitBankTransferOrderObject $parameters)
    {
      return $this->__soapCall('submitBankTransferOrder', array($parameters));
    }

    /**
     * @param getOrderDeliveryProgressObject $parameters
     * @return getOrderDeliveryProgressResponseObject
     */
    public function getOrderDeliveryProgress(getOrderDeliveryProgressObject $parameters)
    {
      return $this->__soapCall('getOrderDeliveryProgress', array($parameters));
    }

    /**
     * @param getOrderDeliveryCompletionObject $parameters
     * @return getOrderDeliveryCompletionResponseObject
     */
    public function getOrderDeliveryCompletion(getOrderDeliveryCompletionObject $parameters)
    {
      return $this->__soapCall('getOrderDeliveryCompletion', array($parameters));
    }

    /**
     * @param cancelOrderObject $parameters
     * @return submittedRequest
     */
    public function cancelOrder(cancelOrderObject $parameters)
    {
      return $this->__soapCall('cancelOrder', array($parameters));
    }

    /**
     * @param disallowOrderDeliveryObject $parameters
     * @return submittedRequest
     */
    public function disallowOrderDelivery(disallowOrderDeliveryObject $parameters)
    {
      return $this->__soapCall('disallowOrderDelivery', array($parameters));
    }

    /**
     * @param submitOutflowRequestObject $parameters
     * @return submittedRequest
     */
    public function submitOutflowRequest(submitOutflowRequestObject $parameters)
    {
      return $this->__soapCall('submitOutflowRequest', array($parameters));
    }

    /**
     * @param submitPretensionObject $parameters
     * @return submittedRequest
     */
    public function submitPretension(submitPretensionObject $parameters)
    {
      return $this->__soapCall('submitPretension', array($parameters));
    }

    /**
     * @param getPretensionStatusObject $parameters
     * @return getPretensionStatusResponseObject
     */
    public function getPretensionStatus(getPretensionStatusObject $parameters)
    {
      return $this->__soapCall('getPretensionStatus', array($parameters));
    }

    /**
     * @param getRequestStatusObject $parameters
     * @return getRequestStatusResponseObject
     */
    public function getRequestStatus(getRequestStatusObject $parameters)
    {
      return $this->__soapCall('getRequestStatus', array($parameters));
    }

}
