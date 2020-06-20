<?php
namespace Infrastructure\Repository;

use AppCore\Entities\Post;
use Doctrine\ORM\EntityManagerInterface;
use AppCore\Interfaces\IPostsRepository;
use AppCore\Entities\Description;

class PostsRepository implements IPostsRepository
{

    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface  $em)
    {
        $this->em = $em;
    }

    public function GetAllPosts()
    {
        return $this->em->getRepository('AppCore\Entities\Post')->findAll();
    }

    public function GetSinglePost($id){
        return $this->em->find(Post::class,$id);
    }

    public function NewPost(Post $post){
        $this->em->persist($post);
        $this->em->flush();
    }
}
