<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\Request;

class AbstractController
{
    /**
     * @var Request
     */
    private $request;

    /**
     * AbstractController constructor.
     * @param Request $request
     */
    protected function setRequest(Request $request)
    {
        $this->request = $request;
    }

    protected function response(array $data, int $code = 200)
    {
        http_response_code($code);
        header('Content-type: application/json');
        echo json_encode($data);
        exit();
    }

    protected function returnNotFound(?string $message = null)
    {
        http_response_code(404);
        header('Content-type: application/json');
        echo json_encode([
            'status'  => 'error',
            'message' => $message ?? 'Route not found',
        ]);
        exit();
    }

    protected function checkMethod(string $method)
    {
        if (strtoupper($this->request->getMethod()) !== strtoupper($method)) {
            $this->returnNotFound();
        }
    }
}
