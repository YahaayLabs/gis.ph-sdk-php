<?php

namespace GisPh\Resources;

class Provinces extends BaseResource
{
    public function list(array $params = []): array
    {
        return $this->request('provinces', $params);
    }

    public function get(string $id): array
    {
        return $this->request("provinces/{$id}");
    }
}
