<?php declare(strict_types=1);

namespace Cixware\Esewa;

final class Config
{
    /**
     * The API url for development mode
     */
    public string $apiUrl;

    /**
     * The merchant code provided by eSewa
     */
    public string $merchantCode;

    /**
     * The callback URL for successful eSewa payments
     */
    public string $successUrl;

    /**
     * The callback URL for failed eSewa payments
     */
    public string $failureUrl;

    public function __construct()
    {
        $this->apiUrl = config('esewa.api_url');
        $this->merchantCode = config('esewa.merchant_code');
        $this->successUrl = config('esewa.success_url');
        $this->failureUrl = config('esewa.failure_url');

        // set API url for production mode
        // if (strtoupper($this->merchantCode) !== 'EPAYTEST') {
        //     $this->apiUrl = 'https://esewa.com.np';
        // }
    }
}
