<?php

namespace App\Http\Controllers;

use App\Device_Detect;
use App\Models\LogExceptions;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * Class DeviceDetectionController
 *
 * @package App\Http\Controllers
 */
/** @noinspection PhpUnused */
class DeviceDetectionController extends Controller
{
    /**
     * Exception
     */
    const EXCEPTION_TYPE = 'DeviceDetectionController';

    /**
     * @var Device_Detect
     */
    private $deviceDetect;

    /**
     * DeviceDetectionController constructor.
     *
     * @param $deviceDetect
     */
    public function __construct(Device_Detect $deviceDetect)
    {
        $this->deviceDetect = $deviceDetect;
    }

    /**
     * @return JsonResponse
     * @throws Exception
     */
    public function detect(): JsonResponse
    {
        try {
            return response()->json(
                [
                    'browser'         => $this->deviceDetect->getBrowser(),
                    'operatingSystem' => $this->deviceDetect->getOperatingSystem(),
                    'deviceType'      => $this->deviceDetect->getDeviceType(),
                ],
                200,
                ["Access-Control-Allow-Origin" => 'http://localhost:8081']
            );
        } catch (Exception $e) {
            LogExceptions::log($e, self::EXCEPTION_TYPE);
            throw $e;
        }
    }
}
