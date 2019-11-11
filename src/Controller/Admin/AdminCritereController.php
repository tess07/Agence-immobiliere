<?php

namespace App\Controller\Admin;

use App\Entity\Critere;
use App\Form\CritereType;
use App\Repository\CritereRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/admin/critere")
 */
class AdminCritereController extends AbstractController
{
    /**
     * @Route("/", name="admin.critere.index", methods={"GET"})
     */
    public function index(CritereRepository $critereRepository): Response
    {
        return $this->render('admin/critere/index.html.twig', [
            'criteres' => $critereRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin.critere.new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $critere = new Critere();
        $form = $this->createForm(CritereType::class, $critere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($critere);
            $entityManager->flush();

            return $this->redirectToRoute('admin.critere.index');
        }

        return $this->render('admin/critere/new.html.twig', [
            'critere' => $critere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin.critere.edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Critere $critere): Response
    {
        $form = $this->createForm(CritereType::class, $critere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin.critere.index', [
                'id' => $critere->getId(),
            ]);
        }

        return $this->render('admin/critere/edit.html.twig', [
            'critere' => $critere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin.critere.delete", methods={"DELETE"})
     */
    public function delete(Request $request, Critere $critere): Response
    {
        if ($this->isCsrfTokenValid('admin/delete'.$critere->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($critere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin.critere.index');
    }
}
