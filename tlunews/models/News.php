<?php

class News
{
    private $id;
    private $title;
    private $content;
    private $image;
    private $created_at;
    private $category_id;
    private $categoryName;

    public function __construct($id, $title, $content, $image, $created_at, $category_id, $categoryName)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->created_at = $created_at;
        $this->category_id = $category_id;
        $this->categoryName = $categoryName;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getCategoryId()
    {
        return $this->category_id;
    }
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }
}