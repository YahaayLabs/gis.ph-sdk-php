<?php

namespace GisPh\Resources;

class Barangays extends BaseResource
{
    public function list(array $params = []): array
    {
        return $this->get('barangays', $params);
    }

    public function find(string $id): array
    {
        return $this->get("barangays/{$id}");
    }

    public function search(string|array $query): array
    {
        $params = is_array($query) ? $query : ['q' => $query];
        return $this->get('barangays/search', $params);
    }
}
