<?php

namespace Source\WebService;

class Api
{
    protected $headers;
    protected $response;

    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
        $this->headers = getallheaders();
    }

    protected function call (int $code, string $type = null, string $message = null): Api
    {
        http_response_code($code);
        if(!empty($type)){
            $this->response = [
                "code" => $code,
                "type" => $type,
                "message" => (!empty($message) ? $message : null)
            ];
        }
        return $this;
    }

    protected function back(array $data = null): Api
    {
        if (!empty($this->response)) {
            $this->response["data"] = $data;
        }
        echo json_encode($this->response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        return $this;
    }

}