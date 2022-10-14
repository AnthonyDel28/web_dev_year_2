<?php
// https://gitlab.com/Teacher01/webarticles
namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
  /**
   * @param PostRepository $repository
   * @return Response
   */
  #[Route('/', name: 'posts')]
  public function Posts(PostRepository $repository): Response
  {
    $posts = $repository->findBy(
        ['isPublished' => true],
        ['title' => 'ASC']
      );
    return $this->render('post/posts.html.twig', ['posts' => $posts]);
  }

  #[Route('post/{slug}', name: 'post')]

    /**
     * @param Post $post
     * @return Response
     */
    public function post(Post $post): Response
    {
        return $this->render('post/post.html.twig', [
            'post' => $post,
        ]);
    }
}
