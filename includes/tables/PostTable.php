<?php

class PostTable
{
    protected $table = 'posts';
    private $db;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function get(int $id): Post
    {
        // todo
    }

    public function all(): array
    {
        $sth = $this->db->query("SELECT * FROM {$this->table}");
        return $sth->fetchAll();
    }

    public function create(Post $post): void
    {
        $sth = $this->db->prepare("INSERT INTO {$this->table} (title, content) VALUES (:title, :content)");
        $title=$post->getTitle();
        $content=$post->getContent();
        $sth->bindParam(':title', $title);
        $sth->bindParam(':content', $content);
        $result = $sth->execute();

        if (!$result) {
            throw new Exception("Error while creating the table {$this->table}");
        }
    }

    public function update(Post $post): void
    {
        // todo
    }

    public function delete(int $id): void
    {
        // todo
    }
}
