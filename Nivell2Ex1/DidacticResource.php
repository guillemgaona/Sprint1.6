<?php
require_once('Enums.php');

class DidacticResource {
    private string $name;
    private Topic $topic;
    private string $url;
    private ResourceType $resourcetype;

    public function __construct(string $name, Topic $topic, string $url, ResourceType $resourcetype) {
        $this->name = $name;
        $this->topic = $topic;
        $this->url = $url;
        $this->resourcetype = $resourcetype;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getTopic(): Topic {
        return $this->topic;
    }

    public function getUrl(): string {
        return $this->url;
    }

    public function getResourceType(): ResourceType {
        return $this->resourcetype;
    }

    public function __toString(): string {
        return "Source: {$this->name}, Topic: {$this->topic->value}, URL: {$this->url}, Type: {$this->resourcetype->value}";
    }
}
?>