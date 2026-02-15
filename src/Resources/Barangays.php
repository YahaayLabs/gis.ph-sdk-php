<?php

namespace GisPh\Resources;

class Barangays extends BaseResource
{
    public function list(array $params = []): array
    {
        return $this->request('barangays', $params);
    }

    public function get(string $id): array
    {
        return $this->request("barangays/{$id}");
    }

    public function search(string|array $query): array
    {
        $params = is_array($query) ? $query : ['q' => $query];
        return $this->request('barangays/search', $params);
    }
}
