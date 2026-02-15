<?php

namespace GisPh\Resources;

class Provinces extends BaseResource
{
    public function list(array $params = []): array
    {
        return $this->get('provinces', $params);
    }

    public function find(string $id): array
    {
        return $this->get("provinces/{$id}");
    }
}
