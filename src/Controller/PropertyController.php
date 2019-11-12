<?php
namespace App\Controller;

use App\Entity\Property;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Repository\PropertyRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Flex\Response as SymfonyResponse;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PropertyController extends AbstractController
{
    /**
     * @var PropertyRepository
     */

    private $repository;
    /**
     * @var ObjectManager
     */

    private $em;

    public function __construct(PropertyRepository $repository, ObjectManager $em)
    {
         $this->repository = $repository;
         $this->em = $em;
    }

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */

    public function index(PaginatorInterface $paginator, Request $request): Response
<<<<<<< HEAD
    {           
                $search = new PropertySearch();
                $form = $this->createForm(PropertySearchType::class, $search);
                $form->handleRequest($request);
        
=======
    {
                $search = new PropertySearch();
                $form = $this->createForm(PropertySearchType::class, $search);
                $form->handleRequest($request);


>>>>>>> c13ad70b078910f6019e2781f94e9a5123a6fd9e
                $properties = $paginator->paginate(
                $this->repository->findAllVisibleQuery($search),
                $request->query->getInt('page', 1),
                12
            );
            return $this->render('property/index.html.twig', [
<<<<<<< HEAD
                'current_menu'  => 'properties',
                'properties'    => $properties,
                'form'          => $form->createView()
=======
                'current_menu' => 'properties',
                'properties'   => $properties,
                'form'         => $form->createView()
>>>>>>> c13ad70b078910f6019e2781f94e9a5123a6fd9e
         ]);
    }

    /**
     * @Route("/biens/{slug}-{id}", name="property.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Property $property
     * @return Response
     */
    public function show(Property $property, string $slug): Response
    {
        if ($property->getSlug() !== $slug) {
            return $this->redirectToRoute('property.show', [
              'id'      => $property->getId(),
              'slug'    => $property->getSlug()
          ], 301);
    }


        return $this->render('property/show.html.twig', [
          'property'        => $property,
          'current_menu'    => 'properties'
        ]);
    }
}
