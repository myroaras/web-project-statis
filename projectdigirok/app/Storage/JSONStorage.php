<?php

class JSONStorage
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
    }

    public function all(): array
    {
        $data = json_decode(file_get_contents($this->file), true);
        return is_array($data) ? $data : [];
    }


    public function save(array $data): void
    {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }
}
