<?php
// https://gitlab.com/Teacher01/webarticles
namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class PostController extends AbstractController
{
  /**
   * @param PostRepository $repository
   * @return Response
   */
  #[Route('/', name: 'posts')]
  public function Posts(PostRepository $repository, PaginatorInterface $paginator, Request $request): Response
  {
    $posts = $repository->findBy(
        ['isPublished' => true],
        ['title' => 'ASC']
      );
      $pagination = $paginator->paginate(
          $posts, /* query NOT result */
          $request->query->getInt('page', 1), /*page number*/
          10 /*limit per page*/
      );
    return $this->render('post/posts.html.twig', ['posts' => $pagination]);
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
