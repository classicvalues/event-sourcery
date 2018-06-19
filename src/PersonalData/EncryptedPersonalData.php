<?php namespace EventSourcery\EventSourcery\PersonalData;

use EventSourcery\EventSourcery\Serialization\SerializableValue;

class EncryptedPersonalData implements SerializableValue {

    private $data;

    public function serialize(): string {
        return $this->data;
    }

    public static function deserialize(string $string): EncryptedPersonalData {
        return new static($string);
    }

    private function __construct($data) {
        $this->data = $data;
    }

    public static function fromString(string $string): PersonalData {
        return new static($string);
    }

    public function toString(): string {
        return $this->data;
    }
}