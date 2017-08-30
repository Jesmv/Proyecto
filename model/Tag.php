<?php
class Tag extends BaseEntity {

    private $id;
    private $tag;

    public function __construct() {
        $table="tags";
        parent::__construct($table);
    }

    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }

    public function setTag($tag) {
        $this->tag = $tag;
    }

    public function getTag() {
        return $this->tag;
    }

    public function findTag($tag) {
        $list = $this->getBy("tag", $tag);
        If (empty($list)){
            return false;
        } else {
            $row = $list[0];
            return $this->createTag($row);
        }
    }

    public function findTagSong($idsong) {
        $query=$this->db()->query("SELECT * FROM tags, songtags WHERE idsong='$idsong' AND tags.id = songtags.idtag");
        $tags = [];
        while ( $row = $query->fetch_object() ) {
            array_push($tags, $this->createTag($row));
        }
        return $tags;
    }

    public function saveNewTag($tag) {
        $query="INSERT INTO tags (tag) VALUES('".$tag."');";      
        $save=$this->db()->query($query);
        if ($save) {
            return $this->findTag($tag);
        } else {
            return false;
        }
    }

    public function createTag($row) {
        $tag = new Tag();
        $tag->setId($row->id);
        $tag->setTag($row->tag);
        return $tag;
    }

}