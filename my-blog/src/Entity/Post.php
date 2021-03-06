<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $previewcontent;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="posts")
     */
    private $tags;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $authtor;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datapost;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="posts")
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPreviewcontent(): ?string
    {
        return $this->previewcontent;
    }

    public function setPreviewcontent(string $previewcontent): self
    {
        $this->previewcontent = $previewcontent;

        return $this;
    }

    public function getContent(): ?string
    {
     return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAuthtor(): ?string
    {
        return $this->authtor;
    }

    public function setAuthtor(?string $authtor): self
    {
        $this->authtor = $authtor;

        return $this;
    }

    public function getDatapost(): ?\DateTimeInterface
    {
        return $this->datapost;
    }

    public function setDatapost(?\DateTimeInterface $datapost): self
    {
        $this->datapost = $datapost;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category = null): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

      /**
     * @return Collection|Post[]
     */
     public function getTags(): Collection
    {
        return $this->tags;
    }

    public function setTags(Collection $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
}
